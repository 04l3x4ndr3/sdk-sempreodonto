<?php

namespace O4l3x4ndr3\SdkSempreOdonto\Types;

class Cidade extends Basic
{
    private ?int $redeUfId;

    public function __construct(?int $redeUfId, ?int $id, ?string $descricao)
    {
        parent::__construct($id, $descricao);
        $this->redeUfId = $redeUfId;
    }

    public function getRedeUfId(): ?int
    {
        return $this->redeUfId;
    }

    public function setRedeUfId(?int $redeUfId): Cidade
    {
        $this->redeUfId = $redeUfId;
        return $this;
    }

}
