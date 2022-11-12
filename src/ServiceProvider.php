<?php

namespace NormanHuth\Helpers;

use Illuminate\Support\ServiceProvider as Provider;

class ServiceProvider extends Provider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../stubs' => base_path('stubs'),
        ], 'stubs');

        if ($this->app->runningInConsole()) {
            $this->commands($this->getCommands());
        }
    }

    /**
     * Get all package commands
     *
     * @return array
     */
    protected function getCommands(): array
    {
        return array_filter(array_map(function ($item) {
            return '\\'.__NAMESPACE__.'\\App\\Console\\Commands\\'.pathinfo($item, PATHINFO_FILENAME);
        }, glob(__DIR__.'/App/Console/Commands/*.php')), function ($item) {
            return class_basename($item) != 'Command';
        });
    }
}
