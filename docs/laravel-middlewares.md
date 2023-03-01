# Laravel Middlewares

## `ForceJsonResponse::class`

Example: Using for API Routes:

```php
// app/Http/Kernel.php

protected $middlewareGroups = [
	//...
	'api' => [
            // ..
            \NormanHuth\HelpersLaravel\App\Http\Middleware\ForceJsonResponse::class,  // [tl! focus] 
             // ..
        ],
	//...
];
```

## `SanctumOrGuest::class`

With this middleware there are opportunities:

* No token and the user is considered a guest
* The user is using a valid sanctum token and is logged in
* The user is using an invalid sanctum token, and get a 401 error

Example usage in Routes:

```php
use NormanHuth\HelpersLaravel\App\Http\Middleware\SanctumOrGuest;

Route::middleware(SanctumOrGuest::class)->group(function () {
    Route::resource('posts', PostController::class);
});
```

Example usage in Provider:

```php
$this->routes(function () {
            Route::middleware(['api', SanctumOrGuest::class])
                ->prefix('api')
                ->name('api.')
                ->group(base_path('routes/api.php'));
```

Example usage in Kernel:

```php
'api' => [
    // ...
    \NormanHuth\HelpersLaravel\App\Http\Middleware\SanctumOrGuest::class,  // [tl! focus] 
],
```

## `UserActive::class`

For this middleware is a datetime `active_at` column required in the user table.

Logging User Activity:

```php
\NormanHuth\HelpersLaravel\App\Http\Middleware\UserActive::class
```
