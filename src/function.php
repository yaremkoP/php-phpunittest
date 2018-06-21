<?php

/**
 * @param array
 * @return int
 */
function countNumber($a)
{
    if (!is_array($a)) {
        throw new InvalidArgumentException('Argument is\'t array');
    }

    if (empty($a)) {
        throw new InvalidArgumentException('Array is empty');
    }

    $pattern = "/3/";
    $count = 0;

    foreach ($a as $value) {
        if (preg_match_all($pattern, $value, $matches) > 0) {
            $count += count($matches[0]);
        }
    }

    return $count;
}

/**
 * @param array $arr
 * @return int
 */
function findIndexOfArray($arr)
{
    if (!is_array($arr)) {
        throw new InvalidArgumentException('Argument is\'t array');
    }

    if (empty($arr)) {
        throw new InvalidArgumentException('Array is empty');
    }

    for ($i = 1; $i < sizeof($arr) - 1 ; $i++) {
        $val1 = array_sum(array_slice($arr, 0, $i));
        $val2 = array_sum(array_slice($arr, $i+1));
        if ($val1 === $val2) {
            return $i;
        }
    }
    return -1;
}