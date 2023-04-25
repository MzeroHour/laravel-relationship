<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PostTag extends Pivot
{
    use HasFactory;
    protected $table = 'post_tag';


    public static function boot(){
        parent::boot();
        //Create Pivot Data
        static::created(function($item){
            dd('created event', $item); // Attach
        });
        //Delete Pivot Data
        static::deleted(function($item){
            dd('Deleted event', $item ); //Detach
        });
    }
}
