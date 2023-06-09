<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title'];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name'=>'Guest User'
        ]);
    }
     public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id')
        ->using(PostTag::class)
        ->withTimestamps()
        ->withPivot('status');
    }
}
