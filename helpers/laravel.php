<?php

if (!function_exists('appLog')) {
    /**
     * Helper function for logging
     *
     * @param mixed $message
     * @param string $level
     * @param string|null $channel
     * @param array $context
     */
    function appLog(mixed $message, string $level = 'debug', ?string $channel = null, array $context = []): void
    {
        if (!$channel) {
            $channel = config('logging.default', 'daily');
        }
        $message = stringifyItem($message);

        \Illuminate\Support\Facades\Log::channel($channel)->{$level}($message, $context);
    }
}

if (!function_exists('errorLog')) {
    /**
     * Helper function to logging errors
     *
     * @param $message
     * @param array $context
     * @param string|null $channel
     * @return void
     */
    function errorLog($message, array $context = [], ?string $channel = null): void
    {
        appLog($message, 'error', $channel, $context);
    }
}

if (!function_exists('stringifyItem')) {
    /**
     * @param mixed $message
     * @return mixed|string
     */
    function stringifyItem(mixed $message): mixed
    {
        if (is_array($message) || is_object($message)) {
            $prefix = is_array($message) ? 'array' : 'object';
            return $prefix.' '.json_encode($message, JSON_UNESCAPED_UNICODE);
        }

        return $message;
    }
}

if (!function_exists('getBatch')) {
    /**
     * Get current bat from table
     *
     * @param mixed $model
     * @param string $column
     * @return int
     */
    function getBatch(mixed $model, string $column = 'batch'): int
    {
        $batch = optional($model::orderByDesc($column)->first())->batch;
        $batch++;

        return $batch;
    }
}

if (!function_exists('generateSerialNo')) {
    /**
     * Generate a serial number
     * Example: YCY8N-DWCII-W63JY-A71PA-FTUMU
     *
     * @param bool $toUpper
     * @param int $parts
     * @param int $partLength
     * @param string $separator
     * @return string
     */
    function generateSerialNo(bool $toUpper = true, int $parts = 5, int $partLength = 5, string $separator = '-'): string
    {
        $keyParts = [];
        for ($i = 1; $i <= $parts; $i++) {
            $keyParts[] = \Illuminate\Support\Str::random($partLength);
        }

        $key = implode($separator, $keyParts);

        return $toUpper ? \Illuminate\Support\Str::upper($key) : $key;
    }
}

if (!function_exists('dataGetByJsonFile')) {
    /**
     * Get data key by JSON file
     *
     * @param string $file
     * @param array|int|string|null $key
     * @param mixed $default
     * @return array|mixed
     */
    function dataGetByJsonFile(string $file, array|int|string|null $key = null, mixed $default = null): mixed
    {
        $target = [];
        if (file_exists($file)) {
            $target = json_decode(file_get_contents($file), true);
        }

        return data_get($target, $key, $default);
    }
}

if (!function_exists('strSlug')) {
    /**
     * Generate a URL friendly "slug" from a given string.
     *
     * @param string $title
     * @param string $separator
     * @param string|null $language
     * @param string[] $dictionary
     * @return string
     */
    function strSlug(string $title, string $separator = '-', ?string $language = null, array $dictionary = ['@' => 'at']): string
    {
        if (!$language) {
            $language = \Illuminate\Support\Facades\App::getLocale();
        }
        $language = in_array($language, ['en', 'de', 'bg']) ? $language : 'en';

        return \Illuminate\Support\Str::slug($title, $separator, $language, $dictionary);
    }
}

if (!function_exists('fullShare')) {
    /**
     * Add a piece of shared data to the environment and Inertia request.
     *
     * @param array|string $key
     * @param mixed|null $value
     */
    function fullShare(array|string $key, mixed $value = null): void
    {
        view()->share($key, $value);
        \Inertia\Inertia::share($key, $value);
    }
}

