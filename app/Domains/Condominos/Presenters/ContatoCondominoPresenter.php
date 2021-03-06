<?php

namespace VCCon\Domains\Condominos\Presenters;

use VCCon\Support\Presenters\BasePresenter;
use Carbon\Carbon;


class ContatoCondominoPresenter extends BasePresenter
{

     /**
     * Formatação de data através do Carbon.
     * Formatação de máscaras
     *
     * @var string
     */

   public function isAtivo()
    {
        $ativo = 'Sim';

        if($this->ativo == 'N')
        {
            $ativo = 'Não';
        }

        return $ativo;
    }
}