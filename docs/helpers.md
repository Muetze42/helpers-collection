# Helpers

<div class="hashtag-list">

- [Available Methods & Functions](#available-methods)
- [Available extended Methods & Functions](#available-methods-by-laravel)
- [Other Utilities by Laravel](#other-utilities)
    - [Benchmarking](#benchmarking)
    - [Lottery](#lottery)

</div>

## Introduction

These methods and functions are all also available in the PHP helpers package.

> [Laravel](https://laravel.com/) includes a variety of global "helper" PHP functions. Many of these functions are used by the framework itself; however, you are free to use them in your own
> applications if you find them
> convenient.

## Available Methods & Functions

### Arrays & Objects {#array-n-objects-index}

<div class="child-columns-3xs max-w-4xl">

[Arr::clean](#arr-clean)
[Arr::keyMap](#arr-key-map)
[arrayKeyMap](#arr-key-map)
[arrayClean](#arr-clean)
</div>

### Strings {#srings-index}

<div class="child-columns-3xs max-w-4xl">

[Str::getExcerpt](#str-get-excerpt)
[Str::slug](#str-slug)
[Str::spaceBeforeCapitals](#str-space-before-capitals)
[Str::httpBuildQueryUrl](#str-http-build-query-url)
[Str::indexNumber](#str-index-number)
[Str::lastAnd](#str-last-and)
[Str::randomWord](#str-random-word)
[Str::generateSerialNo](#str-generate-serial-no)
[Str::ceilUpNearest](#str-ceil-up-nearest)
[Str::fillDigits](#str-fill-digits)
[Str::randomHexColor](#str-random-hex-color)
[Str::jsonPrettyEncode](#str-json-pretty-encode)
[Str::emojiToUnicode](#str-emoji-to-unicode)
[Str::normalizeUserSubmit](#str-normalize-user-submit)
[Str::getDomain](#str-get-domain)
[strSpaceBeforeCapitals](#str-space-before-capitals)
[strExcerpt](#str-get-excerpt)
[strSlug](#str-slug)
[httpBuildQueryUrl](#str-http-build-query-url)
[ceilUpNearest](#str-ceil-up-nearest)
[fillDigits](#str-fill-digits)
[indexNumber](#str-index-number)
[parseMarkdown](#str-markdown)
[jsonPrettyEncode](#str-json-pretty-encode)
[normalizeUserSubmit](#str-normalize-user-submit)
[urlGetDomain](#str-get-domain)
</div>

### Paths {#paths-index}

<div class="child-columns-3xs max-w-4xl">

[base_path()](#base-path)
</div>

## Methods & Functions (Extended)

### Arrays & Objects (Extended) {#arrays-n-objects-extended-index}

<div class="child-columns-3xs max-w-4xl">

[Arr::accessible](#arr-accessible)
[Arr::add](#arr-add)
[Arr::collapse](#arr-collapse)
[Arr::crossJoin](#arr-crossjoin)
[Arr::divide](#arr-divide)
[Arr::dot](#arr-dot)
[Arr::except](#arr-except)
[Arr::exists](#arr-exists)
[Arr::first](#arr-first)
[Arr::flatten](#arr-flatten)
[Arr::forget](#arr-forget)
[Arr::get](#arr-get)
[Arr::has](#arr-has)
[Arr::hasAny](#arr-hasany)
[Arr::isAssoc](#arr-isassoc)
[Arr::isList](#arr-islist)
[Arr::join](#arr-join)
[Arr::keyBy](#arr-keyby)
[Arr::last](#arr-last)
[Arr::map](#arr-map)
[Arr::only](#arr-only)
[Arr::pluck](#arr-pluck)
[Arr::prepend](#arr-prepend)
[Arr::prependKeysWith](#arr-prependkeyswith)
[Arr::pull](#arr-pull)
[Arr::query](#arr-query)
[Arr::random](#arr-random)
[Arr::set](#arr-set)
[Arr::shuffle](#arr-shuffle)
[Arr::sort](#arr-sort)
[Arr::sortDesc](#arr-sort-desc)
[Arr::sortRecursive](#arr-sort-recursive)
[Arr::toCssClasses](#arr-to-css-classes)
[Arr::undot](#arr-undot)
[Arr::where](#arr-where)
[Arr::whereNotNull](#arr-where-not-null)
[Arr::wrap](#arr-wrap)
[data_fill](#data-fill)
[data_get](#data-get)
[data_set](#data-set)
[head](#head)
[last](#last)
</div>

### Extends Strings {#strings-extended-index}

<div class="child-columns-3xs max-w-4xl">

[class_basename](#class-basename)
[e](#e)
[preg_replace_array](#preg-replace-array)
[Str::after](#str-after)
[Str::afterLast](#str-after-last)
[Str::ascii](#str-ascii)
[Str::before](#str-before)
[Str::beforeLast](#str-before-last)
[Str::between](#str-between)
[Str::betweenFirst](#str-between-first)
[Str::camel](#camel-case)
[Str::contains](#str-contains)
[Str::containsAll](#str-contains-all)
[Str::endsWith](#ends-with)
[Str::excerpt](#excerpt)
[Str::finish](#str-finish)
[Str::headline](#str-headline)
[Str::inlineMarkdown](#str-inline-markdown)
[Str::is](#str-is)
[Str::isAscii](#str-is-ascii)
[Str::isJson](#str-is-json)
[Str::isUlid](#str-is-ulid)
[Str::isUuid](#str-is-uuid)
[Str::kebab](#kebab-case)
[Str::lcfirst](#str-lcfirst)
[Str::length](#str-length)
[Str::limit](#str-limit)
[Str::lower](#str-lower)
[Str::markdown](#str-markdown)
[Str::mask](#str-mask)
[Str::orderedUuid](#str-ordered-uuid)
[Str::padBoth](#str-padboth)
[Str::padLeft](#str-padleft)
[Str::padRight](#str-padright)
[Str::plural](#str-plural)
[Str::pluralStudly](#str-plural-studly)
[Str::random](#str-random)
[Str::remove](#str-remove)
[Str::replace](#str-replace)
[Str::replaceArray](#str-replace-array)
[Str::replaceFirst](#str-replace-first)
[Str::replaceLast](#str-replace-last)
[Str::reverse](#str-reverse)
[Str::singular](#str-singular)
[Str::snake](#snake-case)
[Str::squish](#str-squish)
[Str::start](#str-start)
[Str::startsWith](#starts-with)
[Str::studly](#studly-case)
[Str::substr](#str-substr)
[Str::substrCount](#str-substrcount)
[Str::substrReplace](#str-substrreplace)
[Str::swap](#str-swap)
[Str::title](#title-case)
[Str::toHtmlString](#str-to-html-string)
[Str::ucfirst](#str-ucfirst)
[Str::ucsplit](#str-ucsplit)
[Str::upper](#str-upper)
[Str::ulid](#str-ulid)
[Str::uuid](#str-uuid)
[Str::wordCount](#str-word-count)
[Str::words](#str-words)
</div>

## Arrays & Objects

### `Arr::clean`

The `Arr::clean` method (alternative `arrayClean` function) remove null or optional empty entries from array:

```php
use NormanHuth\Helpers\Arr;

Arr::clean(['name' => 'Norman', 'lastname' => '', 'phone' => null]);
arrayClean(['name' => 'Norman', 'lastname' => '', 'phone' => null]);

// ['name' => 'Norman', 'lastname' => '']

Arr::clean(['name' => 'Norman', 'lastname' => '', 'phone' => null], true);
arrayClean(['name' => 'Norman', 'lastname' => '', 'phone' => null], true);

// ['name' => 'Norman']
```

### `Arr::keyMap`

The `Arr::keyMap` method (alternative `arrayKeyMap` function) applies the callback to the elements of the given array keys:

```php
use NormanHuth\Helpers\Arr;

Arr::keyMap('ucfirst', ['cars'  => 1, 'boats' => 0, 'bikes' => 2]);
arrayKeyMap('ucfirst', ['cars'  => 1, 'boats' => 0, 'bikes' => 2]);

// ['Cars'  => 1, 'Boats' => 0, 'Bikes' => 2]
```

## Strings

### `Str::getExcerpt`

Get excerpt of a string:

```php
use NormanHuth\Helpers\Str;

$string = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.';

Str::getExcerpt($string, 10);
strExcerpt($string, 10);

// "Lorem ipsum dolor.."

Str::getExcerpt($string, 10, 'Lorem ipsum');
strExcerpt($string, 10, 'Lorem ipsum');

// "Lorem ipsum"

Str::getExcerpt($string, 5, 'Lorem ipsum');
strExcerpt($string, 5, 'Lorem ipsum');

// "Lorem..."
```

### `Str::slug()`

The `Str::slug` method generates a URL friendly "slug" from the given string:

Notice: If You using this in Laravel. The locale is set to configured local.

    use NormanHuth\Helpers\Str;

    $slug = Str::slug('Laravel 10 Framework', '-');
    $slug = strSlug('Laravel 10 Framework', '-');

    // laravel-10-framework

### `Str::spaceBeforeCapitals`

Add whitespace before every upper char:

```php
use NormanHuth\Helpers\Str;

$string = 'AddWhitespaceBeforeEveryUpperChar';

Str::spaceBeforeCapitals($string);
strSpaceBeforeCapitals($string);

// "Add Whitespace Before Every Upper Char"
```

### `Str::httpBuildQueryUrl`

Domain with queries via `http_build_query`:

```php
use NormanHuth\Helpers\Str;

Str::httpBuildQueryUrl('https://huth.it', ['foo' => 'bar', 'one' => 'two']);
httpBuildQueryUrl('https://huth.it', ['foo' => 'bar', 'one' => 'two']);

// "https://huth.it?foo=bar&one=two"
```

### `Str::indexNumber`

Get index number of an integer:

```php
use NormanHuth\Helpers\Str;

Str::indexNumber(12);
indexNumber(12);
// 0

Str::indexNumber(78);
indexNumber(78);
// 0

Str::indexNumber(109);
indexNumber(109);
// 100

Str::indexNumber(323);
indexNumber(323);
// 300

Str::indexNumber(1230, 1000);
indexNumber(1230, 1000);
// 1000
```

### `Str::lastAnd`

Replace the last comma in a list with `and` word:

_Notice: When you use this function in Laravel the translation function `__` is automatically used._

```php
use NormanHuth\Helpers\Str;

Str::lastAnd(['Jane', 'John', 'Norman']);
// "Jane, John and Norman"
```

### `Str::randomWord`

Return a random word by array of words:

```php
use NormanHuth\Helpers\Str;

Str::randomWord(['Jane', 'John', 'Norman']);

// "Jane" or "John" or "Norman"
```

### `Str::generateSerialNo`

Generate a serial number:

```php
use NormanHuth\Helpers\Str;

Str::generateSerialNo();
// "71WWF-6MJH5-ACS31-GKMMQ-SIU7W"

Str::generateSerialNo(false, 3, 3, ' ');
// "1uX hIw hoQ"
```

### `Str::ceilUpNearest`

Round up to the nearest multiple of `E`.

```php
use NormanHuth\Helpers\Str;

Str::ceilUpNearest(23);
ceilUpNearest(23);
// 25.0

Str::ceilUpNearest(27, 10);
ceilUpNearest(27, 10);
// 30.0
```

### `Str::fillDigits`

Format int with leading zeros:

```php
use NormanHuth\Helpers\Str;

Str::fillDigits(23);
fillDigits(23);
// "00023"

Str::fillDigits(23, 3);
fillDigits(23, 3);
// "023"
```

### `Str::randomHexColor`

Get a random HEX color:

```php
use NormanHuth\Helpers\Str;

Str::randomHexColor();

// "551acd"
```

### `Str::jsonPrettyEncode`

Returns the JSON representation pretty and unescaped of a value:

```php
use NormanHuth\Helpers\Str;

Str::jsonPrettyEncode(['foo' => 'bar', 'dog' => 'fur']);
jsonPrettyEncode(['foo' => 'bar', 'dog' => 'fur']);

/*
{
  "foo": "bar",
  "dog": "fur"
}
*/
```

### `Str::emojiToUnicode`

Encode emojis to unicode:

```php
use NormanHuth\Helpers\Str;

Str::emojiToUnicode('😊');

// U+1F60A
```

### `Str::normalizeUserSubmit`

Trim every line and remove doubled whitespaces and new lines:

```php
use NormanHuth\Helpers\Str;

Str::normalizeUserSubmit("Hi\n\nLorem Ipsum");
normalizeUserSubmit("Hi\n\nLorem Ipsum");

// "Hi\nLorem Ipsum"
```

### `Str::getDomain`

Get Domain name from URL:

```php
use NormanHuth\Helpers\Str;

Str::getDomain('https://huth.it/coffee');
urlGetDomain('https://huth.it/coffee');

// "huth.it"
```

### Paths

### `base_path()`

The `base_path` function returns the fully qualified path to your application's root directory. You may also use the base_path function to generate a fully qualified path to a given file relative to
the project root directory:

```php
$path = base_path();
 
$path = base_path('vendor/bin');
```

## Arrays & Objects (Extended)

### `Arr::accessible()`

The `Arr::accessible` method determines if the given value is array accessible:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;
    use Illuminate\Support\Collection;

    $isAccessible = Arr::accessible(['a' => 1, 'b' => 2]);

    // true

    $isAccessible = Arr::accessible(new Collection);

    // true

    $isAccessible = Arr::accessible('abc');

    // false

    $isAccessible = Arr::accessible(new stdClass);

    // false

### `Arr::add()`

The `Arr::add` method adds a given key / value pair to an array if the given key doesn't already exist in the array or is set to `null`:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = Arr::add(['name' => 'Desk'], 'price', 100);

    // ['name' => 'Desk', 'price' => 100]

    $array = Arr::add(['name' => 'Desk', 'price' => null], 'price', 100);

    // ['name' => 'Desk', 'price' => 100]

### `Arr::collapse()`

The `Arr::collapse` method collapses an array of arrays into a single array:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = Arr::collapse([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);

    // [1, 2, 3, 4, 5, 6, 7, 8, 9]

### `Arr::crossJoin()`

The `Arr::crossJoin` method cross joins the given arrays, returning a Cartesian product with all possible permutations:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $matrix = Arr::crossJoin([1, 2], ['a', 'b']);

    /*
        [
            [1, 'a'],
            [1, 'b'],
            [2, 'a'],
            [2, 'b'],
        ]
    */

    $matrix = Arr::crossJoin([1, 2], ['a', 'b'], ['I', 'II']);

    /*
        [
            [1, 'a', 'I'],
            [1, 'a', 'II'],
            [1, 'b', 'I'],
            [1, 'b', 'II'],
            [2, 'a', 'I'],
            [2, 'a', 'II'],
            [2, 'b', 'I'],
            [2, 'b', 'II'],
        ]
    */

### `Arr::divide()`

The `Arr::divide` method returns two arrays: one containing the keys and the other containing the values of the given array:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    [$keys, $values] = Arr::divide(['name' => 'Desk']);

    // $keys: ['name']

    // $values: ['Desk']

### `Arr::dot()`

The `Arr::dot` method flattens a multidimensional array into a single level array that uses "dot" notation to indicate depth:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = ['products' => ['desk' => ['price' => 100]]];

    $flattened = Arr::dot($array);

    // ['products.desk.price' => 100]

### `Arr::except()`

The `Arr::except` method removes the given key / value pairs from an array:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = ['name' => 'Desk', 'price' => 100];

    $filtered = Arr::except($array, ['price']);

    // ['name' => 'Desk']

### `Arr::exists()`

The `Arr::exists` method checks that the given key exists in the provided array:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = ['name' => 'John Doe', 'age' => 17];

    $exists = Arr::exists($array, 'name');

    // true

    $exists = Arr::exists($array, 'salary');

    // false

### `Arr::first()`

The `Arr::first` method returns the first element of an array passing a given truth test:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = [100, 200, 300];

    $first = Arr::first($array, function ($value, $key) {
        return $value >= 150;
    });

    // 200

A default value may also be passed as the third parameter to the method. This value will be returned if no value passes the truth test:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $first = Arr::first($array, $callback, $default);

<a name="method-array-flatten"></a>

### `Arr::flatten()`

The `Arr::flatten` method flattens a multi-dimensional array into a single level array:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = ['name' => 'Joe', 'languages' => ['PHP', 'Ruby']];

    $flattened = Arr::flatten($array);

    // ['Joe', 'PHP', 'Ruby']

<a name="method-array-forget"></a>

### `Arr::forget()`

The `Arr::forget` method removes a given key / value pair from a deeply nested array using "dot" notation:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = ['products' => ['desk' => ['price' => 100]]];

    Arr::forget($array, 'products.desk');

    // ['products' => []]

<a name="method-array-get"></a>

### `Arr::get()`

The `Arr::get` method retrieves a value from a deeply nested array using "dot" notation:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = ['products' => ['desk' => ['price' => 100]]];

    $price = Arr::get($array, 'products.desk.price');

    // 100

The `Arr::get` method also accepts a default value, which will be returned if the specified key is not present in the array:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $discount = Arr::get($array, 'products.desk.discount', 0);

    // 0

<a name="method-array-has"></a>

### `Arr::has()`

The `Arr::has` method checks whether a given item or items exists in an array using "dot" notation:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = ['product' => ['name' => 'Desk', 'price' => 100]];

    $contains = Arr::has($array, 'product.name');

    // true

    $contains = Arr::has($array, ['product.price', 'product.discount']);

    // false

<a name="method-array-hasany"></a>

### `Arr::hasAny()`

The `Arr::hasAny` method checks whether any item in a given set exists in an array using "dot" notation:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = ['product' => ['name' => 'Desk', 'price' => 100]];

    $contains = Arr::hasAny($array, 'product.name');

    // true

    $contains = Arr::hasAny($array, ['product.name', 'product.discount']);

    // true

    $contains = Arr::hasAny($array, ['category', 'product.discount']);

    // false

<a name="method-array-isassoc"></a>

### `Arr::isAssoc()`

The `Arr::isAssoc` method returns `true` if the given array is an associative array. An array is considered "associative" if it doesn't have sequential numerical keys beginning with zero:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $isAssoc = Arr::isAssoc(['product' => ['name' => 'Desk', 'price' => 100]]);

    // true

    $isAssoc = Arr::isAssoc([1, 2, 3]);

    // false

<a name="method-array-islist"></a>

### `Arr::isList()`

The `Arr::isList` method returns `true` if the given array's keys are sequential integers beginning from zero:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $isList = Arr::isList(['foo', 'bar', 'baz']);

    // true

    $isList = Arr::isList(['product' => ['name' => 'Desk', 'price' => 100]]);

    // false

<a name="method-array-join"></a>

### `Arr::join()`

The `Arr::join` method joins array elements with a string. Using this method's second argument, you may also specify the joining string for the final element of the array:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = ['Tailwind', 'Alpine', 'Laravel', 'Livewire'];

    $joined = Arr::join($array, ', ');

    // Tailwind, Alpine, Laravel, Livewire

    $joined = Arr::join($array, ', ', ' and ');

    // Tailwind, Alpine, Laravel and Livewire

<a name="method-array-keyby"></a>

### `Arr::keyBy()`

The `Arr::keyBy` method keys the array by the given key. If multiple items have the same key, only the last one will appear in the new array:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = [
        ['product_id' => 'prod-100', 'name' => 'Desk'],
        ['product_id' => 'prod-200', 'name' => 'Chair'],
    ];

    $keyed = Arr::keyBy($array, 'product_id');

    /*
        [
            'prod-100' => ['product_id' => 'prod-100', 'name' => 'Desk'],
            'prod-200' => ['product_id' => 'prod-200', 'name' => 'Chair'],
        ]
    */

<a name="method-array-last"></a>

### `Arr::last()`

The `Arr::last` method returns the last element of an array passing a given truth test:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = [100, 200, 300, 110];

    $last = Arr::last($array, function ($value, $key) {
        return $value >= 150;
    });

    // 300

A default value may be passed as the third argument to the method. This value will be returned if no value passes the truth test:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $last = Arr::last($array, $callback, $default);

<a name="method-array-map"></a>

### `Arr::map()`

The `Arr::map` method iterates through the array and passes each value and key to the given callback. The array value is replaced by the value returned by the callback:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = ['first' => 'james', 'last' => 'kirk'];

    $mapped = Arr::map($array, function ($value, $key) {
        return ucfirst($value);
    });

    // ['first' => 'James', 'last' => 'Kirk']

<a name="method-array-only"></a>

### `Arr::only()`

The `Arr::only` method returns only the specified key / value pairs from the given array:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = ['name' => 'Desk', 'price' => 100, 'orders' => 10];

    $slice = Arr::only($array, ['name', 'price']);

    // ['name' => 'Desk', 'price' => 100]

<a name="method-array-pluck"></a>

### `Arr::pluck()`

The `Arr::pluck` method retrieves all of the values for a given key from an array:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = [
        ['developer' => ['id' => 1, 'name' => 'Taylor']],
        ['developer' => ['id' => 2, 'name' => 'Abigail']],
    ];

    $names = Arr::pluck($array, 'developer.name');

    // ['Taylor', 'Abigail']

You may also specify how you wish the resulting list to be keyed:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $names = Arr::pluck($array, 'developer.name', 'developer.id');

    // [1 => 'Taylor', 2 => 'Abigail']

<a name="method-array-prepend"></a>

### `Arr::prepend()`

The `Arr::prepend` method will push an item onto the beginning of an array:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = ['one', 'two', 'three', 'four'];

    $array = Arr::prepend($array, 'zero');

    // ['zero', 'one', 'two', 'three', 'four']

If needed, you may specify the key that should be used for the value:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = ['price' => 100];

    $array = Arr::prepend($array, 'Desk', 'name');

    // ['name' => 'Desk', 'price' => 100]

<a name="method-array-prependkeyswith"></a>

### `Arr::prependKeysWith()`

The `Arr::prependKeysWith` prepends all key names of an associative array with the given prefix:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = [
        'name' => 'Desk',
        'price' => 100,
    ];

    $keyed = Arr::prependKeysWith($array, 'product.');

    /*
        [
            'product.name' => 'Desk',
            'product.price' => 100,
        ]
    */

<a name="method-array-pull"></a>

### `Arr::pull()`

The `Arr::pull` method returns and removes a key / value pair from an array:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = ['name' => 'Desk', 'price' => 100];

    $name = Arr::pull($array, 'name');

    // $name: Desk

    // $array: ['price' => 100]

A default value may be passed as the third argument to the method. This value will be returned if the key doesn't exist:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $value = Arr::pull($array, $key, $default);

<a name="method-array-query"></a>

### `Arr::query()`

The `Arr::query` method converts the array into a query string:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = [
        'name' => 'Taylor',
        'order' => [
            'column' => 'created_at',
            'direction' => 'desc'
        ]
    ];

    Arr::query($array);

    // name=Taylor&order[column]=created_at&order[direction]=desc

<a name="method-array-random"></a>

### `Arr::random()`

The `Arr::random` method returns a random value from an array:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = [1, 2, 3, 4, 5];

    $random = Arr::random($array);

    // 4 - (retrieved randomly)

You may also specify the number of items to return as an optional second argument. Note that providing this argument will return an array even if only one item is desired:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $items = Arr::random($array, 2);

    // [2, 5] - (retrieved randomly)

<a name="method-array-set"></a>

### `Arr::set()`

The `Arr::set` method sets a value within a deeply nested array using "dot" notation:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = ['products' => ['desk' => ['price' => 100]]];

    Arr::set($array, 'products.desk.price', 200);

    // ['products' => ['desk' => ['price' => 200]]]

<a name="method-array-shuffle"></a>

### `Arr::shuffle()`

The `Arr::shuffle` method randomly shuffles the items in the array:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = Arr::shuffle([1, 2, 3, 4, 5]);

    // [3, 2, 5, 1, 4] - (generated randomly)

<a name="method-array-sort"></a>

### `Arr::sort()`

The `Arr::sort` method sorts an array by its values:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = ['Desk', 'Table', 'Chair'];

    $sorted = Arr::sort($array);

    // ['Chair', 'Desk', 'Table']

You may also sort the array by the results of a given closure:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = [
        ['name' => 'Desk'],
        ['name' => 'Table'],
        ['name' => 'Chair'],
    ];

    $sorted = array_values(Arr::sort($array, function ($value) {
        return $value['name'];
    }));

    /*
        [
            ['name' => 'Chair'],
            ['name' => 'Desk'],
            ['name' => 'Table'],
        ]
    */

<a name="method-array-sort-desc"></a>

### `Arr::sortDesc()`

The `Arr::sortDesc` method sorts an array in descending order by its values:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = ['Desk', 'Table', 'Chair'];

    $sorted = Arr::sortDesc($array);

    // ['Table', 'Desk', 'Chair']

You may also sort the array by the results of a given closure:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = [
        ['name' => 'Desk'],
        ['name' => 'Table'],
        ['name' => 'Chair'],
    ];

    $sorted = array_values(Arr::sortDesc($array, function ($value) {
        return $value['name'];
    }));

    /*
        [
            ['name' => 'Table'],
            ['name' => 'Desk'],
            ['name' => 'Chair'],
        ]
    */

<a name="method-array-sort-recursive"></a>

### `Arr::sortRecursive()`

The `Arr::sortRecursive` method recursively sorts an array using the `sort` function for numerically indexed sub-arrays and the `ksort` function for associative sub-arrays:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = [
        ['Roman', 'Taylor', 'Li'],
        ['PHP', 'Ruby', 'JavaScript'],
        ['one' => 1, 'two' => 2, 'three' => 3],
    ];

    $sorted = Arr::sortRecursive($array);

    /*
        [
            ['JavaScript', 'PHP', 'Ruby'],
            ['one' => 1, 'three' => 3, 'two' => 2],
            ['Li', 'Roman', 'Taylor'],
        ]
    */

<a name="method-array-to-css-classes"></a>

### `Arr::toCssClasses()`

The `Arr::toCssClasses` conditionally compiles a CSS class string. The method accepts an array of classes where the array key contains the class or classes you wish to add, while the value is a
boolean expression. If the array element has a numeric key, it will always be included in the rendered class list:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $isActive = false;
    $hasError = true;

    $array = ['p-4', 'font-bold' => $isActive, 'bg-red' => $hasError];

    $classes = Arr::toCssClasses($array);

    /*
        'p-4 bg-red'
    */

This method powers Laravel's functionality allowing [merging classes with a Blade component's attribute bag](/docs/{{version}}/blade#conditionally-merge-classes) as well as
the `@class` [Blade directive](/docs/{{version}}/blade#conditional-classes).

### `Arr::undot()`

The `Arr::undot` method expands a single-dimensional array that uses "dot" notation into a multi-dimensional array:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = [
        'user.name' => 'Kevin Malone',
        'user.occupation' => 'Accountant',
    ];

    $array = Arr::undot($array);

    // ['user' => ['name' => 'Kevin Malone', 'occupation' => 'Accountant']]

### `Arr::where()`

The `Arr::where` method filters an array using the given closure:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = [100, '200', 300, '400', 500];

    $filtered = Arr::where($array, function ($value, $key) {
        return is_string($value);
    });

    // [1 => '200', 3 => '400']

### `Arr::whereNotNull()`

The `Arr::whereNotNull` method removes all `null` values from the given array:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = [0, null];

    $filtered = Arr::whereNotNull($array);

    // [0 => 0]

### `Arr::wrap()`

The `Arr::wrap` method wraps the given value in an array. If the given value is already an array it will be returned without modification:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $string = 'Laravel';

    $array = Arr::wrap($string);

    // ['Laravel']

If the given value is `null`, an empty array will be returned:

    use NormanHuth\Helpers\Arr; # or use Illuminate\Support\Arr;

    $array = Arr::wrap(null);

    // []

### `data_fill()`

The `data_fill` function sets a missing value within a nested array or object using "dot" notation:

    $data = ['products' => ['desk' => ['price' => 100]]];

    data_fill($data, 'products.desk.price', 200);

    // ['products' => ['desk' => ['price' => 100]]]

    data_fill($data, 'products.desk.discount', 10);

    // ['products' => ['desk' => ['price' => 100, 'discount' => 10]]]

This function also accepts asterisks as wildcards and will fill the target accordingly:

    $data = [
        'products' => [
            ['name' => 'Desk 1', 'price' => 100],
            ['name' => 'Desk 2'],
        ],
    ];

    data_fill($data, 'products.*.price', 200);

    /*
        [
            'products' => [
                ['name' => 'Desk 1', 'price' => 100],
                ['name' => 'Desk 2', 'price' => 200],
            ],
        ]
    */

### `data_get()`

The `data_get` function retrieves a value from a nested array or object using "dot" notation:

    $data = ['products' => ['desk' => ['price' => 100]]];

    $price = data_get($data, 'products.desk.price');

    // 100

The `data_get` function also accepts a default value, which will be returned if the specified key is not found:

    $discount = data_get($data, 'products.desk.discount', 0);

    // 0

The function also accepts wildcards using asterisks, which may target any key of the array or object:

    $data = [
        'product-one' => ['name' => 'Desk 1', 'price' => 100],
        'product-two' => ['name' => 'Desk 2', 'price' => 150],
    ];

    data_get($data, '*.name');

    // ['Desk 1', 'Desk 2'];

### `data_set()`

The `data_set` function sets a value within a nested array or object using "dot" notation:

    $data = ['products' => ['desk' => ['price' => 100]]];

    data_set($data, 'products.desk.price', 200);

    // ['products' => ['desk' => ['price' => 200]]]

This function also accepts wildcards using asterisks and will set values on the target accordingly:

    $data = [
        'products' => [
            ['name' => 'Desk 1', 'price' => 100],
            ['name' => 'Desk 2', 'price' => 150],
        ],
    ];

    data_set($data, 'products.*.price', 200);

    /*
        [
            'products' => [
                ['name' => 'Desk 1', 'price' => 200],
                ['name' => 'Desk 2', 'price' => 200],
            ],
        ]
    */

By default, any existing values are overwritten. If you wish to only set a value if it doesn't exist, you may pass `false` as the fourth argument to the function:

    $data = ['products' => ['desk' => ['price' => 100]]];

    data_set($data, 'products.desk.price', 200, overwrite: false);

    // ['products' => ['desk' => ['price' => 100]]]

### `head()`

The `head` function returns the first element in the given array:

    $array = [100, 200, 300];

    $first = head($array);

    // 100

### `last()`

The `last` function returns the last element in the given array:

    $array = [100, 200, 300];

    $last = last($array);

    // 300

## Strings (Extended)

### `class_basename()`

The `class_basename` function returns the class name of the given class with the class's namespace removed:

    $class = class_basename('Foo\Bar\Baz');

    // Baz

### `e()`

The `e` function runs PHP's `htmlspecialchars` function with the `double_encode` option set to `true` by default:

    echo e('<html>foo</html>');

    // &lt;html&gt;foo&lt;/html&gt;

### `preg_replace_array()`

The `preg_replace_array` function replaces a given pattern in the string sequentially using an array:

    $string = 'The event will take place between :start and :end';

    $replaced = preg_replace_array('/:[a-z_]+/', ['8:30', '9:00'], $string);

    // The event will take place between 8:30 and 9:00

### `Str::after()`

The `Str::after` method returns everything after the given value in a string. The entire string will be returned if the value does not exist within the string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $slice = Str::after('This is my name', 'This is');

    // ' my name'

### `Str::afterLast()`

The `Str::afterLast` method returns everything after the last occurrence of the given value in a string. The entire string will be returned if the value does not exist within the string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $slice = Str::afterLast('App\Http\Controllers\Controller', '\\');

    // 'Controller'

### `Str::ascii()`

The `Str::ascii` method will attempt to transliterate the string into an ASCII value:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $slice = Str::ascii('û');

    // 'u'

### `Str::before()`

The `Str::before` method returns everything before the given value in a string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $slice = Str::before('This is my name', 'my name');

    // 'This is '

### `Str::beforeLast()`

The `Str::beforeLast` method returns everything before the last occurrence of the given value in a string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $slice = Str::beforeLast('This is my name', 'is');

    // 'This '

### `Str::between()`

The `Str::between` method returns the portion of a string between two values:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $slice = Str::between('This is my name', 'This', 'name');

    // ' is my '

### `Str::betweenFirst()`

The `Str::betweenFirst` method returns the smallest possible portion of a string between two values:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $slice = Str::betweenFirst('[a] bc [d]', '[', ']');

    // 'a'

### `Str::camel()`

The `Str::camel` method converts the given string to `camelCase`:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $converted = Str::camel('foo_bar');

    // fooBar

### `Str::contains()`

The `Str::contains` method determines if the given string contains the given value. This method is case sensitive:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $contains = Str::contains('This is my name', 'my');

    // true

You may also pass an array of values to determine if the given string contains any of the values in the array:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $contains = Str::contains('This is my name', ['my', 'foo']);

    // true

### `Str::containsAll()`

The `Str::containsAll` method determines if the given string contains all the values in a given array:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $containsAll = Str::containsAll('This is my name', ['my', 'name']);

    // true

### `Str::endsWith()`

The `Str::endsWith` method determines if the given string ends with the given value:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $result = Str::endsWith('This is my name', 'name');

    // true

You may also pass an array of values to determine if the given string ends with any of the values in the array:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $result = Str::endsWith('This is my name', ['name', 'foo']);

    // true

    $result = Str::endsWith('This is my name', ['this', 'foo']);

    // false

### `Str::excerpt()`

The `Str::excerpt` method extracts an excerpt from a given string that matches the first instance of a phrase within that string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $excerpt = Str::excerpt('This is my name', 'my', [
        'radius' => 3
    ]);

    // '...is my na...'

The `radius` option, which defaults to `100`, allows you to define the number of characters that should appear on each side of the truncated string.

In addition, you may use the `omission` option to define the string that will be prepended and appended to the truncated string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $excerpt = Str::excerpt('This is my name', 'name', [
        'radius' => 3,
        'omission' => '(...) '
    ]);

    // '(...) my name'

### `Str::finish()`

The `Str::finish` method adds a single instance of the given value to a string if it does not already end with that value:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $adjusted = Str::finish('this/string', '/');

    // this/string/

    $adjusted = Str::finish('this/string/', '/');

    // this/string/

### `Str::headline()`

The `Str::headline` method will convert strings delimited by casing, hyphens, or underscores into a space delimited string with each word's first letter capitalized:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $headline = Str::headline('steve_jobs');

    // Steve Jobs

    $headline = Str::headline('EmailNotificationSent');

    // Email Notification Sent

### `Str::inlineMarkdown()`

The `Str::inlineMarkdown` method converts GitHub flavored Markdown into inline HTML using [CommonMark](https://commonmark.thephpleague.com/). However, unlike the `markdown` method, it does not wrap
all generated HTML in a block-level element:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $html = Str::inlineMarkdown('**Laravel**');

    // <strong>Laravel</strong>

### `Str::is()`

The `Str::is` method determines if a given string matches a given pattern. Asterisks may be used as wildcard values:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $matches = Str::is('foo*', 'foobar');

    // true

    $matches = Str::is('baz*', 'foobar');

    // false

### `Str::isAscii()`

The `Str::isAscii` method determines if a given string is 7 bit ASCII:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $isAscii = Str::isAscii('Taylor');

    // true

    $isAscii = Str::isAscii('ü');

    // false

### `Str::isJson()`

The `Str::isJson` method determines if the given string is valid JSON:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $result = Str::isJson('[1,2,3]');

    // true

    $result = Str::isJson('{"first": "John", "last": "Doe"}');

    // true

    $result = Str::isJson('{first: "John", last: "Doe"}');

    // false

### `Str::isUlid()`

The `Str::isUlid` method determines if the given string is a valid ULID:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $isUlid = Str::isUlid('01gd6r360bp37zj17nxb55yv40');

    // true

    $isUlid = Str::isUlid('laravel');

    // false

### `Str::isUuid()`

The `Str::isUuid` method determines if the given string is a valid UUID:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $isUuid = Str::isUuid('a0a2a2d2-0b87-4a18-83f2-2529882be2de');

    // true

    $isUuid = Str::isUuid('laravel');

    // false

### `Str::kebab()`

The `Str::kebab` method converts the given string to `kebab-case`:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $converted = Str::kebab('fooBar');

    // foo-bar

### `Str::lcfirst()`

The `Str::lcfirst` method returns the given string with the first character lowercased:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $string = Str::lcfirst('Foo Bar');

    // foo Bar

### `Str::length()`

The `Str::length` method returns the length of the given string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $length = Str::length('Laravel');

    // 7

### `Str::limit()`

The `Str::limit` method truncates the given string to the specified length:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $truncated = Str::limit('The quick brown fox jumps over the lazy dog', 20);

    // The quick brown fox...

You may pass a third argument to the method to change the string that will be appended to the end of the truncated string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $truncated = Str::limit('The quick brown fox jumps over the lazy dog', 20, ' (...)');

    // The quick brown fox (...)

### `Str::lower()`

The `Str::lower` method converts the given string to lowercase:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $converted = Str::lower('LARAVEL');

    // laravel

### `Str::markdown()`

The `Str::markdown` method converts GitHub flavored Markdown into HTML using [CommonMark](https://commonmark.thephpleague.com/):

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $html = Str::markdown('# Laravel');
    $html = parseMarkdown('# Laravel');

    // <h1>Laravel</h1>

    $html = Str::markdown('# Taylor <b>Otwell</b>', [
        'html_input' => 'strip',
    ]);

    // <h1>Taylor Otwell</h1>

### `Str::mask()`

The `Str::mask` method masks a portion of a string with a repeated character, and may be used to obfuscate segments of strings such as email addresses and phone numbers:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $string = Str::mask('taylor@example.com', '*', 3);

    // tay***************

If needed, you provide a negative number as the third argument to the `mask` method, which will instruct the method to begin masking at the given distance from the end of the string:

    $string = Str::mask('taylor@example.com', '*', -15, 3);

    // tay***@example.com

### `Str::orderedUuid()`

The `Str::orderedUuid` method generates a "timestamp first" UUID that may be efficiently stored in an indexed database column. Each UUID that is generated using this method will be sorted after UUIDs
previously generated using the method:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    return (string) Str::orderedUuid();

### `Str::padBoth()`

The `Str::padBoth` method wraps PHP's `str_pad` function, padding both sides of a string with another string until the final string reaches a desired length:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $padded = Str::padBoth('James', 10, '_');

    // '__James___'

    $padded = Str::padBoth('James', 10);

    // '  James   '

### `Str::padLeft()`

The `Str::padLeft` method wraps PHP's `str_pad` function, padding the left side of a string with another string until the final string reaches a desired length:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $padded = Str::padLeft('James', 10, '-=');

    // '-=-=-James'

    $padded = Str::padLeft('James', 10);

    // '     James'

### `Str::padRight()`

The `Str::padRight` method wraps PHP's `str_pad` function, padding the right side of a string with another string until the final string reaches a desired length:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $padded = Str::padRight('James', 10, '-');

    // 'James-----'

    $padded = Str::padRight('James', 10);

    // 'James     '

### `Str::plural()`

The `Str::plural` method converts a singular word string to its plural form. This function
supports [any of the languages support by Laravel's pluralizer](/docs/{{version}}/localization#pluralization-language):

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $plural = Str::plural('car');

    // cars

    $plural = Str::plural('child');

    // children

You may provide an integer as a second argument to the function to retrieve the singular or plural form of the string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $plural = Str::plural('child', 2);

    // children

    $singular = Str::plural('child', 1);

    // child

### `Str::pluralStudly()`

The `Str::pluralStudly` method converts a singular word string formatted in studly caps case to its plural form. This function
supports [any of the languages support by Laravel's pluralizer](/docs/{{version}}/localization#pluralization-language):

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $plural = Str::pluralStudly('VerifiedHuman');

    // VerifiedHumans

    $plural = Str::pluralStudly('UserFeedback');

    // UserFeedback

You may provide an integer as a second argument to the function to retrieve the singular or plural form of the string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $plural = Str::pluralStudly('VerifiedHuman', 2);

    // VerifiedHumans

    $singular = Str::pluralStudly('VerifiedHuman', 1);

    // VerifiedHuman

### `Str::random()`

The `Str::random` method generates a random string of the specified length. This function uses PHP's `random_bytes` function:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $random = Str::random(40);

### `Str::remove()`

The `Str::remove` method removes the given value or array of values from the string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $string = 'Peter Piper picked a peck of pickled peppers.';

    $removed = Str::remove('e', $string);

    // Ptr Pipr pickd a pck of pickld ppprs.

You may also pass `false` as a third argument to the `remove` method to ignore case when removing strings.

### `Str::replace()`

The `Str::replace` method replaces a given string within the string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $string = 'Laravel 8.x';

    $replaced = Str::replace('8.x', '9.x', $string);

    // Laravel 9.x

### `Str::replaceArray()`

The `Str::replaceArray` method replaces a given value in the string sequentially using an array:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $string = 'The event will take place between ? and ?';

    $replaced = Str::replaceArray('?', ['8:30', '9:00'], $string);

    // The event will take place between 8:30 and 9:00

### `Str::replaceFirst()`

The `Str::replaceFirst` method replaces the first occurrence of a given value in a string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $replaced = Str::replaceFirst('the', 'a', 'the quick brown fox jumps over the lazy dog');

    // a quick brown fox jumps over the lazy dog

### `Str::replaceLast()`

The `Str::replaceLast` method replaces the last occurrence of a given value in a string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $replaced = Str::replaceLast('the', 'a', 'the quick brown fox jumps over the lazy dog');

    // the quick brown fox jumps over a lazy dog

### `Str::reverse()`

The `Str::reverse` method reverses the given string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $reversed = Str::reverse('Hello World');

    // dlroW olleH

### `Str::singular()`

The `Str::singular` method converts a string to its singular form. This function supports [any of the languages support by Laravel's pluralizer](/docs/{{version}}/localization#pluralization-language):

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $singular = Str::singular('cars');

    // car

    $singular = Str::singular('children');

    // child

### `Str::snake()`

The `Str::snake` method converts the given string to `snake_case`:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $converted = Str::snake('fooBar');

    // foo_bar

    $converted = Str::snake('fooBar', '-');

    // foo-bar

### `Str::squish()`

The `Str::squish` method removes all extraneous white space from a string, including extraneous white space between words:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $string = Str::squish('    laravel    framework    ');

    // laravel framework

### `Str::start()`

The `Str::start` method adds a single instance of the given value to a string if it does not already start with that value:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $adjusted = Str::start('this/string', '/');

    // /this/string

    $adjusted = Str::start('/this/string', '/');

    // /this/string

### `Str::startsWith()`

The `Str::startsWith` method determines if the given string begins with the given value:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $result = Str::startsWith('This is my name', 'This');

    // true

If an array of possible values is passed, the `startsWith` method will return `true` if the string begins with any of the given values:

    $result = Str::startsWith('This is my name', ['This', 'That', 'There']);

    // true

### `Str::studly()`

The `Str::studly` method converts the given string to `StudlyCase`:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $converted = Str::studly('foo_bar');

    // FooBar

### `Str::substr()`

The `Str::substr` method returns the portion of string specified by the start and length parameters:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $converted = Str::substr('The Laravel Framework', 4, 7);

    // Laravel

### `Str::substrCount()`

The `Str::substrCount` method returns the number of occurrences of a given value in the given string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $count = Str::substrCount('If you like ice cream, you will like snow cones.', 'like');

    // 2

### `Str::substrReplace()`

The `Str::substrReplace` method replaces text within a portion of a string, starting at the position specified by the third argument and replacing the number of characters specified by the fourth
argument. Passing `0` to the method's fourth argument will insert the string at the specified position without replacing any of the existing characters in the string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $result = Str::substrReplace('1300', ':', 2);
    // 13:

    $result = Str::substrReplace('1300', ':', 2, 0);
    // 13:00

### `Str::swap()`

The `Str::swap` method replaces multiple values in the given string using PHP's `strtr` function:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $string = Str::swap([
        'Tacos' => 'Burritos',
        'great' => 'fantastic',
    ], 'Tacos are great!');

    // Burritos are fantastic!

### `Str::title()`

The `Str::title` method converts the given string to `Title Case`:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $converted = Str::title('a nice title uses the correct case');

    // A Nice Title Uses The Correct Case

### `Str::toHtmlString()`

The `Str::toHtmlString` method converts the string instance to an instance of `Illuminate\Support\HtmlString`, which may be displayed in Blade templates:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $htmlString = Str::of('Nuno Maduro')->toHtmlString();

### `Str::ucfirst()`

The `Str::ucfirst` method returns the given string with the first character capitalized:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $string = Str::ucfirst('foo bar');

    // Foo bar

### `Str::ucsplit()`

The `Str::ucsplit` method splits the given string into an array by uppercase characters:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $segments = Str::ucsplit('FooBar');

    // [0 => 'Foo', 1 => 'Bar']

### `Str::upper()`

The `Str::upper` method converts the given string to uppercase:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    $string = Str::upper('laravel');

    // LARAVEL

### `Str::ulid()`

The `Str::ulid` method generates a ULID:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    return (string) Str::ulid();
    
    // 01gd6r360bp37zj17nxb55yv40

### `Str::uuid()`

The `Str::uuid` method generates a UUID (version 4):

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    return (string) Str::uuid();

### `Str::wordCount()`

The `Str::wordCount` method returns the number of words that a string contains:

```php
use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

Str::wordCount('Hello, world!'); // 2
```

### `Str::words()`

The `Str::words` method limits the number of words in a string. An additional string may be passed to this method via its third argument to specify which string should be appended to the end of the
truncated string:

    use NormanHuth\Helpers\Str; # or use Illuminate\Support\Str;

    return Str::words('Perfectly balanced, as all things should be.', 3, ' >>>');

    // Perfectly balanced, as >>>

## Other Utilities

### Benchmarking

Sometimes you may wish to quickly test the performance of certain parts of your application. On those occasions, you may utilize the `Benchmark` support class to measure the number of milliseconds it
takes for the given callbacks to complete:

    <?php

    use App\Models\User;
    use Illuminate\Support\Benchmark;

    Benchmark::dd(fn () => User::find(1)); // 0.1 ms

    Benchmark::dd([
        'Scenario 1' => fn () => User::count(), // 0.5 ms
        'Scenario 2' => fn () => User::all()->count(), // 20.0 ms
    ]);

By default, the given callbacks will be executed once (one iteration), and their duration will be displayed in the browser / console.

To invoke a callback more than once, you may specify the number of iterations that the callback should be invoked as the second argument to the method. When executing a callback more than once,
the `Benchmark` class will return the average amount of milliseconds it took to execute the callback across all iterations:

    Benchmark::dd(fn () => User::count(), iterations: 10); // 0.5 ms

### Lottery

Laravel's lottery class may be used to execute callbacks based on a set of given odds. This can be particularly useful when you only want to execute code for a percentage of your incoming requests:

    use Illuminate\Support\Lottery;

    Lottery::odds(1, 20)
        ->winner(fn () => $user->won())
        ->loser(fn () => $user->lost())
        ->choose();

You may combine Laravel's lottery class with other Laravel features. For example, you may wish to only report a small percentage of slow queries to your exception handler. And, since the lottery class
is callable, we may pass an instance of the class into any method that accepts callables:

    use Carbon\CarbonInterval;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Lottery;

    DB::whenQueryingForLongerThan(
        CarbonInterval::seconds(2),
        Lottery::odds(1, 100)->winner(fn () => report('Querying > 2 seconds.')),
    );

### Testing Lotteries

Laravel provides some simple methods to allow you to easily test your application's lottery invocations:

    // Lottery will always win...
    Lottery::alwaysWin();

    // Lottery will always lose...
    Lottery::alwaysLose();

    // Lottery will win then lose, and finally return to normal behavior...
    Lottery::fix([true, false]);

    // Lottery will return to normal behavior...
    Lottery::determineResultsNormally();
