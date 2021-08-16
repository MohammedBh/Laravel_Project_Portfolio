<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsDynSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills_dyns')->insert([
            [   
            "span" => "HTML",
            "pourcentage" => "100",
            ],
            [   
            "span" => "CSS",
            "pourcentage" => "90",
            ],
            [   
            "span" => "JavaScript",
            "pourcentage" => "75",
            ],
            [   
            "span" => "PHP",
            "pourcentage" => "80",
            ],
            [   
            "span" => "WordPress/CMS",
            "pourcentage" => "90",
            ],
            [   
            "span" => "Photoshop",
            "pourcentage" => "55",
            ],
            
        ]);
    }
}
