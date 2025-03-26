<?php

namespace App\Livewire\Pages;

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

    public $url = "https://toriq-gdrive.serveblog.net/drive";
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

            $this->data_image = Cache::remember('project_images_cache', now()->addDay(), function () {
                $data_result = [];
                $data_result[$this->params['name']] = Http::get($this->url . '/' . $this->params['id'])->json();
                return $data_result;
            });
            // $data_result = [];
            // $data_result[$this->params['name']] = Http::get($this->url . '/' . $this->params['id'])->json();
            // $this->data_image = $data_result;
        } else {
            // $this->data_image = Cache::remember('projects_cache', now()->addDay(), function () {
            //     $response = $this->folderId;
            //     $data_result = [];
            //     foreach ($response as $value) {
            //         $data_result[$value['name']] = Http::get($this->url . '/' . $value['id'])->json();
            //     }

            //     return $data_result;
            // });
            $response = $this->folderId;
            $data_result = [];
            foreach ($response as $value) {
                $data_result[$value['name']] = Http::get($this->url . '/' . $value['id'])->json();
            }
            
            $this->data_image = $data_result;
        }
    }

    public function render()
    {
        return view('pages.project');
    }
}
