<?php

if(!function_exists('csv_to_array')) {
    function csv_to_array($pathToCsv = '', $delimiter = ',') {
        if (!file_exists($pathToCsv) || !is_readable($pathToCsv)) {
            return false;
        }

        $header = null;
        $data = [];

        if (($handle = fopen($pathToCsv, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                if (!$header) {
                    $header = $row;
                } else {
                    $data[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }

        return $data;
    }
}
