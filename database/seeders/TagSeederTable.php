<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Tag::create([
            'name'=>'Laravel'
        ]);
        Tag::create([
            'name'=>'PHP'
        ]);
        Tag::create([
            'name'=>'javaScript'
        ]);
        Tag::create([
            'name'=>'VueJs'
        ]);
    }
}
