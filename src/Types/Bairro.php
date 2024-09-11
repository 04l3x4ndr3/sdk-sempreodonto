<?php

namespace O4l3x4ndr3\SdkSempreOdonto\Types;

class Bairro extends Basic
{
    private ?int $redeUfId;
    private ?int $redeCidadeId;

    public function __construct(?int $redeUfId, ?int $redeCidadeId, ?int $id, ?string $descricao)
    {
        parent::__construct($id, $descricao);
        $this->redeUfId = $redeUfId;
        $this->redeCidadeId = $redeCidadeId;
    }

    public function getRedeUfId(): ?int
    {
        return $this->redeUfId;
    }

    public function setRedeUfId(?int $redeUfId): Bairro
    {
        $this->redeUfId = $redeUfId;
        return $this;
    }

    public function getRedeCidadeId(): ?int
    {
        return $this->redeCidadeId;
    }

    public function setRedeCidadeId(?int $redeCidadeId): Bairro
    {
        $this->redeCidadeId = $redeCidadeId;
        return $this;
    }


}
