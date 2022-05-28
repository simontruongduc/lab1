<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    public function regist(Request $request){
        $user = User::create($request->all());
        $role = Role::where('id',1)->first();
        session([
            'user_id' => $user->id,
            'role' => $role->id,
            'finish' => false,
        ]);
        return redirect('/question');
    }

    public function question(Request $request){
        $userId = session('user_id');
        if(empty($userId)){
            return redirect('/');
        }
        $role = Role::where('id',session('role'))->first();

        return view('question',compact('role'));
    }

    public function save(Request $request){
        $data = [
            'user_id'=>session('user_id'),
            'question_id' => $request->id,
            'score' => $request->score,
        ];

        DB::table('user_question')->insert($data);
        $roleId = session('role');
        if($roleId == 10){
            session([
                'finish' => true,
            ]);
            return response()->json([
                'finish' => true
            ]);
        }
        session([
            'role' => $roleId+1,
        ]);
        $role = Role::where('id',$roleId+1)->first();
        $question = $role->questions()->inRandomOrder()->first();
        return response()->json([
            'finish' => false,
            'role' => $role->name,
            'question' => $question->question,
            'id'=>$question->id,
            'yes' => $question->yes,
            'no' => $question->no,
            'hint' => $question->hint,
        ]);
    }

    public function finish(){
        if(session('finish')){
            $userId = session('user_id');
            $totalScore = DB::table('user_question')->where('user_id',$userId)->pluck('score')->toArray();
            $totalScore = array_sum($totalScore);
            return view('finish',compact('totalScore'));
        }else{
            if(empty(session('user_id'))){
                return redirect('/');
            }
            return redirect('/question');
        }
    }

    public function score(){
        $users = User::all();
        $data = [];
        foreach ($users as $user){
            $totalScore = DB::table('user_question')
                ->where('user_id',$user->id)
                ->pluck('score')->toArray();
            $data[] = [
                'name' => $user->name,
                'score' => array_sum($totalScore),
            ];
        }
        return view('score',compact('data'));
    }
}
