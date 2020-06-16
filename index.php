<?php
require_once './autoloader.php';
use CnabPHP\Remessa;

$data_atual = new DateTime('now');

$arquivo = new Remessa('085', 'cnab240', array(
    'nome_empresa' =>'Susan Modas',                 // Seu nome de empresa
    'tipo_inscricao' => 2,                          // 1 para cpf, 2 cnpj
    'numero_inscricao' => '81.297.780/0001-85',     // Seu CPF ou CNPJ completo
    'agencia' => 0101,                              // Agência sem o dígito verificador
    'agencia_dv' => 5,                              // Somente o dígito verificador da agência
    'conta' => '0925495',                           // Número da conta
    'conta_dv' => 1,                                // Dígito da conta
    'convenio' => '101004',
    'codigo_transmissao' => '12345678901234567890',
    'codigo_beneficiario' => '09254951',            // Código fornecido pelo banco
    'codigo_beneficiario_dv' => '2',                // Código fornecido pelo banco
    'numero_sequencial_arquivo' => 1,
    'situacao_arquivo' =>'T'                        // Use T para teste e P para produção
));

$lote = $arquivo->addLote(array(
    'tipo_servico'          => 1,                       // tipo_servico  = 1 para cobrança registrada, 2 para sem registro
    'codigo_transmissao'    => '12345678901234567890'
));

$lote->inserirDetalhe(array(
    'codigo_movimento'      => 1,                                                               // 1 = Entrada de título, para outras opções ver nota explicativa C004 manual Cnab_SIGCB na pasta docs
    'nosso_numero'          => 1,                                                               // Número sequêncial de boleto
    'codigo_carteira'       => '01',                                                            // Código da carteira ex: 109, RG esse vai o nome da carteira no banco
    'especie_titulo'        => 'DM',                                                            // Informar DM e será convertido para código em qualquer layout conferir em especie.php
    'valor'                 => 100.00,                                                          // Valor do boleto como float válido em PHP
    'emissao_boleto'        => 2,                                                               // Tipo de emissão do boleto informar 2 para emissao pelo beneficiário e 1 para emissão pelo banco
    'protestar'             => 3,                                                               // 1 = Protestar com (Prazo) dias, 3 = Devolver após (Prazo) dias
    'prazo_protesto'        => 5,                                                               // Informar o número de dias após o vencimento para iniciar o protesto
    'nome_pagador'          => 'Gabriel Silva',                                                 // O Pagador é o cliente, preste atenção nos campos abaixo
    'tipo_inscricao'        => 1,                                                               // Campo fixo, escreva '1' se for pessoa física, 2 se for pessoa jurídica
    'numero_inscricao'      => '123.456.789-09',                                                // CPF ou CNPJ do pagador
    'endereco_pagador'      => 'Rua de Teste, 123',
    'bairro_pagador'        => 'Bairro de teste',
    'cep_pagador'           => '12345-123',
    'cidade_pagador'        => 'Itajaí',
    'uf_pagador'            => 'SC',
    'data_vencimento'       => $data_atual->add(new DateInterval('P1M'))->format('Y-m-d'),
    'data_emissao'          => $data_atual->format('Y-m-d'),
    'vlr_juros'             => 0.15,                                                            // Valor do juros de 1 dia
    'data_desconto'         => $data_atual->format('Y-m-d'),                                    // Informar a data neste formato
    'vlr_desconto'          => 0.00,                                                            // Valor do desconto
    'baixar'                => 1,                                                               // Código para indicar o tipo de baixa '1' (Baixar/ Devolver) ou '2' (Não Baixar / Não Devolver)
    'prazo_baixa'           => 90,                                                              // Prazo de dias para o cliente pagar após o vencimento
    'mensagem'              => 'JUROS de R$0,15 ao dia'.PHP_EOL.'Não receber apos 30 dias',
    'data_multa'            => $data_atual->add(new DateInterval('P1M'))->format('Y-m-d'),
    'vlr_multa'             => 50.00,                                                           // Valor da multa
));

$resultado = utf8_decode($arquivo->getText()); // observar a header do seu php para não gerar conflitos de codificação de caracteres;

echo "<pre>";
echo $resultado;
echo "</pre>";
