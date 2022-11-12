<?php

if (!function_exists('isNovaFilterActive')) {
    /**
     * Check if a Nova (4) filter is active
     *
     * @param $filter
     * @return bool
     */
    function isNovaFilterActive($filter): bool
    {
        $filtersRequest = request()->input('filters');

        if (!$filtersRequest) {
            return false;
        }

        $filters = decodeNovaFilter($filtersRequest);

        $check = array_filter(array_values($filters), function ($value) use ($filter) {
            return isset($value[$filter]) && $value[$filter] != '';
        });

        return !empty($check);
    }
}

if (!function_exists('novaResourceLink')) {
    /**
     * Create a Nova resource link
     *
     * @param $resource
     * @param int $resourceID
     * @param array|null $queries
     * @return string
     */
    function novaResourceLink($resource, int $resourceID, ?array $queries = null): string
    {
        $path = str_replace('//', '/', '/'.config('nova.path'));

        $query = empty($queries) ? '' : '?'.http_build_query($queries);

        return $path.'/resources/'.\Illuminate\Support\Str::plural(\Illuminate\Support\Str::kebab(class_basename(class_basename($resource)))).'/'.$resourceID.$query;
    }
}

if (!function_exists('decodeNovaFilter')) {
    /**
     * Decode the filter string from base64 encoding.
     *
     * @param string $filtersRequestString
     * @return array
     */
    function decodeNovaFilter(string $filtersRequestString): array
    {
        if (empty($filtersRequestString)) {
            return [];
        }

        $filters = json_decode(base64_decode($filtersRequestString), true);

        return is_array($filters) ? $filters : [];
    }
}

if (!function_exists('novaUrl')) {
    /**
     * Get the path to the base of the Nova installation.
     *
     * @param string $path
     * @return string
     */
    function novaUrl(string $path): string
    {
        $path = ltrim($path, '/\\');

        return config('app.url').config('nova.path').'/'.$path;
    }
}
