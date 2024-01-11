<?php
require_once('fornitore.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeFornitore = $_POST["nome_fornitore"];
    $cognomeFornitore = $_POST["cognome_fornitore"];
    $emailFornitore = $_POST["email_fornitore"];

    $fornitore = new Fornitore($nomeFornitore, $cognomeFornitore, $emailFornitore);

    $servername = "127.0.0.1";
    $username = "root";
    $password = "2023#Infobasic";
    $dbname = "azienda";
    $sql = "INSERT INTO fornitore (nome, cognome, email) VALUES ('$nomeFornitore', '$cognomeFornitore', '$emailFornitore');\n";


    $file_path = "azienda.sql";
    file_put_contents($file_path, $sql, FILE_APPEND);

    echo "Dati forntiore salvati con successo!";
}
?>
