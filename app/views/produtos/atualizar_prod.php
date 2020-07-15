<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php

	$sistema = "Sistema de Vendas"; 
	$pg_atua_produto = "Atualização de Produtos";
	?>
	<title><?php echo $sistema ."- ".$pg_atua_produto ?></title>

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
<div class="modal fade" id="ModalAtualizaProduto" tabindex="-1" role="dialog" aria-labelledby="ModalAtualizaProdutoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalAtualizaProdutoLabel">Atualização de Produtos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      	<div id="form_cadastro">
		<form>

		<div class="form-group">
		<label for="at_nome_produto">Digite o Id do produto</label>
		<input type="text" class="form-control" id="nome_produto" name="at_nome_produto" required>
		</div>

		<div class="form-group">
		<label for="nome_produto">Produto</label>
		<input type="text" class="form-control" id="nome_produto" name="at_nome_produto" required>
		</div>

		<div class="form-group">
		<label for="preco_produto">Preço</label>
		<input type="text" class="form-control" id="preco_produto" name="at_preco_produto" required>
		</div>

		<div class="form-group">
		<label for="estoque_produto">Estoque</label>
		<input type="text" class="form-control" id="estoque_produto" name="at_estoque_produto" required>
		</div>

		<div class="form-group">
		<label for="fornecedor_produto">Fornecedor</label>
		<input type="text" class="form-control" id="fornecedor_produto" name="at_fornecedor_produto" required>
		</div>

		<button type="submit" class="btn btn-primary">Atualizar</button>
		</form>
		</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>