<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $current = Carbon::now();
        //I want to insert news

        //1. QueryBuilder  DB   
        DB::table('news')->insert([  // Array of Associative array
                                        [
                                            'title'=>'Narendra Modi',
                                            'description'=>'description1',
                                            'image_url'=>'https://www.livemint.com/lm-img/img/2024/04/10/600x338/Besides-electoral-bonds--PM-Narendra-Modi-also-spo_1712768840291_1712768859963.jpg',
                                            'created_at'=>$current,
                                            'updated_at'=>$current
                                        ],
                                        [
                                            'title'=>'Narendra Modi',
                                            'description'=>'description2',
                                            'image_url'=>'https://www.hindustantimes.com/ht-img/img/2024/04/15/550x309/Narendra_Modi_1713184386971_1713184387137.jpg',
                                            'created_at'=>$current,
                                            'updated_at'=>$current
                                        ],
                                        [
                                            'title'=>'Narendra Modi',
                                            'description'=>'description3',
                                            'image_url'=>'',
                                            'created_at'=>$current,
                                            'updated_at'=>$current
                                        ],
                                  ]);


        //2. Eleqoent ORM

    }
}