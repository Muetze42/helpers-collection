<?php

namespace NormanHuth\Helpers\App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class UpdateDisposableEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:disposable-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update disposable email providers';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        set_time_limit(0);
        $content = file_get_contents('https://cdn.jsdelivr.net/gh/disposable/disposable-email-domains@master/domains.json');
        Storage::disk('local')->put('data/disposable-emails.json', $content);

        return 0;
    }
}
