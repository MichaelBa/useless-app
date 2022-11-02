<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Useless\Sitemap\Generator;

class makeSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:sitemap {path}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate useless sitemap';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $sitemap = new Generator(config('sitemap'));
        $sitemap->save($this->argument('path'));

        return Command::SUCCESS;
    }
}
