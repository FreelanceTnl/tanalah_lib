<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('publishers')->insert([
            'name' => 'OpenClassrooms',
            'logo' => 'https://openclassrooms.com/fav-icon.png',
            'link' => 'https://openclassrooms.com/fr/'
        ]);
        
    }
}
