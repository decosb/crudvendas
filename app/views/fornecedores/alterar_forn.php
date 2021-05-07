<!-- Modal Cadastrar -->
<div class="modal fade" id="ModalAtualizarFornecedor" tabindex="-1" role="dialog" aria-labelledby="ModalAtualizarFornecedorLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalAtualizarFornecedorLabel">Atualizar Fornecedores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
		<form method="post" action="" name="form_atualizar_fornecedor" id="form_atualizar_fornecedor">
		<div id="form_atualiza">

		<div class="form-group">
			<label for="altera_cnpj_fornecedor">CNPJ</label>
			<input type="text" class="form-control" id="altera_cnpj_fornecedor" name="altera_cnpj_fornecedor" required>
		</div>

		<div class="form-group">
			<label for="altera_nome_fantasia_fornecedor">Nome Fantasia</label>
			<input type="text" class="form-control" id="altera_nome_fantasia_fornecedor" name="altera_nome_fantasia_fornecedor" required>
		</div>

		<div class="form-group">
			<label for="altera_razao_social_fornecedor">Razão Social</label>
			<input type="text" class="form-control" id="altera_razao_social_fornecedor" name="altera_razao_social_fornecedor" required>
		</div>

		<div class="form-group">
			<label for="altera_data_cad_fornecedor">Data de cadastro</label>
			<input type="text" class="form-control date" id="altera_data_cad_fornecedor" name="altera_data_cad_fornecedor" required>
		</div>

		<button name="alteraFornecedor" type="submit" class="btn btn-secondary">Cadastrar</button>
		</div>
		</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>