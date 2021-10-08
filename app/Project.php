<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   protected $fillable=['name','user_id'];


   public function plans(){


    return $this->hasMany(Plan::class);
}
public function user(){

    return $this->belongsto(User::class);
}
}
