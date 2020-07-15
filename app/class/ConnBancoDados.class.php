<?php

abstract class ConnBancoDados {

private $host = "mysql:host=localhost; dbname=crudvendas";
private $user = "root";
private $pass = "";

	protected function connect()
	{

	try
	{
		$pdo = new PDO($this->host, $this->user, $this->pass);
		$pdo->exec("set names utf8");
		return $pdo;
	}

	catch (PDOException $e)
	{
		echo "Erro: {$e->getMessage()}";
	}
	catch (Exception $e)
	{
		echo "Erro: {$e->getMessage()}" . " Contate o desenvolvedor!";
	}

	}

}