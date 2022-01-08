<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Services\Comics\ComicsService;


class MarvelApi extends Command
{
    protected $comicsService;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:marvelApi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get the comics of the last week';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ComicsService $comicsService)
    {
        parent::__construct();
        $this->comicsService = $comicsService;

    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if ($this->confirm('Confirm downloading last weeks comics?')) {
            $apikey = '26a01f7921af6b2b7103a4133fa14659';
            $privateKey = 'bdec22259c4cf7fc40326683909763fcfa4a2269';
            $timestamp = time();
            $hash = md5($timestamp . $privateKey. $apikey);

            
            $response = Http::get('http://gateway.marvel.com/v1/public/comics', [
                    'ts' => $timestamp,
                    'apikey' => $apikey,
                    'hash' => $hash,
                    'dateDescriptor' => 'lastWeek',
            ]);

            if ($response->successful()) {

                $comics = $response->object();

                foreach ($comics->data->results as $results) {
        
                    $this->comicsService->createNewComics([
                            'title' => $results->title,
                            'description' => $results->description,
                            'ean' => $results->ean?:0,
                            'prices' => $results->prices[0]->price,
                            'images' => $results->images[0]->path.'.'.$results->images[0]->extension
                    ]);
                }
            }
            else {
                return "Não existe dados para ser importado nesse momento";
            }
        }
    }
}
