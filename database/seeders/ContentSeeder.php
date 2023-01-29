<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = [
            [
                'title' => 'sub-title-hero',
                'image' => null,
                'content' => 'The vacation you deserve is closer than you think 😍',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'title' => 'title-hero',
                'image' => null,
                'content' => 'Lifre is short <br>and the world 🌏 <br>is wide! 🏖️',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'title' => 'sub-title-feature',
                'image' => null,
                'content' => 'WHTA WE SERVE',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'title' => 'title-feature',
                'image' => null,
                'content' => 'Top Falues <br>For You 🔥',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'title' => 'content-feature',
                'image' => null,
                'content' => 'Try a variety of benefits when <br>using our services.',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'title' => 'image-hero-front',
                'image' => 'images/img-new-travel-1.jpg',
                'content' => null,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'title' => 'image-hero-back',
                'image' => 'images/travel-2.jpg',
                'content' => null,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

        ];

        DB::table('contents')->insert($content);
    }
}
