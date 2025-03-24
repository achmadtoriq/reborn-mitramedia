<?php

namespace App\Livewire\Pages;

use App\Models\MetaDescription;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Socmed extends Component
{
    public $meta_title;
    public $meta_desc;
    public $title;

    public $url;
    public $params;
    public $result;

    function mount() {
        $routename = Route::currentRouteName();
        $result_meta = MetaDescription::where('routename', $routename)->first();

        $this->meta_title = $result_meta->meta_title;
        $this->meta_desc = $result_meta->meta_desc;
        $this->title = $result_meta->title;

        $token = "IGQWRNRDRfVW55QkJpRWhHbzhPeHl5V01uQnJWRlN5VlF0U0s5ZAXlwaEFrNXE0OWdaaWdrdm9HVzVmbHRkTGhjLW44NzJBVUVCOUFueHNnb242bXJ4ME9iM3hvdTNQX1ljTGktQ1dXSEVtRXVwczNQUGxobm1Pb2cZD";//env('TOKEN_IG_MITRA');
        $this->url = 'https://graph.instagram.com/me/media';
        $this->params = ['fields' => 'id,caption,media_url,media_type,timestamp,username,permalink,thumbnail_url,comments_count,like_count', 'access_token' => $token];
        $this->result = $this->sendGET();
    }

    protected function sendGET()
    {
        $response = Http::get($this->url, $this->params);
        // Get the response body
        $data = $response->json();
        
        // Check if the request was successful
        if ($response->successful()) {
            usort($data['data'], function ($a, $b) {
                return strcmp($a['media_type'], $b['media_type']);
            });
            return $data;  // Output the response data
        } else {
            return false;
        }
    }

    public function render()
    {
        return view('pages.socmed');
    }
}
