<?php

namespace App;

class Cep
{
    private $cep;
    public function setCep(string $cep): string
    {
        if (!$this->isValid($cep)) {
           return false;
        }

        $this->cep = $cep;

        return $cep;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    private function isValid(string $cep): bool
    {
        // Validação simples de CEP no formato 00000-000
        return preg_match('/^[0-9]{8}$/', $cep);
    }

    public function __toString(): string
    {
        return $this->cep;
    }
}
