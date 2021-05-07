<!-- Modal Excluir-->
<div class="modal fade" id="ModalExclusaoFornecedor" tabindex="-1" role="dialog" aria-labelledby="ModalExclusaoFornecedorLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalExclusaoFornecedor">Exclusão de Fornecedores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      	<div id="form_exclusao">

			<form method="post" action="" name="excluiFornecedor">
			  
			  	<div class="form-group">
			    <div class="checkbox">
			    <table class="table table-striped table-bordered">
			    	<thead>
				    	<tr>
				    		<th colspan="2">Selecione o fornecedor a ser excluído</th>
				    	</tr>
			    	</thead>
			    	<tbody>
			      <?php
				      	if(count($res_fornecedor) > 0)
				      	{
				      		foreach ($res_fornecedor as $forn) {

				      		$id_fornecedor = $forn['id_fornecedor'];
	  						$nome_fornecedor = $forn['nome_fornecedor'];
				      		
				      		echo "<tr>";
				      		echo "<td>".$forn['nome_fornecedor']."</td>";
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