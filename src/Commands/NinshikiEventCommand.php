<?php

namespace MarJose123\NinshikiEvent\Commands;

use Illuminate\Console\Command;

class NinshikiEventCommand extends Command
{
    public $signature = 'ninshiki-event';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
