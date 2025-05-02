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
            "name" => "Neon-Box"
        ],
        "indoor" => [
            "id" => "1xMMFmN3rMB4Up_AJ0NKJJhrWyY_yNDMO",
            "name" => "Indoor-Outdoor"
        ],
        "letter" => [
            "id" => "1pzcLiWZdGKZdQD4-ej4sy7fld5sA6qSV",
            "name" => "Letter-Timbul"
        ],
        "stiker" => [
            "id" => "1ncz3iisSMzAITBfCmezBWRxOkoxPq2KP",
            "name" => "Mobil-Branding"
        ],
        "reklame" => [
            "id" => "1NKwgI_AjCFwExFhp2FBKZjPvACAw6I0L",
            "name" => "Papan-Reklame"
        ],
        "videotron" => [
            "id" => "1LslQqF40qqFFbcsugFwPd7-XaV0vQWNv",
            "name" => "Videotron"
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
