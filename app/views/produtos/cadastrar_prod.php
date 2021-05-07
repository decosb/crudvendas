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

		<button name="cadastraProduto" type="submit" class="btn btn-secondary">Cadastrar</button>
		</div>
		</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>