# Laravel Commands

## `App\CleanupSoftDeletesCommand::class`

Delete finally soft deletes Model instances:

```nothing
php artisan cleanup:soft-deletes
```

## `Development\PivotMigrateMakeCommand::class`

Create a new migration file for `many-to-many` pivot table:

```nothing
php artisan make:migration:pivot User Post
```

## `Development\RoutesSave::class`

Save the route:list output to /storage/development/routes.txt or /storage/development/{name}.txt:

```nothing
php artisan sort:lang:json
```

## `IdeHelper\IdeHelperCommand::class`

Alias command for barryvdh/laravel-ide-helper and tutorigo/laravel-ide-macros if installed:

```nothing
php artisan helper
```
