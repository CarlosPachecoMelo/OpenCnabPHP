<?php
/*
 * CnabPHP - Geração de arquivos de remessa e retorno em PHP
 *
 * LICENSE: The MIT License (MIT)
 *
 * Copyright (C) 2013 Ciatec.net
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Software
 * without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace CnabPHP\resources\B085\remessa\cnab240;

use CnabPHP\resources\generico\remessa\cnab240\Generico3;
use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;
use Exception;

class Registro3P extends Generico3 {
    protected $meta = array(
        'codigo_banco' => array(
            'tamanho' => 3,
            'default' => '085',
            'tipo' => 'int',
            'required' => true
        ),
        'codigo_lote' => array(
            'tamanho' => 4,
            'default' => 1,
            'tipo' => 'int',
            'required' => true
        ),
        'tipo_registro' => array(
            'tamanho' => 1,
            'default' => '3',
            'tipo' => 'int',
            'required' => true
        ),
        'numero_registro' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'seguimento' => array(
            'tamanho' => 1,
            'default' => 'P',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler1' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'codigo_movimento' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        // Até aqui é igual para todo registro tipo 3
        'agencia' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'agencia_dv' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'conta' => array(
			'tamanho' => 12,
			'default' => '0',
			'tipo' => 'int',
            'required' => true
        ),
		'conta_dv' => array(
			'tamanho' => 1,
			'default' => '0',
			'tipo' => 'alfa',
            'required' => true
        ),
		'filler2' => array(
			'tamanho' => 1,
			'default' => ' ',
			'tipo' => 'alfa',
            'required' => true
        ),
        'nosso_numero' => array(
            'tamanho' => 20,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'codigo_carteira' => array(
            'tamanho' => 1,
            'default' => 1,
            'tipo' => 'int',
            'required' => true
        ),
        'com_registro' => array(
            'tamanho' => 1,
            'default' => 1,
            'tipo' => 'int',
            'required' => true
        ),
        'tipo_documento' => array(
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'alfa',
            'required' => true
        ),
        'emissao_boleto' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'entrega_boleto' => array(
            'tamanho' => 1,
            'default' => '2',
            'tipo' => 'alfa',
            'required' => true
        ),
        'seu_numero' => array( // Campo de preenchimento obrigatório; preencher com Seu Número de controle do título
            'tamanho' => 15,
            'default' => ' ', // Este espaço foi colocado para passa a validação para os seters do generico
            'tipo' => 'alfa',
            'required' => true
        ),
        'data_vencimento' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ),
        'valor' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'agencia_cobradora' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'agencia_cobradora_dv' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'especie_titulo' => array(
            'tamanho' => 2,
            'default' => '2',
            'tipo' => 'int',
            'required' => true
        ),
        'aceite' => array(
            'tamanho' => 1,
            'default' => 'N',
            'tipo' => 'alfa',
            'required' => true
        ),
        'data_emissao' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ),
        'codigo_juros' => array(
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true
        ),
        'data_juros' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ),
        'vlr_juros' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'codigo_desconto' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'data_desconto' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ),
        'vlr_desconto' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'vlr_IOF' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'vlr_abatimento' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'seu_numero2' => array(
            'tamanho' => 25,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'protestar' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'prazo_protesto' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'baixar' => array(
            'tamanho' => 1,
            'default' => '2',
            'tipo' => 'int',
            'required' => true
        ),
        'prazo_baixar' => array(
            'tamanho' => 3,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'codigo_moeda' => array(
            'tamanho' => 2,
            'default' => '9',
            'tipo' => 'int',
            'required' => true
        ),
        'filler4' => array(
            'tamanho' => 10,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'filler5' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
    );

    public function __construct($data = null) {
        if (empty($this->data)) parent::__construct($data);
        $this->inserirDetalhe($data);
    }

    protected function set_emissao_boleto($value) {
        $this->data['emissao_boleto'] = $value;
        if ($this->data['com_registro'] == 1 && $value == 1) {
            $this->data['carteira'] = 11;
        } elseif ($this->data['com_registro'] == 1 && $value == 2) {
            $this->data['carteira'] = 14;
        } elseif ($this->data['com_registro'] == 2 && $value == 1) {
            $this->data['carteira'] = 21;
        } else {
            throw new Exception("Registros com emissão pelo beneficiário e sem registro não são enviados");
        }
    }

    public function inserirDetalhe($data) {
        $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro3Q';
        $this->children[] = new $class($data);
        if (isset($data['codigo_desconto2'])
            || isset($data['codigo_desconto3'])
            || isset($data['mensagem'])
            || isset($data['email_pagador'])) {
            $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro3R';
            $this->children[] = new $class($data);
        }
        if ($data['emissao_boleto'] == 1) {
            if (isset($data['mensagem_frente'])) {
                $data['mensagem_140'] = $data['mensagem_frente'];
                $data['tipo_impressao'] = 1;
                $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro3S1e2';
                $this->children[] = new $class($data);
            }
            if (isset($data['mensagem_verso'])) {
                $data['mensagem_140'] = $data['mensagem_verso'];
                $data['tipo_impressao'] = 2;
                $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro3S1e2';
                $this->children[] = new $class($data);
            }
            if (isset($data['mensagem'])) {
                if (count(explode(PHP_EOL, $data['mensagem'])) > 4) {
                    $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro3S3';
                    $this->children[] = new $class($data);
                }
            }
        }
    }

    /**
     * Cálculo do módulo 11
     * @param int $index
     * @return int
     */
    protected static function modulo11($num, $base = 9, $r = 0) {
        $soma = 0;
        $fator = 2;

        // Separação dos números
        for ($i = strlen($num); $i > 0; $i--) {
            // Pega cada número isoladamente
            $numeros[$i] = substr($num, $i-1, 1);
            // Efetua a multiplicação do número pelo falor
            $parcial[$i] = $numeros[$i] * $fator;
            // Soma dos dígitos
            $soma += $parcial[$i];
            if ($fator == $base) {
                // Restaura fator de multiplicação para 2
                $fator = 1;
            }
            $fator++;
        }

        // Cálculo do módulo 11
        if ($r == 0) {
            $soma *= 10;
            $digito = $soma % 11;
            if ($digito == 10) {
                $digito = 0;
            }
            return $digito;
        } elseif ($r == 1){
            $resto = $soma % 11;
            return $resto;
        }
    }
}
