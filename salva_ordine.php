<?php
require_once('ordine.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id_ordine"];
    $prodotto = $_POST["prodotto"];
    $quantità = $_POST["quantità"];

    $ordine = new Ordine($id, $prodotto, $quantità);



    $servername = "127.0.0.1";
    $username = "root";
    $password = "2023#Infobasic";
    $dbname = "azienda";
    $sql = "INSERT INTO ordine (nome, cognome, email) VALUES ('$id', '$prodotto', '$quantità');\n";


    $file_path = "azienda.sql";
    file_put_contents($file_path, $sql, FILE_APPEND);

    echo "Dati ordine salvati con successo!";
}
?>
