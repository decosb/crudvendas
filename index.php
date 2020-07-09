<?php 
	require_once 'app\class\Class-dados.php';

	$sv = new SistemaVendas("localhost", "crudvendas", "root", "");

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
	<title>Sistema de Vendas</title>

	<!-- stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- script -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body>

<div class="container" id="register">
	
	<h1 class="title_system">Sistema de Vendas</h1>

	<button id="btn_consultar_venda" type="button" class="btn btn-dark btn_consultar_venda">Consultar venda por CEP</button>

	<!-- div mostra o endereço da compra -->
		<div class="row">
			<div id="consulta_venda_cep" class="consulta_venda_cep">

				<form method="get" action=".">
			        <label>Cep:
			        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" /></label><br />
			    <div class="adress">
			        <label>Rua:
			        <input name="rua" type="text" id="rua" size="60" /></label><br />
			        <label>Bairro:
			        <input name="bairro" type="text" id="bairro" size="40" /></label><br />
			        <label>Cidade:
			        <input name="cidade" type="text" id="cidade" size="40" /></label><br />
			        <label>Estado:
			        <input name="uf" type="text" id="uf" size="2" /></label><br />
			    </div>
		      </form>	
			</div>
		</div>

	<div class="row">

		<div class="table-responsive">

		<table class="table table-striped table-bordered table-hover" border="0" cellspacing="0" cellpadding="0" width="100%">
		<thead class="thead-dark">
			<tr>
				<th class="product_name">Produto</th>
				<th class="product_price">Preço</th>
				<th class="product_supplier">Fornecedor(es)</th>
				<th class="sale_cep">CEP</th>
			</tr>
		</thead>

		<?php
			$res = $sv->RetornaDados();

			if(count($res) > 0)
			{
				for($i=0; $i < count($res); $i++)
				{
					echo "<tbody><tr>";
					foreach ($res[$i] as $k => $v)
					{
						if($k != "id_cli")
						{
							echo "<td>" .$v. "</td>";
						}
					}
					echo "</tbody></tr>";	

				}
			}

		?>

		</table>
		<div class="bg-success valor_total_vendas">
			<?php

			// soma o total de todas as compras

			$total_vendas = [];
			foreach ($res as $k => $v) {
				$total_vendas[] = ($k['nome_produto'] . $v['valor_venda']);
				$t = array_sum($total_vendas);
			}
			echo "Valor total das vendas: <strong>R$" . $t . "</strong>";

			?> 
		</div>

		</div>

	</div>
	
</div>

<script type="text/javascript" src="js/script.js"></script>
</body>
</html>