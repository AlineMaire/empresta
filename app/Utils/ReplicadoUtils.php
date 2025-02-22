<?php

namespace App\Utils;

use Uspdev\Replicado\Pessoa;

class ReplicadoUtils
{

    /** Método que dado um codpes retorna
      * codpes - nome da pessoa
      */
    public static function pessoaUSP($codpes)
    {

        if(Pessoa::dump($codpes)) {
            $pessoa = explode(',', Pessoa::dump($codpes)['nompesttd'] .','. Pessoa::email($codpes));
            return $pessoa;
        }
        else {
            if(Pessoa::cracha($codpes)){
                $pessoa = explode(',', Pessoa::cracha($codpes)['nompescra'] .', ');
                return $pessoa;
            }
            else {
                return [false];
            }
        }
    }
}