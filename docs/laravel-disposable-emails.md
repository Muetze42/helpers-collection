# Disposable Emails for Laravel

## Create or update disposable email provider list

```nothing
php artisan update:disposable-emails
```

#### Tip: Using in Schedule

````php
$schedule->command('update:disposable-emails')->weekly();
````

## Using Disposable Email Validation Rule
```php
use NormanHuth\HelpersLaravel\App\Rules\DisposableEmail;

class ContactController extends Controller
{
		public function submit(Request $request)
    {
        $request->validate([
            // ...
            'email'   => ['required', 'email', new DisposableEmail, 'confirmed'],
            // ...
        ]);
}
```
