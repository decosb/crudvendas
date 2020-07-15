/** Menu **/
$("document").ready(function() {

// abre e fecha menu
$("#btn_menu_app").click(function() {
	$("#box_menu_app").toggleClass("toLeftMenu");
});

// sub menu Produto e Fornecedor
$("#menu_produto").hide();
$("#menu_fornecedor").hide();

$(".opcao-produto").click(function() {
	$("#menu_produto").slideToggle(100);
});
	
$(".opcao-fornecedor").click(function() {
	$("#menu_fornecedor").slideToggle(100);
});

});

// Menu do Sistema
$("#box_menu_app").hover(function(){

  $(this).css("margin-right", "-165px");

});

