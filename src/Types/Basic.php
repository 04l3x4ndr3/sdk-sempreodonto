<?php

namespace O4l3x4ndr3\SdkSempreOdonto\Types;

class Basic
{
    private ?int $id;
    private ?string $descricao;

    public function __construct(?int $id, ?string $descricao){
        $this->id = $id;
        $this->descricao = $descricao;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(?string $descricao): self
    {
        $this->descricao = $descricao;
        return $this;
    }


}
