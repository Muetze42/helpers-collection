<?php

if (!function_exists('arrayClean')) {
    /**
     * Remove null entries from array
     *
     * @param array $array
     * @return array
     */
    function arrayClear(array $array): array
    {
        return array_filter($array, function ($value) {
            return !is_null($value);
        });
    }
}

if (!function_exists('xSleep')) {
    /**
     * Delay execution in seconds with comma option
     *
     * @param float $seconds
     * @return void
     */
    function xSleep(float $seconds = 0.5): void
    {
        $microseconds = (int)$seconds * 1000000;

        usleep($microseconds);
    }
}

if (!function_exists('arrayKeyMap')) {
    /**
     * Array map on array keys
     *
     * @param callable $callback
     * @param array $array
     * @return array
     */
    function arrayKeyMap(callable $callback, array $array): array
    {
        array_walk($array, function ($value, $key) use (&$return, $callback) {
            $return[call_user_func($callback, $key)] = $value;
        });

        return $return;
    }
}

if (!function_exists('spaceOnCapitals')) {
    /**
     * Add whitespace before every upper char
     *
     * @param string $string
     * @return string
     */
    function spaceOnCapitals(string $string): string
    {
        return trim(preg_replace('/(?<! )[A-Z]/', ' $0', $string));
    }
}

if (!function_exists('randomWord')) {
    /**
     * Return a random word by array of words
     *
     * @param array $words
     * @return string
     */
    function randomWord(array $words): string
    {
        return $words[mt_rand(0, (count($words) - 1))];
    }
}

if (!function_exists('replaceNullValueWithEmptyString')) {
    /**
     * Replace every null value with empty string in a array
     *
     * @param $value
     * @return void
     */
    function replaceNullValueWithEmptyString(&$value): void
    {
        $value = $value === null ? '' : $value;
    }
}

if (!function_exists('fileGetFilename')) {
    /**
     * Get file extension
     *
     * @param string $file
     * @return string
     */
    function fileGetExtension(string $file): string
    {
        return pathinfo($file, PATHINFO_EXTENSION);
    }
}

if (!function_exists('fileGetFilename')) {
    /**
     * Get file extension
     *
     * @param string $file
     * @return string
     */
    function fileGetFilename(string $file): string
    {
        return pathinfo($file, PATHINFO_FILENAME);
    }
}

if (!function_exists('lastAnd')) {
    /**
     * Replace the last comma in a list with `and`
     *
     * @param string|array $content
     * @param string $word
     * @param string $glue
     * @param string|null $translateFunction
     * @return string
     */
    function lastAnd(string|array $content, string $word = 'and', string $glue = ',', ?string $translateFunction = '__'): string
    {
        if (is_array($content)) {
            $content = implode(', ', $content);
        }

        if (!str_contains($content, ',')) {
            return $content;
        }

        if (function_exists($translateFunction)) {
            call_user_func($translateFunction, $word);
        }

        return substr_replace($content, ' '.$word, strrpos($content, $glue), 1);
    }
}

if (!function_exists('splitSteps')) {
    /**
     * Get a superior number
     * Default: 0-99 = 0; 100-199 = 100; 200-299 = 200
     *
     * @param int $int
     * @param int $steps
     * @return int
     */
    function splitSteps(int $int, int $steps = 100): int
    {
        return (int)(floor($int / $steps)) * $steps;
    }
}

if (!function_exists('getDomain')) {
    /**
     * Get Domain name from URL
     *
     * @param string $url
     * @return string
     */
    function getDomain(string $url): string
    {
        if (!str_contains($url, '://')) {
            $url = 'https://'.$url;
        }

        $pieces = parse_url($url);
        $domain = $pieces['host'] ?? '';
        if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z.]{2,6})$/i', $domain, $regs)) {
            return $regs['domain'];
        }

        return $domain;
    }
}
