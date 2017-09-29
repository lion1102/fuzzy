# Search matched string in 2 specificed key in  2 array

This library requires [Fuse](https://github.com/Loilo/Fuse).

## Install

```bash
composer require lion1102/fuzzy
```

## Usage

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Fuzzy\Fuzzy;

$arrValidateData = [
    [
        'id' => 'A1',
        'name' => 'Nguyen Van Truong',
    ],
    [
        'id' => 'A2',
        'name' => 'Mr. Nguyen Van Truong',
    ],
    [
        'id' => 'A3',
        'name' => 'Nguyen Van Truong 様',
    ],
    [
        'id' => 'A4',
        'name' => 'Nguy Van Trung 様',        
    ],
    [
        'id' => 'A5',
        'name' => '接待費 (Mr. Nguy Van Trung)',        
    ],
    [
        'id' => 'A6',
        'name' => 'PROTO Solutionラボサポート (8月分, Mr. Nguyen Van Truong)',
    ],
];

$arrSearchData = [
    [
        'id' => 'B1',
        'name' => 'Nguyen Van Truong'
    ],
    [
        'id' => 'B2',
        'name' => 'Nguyen Van Trung'
    ],
    [
        'id' => 'B3',
        'name' => 'Nguyen Van Trong'
    ],
    [
        'id' => 'B4',
        'name' => 'Nguy Van Trung'
    ],    
];

$arrOptions = ['keys' => ['name'], 'caseSensitive' => 'false', 'includeScore' => 'true',];

getCompareString( $arrValidateData, $arrSearchData, arrOptions, 'id', 'name' );

/*

Array
(
    [0] => Array
        (
            [A1] => Array
                (
                    [Nguyen Van Truong] => Array
                        (
                            [0] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B1
                                            [name] => Nguyen Van Truong
                                        )

                                    [score] => 0
                                )

                            [1] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B2
                                            [name] => Nguyen Van Trung
                                        )

                                    [score] => 0.058823529411765
                                )

                            [2] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B3
                                            [name] => Nguyen Van Trong
                                        )

                                    [score] => 0.058823529411765
                                )

                            [3] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B4
                                            [name] => Nguy Van Trung
                                        )

                                    [score] => 0.17647058823529
                                )

                        )

                )

        )

    [1] => Array
        (
            [A2] => Array
                (
                    [Mr. Nguyen Van Truong] => Array
                        (
                            [0] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B1
                                            [name] => Nguyen Van Truong
                                        )

                                    [score] => 0.19047619047619
                                )

                            [1] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B2
                                            [name] => Nguyen Van Trung
                                        )

                                    [score] => 0.23809523809524
                                )

                            [2] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B3
                                            [name] => Nguyen Van Trong
                                        )

                                    [score] => 0.23809523809524
                                )

                            [3] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B4
                                            [name] => Nguy Van Trung
                                        )

                                    [score] => 0.33333333333333
                                )

                        )

                )

        )

    [2] => Array
        (
            [A3] => Array
                (
                    [Nguyen Van Truong 様] => Array
                        (
                            [0] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B1
                                            [name] => Nguyen Van Truong
                                        )

                                    [score] => 0.10526315789474
                                )

                            [1] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B2
                                            [name] => Nguyen Van Trung
                                        )

                                    [score] => 0.15789473684211
                                )

                            [2] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B3
                                            [name] => Nguyen Van Trong
                                        )

                                    [score] => 0.15789473684211
                                )

                            [3] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B4
                                            [name] => Nguy Van Trung
                                        )

                                    [score] => 0.26315789473684
                                )

                        )

                )

        )

    [3] => Array
        (
            [A4] => Array
                (
                    [Nguy Van Trung 様] => Array
                        (
                            [0] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B4
                                            [name] => Nguy Van Trung
                                        )

                                    [score] => 0.125
                                )

                            [1] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B2
                                            [name] => Nguyen Van Trung
                                        )

                                    [score] => 0.25
                                )

                            [2] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B1
                                            [name] => Nguyen Van Truong
                                        )

                                    [score] => 0.3125
                                )

                            [3] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B3
                                            [name] => Nguyen Van Trong
                                        )

                                    [score] => 0.3125
                                )

                        )

                )

        )

    [4] => Array
        (
            [A5] => Array
                (
                    [接待費 (Mr. Nguy Van Trung)] => Array
                        (
                            [0] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B4
                                            [name] => Nguy Van Trung
                                        )

                                    [score] => 0.41666666666667
                                )

                            [1] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B2
                                            [name] => Nguyen Van Trung
                                        )

                                    [score] => 0.5
                                )

                            [2] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B1
                                            [name] => Nguyen Van Truong
                                        )

                                    [score] => 0.54166666666667
                                )

                            [3] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B3
                                            [name] => Nguyen Van Trong
                                        )

                                    [score] => 0.54166666666667
                                )

                        )

                )

        )

    [5] => Array
        (
            [A6] => Array
                (
                    [PROTO Solutionラボサポート (8月分, Mr. Nguyen Van Truong)] => Array
                        (
                            [0] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B1
                                            [name] => Nguyen Van Truong
                                        )

                                    [score] => 0.5
                                )

                            [1] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B2
                                            [name] => Nguyen Van Trung
                                        )

                                    [score] => 0.5
                                )

                            [2] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B3
                                            [name] => Nguyen Van Trong
                                        )

                                    [score] => 0.5
                                )

                            [3] => Array
                                (
                                    [item] => Array
                                        (
                                            [id] => B4
                                            [name] => Nguy Van Trung
                                        )

                                    [score] => 0.5
                                )

                        )

                )

        )

)*/

## Methods

The following methods are available on a `Fuzzy\Fuzzy` instance:

**`getCompareString( $arrValidateData, $arrSearchData, arrOptions, $key1, $key2 );`**

```php
/*
@param {array} $arrValidateData The validation associative array to fuzzy search on.
@param {array} $arrSearchData The pattern associative string to fuzzy search on.
@param {array} arrOptions The search conditions array.
@param {string} $key1, $key2 The specificed key in validation array
@return {array} A list of all search matches.
*/

List all matching pattern and scope for all the items between arrays.
```
## Options

**keys** (*type*: `array`)

List of properties that will be searched. This supports nested properties, weighted search, searching in arrays of strings and associative arrays etc:

```php
$books = [
  [
    "title" => "Old Man's War",
    "author" => [
      "firstName" => "John",
      "lastName" => "Scalzi"
    ]
  ]
];
$fuse = new \Fuse\Fuse($books, [
  "keys" => [ "title", "author.firstName" ]
]);
```

---

**id** (*type*: `string`)

The name of the identifier property. If specified, the returned result will be a list of the items' identifiers, otherwise it will be a list of the items.

---

**caseSensitive** (*type*: `bool`, *default*: `false`)

Indicates whether comparisons should be case sensitive.

---

**includeScore** (*type*: `bool`, *default*: `false`)

Whether the score should be included in the result set. A score of `0` indicates a perfect match, while a score of `1` indicates a complete mismatch.

---

**includeMatches** (*type*: `bool`, *default*: `false`)

Whether the matches should be included in the result set. When true, each record in the result set will include the indices of the matched characters: `"indices" => [ $start, $end ]`. These can consequently be used for highlighting purposes.

---

**shouldSort** (*type*: `bool`, *default*: `true`)

Whether to sort the result list, by score.

---

**getFn** (*type*: `function`, *default*: `\Fuse\Helpers\deep_value`)

The get function to use when fetching an associative array's properties. The default will search nested paths like `foo.bar.baz`.

```php
/*
 * @param {array|object} $data The object or associative array being searched
 * @param {string}       $path The path to the target property
 */

'getFn' => function ($data, $path) {
    // Example using a ->get() method on objects and simple index access on arrays
    return is_object($data)
        ? $data->get($path)
        : $data[$path];
}
```
---

**sortFn** (*type*: `function`, *default*: sort by score)

The function that is used for sorting the result list.

---

**location** (*type*: `int`, *default*: `0`)

Determines approximately where in the text is the pattern expected to be found.

---

**threshold** (*type*: `float`, *default*: `0.6`)

At what point does the match algorithm give up. A threshold of `0.0` requires a perfect match (of both letters and location), a threshold of `1.0` would match anything.

---

**distance** (*type*: `int`, *default*: `100`)

Determines how close the match must be to the fuzzy location (specified by `location`). An exact letter match which is `distance` characters away from the fuzzy location would score as a complete mismatch. A `distance` of `0` requires the match be at the exact `location` specified, a `distance` of `1000` would require a perfect match to be within 800 characters of the `location` to be found using a `threshold` of `0.8`.

---

**maxPatternLength** (*type*: `int`, *default*: `32`)

The maximum length of the search pattern. The longer the pattern, the more intensive the search operation will be.  Whenever the pattern exceeds the `maxPatternLength`, an error will be thrown.  Why is this important? Read [this](http://en.wikipedia.org/wiki/Word_(computer_architecture)#Word_size_choice).

---

**verbose** (*type*: `bool`, *default*: `false`)

Will print out steps. Useful for debugging.

---

**tokenize** (*type*: `bool`, *default*: `false`)

When true, the search algorithm will search individual words **and** the full string, computing the final score as a function of both. Note that when `tokenize` is `true`, the `threshold`, `distance`, and `location` are inconsequential for individual tokens.

---

**tokenSeparator** (*type*: `string`, *default*: `/ +/g`)

A regular expression string used to separate words of the search pattern when searching. Only applicable when `tokenize` is `true`.

---

**matchAllTokens** (*type*: `bool`, *default*: `false`)

When `true`, the result set will only include records that match all tokens. Will only work if `tokenize` is also true.

---

**findAllMatches** (*type*: `bool`, *default*: `false`)

When `true`, the matching function will continue to the end of a search pattern even if a perfect match has already been located in the string.

---

**minMatchCharLength** (*type*: `int`, *default*: `1`)

When set to include matches, only those whose length exceeds this value will be returned. (For instance, if you want to ignore single character index returns, set to `2`)

## Weighted Search

In some cases you may want certain keys to be weighted differently for more accurate results. You may provide each key with a custom `weight` (where `0 < weight <= 1`):

```php
$fuse = new \Fuse\Fuse($books, [
  "keys" => [
    [
      "name" => "title",
      "weight" => 0.3
    ],
    [
      "name" => "author",
      "weight" => 0.7
    ]
  ]
]);
```
