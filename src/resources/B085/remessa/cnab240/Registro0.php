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
use \CnabPHP\resources\generico\remessa\cnab240\Generico0;
use Exception;

class Registro0 extends Generico0 {
    protected $meta = array(
        'codigo_banco' => array(
            'tamanho' => 3,
            'default' => '085',
            'tipo' => 'int',
            'required' => true
        ),
		'codigo_lote' => array(
			'tamanho' => 4,
			'default' => '0000',
			'tipo' => 'int',
            'required' => true
        ),
		'tipo_registro' => array(
			'tamanho' => 1,
			'default' => '0',
			'tipo' => 'int',
            'required' => true
        ),
		'filler1' => array(
			'tamanho' => 9,
			'default' => ' ',
			'tipo' => 'alfa',
            'required' => true
        ),
		'tipo_inscricao' => array(
			'tamanho' => 1,
			'default' => '0',
			'tipo' => 'int',
            'required' => true
        ),
		'numero_inscricao' => array(
			'tamanho' => 14,
			'default' => '0',
			'tipo' => 'int',
            'required' => true
        ),
		'codigo_convenio' => array(
			'tamanho' => 20,
			'default' => ' ',
			'tipo' => 'alfa',
            'required' => true
        ),
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
		'nome_empresa' => array(
			'tamanho' => 30,
			'default' => ' ',
			'tipo' => 'alfa',
            'required' => true
        ),
		'nome_banco' => array(
			'tamanho' => 30,
			'default' => 'VIACREDI',
			'tipo' => 'alfa',
            'required' => true
        ),
		'filler3' => array(
			'tamanho' => 10,
			'default' => ' ',
			'tipo' => 'alfa',
            'required' => true
        ),
		'codigo_remessa' => array(
			'tamanho' => 1,
			'default' => '1',
			'tipo' => 'int',
            'required' => true
        ),
		'data_geracao' => array(
			'tamanho' => 8,
			'default' => '0', // Não informar a data na instanciação - Gerada dinamicamente
			'tipo' => 'date',
            'required' => true
        ),
		'hora_geracao' => array(
			'tamanho' => 6,
			'default' => '0', // Não informar a hora na instanciação - Gerada dinamicamente
			'tipo' => 'int',
            'required' => true
        ),
		'numero_sequencial_arquivo' => array(
			'tamanho' => 6,
			'default' => '0',
			'tipo' => 'int',
            'required' => true
        ),
		'versao_layout' => array(
			'tamanho' => 3,
			'default' => '087',
			'tipo' => 'int',
            'required' => true
        ),
		'densidade_gravacao' => array(
			'tamanho' => 5,
			'default' => '0',
			'tipo' => 'int',
            'required' => true
        ),
		'filler4' => array(
			'tamanho' => 20,
			'default' => ' ',
			'tipo' => 'alfa',
            'required' => true
        ),
		'situacao_arquivo2' => array(
			'tamanho' => 20,
			'default' => ' ',
			'tipo' => 'alfa',
            'required' => true
        ),
		'filler5' => array(
			'tamanho' => 29,
			'default' => ' ',
			'tipo' => 'alfa',
            'required' => true
        ),
    );
}
