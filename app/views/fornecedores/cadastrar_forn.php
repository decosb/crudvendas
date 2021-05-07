<!-- Modal Cadastrar -->
<div class="modal fade" id="ModalCadastroFornecedor" tabindex="-1" role="dialog" aria-labelledby="ModalCadastroFornecedorLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalCadastroFornecedorLabel">Cadastro de Fornecedores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
		<form method="post" action="" name="form_cadastro_fornecedor" id="form_cadastro_fornecedor">
		<div id="form_cadastro">

		<div class="form-group">
			<label for="cadastrar_cnpj_fornecedor">CNPJ</label>
			<input type="text" class="form-control" id="cadastrar_cnpj_fornecedor" name="cadastrar_cnpj_fornecedor" required>
		</div>

		<div class="form-group">
			<label for="cadastrar_nome_fantasia_fornecedor">Nome Fantasia</label>
			<input type="text" class="form-control" id="cadastrar_nome_fantasia_fornecedor" name="cadastrar_nome_fantasia_fornecedor" required>
		</div>

		<div class="form-group">
			<label for="cadastrar_razao_social_fornecedor">Razão Social</label>
			<input type="text" class="form-control" id="cadastrar_razao_social_fornecedor" name="cadastrar_razao_social_fornecedor" required>
		</div>

		<div class="form-group">
			<label for="cadastrar_data_cad_fornecedor">Data de cadastro</label>
			<input type="text" class="form-control date" id="cadastrar_data_cad_fornecedor" name="cadastrar_data_cad_fornecedor" required>
		</div>

		<button name="cadastraFornecedor" type="submit" class="btn btn-secondary">Cadastrar</button>
		</div>
		</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>