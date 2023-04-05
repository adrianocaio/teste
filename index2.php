<?php
require 'vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;



$file = "usuario.xls";
$spreadsheet = IOFactory::load($file);

/*composer require phpoffice/phpspreadsheet*/

$worksheet = $spreadsheet->getActiveSheet();
$data = array();

foreach ($worksheet->getRowIterator() as $row) {
    $rowData = array();
    $cellIterator = $row->getCellIterator(); //Obtém linha

    foreach ($cellIterator as $cell) {
        $rowData[] = $cell->getValue(); //Obtém coluna 
    }

    $data[] = $rowData; // Obtém valor da célula
   
   

    echo "<pre>";

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
