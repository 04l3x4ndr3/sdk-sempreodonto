<?php

namespace O4l3x4ndr3\SdkSempreOdonto\Types;

class Plano extends Basic
{
    private ?int $codigoAns;

    public function __construct(?int $codigoAns, ?int $id, ?string $descricao)
    {
        parent::__construct($id, $descricao);
        $this->codigoAns = $codigoAns;
    }

    public function getCodigoAns(): ?string
    {
        return $this->codigoAns;
    }

    public function setCodigoAns(?string $codigoAns): Plano
    {
        $this->codigoAns = $codigoAns;
        return $this;
    }
}
