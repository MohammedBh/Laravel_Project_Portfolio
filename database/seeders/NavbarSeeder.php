<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            [
                'img' => "profile-img.jpg",
                "h1" => "Alex Smith",
                "icon1" => "bx bxl-twitter",
                "icon2" => "bx bxl-facebook",
                "icon3" => "bx bxl-instagram",
                "icon4" => "bx bxl-skype",
                "icon5" => "bx bxl-linkedin",
                "nav1" => "Home",
                "nav2" => "About",
                "nav3" => "Portfolio",
                "nav4" => "Services",
                "nav5" => "Contact",
                "nav6" => "Admin",
                "btn_icon" => "icofont-navigation-menu"
            ]
        ]);
    }
}
