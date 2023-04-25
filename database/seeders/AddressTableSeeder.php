<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Address::create([
            'user_id'=>1,
            'country'=>'Myanmar',
        ]);
        Address::create([
            'user_id'=>2,
            'country'=>'USA',
        ]);
        Address::create([
            'user_id'=>3,
            'country'=>'China',
        ]);
        Address::create([
            'user_id'=>1,
            'country'=>'India',
        ]);
    }
}
