<?php

class Config {
    protected array $parametros = [];

    public function __construct(array $parametrosIniciais)
    {
        $this->parametros = $parametrosIniciais;
    }
}