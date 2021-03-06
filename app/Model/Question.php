<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::Class);
    }
    public function replies()
    {
        return $this->hasMany(Reply::Class);
    }

        //
}
