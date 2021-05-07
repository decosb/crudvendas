/** Menu **/
$(document).ready(function() {

const btnMenu = $("#btn_menu_app")
const menu = $("#box_menu_app")
const options = $(".opcoes_sistema").find("h4")
const lista = $(".opcoes_sistema").find("ul")
lista.hide()

btnMenu.click(function(){
	menu.toggleClass("toLeftMenu")
	$(".modal_opacity").toggleClass("d-none").css("transition", "opacity .5s");
})

$(".modal_opacity").click(function(){
	$(this).addClass("d-none").css("transition", "opacity .5s");
	menu.toggleClass("toLeftMenu")
})

$.each(options, function(i, el){
	$(this).on("click", function(event){
		const ul = $(el).next()
		ul.slideToggle(200)
	})
})



})