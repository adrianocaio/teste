<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$file = "usuario.xls";

$spreadsheet = IOFactory::load($file);

$worksheet = $spreadsheet->getActiveSheet();
$data = array();

echo "<pre>";

foreach ($worksheet->getRowIterator() as $row) {
    $rowData = array();
    $cellIterator = $row->getCellIterator();

    foreach ($cellIterator as $cell) {
        $rowData[] = $cell->getValue();
    }

    $data[] = $rowData;

    print_r($data);
}