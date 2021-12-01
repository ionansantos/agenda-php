<?php

  $host = "172.17.0.2:3306";
  $dbname = "formulario";
  $user = "root";
  $pass = "99081877";

  try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    // Ativar o modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {
    // erro na conexão
    $error = $e->getMessage();
    echo "Erro: $error";
  }