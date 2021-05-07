<!-- Modal Vendas-->
<div class="modal fade" id="ModalVendas" tabindex="-1" role="dialog" aria-labelledby="ModalVendasLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalVendasLabel">Vendas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <select class="VendasPorStatus float-right">
        <option selected>Selecionar por</option>
        <option>Finalizadas</option>
        <option>Pendentes</option>
        <option>Canceladas</option>
      </select>

      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Boleta</th>
            <th>Data</th>
            <th>Valor</th>
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