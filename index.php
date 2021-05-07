<!DOCTYPE html>
<html lang="pt_br">

<?php

require_once  __DIR__ . '/app/views/head.php';
require_once __DIR__ . '/app/class/autoload.php';
require_once __DIR__ . '/app/views/default/text_default.php';

// conexao e metodos
$sv = new SistemaVendas();
$res_produtos = $sv->Produtos(); // produtos
$res_vendas = $sv->Vendas(); // vendas

// formulario de cadastro
$sv->CadastroProdutos();

// formulario de exclusao
$del_prod = $sv->ExcluiProdutos();
$sv->ExcluiProdutos();

?>

<body>

<!-- Páginas inclusas -->
<?php include_once __DIR__.'/app/views/menu.php' ?>
<?php include_once __DIR__.'/app/views/sistema.php' ?>
<?php include_once __DIR__.'/app/views/modals.php' ?>
<?php include_once __DIR__.'/app/views/footer.php' ?>




<!-- Scripts-->
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/menu.js"></script>

</body>
</html>