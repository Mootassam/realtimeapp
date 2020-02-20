<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function question()
    {
        return $this->belongsTo(Question::Class);
    }
    public function user()
    {
        return $this->belongsTo(User::Class);
    }
    public function like()
    {
        return $this->hasMany(Like::Class);
    }



    //
}
