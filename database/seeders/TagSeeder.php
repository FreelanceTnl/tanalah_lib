<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $tags=[
        '*',
        'C',
        'C++',
        'C#',
        'Java',
        'JavaScript',
        'PHP',
        'HTML',
        'CSS',
        'Python',
        'Algorithme',
        'Programmation',
        'Système',
        'Réseau',
        'Web'
    ];
    public function run(): void
    {
        //
        foreach($this->tags as $tag){
            DB::table('tags')->insert([
                'name' => $tag,
            ]);
        }
    }
}
