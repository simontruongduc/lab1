<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function users(){
        return $this->belongsToMany(Question::class)->withPivot(['score']);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }
}
