<?php


function checkCommonTerms2(array $arr1, array $arr2): bool
{
    foreach ($arr1 as $value) {
        if (in_array($value, $arr2)) {
            return true;
        }
    }
    return false;
}

var_dump(checkCommonTerms2([1, 2, 3], [4, 5, 7, 2]));
