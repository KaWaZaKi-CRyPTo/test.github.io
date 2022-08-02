<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use Khsing\World\World;

class CounriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // only countries in Africa

       $Countries = World::Countries()->where('continent_id',3);
       foreach ($Countries as $Country) {
        Country::insert([
            'name' => $Country->name,
            'slug' => $Country->code,
            'iso_3' => $Country->code_alpha3,

        ]);
       }
    }
}
