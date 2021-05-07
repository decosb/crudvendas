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
			    <label for="cons_Produto">Digite o nome do produto ou fornecedor:</label>
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
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>