
Módulo desenvolvido pela Lema21 para integrar com o sistema do Bling e gerar notas fiscais.

Para o funcionamento do módulo é preciso criar os seguintes atributos de produto na munheca (sim, nao está automatizado a criacao dos atributos)

- codigo_origem (codigo de origem do produto)
- opertion_name (espécie de 'nome operacional' do produto)
- operation_unit - unidade de medida, se é "PÇ", "KG"
- codigo_ncm - Código NCM do produto

Melhorias no módulo:

- incluída opção para emissão de Nf-e em massa para pedidos;
- incluída opção para permitir a emissão de Nf-e por estado do(s) pedidos;
- validação para produtos que não possuem os atributos requeridos
- alteração das mensagens de sucesso e erro para exibir o número de incrementId do objeto order;

* pendente corrigir o setup resource para incluir os atributos automaticamente no grupo default;
