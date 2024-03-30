<?php

namespace Database\Seeders;

use App\Models\Korousel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KorouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Korousel::create([
            "title_uz"=> "title uz",
            "title_ru"=> "title ru",
            "title_en"=> "title en",
        ]);
        Korousel::create([
            "title_uz"=> "javohir uz",
            "title_ru"=> "javohir ru",
            "title_en"=> "javohir en",
        ]);
        Korousel::create([
            "title_uz"=> "qayumov uz",
            "title_ru"=> "qayumov ru",
            "title_en"=> "qayumov en",
        ]);
    }
}
