<!-- Modal Vendas-->
<div class="modal fade" id="ModalPagamentos" tabindex="-1" role="dialog" aria-labelledby="ModalPagamentosLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalPagamentosLabel">Pagamentos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <select class="PagamentosPorStatus float-right">
        <option selected>Selecionar por</option>
        <option>Finalizados</option>
        <option>Pendentes</option>
        <option>Cancelados</option>
      </select>

      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Id</th>
            <th>Data</th>
            <th>Valor</th>
            <th>Boleta</th>
            <th>Status</th>
          </tr>
        </thead>
      </table>

      </div>
      	<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>