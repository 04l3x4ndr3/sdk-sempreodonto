<?php

namespace O4l3x4ndr3\SdkSempreOdonto\Types;

class Prestador
{
    private ?string $cod_dentista;
    private ?string $tipo_pessoa;
    private ?string $nome_fantasia;
    private ?string $razao_social;
    private ?string $num_cpf_cnpj;
    private ?string $cod_espec;
    private ?string $logradouro;
    private ?string $bairro;
    private ?string $cidade;
    private ?string $uf;
    private ?string $cep;
    private ?string $ddd;
    private ?string $fone1;
    private ?string $fone2;
    private ?string $whatsapp;
    private ?int $latitude;
    private ?int $longitude;
    private ?int $ufId;
    private ?int $cidadeId;
    private ?int $bairroId;
    private ?int $especialidadeId;

    public function __construct()
    {
        $this->cod_dentista = null;
        $this->tipo_pessoa = null;
        $this->nome_fantasia = null;
        $this->razao_social = null;
        $this->num_cpf_cnpj = null;
        $this->cod_espec = null;
        $this->logradouro = null;
        $this->bairro = null;
        $this->cidade = null;
        $this->uf = null;
        $this->cep = null;
        $this->ddd = null;
        $this->fone1 = null;
        $this->fone2 = null;
        $this->whatsapp = null;
        $this->latitude = null;
        $this->longitude = null;
        $this->ufId = null;
        $this->cidadeId = null;
        $this->bairroId = null;
        $this->especialidadeId = null;
    }

    public function getCodDentista(): ?string
    {
        return $this->cod_dentista;
    }

    public function setCodDentista(?string $cod_dentista): Prestador
    {
        $this->cod_dentista = $cod_dentista;
        return $this;
    }

    public function getTipoPessoa(): ?string
    {
        return $this->tipo_pessoa;
    }

    public function setTipoPessoa(?string $tipo_pessoa): Prestador
    {
        $this->tipo_pessoa = $tipo_pessoa;
        return $this;
    }

    public function getNomeFantasia(): ?string
    {
        return $this->nome_fantasia;
    }

    public function setNomeFantasia(?string $nome_fantasia): Prestador
    {
        $this->nome_fantasia = $nome_fantasia;
        return $this;
    }

    public function getRazaoSocial(): ?string
    {
        return $this->razao_social;
    }

    public function setRazaoSocial(?string $razao_social): Prestador
    {
        $this->razao_social = $razao_social;
        return $this;
    }

    public function getNumCpfCnpj(): ?string
    {
        return $this->num_cpf_cnpj;
    }

    public function setNumCpfCnpj(?string $num_cpf_cnpj): Prestador
    {
        $this->num_cpf_cnpj = $num_cpf_cnpj;
        return $this;
    }

    public function getCodEspec(): ?string
    {
        return $this->cod_espec;
    }

    public function setCodEspec(?string $cod_espec): Prestador
    {
        $this->cod_espec = $cod_espec;
        return $this;
    }

    public function getLogradouro(): ?string
    {
        return $this->logradouro;
    }

    public function setLogradouro(?string $logradouro): Prestador
    {
        $this->logradouro = $logradouro;
        return $this;
    }

    public function getBairro(): ?string
    {
        return $this->bairro;
    }

    public function setBairro(?string $bairro): Prestador
    {
        $this->bairro = $bairro;
        return $this;
    }

    public function getCidade(): ?string
    {
        return $this->cidade;
    }

    public function setCidade(?string $cidade): Prestador
    {
        $this->cidade = $cidade;
        return $this;
    }

    public function getUf(): ?string
    {
        return $this->uf;
    }

    public function setUf(?string $uf): Prestador
    {
        $this->uf = $uf;
        return $this;
    }

    public function getCep(): ?string
    {
        return $this->cep;
    }

    public function setCep(?string $cep): Prestador
    {
        $this->cep = $cep;
        return $this;
    }

    public function getDdd(): ?string
    {
        return $this->ddd;
    }

    public function setDdd(?string $ddd): Prestador
    {
        $this->ddd = $ddd;
        return $this;
    }

    public function getFone1(): ?string
    {
        return $this->fone1;
    }

    public function setFone1(?string $fone1): Prestador
    {
        $this->fone1 = $fone1;
        return $this;
    }

    public function getFone2(): ?string
    {
        return $this->fone2;
    }

    public function setFone2(?string $fone2): Prestador
    {
        $this->fone2 = $fone2;
        return $this;
    }

    public function getWhatsapp(): ?string
    {
        return $this->whatsapp;
    }

    public function setWhatsapp(?string $whatsapp): Prestador
    {
        $this->whatsapp = $whatsapp;
        return $this;
    }

    public function getLatitude(): ?int
    {
        return $this->latitude;
    }

    public function setLatitude(?int $latitude): Prestador
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude(): ?int
    {
        return $this->longitude;
    }

    public function setLongitude(?int $longitude): Prestador
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function getUfId(): ?int
    {
        return $this->ufId;
    }

    public function setUfId(?int $ufId): Prestador
    {
        $this->ufId = $ufId;
        return $this;
    }

    public function getCidadeId(): ?int
    {
        return $this->cidadeId;
    }

    public function setCidadeId(?int $cidadeId): Prestador
    {
        $this->cidadeId = $cidadeId;
        return $this;
    }

    public function getBairroId(): ?int
    {
        return $this->bairroId;
    }

    public function setBairroId(?int $bairroId): Prestador
    {
        $this->bairroId = $bairroId;
        return $this;
    }

    public function getEspecialidadeId(): ?int
    {
        return $this->especialidadeId;
    }

    public function setEspecialidadeId(?int $especialidadeId): Prestador
    {
        $this->especialidadeId = $especialidadeId;
        return $this;
    }
}
