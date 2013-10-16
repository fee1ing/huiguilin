<?php


function DataToArray($data, $dataKey) {
    if (empty($data) || empty($dataKey)) {
        return array();
    }
    $result = array();
    foreach ($data AS $key => $value) {
        if (isset($data[$key][$dataKey])) {
            $result[] = $data[$key][$dataKey];
        }
    }
    return $result;
}


function ArrayKeys($data, $dataKey) {
    if (empty($data) || empty($dataKey)) {
        return array();
    }
    $result = array();   
    foreach ($data AS $key => $value) {
        $v = $data[$key][$dataKey];
        $result[$dataKey] = $v;
    }
    return $result;
}
