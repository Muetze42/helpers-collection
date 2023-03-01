# Spatie Laravel-medialibrary

## Store media structured by model and numerical index

```php
// config/media-library.php
return [
	// ...
		 /*
     * The class that contains the strategy for determining a media file's path.
     */
    'path_generator' => NormanHuth\HelpersLaravel\Spatie\MediaLibrary\CustomPathGenerator::class, // [tl! focus] 
	// ...
];
```

### Example paths:

```nothing
/storage/users/0/12/*
/storage/cars/0/78/*
/storage/dogs/100/103/*
/storage/cats/300/323/*
```
