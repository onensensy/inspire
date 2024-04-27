<?php

namespace Sensy\Inspire\Commands;

use Illuminate\Console\Command;

class InspireCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'inspire:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Inspire the Guys';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Inspire Command Run');
        $this->comment('You are awesome!');
    }
}
