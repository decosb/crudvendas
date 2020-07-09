<?php

Class SistemaVendas {

private $pdo;
public $valor_vendas;

// conexao com banco de dados
public function __construct($host, $dbname, $user, $pass)
{
	try {
		$this->pdo = new PDO("mysql:host={$host}; dbname={$dbname}", $user, $pass);
		$this->pdo->exec("set names utf8");
	}
	catch (PDOException $e)
	{
		echo "Erro no banco de dados " . $e->getMessage();
		exit();
	}
	catch (Exception $e)
	{
		echo "Erro: " . $e->getMessage();
		exit();
	}	
}

// busca os dados das tabelas do banco vendas
	public function RetornaDados() 
	{
		// pega os dados para a tabela que sera exibida no frontend
		$res = array();
		$query = $this->pdo->query("SELECT nome_produto, valor_venda, fornecedor_venda, cep_venda FROM venda ORDER BY nome_produto");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		return $res;

	}
	
}