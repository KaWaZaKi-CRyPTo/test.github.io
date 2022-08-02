<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 1,
                'iso_3' => 'dza',
                'name' => 'Algeria',
                'slug' => 'dz',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 2,
                'iso_3' => 'ago',
                'name' => 'Angola',
                'slug' => 'ao',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 3,
                'iso_3' => 'ben',
                'name' => 'Benin',
                'slug' => 'bj',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 4,
                'iso_3' => 'bwa',
                'name' => 'Botswana',
                'slug' => 'bw',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 5,
                'iso_3' => 'iot',
                'name' => 'British Indian Ocean Territory',
                'slug' => 'io',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 6,
                'iso_3' => 'bfa',
                'name' => 'Burkina Faso',
                'slug' => 'bf',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 7,
                'iso_3' => 'bdi',
                'name' => 'Burundi',
                'slug' => 'bi',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 8,
                'iso_3' => 'cpv',
                'name' => 'Cabo Verde',
                'slug' => 'cv',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 9,
                'iso_3' => 'cmr',
                'name' => 'Cameroon',
                'slug' => 'cm',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 10,
                'iso_3' => 'caf',
                'name' => 'Central African Republic',
                'slug' => 'cf',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 11,
                'iso_3' => 'tcd',
                'name' => 'Chad',
                'slug' => 'td',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 12,
                'iso_3' => 'com',
                'name' => 'Comoros',
                'slug' => 'km',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 13,
                'iso_3' => 'cog',
                'name' => 'Congo',
                'slug' => 'cg',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 14,
                'iso_3' => 'civ',
                'name' => 'Cote d’Ivoire',
                'slug' => 'ci',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 15,
                'iso_3' => 'dji',
                'name' => 'Djibouti',
                'slug' => 'dj',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 16,
                'iso_3' => 'cod',
                'name' => 'DR Congo',
                'slug' => 'cd',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 17,
                'iso_3' => 'egy',
                'name' => 'Egypt',
                'slug' => 'eg',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 18,
                'iso_3' => 'gnq',
                'name' => 'Equatorial Guinea',
                'slug' => 'gq',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 19,
                'iso_3' => 'eri',
                'name' => 'Eritrea',
                'slug' => 'er',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 20,
                'iso_3' => 'swz',
                'name' => 'Eswatini',
                'slug' => 'sz',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 21,
                'iso_3' => 'eth',
                'name' => 'Ethiopia',
                'slug' => 'et',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 22,
                'iso_3' => 'atf',
                'name' => 'French Southern Territories',
                'slug' => 'tf',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 23,
                'iso_3' => 'gab',
                'name' => 'Gabon',
                'slug' => 'ga',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 24,
                'iso_3' => 'gmb',
                'name' => 'Gambia',
                'slug' => 'gm',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 25,
                'iso_3' => 'gha',
                'name' => 'Ghana',
                'slug' => 'gh',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 26,
                'iso_3' => 'gin',
                'name' => 'Guinea',
                'slug' => 'gn',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 27,
                'iso_3' => 'gnb',
                'name' => 'Guinea-Bissau',
                'slug' => 'gw',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 28,
                'iso_3' => 'ken',
                'name' => 'Kenya',
                'slug' => 'ke',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 29,
                'iso_3' => 'lso',
                'name' => 'Lesotho',
                'slug' => 'ls',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 30,
                'iso_3' => 'lbr',
                'name' => 'Liberia',
                'slug' => 'lr',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 31,
                'iso_3' => 'lby',
                'name' => 'Libya',
                'slug' => 'ly',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 32,
                'iso_3' => 'mdg',
                'name' => 'Madagascar',
                'slug' => 'mg',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 33,
                'iso_3' => 'mwi',
                'name' => 'Malawi',
                'slug' => 'mw',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 34,
                'iso_3' => 'mli',
                'name' => 'Mali',
                'slug' => 'ml',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 35,
                'iso_3' => 'mrt',
                'name' => 'Mauritania',
                'slug' => 'mr',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 36,
                'iso_3' => 'mus',
                'name' => 'Mauritius',
                'slug' => 'mu',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 37,
                'iso_3' => 'myt',
                'name' => 'Mayotte',
                'slug' => 'yt',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 38,
                'iso_3' => 'mar',
                'name' => 'Morocco',
                'slug' => 'ma',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 39,
                'iso_3' => 'moz',
                'name' => 'Mozambique',
                'slug' => 'mz',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 40,
                'iso_3' => 'nam',
                'name' => 'Namibia',
                'slug' => 'na',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 41,
                'iso_3' => 'ner',
                'name' => 'Niger',
                'slug' => 'ne',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 42,
                'iso_3' => 'nga',
                'name' => 'Nigeria',
                'slug' => 'ng',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 43,
                'iso_3' => 'reu',
                'name' => 'Reunion',
                'slug' => 're',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 44,
                'iso_3' => 'rwa',
                'name' => 'Rwanda',
                'slug' => 'rw',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 45,
                'iso_3' => 'shn',
                'name' => 'Saint Helena',
                'slug' => 'sh',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 46,
                'iso_3' => 'stp',
                'name' => 'Sao Tome and Principe',
                'slug' => 'st',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 47,
                'iso_3' => 'sen',
                'name' => 'Senegal',
                'slug' => 'sn',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 48,
                'iso_3' => 'syc',
                'name' => 'Seychelles',
                'slug' => 'sc',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 49,
                'iso_3' => 'sle',
                'name' => 'Sierra Leone',
                'slug' => 'sl',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 50,
                'iso_3' => 'som',
                'name' => 'Somalia',
                'slug' => 'so',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 51,
                'iso_3' => 'zaf',
                'name' => 'South Africa',
                'slug' => 'za',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 52,
                'iso_3' => 'ssd',
                'name' => 'South Sudan',
                'slug' => 'ss',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 53,
                'iso_3' => 'sdn',
                'name' => 'Sudan',
                'slug' => 'sd',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 54,
                'iso_3' => 'tza',
                'name' => 'Tanzania',
                'slug' => 'tz',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 55,
                'iso_3' => 'tgo',
                'name' => 'Togo',
                'slug' => 'tg',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 56,
                'iso_3' => 'tun',
                'name' => 'Tunisia',
                'slug' => 'tn',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 57,
                'iso_3' => 'uga',
                'name' => 'Uganda',
                'slug' => 'ug',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 58,
                'iso_3' => 'esh',
                'name' => 'Western Sahara',
                'slug' => 'eh',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 59,
                'iso_3' => 'zmb',
                'name' => 'Zambia',
                'slug' => 'zm',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 60,
                'iso_3' => 'zwe',
                'name' => 'Zimbabwe',
                'slug' => 'zw',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}