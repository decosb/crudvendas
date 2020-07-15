<!DOCTYPE html>
<html lang="pt_br">

<?php

require_once 'head.php';
require_once '../class/autoload.php';

// conexao e metodos
$sv = new SistemaVendas();
$res_produtos = $sv->Produtos(); // produtos
$res_vendas = $sv->Vendas(); // vendas

// formulario de cadastro
$sv->CadastroProdutos();

// formulario de exclusao
$del_prod = $sv->ExcluiProdutos();
$sv->ExcluiProdutos();

?>

<body>

<!-- Páginas -->
<?php include_once 'menu.php' ?>
<?php include_once 'sistema.php' ?>

<!-- Modals -->

<!-- Modal Cadastrar -->

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
      
		<form method="post" action="" name="form_cadastro_produto" id="form_cadastro_produto">
		<div id="form_cadastro">
		<div class="form-group">
		<label for="nome_produto">Produto</label>
		<input type="text" class="form-control" id="nome_produto" name="cad_nome_produto" required>
		</div>

		<div class="form-group">
		<label for="preco_produto">Preço</label>
		<input type="text" class="form-control money2" id="preco_produto" name="cad_preco_produto" required>
		</div>

		<div class="form-group">
		<label for="estoque_produto">Estoque</label>
		<input type="text" class="form-control" id="estoque_produto" name="cad_estoque_produto" required>
		</div>

		<div class="form-group">
		<label for="fornecedor_produto">Fornecedor</label>
		<input type="text" class="form-control" id="fornecedor_produto" name="cad_fornecedor_produto" required>
		</div>

		<button name="cadastraProduto" type="submit" class="btn btn-primary">Cadastrar</button>
		</div>
		</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Consultar -->
<div class="modal fade" id="ModalConsultaProduto" tabindex="-1" role="dialog" aria-labelledby="ModalConsultaProdutoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalConsultaProduto">Consulta de Produtos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      	<div id="form_consulta">
			<form method="post" action="" name="consultaProdutos">

			<div class="form-group">
			    <label for="cons_Produto">Digite o nome do produto:</label>
			    <input type="text" class="form-control" placeholder="Nome do produto" id="cons_Produto">
		  	</div>		

			</form>

			<div class="consulta_produtos">
				
				<table class="table thead-light table-striped table-bordered produtos_retornados_consulta">
					<thead>
					<tr>
						<th>Id:</th>
						<th>Nome:</th>
						<th>Preço:</th>
						<th>Estoque:</th>
						<th>Fornecedor:</th>
					</tr>
					</thead>
					<tbody id="filtro_produtos">

				<?php

				//retorna os produtos
				if(count($res_produtos) > 0)
				{

					foreach ($res_produtos as $v)
					{
						$id_produto = $v['id_produto'];
						$nome_produto = $v['nome_produto'];
						$preco_produto = $v['preco_produto'];
						$estoque_produto = $v['estoque_produto'];
						$fornecedor = $v['fornecedor'];

						echo "<tr>";
						echo "<td id=\"id_campo\">".$id_produto."</td>";
						echo "<td id=\"nome_campo\">".$nome_produto."</td>";
						echo "<td id=\"preco_campo\">R$".number_format($preco_produto, 2, ",",".")."</td>";
						if($estoque_produto <= 10)
						{
							echo "<td id=\"estoque_campo\"><span class=\"badge badge-danger\">".$estoque_produto."</span></td>";
						}
						else if($estoque_produto > 10 && $estoque_produto <=30)
						{
							echo "<td id=\"estoque_campo\"><span class=\"badge badge-warning\">".$estoque_produto."</span></td>";
						}
						else
						{
							echo "<td id=\"estoque_campo\"><span class=\"badge badge-success\">".$estoque_produto."</span></td>";
						}
						echo "<td id=\"fornecedor_campo\">".$fornecedor."</td>";
						echo "</tr>";					
					}
				}

				echo "<tr><td colspan=\"5\" class=\"ret_registros\"></td></tr>";

				?>
				</tbody>
			</table>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Atualizar-->
<div class="modal fade" id="ModalAtualizaProduto" tabindex="-1" role="dialog" aria-labelledby="ModalAtualizaProdutoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalAtualizaProdutoLabel">Atualização de Produtos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div id="form_atualizacao">
			<form method="post" action="" name="atualizaProdutos">

			<div class="form-group">
			    <label for="at_Produto">Digite o nome do produto:</label>
			    <input type="text" class="form-control" placeholder="Nome do produto" id="at_Produto">
		  	</div>		

			<div class="atualizacao_produtos">
				
				<table class="table thead-light table-striped table-bordered produtos_retornados_atualizacao">
					<thead>
					<tr>
						<th>Nome:</th>
						<th>Preço:</th>
						<th>Estoque:</th>
						<th colspan="2">Fornecedor:</th>
					</tr>
					</thead>
					<tbody id="filtro_produtos_atualizacao">

				<?php

				//retorna os produtos 
				if(count($res_produtos) > 0)
				{

					foreach ($res_produtos as $v)
					{
						$id_produto = $v['id_produto'];
						$nome_produto = $v['nome_produto'];
						$preco_produto = $v['preco_produto'];
						$estoque_produto = $v['estoque_produto'];
						$fornecedor = $v['fornecedor'];

					echo "<tr id=\"$id_produto\">";
					echo "<td id=\"nome_campo\"><input id=\"id_campo\" value=\"$id_produto\" type=\"hidden\"><input value=\"$nome_produto\" type=\"text\" disabled></td>";
					echo "<td id=\"preco_campo\"><input value=\"$preco_produto\" type=\"text\" disabled class=\"money2\"></td>";
						echo "<td id=\"estoque_campo\"><input value=\"$estoque_produto\" type=\"text\" disabled></td>";
					echo "<td id=\"fornecedor_campo\"><input value=\"$fornecedor\" type=\"text\" disabled></td>";
					echo "<td><i value=\"$id_produto\" id=\"id_produto_edit\" data-get-id=\"$id_produto\" class=\"enabled-field-edit btn btn-primary fas fa-edit ml-2 text-white\" title=\"Editar\"></i><i id=\"id_produto_edit_cancel\" class=\"disabled-field-edit btn btn-danger fas fa-window-close ml-3 text-white\" title=\"Cancelar edição\"></i><i value=\"$id_produto\" class=\"field-check btn btn-success fas fa-check-square ml-4 text-white\" title=\"Salvar alterações\"></i></td>";
					echo "</tr>";					
					}
				}

				echo "<tr><td colspan=\"5\" class=\"ret_registros\"></td></tr>";

				?>
				</tbody>
			</table>
			</div>
			</form>

		</div>

      </div>
      	<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Excluir-->
<div class="modal fade" id="ModalExclusaoProduto" tabindex="-1" role="dialog" aria-labelledby="ModalExclusaoProdutoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalExclusaoProduto">Exclusão de Produtos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      	<div id="form_exclusao">

			<form method="post" action="" name="excluiProduto">
			  
			  	<div class="form-group">
			    <div class="checkbox">
			    <table class="table table-striped table-bordered">
			    	<thead>
				    	<tr>
				    		<th colspan="2">Selecione o produto a ser excluído</th>
				    	</tr>
			    	</thead>
			    	<tbody>
			      <?php
				      	if(count($res_produtos) > 0)
				      	{
				      		foreach ($res_produtos as $v) {

				      		$id_produto = $v['id_produto'];
	  						$nome_produto = $v['nome_produto'];
				      		
				      		echo "<tr>";
				      		echo "<td>".$v['nome_produto']."</td>";
				      		echo "<td align=\"center\">";
				      		echo "<a href=\"index.php?del=$id_produto\">";
				      		echo "<button id=\"excluir_produto\" type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-trash-alt\"></i></button></a>";
				      		echo "</td></tr>";
				      		}
				      	}
			      	?>
			      	</tbody>
			    </table>
				</div>

			  </div>
			</form>
		</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fim Modal -->


<!-- Scripts-->
<script type="text/javascript" src="../../js/script.js"></script>
<script type="text/javascript" src="../../js/menu.js"></script>

</body>
</html>