<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $destination = [
            [
                'location' => 'Bali, Indonesia',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'location' => 'Paris, Prancis',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'location' => 'Bangkok, Thailand',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'location' => 'Milan, Italy',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];

        DB::table('destinations')->insert($destination);
    }
}
