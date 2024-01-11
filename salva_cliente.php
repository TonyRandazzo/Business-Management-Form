<?php
require_once('cliente.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeCliente = $_POST["nome_cliente"];
    $cognomeCliente = $_POST["cognome_cliente"];
    $emailCliente = $_POST["email_cliente"];

    $cliente = new Cliente($nomeCliente, $cognomeCliente, $emailCliente);


    $servername = "127.0.0.1";
    $username = "root";
    $password = "2023#Infobasic";
    $dbname = "azienda";
    $sql = "INSERT INTO cliente (nome, cognome, email) VALUES ('$nomeCliente', '$cognomeCliente', '$emailCliente');\n";


    $file_path = "azienda.sql";
    file_put_contents($file_path, $sql, FILE_APPEND);

    echo "Dati cliente salvati con successo!";
}
?>
