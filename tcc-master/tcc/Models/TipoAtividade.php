<?php

class TipoAtividade
{
    public $tipo_atividade;


public function __construct($tipo_atividade)
{
    $this->tipo_atividade = $tipo_atividade;
}

    /**
     * @return mixed
     */
    public function getTipoAtividade()
    {
        return $this->tipo_atividade;
    }

    /**
     * @param mixed $tipo_atividade
     */
    public function setTipoAtividade($tipo_atividade)
    {
        $this->tipo_atividade = $tipo_atividade;
    }

}