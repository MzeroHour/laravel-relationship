<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Project::create([
            'title'=>'Project A'
        ]);
        Project::create([
            'title'=>'Project B'
        ]);
        Task::create([
            'title'=>'Task 1 for project 1 by user 1',
            'user_id' => 1,
        ]);
        Task::create([
            'title'=>'Task 2 for project 1 by user 1',
            'user_id' => 1,
        ]);
        Task::create([
            'title'=>'Task 3 for project 1 by user 2',
            'user_id' => 2,
        ]);
        Task::create([
            'title'=>'Task 4 for project 2 by user 3',
            'user_id' => 3,
        ]);
        Task::create([
            'title'=>'Task 5 for project 2 by user 4',
            'user_id' => 4,
        ]);
        Task::create([
            'title'=>'Task 6 for project 2 by user 5',
            'user_id' => 5,
        ]);


    }
}
