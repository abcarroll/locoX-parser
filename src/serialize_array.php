<?php

namespace Ab\LocoX;

/**
 * a helpful internal function
 *
 * @return string
 */
function serialiseArray($array): string
{
    $string = "array(";
    foreach (array_keys($array) as $keyId => $key) {
        $string .= var_export($key, true) . " => ";
        if (is_string($array[$key])) {
            $string .= var_export($array[$key], true);
        } else {
            $string .= $array[$key]->__toString();
        }
        if ($keyId + 1 !== count($array)) {
            $string .= ", ";
        }
    }
    $string .= ")";
    return $string;
}
