<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php

	$sistema = "Sistema de Vendas"; 
	$pg_exc_produto = "Exclusão de Produtos";
	?>
	<title><?php echo $sistema ."- ".$pg_exc_produto ?></title>

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
<div class="modal fade" id="ModalExclusaoProduto" tabindex="-1" role="dialog" aria-labelledby="ModalExclusaoProdutoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalExclusaoProduto">Exclusão de Produtos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      	<div id="form_consulta">
			<form>
			  <div class="form-group">
			    <label for="id_produto_excluir">Id do Produto</label>
			    <input type="email" class="form-control" id="id_produto_excluir">
			  </div>

			  <button type="submit" class="btn btn-primary">Pesquisar</button>
			</form>
		</div>

		<div class="produtos_retornados_para_exclusao">
			<p>Os seguintes produtos foram encontrados</p>
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