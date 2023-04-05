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


}

print_r($data);

/*

foreach ($data as $row) {
    $sql = "INSERT INTO sua-tabela (campo1, campo2, campo3) 
    VALUES ('".$row[0]."', '".$row[1]."', '".$row[2]."')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados importados com sucesso";
    } else {
        echo "Erro ao importar dados: " . $conn->error;
    }
    
}

$conn->close();

*/
