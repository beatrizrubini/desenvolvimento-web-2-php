<?php

try{

    //faz conexão com o banco de dados 
    $conectar = new PDO("mysql:host=localhost;port=3306;dbname=pdo;","root","");
  //  echo "Conectado com sucesso";

} catch(PDOException $e){
    //caso ocorrer erro na conexão com o banco, exibe a mensagem abaixo
    echo 'Falha ao conectar com o banco de dados: ' . $e->getMessage();

}
?>