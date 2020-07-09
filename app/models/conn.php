<?php

// conexão com banco de dados

$user = "root";
$pass = "";

try {
$pdo = new PDO("mysql:host=localhost; dbname=vendas", $user, $pass);
//echo "Conexão realizada com sucesso!";

// seleciona os campos do banco vendas
$query = $pdo->query("SELECT * FROM clientes");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

}

catch (PDOException $e) {
	echo "Erro: {$e->getMessage()}";
}
catch (Exception $e) {
	echo "Erro: {$e->getMessage()}" . " Contate o desenvolvedor!";
}