<!-- Modal Cadastrar -->
<div class="modal fade" id="ModalConsultarFornecedor" tabindex="-1" role="dialog" aria-labelledby="ModalConsultarFornecedorLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalConsultarFornecedorLabel">Consulta de Fornecedores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	<div class="selecionar_por float-right">
	      	<form method="get" name="selecionar_por" action=".">
	      		<span><strong>Selecionar por:</strong></span>
	      		<select>
	      			<!-- <option selected>Selecionar por:</option> -->
	      			<option>Nome Fantasia</option>
	      			<option>CNPJ</option>
	      			<option>CPF</option>
	      			<option>Data de cadastro</option>
	      			<option>Total de produtos por fornecedor</option>
	      		</select>
	      	</form>
      	</div>

      	<table class="table table-striped table-bordered form_consulta_fornecedor">
      		<thead>
      			<tr>
	      			<th>Nome Fantasia</th>
	      			<th>CNPJ / CPF</th>
	      			<th>Cadastrado em</th>
	      			<th>Produtos fornecidos</th>
      			</tr>
      		</thead>
      		<tbody>
      			<tr>
      				<td>DesignWeb</td>
      				<td>XX. XXX. XXX/XXXX-XX</td>
      				<td>02/09/2020</td>
      				<td>20</td>
      			</tr>
      		</tbody>
      		
      	</table>
      
		<!-- <form method="post" action="" name="form_consulta_fornecedor" id="form_consulta_fornecedor">
		<div id="form_consulta">

		<div class="form-group">
			<label for="cnpj_fornecedor">CNPJ</label>
			<input type="text" class="form-control" id="cnpj_fornecedor" name="cad_cnpj_fornecedor" required>
		</div>

		<div class="form-group">
			<label for="nome_fantasia_fornecedor">Nome Fantasia</label>
			<input type="text" class="form-control" id="nome_fantasia_fornecedor" name="cad_nome_fantasia_fornecedor" required>
		</div>

		<div class="form-group">
			<label for="razao_social_fornecedor">Razão Social</label>
			<input type="text" class="form-control" id="razao_social_fornecedor" name="cad_razao_social_fornecedor" required>
		</div>

		<div class="form-group">
			<label for="data_cad_fornecedor">Data de cadastro</label>
			<input type="text" class="form-control date" id="data_cad_fornecedor" name="data_cad_fornecedor" required>
		</div>

		<button name="cadastraFornecedor" type="submit" class="btn btn-secondary">Cadastrar</button>
		</div>
		</form> -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>