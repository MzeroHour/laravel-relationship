<?php

use App\Models\Address;
use App\Models\Post;
use App\Models\Project;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function(){


    //$users = User::with('address')->get();
    $users = User::with(['addresses', 'posts'])->get();

    //$users = User::has('posts')->with(['addresses', 'posts'])->get();
    //$users = User::doesntHave('posts')->with(['addresses', 'posts'])->get();
    //$users = User::has('posts', '>=' , 1)->with(['addresses', 'posts'])->get();

    // $users = User::whereHas('posts', function($query){
    //     $query->where('title', 'like', '%title%');
    // })->with(['addresses', 'posts'])->get();

    return view('users.index', compact('users'));
});

Route::get('/posts', function(){
    $posts = Post::with(['user', 'tags'])->get();

    // $posts=Post::first();
    // return($posts->tags->first()->pivot->created_at);
    //return ($posts->tags->first());



    return view('posts.index', compact('posts'));
});

Route::get('/tags', function(){
    $tag = Tag::first();
    $post = Post::first();



    //----- create data to post_tag pivot table
    // $post->tags()->attach([2, 3, 4]);

    //  $post->tags()->attach([
    //     1 => ['status' => 'approved']
    // ]);

    //----- remove data from post_tag pivot table where tag_id 2
    // $post->tags()->detach([2]);

    //----- Any IDs that are not in the given array will be removed from the intermediate table
     //$post->tags()->sync([1, 4]);

     $tags = Tag::with('posts')->get();
     return view('tags.index', compact('tags'));
});

Route::get('/projects', function(){
    $projects = Project::find(2);
    //return $projects->users[0]->tasks;
    //return $projects->task;
    return $projects->tasks;
});
Route::get('/projects-pivot', function(){
    // -----  create pivot relation id
    // $projects = Project::first();
    // $projects->users()->attach([1]);
    // $projects->users()->attach([2]);
    // $projects->users()->attach([3]);

    $projects = Project::find(1);
    //return $projects->users;

    // ----- hasOneThrough with pivot
    //return $projects->tasksPivot;

    // ----- hasManyThrough with pivots
    return $projects->tasksPivots;

});

