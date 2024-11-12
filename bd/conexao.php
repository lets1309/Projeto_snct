<?php
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "projeto_snct";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
?>
