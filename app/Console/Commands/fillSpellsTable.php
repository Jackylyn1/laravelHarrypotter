<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\SpellController;

class fillSpellsTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fill-spells-table';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {   
        try{
            app(SpellController::class)->seedSpellsFromAPIIntoDatabase();
            $this->info('Spells table filled successfully');
        } catch(\Throwable $t){
            $this->error('An error occurred: ' . $t->getMessage());
        }
    }
}
