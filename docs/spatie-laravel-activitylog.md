# Spatie Laravel-activitylog

## Automatic Logname Via Model Name

This Trait logs model activities with default name (see examples) except created_at, updated_at and hidden attributes.

```php
use NormanHuth\HelpersLaravel\Traits\Spatie\LogsActivityTrait;

class Page extends Model
{
    use LogsActivityTrait;
}
```

Example Log Names

| Model               | Logname |
|---------------------|---------|
| Post                | posts   |
| PostComment         | posts   |
| PostCommentReaction | posts   |
| User                | users   |
