<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Character;

class PokemonInitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init:pokemon';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       $url = 'http://pokeapi.co/api/v2/pokemon';
        $characters = json_decode(file_get_contents($url), true);
        foreach($characters['results'] as $character){
            $id=explode('/', $character['url']);
            Character::create([
                'name'=>$character['name'],
                'pokeapi_id'=>$id[6]
            ]);
        }

        
    }
}
