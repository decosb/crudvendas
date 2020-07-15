<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php

	$sistema = "Sistema de Vendas"; 
	$pg_cad_produto = "Cadastro de Produtos";

	?>

	<title><?php echo $sistema ."- ".$pg_cad_produto ?></title>

	<!-- stylesheet -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="http://localhost/projetos/crud/css/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/projetos/crud/css/style.css">

	<!-- script -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</head>
<body>

<!-- Modal -->
<div class="modal fade" id="ModalCadastroProduto" tabindex="-1" role="dialog" aria-labelledby="ModalCadastroProdutoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalCadastroProdutoLabel">Cadastro de Produtos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      	<div id="form_cadastro">
		<form method="post" action="" name="form_cadastro_produto" id="form_cadastro_produto">
		<div class="form-group">
		<label for="nome_produto">Produto</label>
		<input type="text" class="form-control" id="nome_produto" name="cad_nome_produto" required>
		</div>

		<div class="form-group">
		<label for="preco_produto">Preço</label>
		<input type="text" class="form-control" id="preco_produto" name="cad_preco_produto" required>
		</div>

		<div class="form-group">
		<label for="estoque_produto">Estoque</label>
		<input type="text" class="form-control" id="estoque_produto" name="cad_estoque_produto" required>
		</div>

		<div class="form-group">
		<label for="fornecedor_produto">Fornecedor</label>
		<input type="text" class="form-control" id="fornecedor_produto" name="cad_fornecedor_produto" required>
		</div>

		<button name="salvarProduto" type="submit" class="btn btn-primary">Cadastrar</button>
		</form>
		</div>

		<?php

		// pega os dados dos campos do formulário de cadastro
	 	if( isset($_POST['cad_nome_produto']) || isset($_POST['cad_preco_produto']) || isset($_POST['cad_estoque_produto']) || isset($_POST['cad_fornecedor_produto']))
	 	{
		 	$cad_nome_produto = addslashes($_POST['cad_nome_produto']);
		 	$cad_preco_produto = addslashes($_POST['cad_preco_produto']);
		 	$cad_estoque_produto = addslashes($_POST['cad_estoque_produto']);
		 	$cad_fornecedor_produto = addslashes($_POST['cad_fornecedor_produto']);
	 	}

	 	?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>