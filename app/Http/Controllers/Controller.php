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
            'role' => $role->id
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
            return redirect('/finish');
        }
        session([
            'role' => $roleId+1,
        ]);
        $role = Role::where('id',2)->first();
        $question = $role->questions()->inRandomOrder()->first();
        return response()->json([
            'role' => $role->name,
            'question' => $question->question,
            'yes' => $question->yes,
            'no' => $question->no,
        ]);
    }
}
