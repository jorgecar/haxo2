<?php

namespace Jorgecar\Haxo2\Commands;

use Illuminate\Console\Command;

class Haxo2Command extends Command
{
    public $signature = 'haxo2';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
