<?php

namespace NormanHuth\Helpers\App\Console\Commands;

use Illuminate\Console\Command;

class SortLangJsonFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sort:lang:json';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sort the app language files in alphabetic order';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $this->handleFolder(base_path('vendor/norman-huth/hellofresh-database/lang'));

        return 0;
    }

    public function handleFolder(string $folder)
    {
        $folder = trim($folder, '/\\');
        foreach (glob($folder.'/*') as $filename) {
            if (is_dir($filename)) {
                $this->handleFolder($filename);
                continue;
            }
            if (fileGetExtension($filename) == 'json') {
                $content = json_decode(file_get_contents($filename), true);
                ksort($content, SORT_STRING | SORT_FLAG_CASE);
                file_put_contents($filename, json_encode($content, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
            }
        }
    }
}
