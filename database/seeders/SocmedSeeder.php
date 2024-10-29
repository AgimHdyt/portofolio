<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SocmedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $socmeds = [
            [
                'name' => 'whatsapp',
                'link' => 'https://wa.me/6285717766367?text=Halo',
            ],
            [
                'name' => 'instagram',
                'link' => 'https://instagram.com/a_gimhdyt',
            ],
            [
                'name' => 'linkedin',
                'link' => 'https://linkedin.com/in/agim-hidayat',
            ],
            [
                'name' => 'gmail',
                'link' => 'mailto:agimhidayat01@gmail.com',
            ],
        ];

        SocialMedia::insert($socmeds);
    }
}