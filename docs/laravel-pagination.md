# Laravel Pagination

## Remove Links Only In Laravel Resources

Use `NormanHuth\HelpersLaravel\App\Http\Resources\Json\JsonResource` instead of `Illuminate\Http\Resources\Json\JsonResource` in Resources.

Optional. Show Link in Index Route. (Experimental)

````php
namespace App\Http\Resources;

use NormanHuth\HelpersLaravel\App\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
     /**
     * Optional: Set a key name to add a simple route in the resource array
     *
     *@varstring|null
     */
     protected ?string $addSimpleShowRoute = 'link';
}
````

## Remove First Page Query From **All** Links

```php
class AppServiceProvider extends ServiceProvider
{
/**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
			//
			app()->bind(
          \Illuminate\Pagination\LengthAwarePaginator::class,
          \NormanHuth\HelpersLaravel\Support\LengthAwarePaginator::class
			);
```

## Example Output
```json
{
    "data": [
        {
            "id": 1,
            "user_id": 1,
            "title": "Test",
            "content": "Visit https://huth.it for more infos about the author",
            "created_at": "2022-12-03T21:55:11.000000Z",
            "updated_at": "2022-12-03T21:55:11.000000Z",
            "deleted_at": null,
            "link": "http://localhost/api/posts/1"
        }
    ],
    "links": {
        "first": "http://example-app.test/api/posts?page=1",
        "last": "http://example-app.test/api/posts?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http://example-app.test/api/posts",
        "per_page": 50,
        "to": 1,
        "total": 1
    }
}
```
