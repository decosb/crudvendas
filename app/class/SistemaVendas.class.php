<?php

require_once 'autoload.php';
Class SistemaVendas extends ConnBancoDados { //SistemaVendas

// Produtos
public function Produtos() 
{
	$pdo = $this->connect();

	// dados dos produtos
	$produtos = "SELECT * FROM produto";
	$stmt = $pdo->prepare($produtos);
	$stmt->execute();
	$res_produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $res_produtos;
}

// Vendas
public function Vendas() 
{
	$pdo = $this->connect();

	// dados das vendas
	$vendas = "SELECT produto.id_produto, produto.nome_produto, preco_produto, fornecedor, venda.data_venda, venda.cep_venda FROM produto INNER JOIN venda ON produto.id_produto = venda.id_produto";
	$stmt = $pdo->prepare($vendas);
	$stmt->execute();
	$res_vendas = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $res_vendas;
}

public function CadastroProdutos()
{
	$pdo = $this->connect();

	// pega os dados dos campos do formulário de cadastro
	if(isset($_POST['cadastraProduto']))
	{
		$cad_nome_produto = addslashes($_POST['cad_nome_produto']);
	 	$cad_preco_produto = addslashes($_POST['cad_preco_produto']);
	 	$cad_estoque_produto = addslashes($_POST['cad_estoque_produto']);
	 	$cad_preco_produto = floatval($cad_preco_produto);
	 	$cad_fornecedor_produto = addslashes($_POST['cad_fornecedor_produto']);

			if( isset($_POST['cad_nome_produto']) || isset($_POST['cad_preco_produto']) || isset($_POST['cad_estoque_produto']) || isset($_POST['cad_fornecedor_produto']) )
 		{

		try {		

		 	$sql = "INSERT INTO produto (nome_produto, preco_produto, estoque_produto, fornecedor) VALUES (:np, :pp, :ep, :fp)";
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(":np", $cad_nome_produto);
			$stmt->bindParam(":pp", $cad_preco_produto);
			$stmt->bindParam(":ep", $cad_estoque_produto);
			$stmt->bindParam(":fp", $cad_fornecedor_produto);
			$stmt->execute();

			header("Location: index.php");

			}
			catch (PDOException $e)
			{
				echo "Erro: " . $e->getMessage();
			}
		}			
	}
}

public function AtualizaProdutos()
{

	// $pdo = $this->connect();

	// try
	// {
	// 	if(isset($_GET["upd"]))
	// 	{
	// 		$id_produto = $_GET["upd"];

	// 		// atualização de produto
	// 		$sql = "SELECT * FROM produto WHERE id_produto = :id";
	// 		$stmt = $pdo->prepare($sql);
	// 		$stmt->bindParam(":id", $id_produto);
	// 		$upd_prod = $stmt->execute();
	// 		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	// 		if(isset($_POST['atualizaProduto']))
	// 		{
	// 			$at_nome_produto = $_POST['at_nome_produto'];
	// 			$at_preco_produto = $_POST['at_preco_produto'];
	// 			$at_estoque_produto = $_POST['at_estoque_produto'];
	// 			$at_fornecedor_produto = $_POST['at_fornecedor_produto'];

	// 			$sql_update = "UPDATE produto set nome_produto = :nome, preco_produto = :preco, estoque_produto = :estoque, fornecedor = :forn WHERE id_produto = :id";
	// 			$stmt_update = $pdo->prepare($sql_update);
	// 			$stmt_update = bindParam(":id", $id_produto);
	// 			$stmt_update = bindParam(":nome", $at_nome_produto);
	// 			$stmt_update = bindParam(":preco", $at_preco_produto);
	// 			$stmt_update = bindParam(":estoque", $at_estoque_produto);
	// 			$stmt_update = bindParam(":forn", $at_fornecedor_produto);

	// 			$result_update = $stmt_update->execute();

	// 			// if (!$result_update)
	// 			// {
	// 			// 	exit();
	// 			// }
	// 			// else
	// 			// {
	// 			// 	header("Location: ");
	// 			// }
	// 		}
	// 	}
	// } 
	// catch (PDOException $e)
	// {
	// 	echo "Erro: ".$e->getMessage();
	// }
}

public function ExcluiProdutos()
{
	$pdo = $this->connect();

	try
	{
		if(isset($_GET["del"]))
		{
			$id_produto = $_GET["del"];

			// exclusão de produto
			$sql = "DELETE FROM produto WHERE id_produto = :id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(":id", $id_produto);
			$del_prod = $stmt->execute();

			header("Location: index.php");
		}
	} 
	catch (PDOException $e)
	{
		echo "Erro: ".$e->getMessage();
	}

}

	
} // SistemaVendas