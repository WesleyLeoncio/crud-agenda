<?php

$host = "localhost";
$dbname = "agenda_ref";
$user = "postgres";
$pass = "postgres";

try {

    $conn = new PDO("pgsql:host=$host;port=5432;dbname=$dbname", $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


} catch (PDOException $e) {

    // erro na conexão;
    $error = $e->getMessage();
    echo "Erro: $error";

}