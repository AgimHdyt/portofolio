<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contents = [
            [
                'key' => 'name',
                'value' => 'Agim Hidayat',
                'type' => 'text',
            ],
            [
                'key' => 'profesion',
                'value' => 'Full Stack Developer',
                'type' => 'text',
            ],
            [
                'key' => 'hero_text',
                'value' => "I'm a Full Stack Developer with extensive experience for over 3 years. My expertise is create and website app, website design, and any more...",
                'type' => 'text',
            ],
            [
                'key' => 'hero_image',
                'value' => null,
                'type' => 'file',
            ],
            [
                'key' => 'wa_link',
                'value' => 'https://wa.me/6285717766367?text=Halo',
                'type' => 'text',
            ],
        ];

        Content::insert($contents);
    }
}