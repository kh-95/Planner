<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable=['name','start_date','project_id'];

    public function project(){



        return $this->belongsto(Project::class);
    }
    public function tasks(){


        return $this->hasMany(Task::class);
    }

}
