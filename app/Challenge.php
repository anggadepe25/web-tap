<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'id_program', 'id');
    }
}
