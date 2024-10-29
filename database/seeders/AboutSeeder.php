<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contents = [
            [
                'key' => 'about_image',
                'value' => null,
                'type' => 'file',
            ],
            [
                'key' => 'about_title',
                'value' => 'Tentang Saya',
                'type' => 'text',
            ],
            [
                'key' => 'self_description',
                'value' => "I'm a Full Stack Developer with extensive experience for over 3 years. My expertise is create and website app, website design, and any more...",
                'type' => 'text',
            ],
            [
                'key' => 'self_resume',
                'value' => null,
                'type' => 'file',
            ],
        ];

        Content::insert($contents);
    }
}