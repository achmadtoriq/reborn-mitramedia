<?php

namespace App\Livewire\Pages;

use App\Models\GoogleMitraImages;
use App\Models\MetaDescription;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Project extends Component
{
    public $meta_title;
    public $meta_desc;
    public $title;

    public $url = "http://api.advertisingmitramedia.com/drive";
    public $data_image;
    public $folderId = [
        "neonbox" => [
            "id" => "1koZgFRp3VT6jVFLxC94PRXyvXFJ6AEom",
            "name" => "Neon-Box",
            "title" => "Proyek Neon Box Surabaya – Mitramedia Advertising",
            "meta_title" => "Neon Box Surabaya – Hasil Proyek & Portofolio Terbaik",
            "meta_desc" => "Galeri proyek neon box Surabaya – jasa desain & pemasangan untuk toko, kafe, dan kantor. Estetis dan tahan lama."
        ],
        "indoor" => [
            "id" => "1xMMFmN3rMB4Up_AJ0NKJJhrWyY_yNDMO",
            "name" => "Indoor-Outdoor",
            "title" => "Portofolio Neon Box & Reklame Indoor Outdoor Surabaya",
            "meta_title" => "Neon Box & Reklame Indoor Outdoor Surabaya",
            "meta_desc" => "Proyek reklame & neon box indoor-outdoor Surabaya. Cocok untuk toko, kantor, event, dan promosi bisnis Anda."
        ],
        "letter" => [
            "id" => "1pzcLiWZdGKZdQD4-ej4sy7fld5sA6qSV",
            "name" => "Letter-Timbul",
            "title" => "Portofolio Letter Timbul – Neon Box & Reklame Surabaya",
            "meta_title" => "Huruf Timbul Surabaya – Proyek Letter Signage Terbaru",
            "meta_desc" => "Contoh huruf timbul berkualitas dari proyek signage kami di Surabaya. Solusi terbaik untuk kebutuhan promosi visual bisnis Anda."
        ],
        "stiker" => [
            "id" => "1ncz3iisSMzAITBfCmezBWRxOkoxPq2KP",
            "name" => "Mobil-Branding",
            "title" => "Portofolio Proyek Stiker Surabaya - Mitramedia Advertising",
            "meta_title" => "Stiker Surabaya – Proyek Desain & Pemasangan",
            "meta_desc" => "Proyek stiker profesional di Surabaya. Desain custom dan pemasangan presisi untuk bisnis Anda."
        ],
        "reklame" => [
            "id" => "1NKwgI_AjCFwExFhp2FBKZjPvACAw6I0L",
            "name" => "Papan-Reklame",
            "title" => "Galeri Pemasangan Reklame Surabaya – Mitramedia Advertising",
            "meta_title" => "Pemasangan Reklame Surabaya – Proyek Desain & Pemasangan",
            "meta_desc" => "Galeri proyek reklame Surabaya – solusi desain dan pemasangan reklame profesional untuk berbagai jenis bisnis."
        ],
        "videotron" => [
            "id" => "1LslQqF40qqFFbcsugFwPd7-XaV0vQWNv",
            "name" => "Videotron",
            "title" => "Hasil Proyek Videotron – Mitramedia Advertising",
            "meta_title" => "Contoh Proyek Videotron – Jasa Profesional Surabaya",
            "meta_desc" => "Galeri proyek videotron Surabaya – solusi layar LED untuk branding dan event dengan kualitas dan keandalan terbaik."
        ]
    ];

    public $params;

    function mount($slug = null)
    {

        $routename = Route::currentRouteName();
        $result_meta = MetaDescription::where('routename', $routename)->first();

        $this->meta_title = $result_meta->meta_title;
        $this->meta_desc = $result_meta->meta_desc;
        $this->title = $result_meta->title;

        if ($slug) {
            $this->params = $this->folderId[$slug];
            $folderIdSlug = $this->params['id'];
            $folderName = $this->params['name'];

            $this->meta_title = $this->params['meta_title'];
            $this->meta_desc = $this->params['meta_desc'];
            $this->title = $this->params['title'];

            $cache_name = "cache_".$slug;

            $this->data_image = Cache::remember($cache_name, now()->addDay(), function () use ($folderIdSlug, $folderName) {
                $data_result = [];
                $data_result[$folderName] = GoogleMitraImages::where('folder_id', $folderIdSlug)->get();
                return $data_result;
            });
        } else {
            $this->data_image = Cache::remember('all_projects_cache', now()->addDay(), function () {
                $response = $this->folderId;
                $data_result = [];
                foreach ($response as $value) {
                    $data_image_db = GoogleMitraImages::where('folder_id', $value['id'])->get();
                    $data_result[$value['name']] = $data_image_db;
                }

                return $data_result;
            });
        }
    }

    public function render()
    {
        return view('pages.project');
    }
}
