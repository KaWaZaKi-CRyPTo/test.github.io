<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Khsing\World\World;
use Illuminate\Support\Str;
use Khsing\World\Models\Country AS CountrySRC;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //  $Cities = Country::getByCode('dz')->cities()->get();
        $Countries = Country::all();

        foreach ($Countries as $Country) {
            
            $Cities = CountrySRC::getByCode($Country->slug)->cities()->get();

            foreach ($Cities as $City) {
                City::insert([
                    'country_id' => $Country->id,
                    'name' => $City->name,
                    'slug' => $City->code ?? Str::slug(str_replace(' ', '',strtolower($City->name))),
                ]);
            }
        }
    }
}
