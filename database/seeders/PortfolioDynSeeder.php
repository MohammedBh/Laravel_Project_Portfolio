<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioDynSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_dyns')->insert([
            [
                "img_portfolio" => "portfolio-1.jpg",
            ],
            [
                "img_portfolio" => "portfolio-2.jpg",
            ],
            [
                "img_portfolio" => "portfolio-3.jpg",
            ],
            [
                "img_portfolio" => "portfolio-4.jpg",
            ],
            [
                "img_portfolio" => "portfolio-5.jpg",
            ],
            [
                "img_portfolio" => "portfolio-6.jpg",
            ],
            [
                "img_portfolio" => "portfolio-7.jpg",
            ],
            [
                "img_portfolio" => "portfolio-8.jpg",
            ],
            [
                "img_portfolio" => "portfolio-9.jpg",
            ]
        ]);
    }
}