<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    //One to Many
    // public function users(){
    //     return $this->hasMany(User::class);
    // }

    //Many to Many for pivot with hasManyThrough
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function tasks(){
        return $this->hasManyThrough(
            Task::class, User::class,
            'project_id', //Foreign key in users table..
            'user_id', //Foreign key in tasks table..
            'id'); //Local key in project table..
    }

    //has Many Through with pivot
    public function tasksPivots(){
        return $this->hasManyThrough(
            Task::class, Team::class,
            'project_id', //Foreign key in users table..
            'user_id', //Foreign key in tasks table..
            'id', //Local key in project table..
             'user_id',); //Local key in project table..
    }

    //has One Through with pivot
     public function tasksPivot(){
        return $this->hasOneThrough(
            Task::class, Team::class,
            'project_id', //Foreign key in users table..
            'user_id', //Foreign key in tasks table..
            'id', //Local key in project table..
             'user_id',); //SecondLocal key in project table..
    }
    public function task(){
        return $this->hasOneThrough(Task::class, User::class,
        'project_id',
        'user_id',
        'id');
    }

}
