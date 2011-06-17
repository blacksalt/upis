<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function print_s ($stuff) {
    echo '<pre>' . print_r($stuff, true) . '</pre>';
}

function object_to_array($object) {
    return json_decode(json_encode($object), true);    
}

function create_dropdown_array($key_name, $value_name, $object_array) {
    $object_array = object_to_array($object_array);
    foreach ($object_array as $object) {
        foreach ($object as $key => $value) {
            if ($key_name == $key)   $keys[]   = $value;
            if ($value_name == $key) $values[] = $value;
        }
    }
    return array_combine($keys,$values);
}

function br() {
    echo '<br>';
}
