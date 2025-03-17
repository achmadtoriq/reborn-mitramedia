<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-maxxis', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-acer', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-ubs', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-shunda-plafon', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-aga', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-jnt', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-sharp', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-oppo', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-bank-jatim', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-hock', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-hp', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-paragon', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-vivo', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-bosch', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-akr', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-pucuk-harum', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-le-minerale', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-mayora', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-asus', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya'],
            ['path' => 'https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/partner/logo-ssa', 'alt' => 'Neon Box Murah Surabaya & Papan Reklame Surabaya']
        ];

        foreach ($data as $item) {
            Partner::create($item);
        }
    }
}
