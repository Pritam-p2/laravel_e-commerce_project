<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'OPPO mobile',
            'price'=>'300',
            'description'=>"A smartphone with 8gb RAM",
            'category'=>'mobile',
            "gallery"=>"https://telecomtalk.info/wp-content/uploads/2014/12/OPPO-R5.jpg"
            ],
            [
                'name'=>'panasonic tv',
            'price'=>'400',
            'description'=>"A smart tv with remote",
            'category'=>'tv',
            "gallery"=>"https://www.bhphotovideo.com/images/images2500x2500/Panasonic_TC_L42U22_TC_L42U22_42_Viera_1080p_679035.jpg"
            ],
            [
                'name'=>'Lcd tv',
            'price'=>'500',
            'description'=>"An LCD TV",
            'category'=>'TV',
            "gallery"=>"https://www.euronics.lv/UserFiles/Products/Images/59258-thomson-32hu2253-lcd-tv.png"
            ],
            [
                'name'=>'LG fridge',
            'price'=>'200',
            'description'=>"A fridge that cools",
            'category'=>'fridge',
            "gallery"=>"http://www.lgnewsroom.com/wp-content/uploads/2014/09/Premium_Multi-Door_model_GMJ916NSHV_1.jpg"
            ]
        ]);
    }
}
