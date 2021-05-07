# crudvendas - Sistema com cadastro de produtos, fornecedores, clientes, consulta do local da venda por cep e status de vendas e pagamentos

O sistema de vendas contém apenas duas tabelas: produto, venda.

Existem os seguinte campos:

produto:
id_produto, nome_produto, preco_produto, estoque_produto, fornecedor

venda
id_venda, data_venda, cep_venda, valor_venda, id_produto, nome_produto, fornecedor_venda, endereco_venda

########################################

Sobre a Tela do Sistema

A tela contém as seguintes áreas:

Botão Consultar venda por CEP
Possibilita ao cliente fazer consulta do cep da venda, confirmando seu endereço completo via Webservice ViaCEP (https://viacep.com.br/),
consumindo este serviço com JSON.

-----------------------------------

Tabela que contém os seguintes registros retornados do banco de dados:

Produto = Contém a descrição do nome do produto cadastrado.
Preço = Contém o preço do produto.
Fornecedor(es) = Contém o nome do fornecedor(es).
CEP = Contém CEP cadastrado da venda.

Como consultar:

Clique sobre o botão Consultar venda por CEP;
Abrirá o campo Cep, preenche-o;
Caso digite algum valor inválido que não seja um INT, o sistema envia uma mensagem de erro;
No momento em que se digita o primeiro valor válido do campo, o mesmo abrirá os outros campos que seguem:

Rua, Bairro, Cidade, Estado

Preenchendo o campo Cep corretamente é retornado o endereço completo da compra.

########################################
