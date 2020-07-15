<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php

	$sistema = "Sistema de Vendas"; 
	$pg_cons_produto = "Consulta de Produtos";
	?>
	<title><?php echo $sistema ."- ".$pg_cons_produto ?></title>

	<!-- stylesheet -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="http://localhost/projetos/crud/css/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/projetos/crud/css/style.css">

	<!-- script -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</head>
<body>

<!-- Consultar -->
<div class="modal fade" id="ModalConsultaProduto" tabindex="-1" role="dialog" aria-labelledby="ModalConsultaProdutoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalConsultaProduto">Consulta de Produtos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      	<div id="form_consulta">
		<form>

	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item" role="presentation">
		<a class="nav-link active" id="id-tab" data-toggle="tab" href="#id" role="tab" aria-controls="id" aria-selected="true">Id</a>
		</li>
		<li class="nav-item" role="presentation">
		<a class="nav-link" id="produto-tab" data-toggle="tab" href="#produto" role="tab" aria-controls="profile" aria-selected="false">Produto</a>
		</li>
		<li class="nav-item" role="presentation">
		<a class="nav-link" id="fornecedor-tab" data-toggle="tab" href="#fornecedor" role="tab" aria-controls="contact" aria-selected="false">Fornecedor</a>
		</li>
	</ul>
		<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="id" role="tabpanel" aria-labelledby="id-tab">
			<p>Digite o id do produto</p>
		</div>
		<div class="tab-pane fade" id="produto" role="tabpanel" aria-labelledby="produto-tab">
			<p>Digite o nome do produto</p>
		</div>
		<div class="tab-pane fade" id="fornecedor" role="tabpanel" aria-labelledby="fornecedor-tab">
			<p>Digite o nome do fornecedor</p>
		</div>
		</div>

		<button type="submit" class="btn btn-primary">Consultar</button>
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