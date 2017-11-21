<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable=['name', 'body'];

    public function user() {
        return $this->belongsTo(User::class);
    }

//    public function user() {
//        return $this->hasOne('App\User');
//    }


}
