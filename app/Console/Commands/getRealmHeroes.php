<?php

namespace App\Console\Commands;

use App\Services\HeroService;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class getRealmHeroes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dracarys';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(HeroService $heroService)
    {
        try {
            $heroService->getAndSaveHeroesToDB();
            return true;
        } catch(Exception $e){
            Log::error(
                'Error: '.$e->getMessage(). ' in: '.$e->getFile().
                ' line: '.$e->getLine().' '.$e->getTraceAsString()
            );
            echo 'Something went wrong: '.$e->getMessage().' for more info check logs.';
            return false;
        }
    }
}
