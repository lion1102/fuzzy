<?php
namespace Fuzzy;

use Fuse\Fuse;

class Fuzzy
{

    /**
     * Search matching string between 2 element in 2 arrays with Fuzzy Search based on Bitap algorithm
     * @param array $arrValidate which has been validated
     * @param array $arrPattern which has been search
     * @param array $options which is search condition
     * @param string $key1 which specificed key in array $arrValidate
     * @param string $key2 which specificed key in array $arrValidate
     * @return array
     */
    function getCompareString($arrValidate = [], $arrPattern = [], $arrOptions = [], $key1, $key2) {
            
        $fuse = new Fuse($arrPattern,$arrOptions);
        
        $arrResult = [];
        foreach($arrValidate as $data ) {
            array_push($arrResult, [ $data[$key1] => [$data[$key2] => $fuse->search($data[$key2]) ] ] );
        }
        return $arrResult;
    }
}

