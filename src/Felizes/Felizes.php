<?php

namespace src\Felizes;

class Felizes
{
    const NUMERO_FELIZ = 1;
    public array $numeroAnterior = [];

    public function __construct(public $dadoNumeroQualquer = null)
    {
    }

    /**
     * @return false|int|void
     */
    public function somaResultado()
    {
        $soma = 0;

        if (is_null($this->dadoNumeroQualquer)) {
            return false;
        }

        $dadoNumeroQualquer = str_split($this->dadoNumeroQualquer);

        foreach ($dadoNumeroQualquer as $numeroQualquer) {
            if (in_array($numeroQualquer, $this->numeroAnterior)){
                return false;
            }

            $soma += $this->elevaNumero($numeroQualquer);
        }

        if ($soma == self::NUMERO_FELIZ) {
            return self::NUMERO_FELIZ;
        }

        $this->dadoNumeroQualquer = $soma;
        $this->numeroAnterior = $dadoNumeroQualquer;
        $this->somaResultado();
    }

    /**
     * @param mixed $item
     * @return int
     */
    public function elevaNumero(int $item): int
    {
        return pow($item, 2);
    }
}