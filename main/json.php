<?php

require_once 'conectar.php';

$rest = $_REQUEST['rest'];

$sql = "SELECT Platos, Leche, Pescado, Cacahuetes, Cereales, Frutos, Moluscos, Sésamo, Huevo, Sulfitos FROM " . $rest;

$statement = $db->prepare($sql);
$statement->execute();

while ($fila = $statement->fetch()) {
    $filas[] = array(
        "Platos" => $fila['Platos'],
        "Leche" => $fila['Leche'],
        "Pescado" => $fila['Pescado'],
        "Cacahuetes" => $fila['Cacahuetes'],
        "Cereales" => $fila['Cereales'],
        "Frutos" => $fila['Frutos'],
        "Moluscos" => $fila['Moluscos'],
        "Sésamo" => $fila['Sésamo'],
        "Huevo" => $fila['Huevo'],
        "Sulfitos" => $fila['Sulfitos'])
    ;
}

$json = json_encode($filas);

echo $json;
?>
