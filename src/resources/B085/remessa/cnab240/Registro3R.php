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
use Exception;

class Registro3R extends Generico3 {
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
			'default' => 'R',
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
			'default' => '0', // Entrada de título
			'tipo' => 'int',
            'required' => true
        ),
        // Até aqui é igual para todo registro tipo 3
		'codigo_desconto2' => array(
			'tamanho' => 1,
			'default' => '0',
			'tipo' => 'int',
            'required' => true
        ),
		'data_desconto2' => array(
			'tamanho' => 8,
			'default' => '0',
			'tipo' => 'date',
            'required' => true
        ),
		'vlr_desconto2' => array(
			'tamanho' => 13,
			'default' => '0',
			'tipo' => 'decimal',
			'precision' => 2,
            'required' => true
        ),
		'codigo_desconto3' => array(
			'tamanho' => 1,
			'default' => '0',
			'tipo' => 'int',
            'required' => true
        ),
		'data_desconto3' => array(
			'tamanho' => 8,
			'default' => '0',
			'tipo' => 'date',
            'required' => true
        ),
		'vlr_desconto3' => array(
			'tamanho' => 13,
			'default' => '0',
			'tipo' => 'decimal',
			'precision' => 2,
            'required' => true
        ),
		'codigo_multa' => array(
			'tamanho' => 1,
			'default' => '0',
			'tipo' => 'int',
            'required' => true
        ),
		'data_multa' => array(
			'tamanho' => 8,
			'default' => '0',
			'tipo' => 'date',
            'required' => true
        ),
		'vlr_multa' => array(
			'tamanho' => 13,
			'default' => '0',  
			'tipo' => 'decimal',
			'precision' => 2,
            'required' => true
        ),
		'informacao_pagador' => array(
			'tamanho' => 10,
			'default' => ' ',
			'tipo' => 'alfa',
            'required' => true
        ),
		'mensagem_3' => array(
			'tamanho' => 40,
			'default' => ' ',
			'tipo' => 'alfa',
            'required' => true
        ),
		'mensagem_4' => array(
			'tamanho' => 40,
			'default' => ' ',
			'tipo' => 'alfa',
            'required' => true
        ),
		'filler2' => array(
			'tamanho' => 20,
			'default' => ' ',
			'tipo' => 'alfa',
            'required' => true
        ),
		'ocor_pagador' => array(
			'tamanho' => 8,
			'default' => '0',
			'tipo' => 'int',
            'required' => true
        ),
		'cod_banco' => array(
			'tamanho' => 3,
			'default' => '0',
			'tipo' => 'int',
            'required' => true
        ),
		'cod_agencia' => array(
			'tamanho' => 5,
			'default' => '0',
			'tipo' => 'int',
            'required' => true
        ),
		'verificador_agencia' => array(
			'tamanho' => 1,
			'default' => '0',
			'tipo' => 'alfa',
            'required' => true
        ),
		'conta_corrente' => array(
			'tamanho' => 12,
			'default' => '0',
			'tipo' => 'int',
            'required' => true
        ),
		'dv_conta' => array(
			'tamanho' => 1,
			'default' => '0',
			'tipo' => 'alfa',
            'required' => true
        ),
		'dv_ag' => array(
			'tamanho' => 1,
			'default' => '0',
			'tipo' => 'alfa',
            'required' => true
        ),
		'aviso_debito' => array(
			'tamanho' => 1,
			'default' => '0',
			'tipo' => 'int',
            'required' => true
        ),
		'filler3' => array(
			'tamanho' => 9,
			'default' => ' ',
			'tipo' => 'alfa',
            'required' => true
        ),
	);
}
