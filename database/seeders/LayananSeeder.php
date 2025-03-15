<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "image"   => "https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/mitramedia/best-seller.webp",
                "title" => "Kualitas Terbaik",
                "description"  => "Kami menggunakan bahan berkualitas tinggi untuk memastikan neon box dan papan reklame tahan lama dan terlihat profesional."
            ],
            [
                "image"   => "https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/mitramedia/money-bag.webp",
                "title" => "Harga Kompetitif",
                "description"  => "Kami menawarkan harga yang terjangkau tanpa mengorbankan kualitas hasil kerja kami."
            ],
            [
                "image"   => "https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/mitramedia/professionalism.webp",
                "title" => "Tim Profesional",
                "description"  => "Tim ahli kami berpengalaman dalam pemasangan neon box dan papan reklame dengan hasil yang rapi dan tepat waktu."
            ],
            [
                "image"   => "https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/mitramedia/express-delivery.webp",
                "title" => "Pengiriman Tepat Waktu",
                "description"  => "Menjamin bahwa produk atau layanan dikirimkan sesuai dengan jadwal yang disepakati, memberikan kepercayaan lebih kepada pelanggan."
            ],
            [
                "image"   => "https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/mitramedia/material-management.webp",
                "title" => "Material Berkualitas Tinggi",
                "description"  => "Menggunakan bahan-bahan terbaik, seperti akrilik, LED tahan lama, atau aluminium, yang menjamin daya tahan dan penampilan yang elegan."
            ],
            [
                "image"   => "https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/mitramedia/responsive.webp",
                "title" => "Layanan Pelanggan Responsif",
                "description"  => "Tim customer service yang cepat merespon pertanyaan dan kebutuhan pelanggan, memberikan pengalaman pelanggan yang lebih baik."
            ]
        ];

        foreach ($data as $item) {
            Layanan::create($item);
        }
    }
}
