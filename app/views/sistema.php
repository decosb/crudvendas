<?php 

$msg_modal_venda = "Carregando os dados, por favor aguarde..";

 ?>


<div class="valor_meta_mensal">
<div class="toast" data-autohide="false">
  <div class="toast-header bg-light">
    <strong class="mr-auto text-primary">Acompanhamento de Vendas</strong>
    <!-- <small class="text-muted">5 mins ago</small> -->
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
  </div>
  <div class="toast-body">
  	<p class="text-center bg-secondary text-white">Meta: R$
  		<span class="valor_meta_estipulada">15.000,00</span></p>
    <p class="float-right bg-light p-1"><span>Total</span>
		<span>
		<?php
			//Total de Vendas
			$total_vendas = [];
			foreach ($res_vendas as $v) {
				$total_vendas[] = $v['preco_produto'];
				$t = array_sum($total_vendas);
			}
		?>
		<span class="total_vendas text-white p-1 bg-primary info_total rounded">R$<?php echo number_format($t,2,",","."); ?></span>
		</span>
	</p>
  </div>	
</div>
</div>

<div class="container" id="app">
	<div class="row">
		<div class="col-sm-12 header-content bg-light p-2">
			<img class="img_sistema_vendas img_fluid img-thumbnail float-left" src="app/views/img/img_estoque.jpg" alt="Sistema de Vendas">
			<h1 class="title_system display-6 float-left">Controle de Estoque</h1>
		</div>
	</div>

	<div class="row">

		<div class="table-responsive">

		<table class="info table table-striped table-bordered table-hover" border="0" cellspacing="0" cellpadding="0" width="100%">
		<thead class="thead-dark">
			<tr>
				<th class="product_id">Id do produto</th>
				<th class="product_name">Produto</th>
				<th class="product_price">Preço</th>
				<th class="product_supplier">Fornecedor</th>
				<th class="sale_date">Data</th>
				<th class="sale_cep">CEP Cliente</th>
			</tr>
		</thead>
		<tbody>

		<?php

		if(count($res_vendas) > 0)
		{

				foreach ($res_vendas as $k => $v)
				{

					$id_produto = $v['id_produto'];
					$nome_produto = $v['nome_produto'];
					$data_venda = $v['data_venda'];
					$fornecedor = $v['fornecedor'];
					$valor_venda = $v['preco_produto'];
					$cep_venda = $v['cep_venda'];
				?>

				<tr>
					<td><span class="badge badge-info"><?= $id_produto ?></span></td>
					<td><?= $nome_produto ?></td>
					<td>R$<span class="money2"> <?= $valor_venda ?> </span></td>
					<td><?= $fornecedor ?> </td>
					<td><?= $data_venda ?></td>
					<td><button get_cep="<?= $cep_venda?>" data-toggle="modal" data-target="#exibeDetalhesVenda" title="Clique para mais detalhes" type="button" class="cep btn btn-info get_cep" value="<?= $cep_venda ?>"><?= $cep_venda ?></button></td>
				</tr>

				<?php
				}	
			}
			else
			{

			?>
				<tr><td colspan="6" align="center">Não há registros cadastrados</td></tr>
			
			<?php
			}
		?>

		</tbody>
	</table>

			<!-- Modal Info da Venda -->
			<div class="modal fade" id="exibeDetalhesVenda">
		    <div class="modal-dialog modal-dialog-centered">
		      <div class="modal-content">
		      
		        <!-- Modal Header -->
		        <div class="modal-header">
		          <h4 class="modal-title">Detalhes da venda</h4>
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        
		        <form method="get" action=".">
		        <!-- Modal body -->
		        <div class="modal-body" id="modal_viacep_cep">
		        	<div class="form-group">
		        	<div class="loading">
		        		<p class="text-center"><?php echo $msg_modal_venda; ?></p>
		        		<span class="spinner-border text-primary"></span>
		        	</div>
		        	<form method="get" action=".">
				    <table class="table table-striped table-bordered">
				    	<tbody>
				    		<tr><td class="bg-dark text-white">Endereço de entrega</td></tr>
				    		<tr><td class="cli_bairro"><strong>Bairro</strong>: <span id="bairro"></span> </td></tr>
				    		<tr><td class="cli_cep"><strong>Cep</strong>: <span id="cep"></span> </td></tr>
				    		<tr><td class="cli_logradouro"><strong>Logradouro</strong>: <span id="logradouro"></span> </td></tr>
				    		<tr><td class="cli_localidade"><strong>Localidade</strong>: <span id="localidade"></span> </td></tr>
				    		<tr><td class="cli_uf"><strong>UF</strong>: <span id="uf"></span> </td></tr>
				    	</tbody>
				    </table>
				    </form>
				</div>
				</div>
				</form>

				<!-- Modal footer -->
		        <div class="modal-footer">
		        	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		       </div>

			</div>
		</div>
	</div>
