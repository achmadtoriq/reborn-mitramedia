<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Models\mitra_menus;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create();

        $menu = mitra_menus::all();
        $artikel = Article::all();

        foreach ($menu as $item) {
            $sitemap->add(
                Url::create($item->url)
                ->setLastModificationDate($item->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(1.0)
            );
        }

        foreach ($artikel as $val) {
            $sitemap->add(
                Url::create("/artikel/".$val->slug)
                ->setLastModificationDate($val->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8)
            );
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
