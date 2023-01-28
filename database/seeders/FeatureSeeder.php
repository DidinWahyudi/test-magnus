<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feature = [
            [
                'image' => 'icons/destination.png',
                'title' => 'Lot Of Choices',
                'desc' => 'Total 450+ destinations that we work with.',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'image' => 'icons/luggage.png',
                'title' => 'Best Tour Guide',
                'desc' => 'Out tour guide 15+ years experience.',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'image' => 'icons/postcard.png',
                'title' => 'Easy Booking',
                'desc' => 'With an easy and fast ticket purchase process.',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

        ];

        DB::table('features')->insert($feature);
    }
}
