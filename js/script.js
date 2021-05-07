// script
$(document).ready(function() { // document
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

  ///////////////////////////////////////////////////////////////

// Modal de cep -> home
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

// Modal de cadastro
$("#form_cadastro button[name='cadastraProduto']").attr("disabled", true)
$("#nome_produto").keyup(function(){
  if($(this).val() !== "")
  {
    $("#form_cadastro button[name='cadastraProduto']").attr("disabled", false).removeClass("btn-secondary").addClass("btn-success")
  }
  else
  {
    $("#form_cadastro button[name='cadastraProduto']").attr("disabled", true).addClass("btn-secondary").removeClass("btn-success")
  }
})


// Modal de consulta
$("#cons_Produto").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#filtro_produtos tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);     
    });
});

$(".consulta_produto").click(function(e){
    $("#cons_Produto").val("")
})

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

// Formulário de Atualização
const table = $(".result_values")

const result = {
  inputs: table.find("input:text").attr("disabled", true),
  edit:  table.find(".enabled-field-edit"),
  success:  table.find(".field-check-success").attr("disabled", true)
}

// botão editar produto
result.edit.click(function(event){
  event.preventDefault()
  var row = $(this).closest("tr")
  var lastCol = row.find("td:eq(5) .field-check-success")

  $(this).removeClass("btn-primary").addClass("fa-window-close btn-danger")
  row.find(result.inputs).attr("disabled", false) 
  lastCol.attr("disabled", false)

})

result.edit.focusout(function(){
  var row = $(this).closest("tr")
  var lastCol = row.find("td:eq(5) .field-check-success")

  $(this).removeClass("fa-window-close btn-danger").addClass("fa-edit btn-primary")
  row.find(result.inputs).attr("disabled", true) 
  lastCol.attr("disabled", true)
})

// pesquisa produto para atualizar
$("#at_Produto").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#filtro_produtos_atualizacao tr").filter(function() {
        $(this).toggle($("input[name='nome_produto']").text().toLowerCase().indexOf(value) > -1);     
    });
});


// Modal Excluir
// confirm nos botoes de deletar produtos
$(".excluir_produto").click(function(){
  if(confirm("Quer excluir este produto?") == true)
  {
    return true
  }
  else
  {
    return false
  }
  
})


}); // document