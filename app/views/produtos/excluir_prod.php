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
				      		echo "<button type=\"button\" class=\"excluir_produto btn btn-danger btn-sm\"><i class=\"fas fa-trash-alt\"></i></button></a>";
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
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>