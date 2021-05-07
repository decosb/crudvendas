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
				
				<table class="table thead-light table-striped table-bordered result_values">
					<thead>
					<tr>
						<th>Nome:</th>
						<th>Preço:</th>
						<th>Estoque:</th>
						<th>Fornecedor:</th>
						<th colspan="3">Opções</th>
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

					echo "<tr id=\"id-$id_produto\">";
					echo "<td id=\"nome_campo\"><input class=\"id-$id_produto\" name=\"nome_produto\" value=\"$nome_produto\" type=\"text\" ></td>";
					echo "<td id=\"preco_campo\"><input name=\"preco_produto\" value=\"$preco_produto\" type=\"text\"  class=\"money2 id-$id_produto\"></td>";
						echo "<td id=\"estoque_campo\"><input name=\"estoque_produto\" value=\"$estoque_produto\" type=\"text\" class=\"id-$id_produto\" ></td>";
					echo "<td id=\"fornecedor_campo\"><input name=\"fornecedor\" value=\"$fornecedor\" type=\"text\" class=\"id-$id_produto\" ></td>";
					echo "<td><button value=\"id-$id_produto\" data-get-id=\"id-$id_produto\" class=\"enabled-field-edit id-$id_produto btn btn-primary fas fa-edit ml-2 text-white\" title=\"Editar\"></button></td>";
					echo "<td><button value=\"id-$id_produto\" data-get-id=\"id-$id_produto\" class=\"field-check-success btn btn-success fas fa-check-square ml-2 text-white\" title=\"Salvar alterações\"></button></td>";
					echo "</tr>";					
					}
				}

				echo "<tr><td colspan=\"6\" class=\"ret_registros\"></td></tr>";

				?>
				</tbody>
			</table>
			</div>
			</form>

		</div>

      </div>
      	<div class="modal-footer">
        	<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>