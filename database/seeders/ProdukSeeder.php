<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "title" => "Letter Timbul",
                "description" => "Jasa Pembuatan Pemasangan Letter Timbul / Huruf Timbul",
                "image" => "https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/mitramedia/produk/letter-timbul.webp",
                "alt" => "Jasa Pembuatan Pemasangan Letter Timbul / Huruf Timbul",
                "slug" => Str::slug('Letter Timbul')
            ],
            [
                "title" => "Neon Box",
                "description" => "Jasa Pembuatan NeonBox Murah sebagai media promosi usaha anda",
                "image" => "https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/mitramedia/produk/neon-box.webp",
                "alt" => "Jasa Pembuatan NeonBox Surabaya",
                "slug" => Str::slug('Neon Box')
            ],
            [
                "title" => "BillBoard & Reklame",
                "description" => "Jasa Pembuatan dan Pemasangan BillBoard & Papan Reklame",
                "image" => "https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/mitramedia/produk/billboard.webp",
                "alt" => "Jasa Pembuatan Billboard & Papan Reklame Surabaya",
                "slug" => Str::slug('BillBoard & Reklame')
            ],
            [
                "title" => "Interior Indoor & Outdoor",
                "description" => "Jasa Pembuatan Interior Indoor & Outdoor media promosi usaha anda",
                "image" => "https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/mitramedia/produk/x-banner.webp",
                "alt" => "Pembuatan & Pemasangan Interior Indoor & Outdoor",
                "slug" => Str::slug('Interior Indoor & Outdoor')
            ],
            [
                "title" => "Mobil Branding",
                "description" => "Jasa Pembuatan Mobil Branding sebagai media promosi usaha anda",
                "image" => "https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/mitramedia/produk/mobil-branding.webp",
                "alt" => "Pembuatan Mobil Branding",
                "slug" => Str::slug('Mobil Branding')
            ],
            [
                "title" => "Videotron",
                "description" => "Jasa Pemasangan Videotron sebagai media promosi usaha anda",
                "image" => "https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/mitramedia/produk/servis-brosur.webp",
                "alt" => "Jasa Pemasangan Videotron",
                "slug" => Str::slug('Videotron')
            ],
        ];

        foreach ($data as $item) {
            Produk::create($item);
        }


    }
}
