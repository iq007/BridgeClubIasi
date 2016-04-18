<?php
if(isset($_GET['action']) && !empty($_GET['action'])) {

    $action = $_GET['action'];
    switch($action) {
        case 'clasament' :
            $clasament = getClasament();
            echo $clasament;
            break;
        default:
            break;
    }
}

function getClasament(){
    $path = '../arhiva/clasament.csv';
    if(file_exists($path)) {
        $csv = file_get_contents($path);
        return csvToJson($csv);
    }
    return null;

}

function csvToJson($csv) {
    $rows = explode("\n", trim($csv));
    $data = array_slice($rows, 1);
    $keys = array_fill(0, count($data), $rows[0]);
    $json = array_map(function ($row, $key) {
        return array_combine(str_getcsv($key), str_getcsv($row));
    }, $data, $keys);

    return json_encode($json);
}
?>