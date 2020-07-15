// script
$("document").ready(function() { // document
   $('.toast').toast('show');

// Jquery Mask
$('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.phone').mask('0000-0000');
  $('.phone_with_ddd').mask('(00) 0000-0000');
  $('.phone_us').mask('(000) 000-0000');
  $('.mixed').mask('AAA 000-S0S');
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
  $('.money').mask('000.000.000.000.000,00', {reverse: true});
  $('.money2').mask("#.##0,00", {reverse: true});
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  });
  $('.ip_address').mask('099.099.099.099');
  $('.percent').mask('##0,00%', {reverse: true});
  $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
  $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
  $('.fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });
  $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});

// pagina sistema.php

// Modal consulta de produtos

// Formulário de cadastro
var nome = $("#nome_produto");
var preco = $("#preco_produto");
var estoque = $("#estoque_produto");
var fornecedor = $("#fornecedor_produto");

$("#cons_Produto").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#filtro_produtos tr").filter(function() {
        $(".consulta_produtos").show();
        if($(this).toggle($(this).text().toLowerCase().indexOf(value) > -1) == 0)
        {
          $(".produtos_retornados_consulta").hide();
          $(".consulta_produtos").html("Nenhum registro encontrado.");
        }
        else
        {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        }
    });
});

// Modal de cep -> index
$(".loading").removeClass("hide");
$(".get_cep").click(function() {
    var cep = $(this).attr("get_cep");
    var url = "https://viacep.com.br/ws/"+ cep + "/json/";

    //Requisição ajax
    $.ajax({

        url: url,
        type: "get",
        dataType: "json",

        success: function(dados){
            $("#bairro").html(dados.bairro);
            $("#cep").html(dados.cep);
            $("#logradouro").html(dados.logradouro);
            $("#localidade").html(dados.localidade);
            $("#uf").html(dados.uf);
        }
    });
  });

    // blur do botão CEP
    $(".get_cep").focus(function() {
      // Esconde icone de loading
      setTimeout(function(){
          $(".loading").addClass("hide");
      }, 1000);
      return false;
    });

    // perde o foco do botão CEP
    $(".get_cep").mouseout(function() {
    $(".loading").removeClass("hide");
    });

// Habilita os campos nome, preço, estoque e fornecedor de
// Formulário de Atualização
var id_campo = $("#id_campo").html();
var id_produto_edit =$("#id_produto_edit").attr("data-get-id");

$("#id_produto_edit").click(function(){

 if(id_campo === id_produto_edit)
 {
    var i;
    for(i=0; i < id_campo.length; i++)
    {
      $("#nome_campo input[type='text']").removeAttr("disabled");
      $("#preco_campo input[type='text']").removeAttr("disabled");
      $("#estoque_campo input[type='text']").removeAttr("disabled");
      $("#fornecedor_campo input[type='text']").removeAttr("disabled");
    }
 } 
});
// Desabilita os campos nome, preço, estoque e fornecedor de
// Formulário de Atualização
$("#id_produto_edit_cancel").click(function(){
  if(id_campo === id_produto_edit)
 {
    var i;
    for(i=0; i < id_campo.length; i++)
    {
      $("#nome_campo input[type='text']").attr("disabled", "true");
      $("#preco_campo input[type='text']").attr("disabled", "true");
      $("#estoque_campo input[type='text']").attr("disabled", "true");
      $("#fornecedor_campo input[type='text']").attr("disabled", "true");
    }
 }
});

// Formulário Excluir


}); // document