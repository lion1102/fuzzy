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

// 検索対象データ
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

$t = new Fuzzy();
$rs = $t->getCompareString($arrValidateData, $arrSearchData, ['keys' => ['name'], 'caseSensitive' => 'false', 'includeScore' => 'true',], 'id', 'name');

var_dump($rs);