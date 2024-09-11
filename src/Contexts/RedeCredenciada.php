<?php

namespace O4l3x4ndr3\SdkSempreOdonto\Contexts;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkSempreOdonto\Configuration;
use O4l3x4ndr3\SdkSempreOdonto\Helpers\CallApi;
use O4l3x4ndr3\SdkSempreOdonto\Types\Bairro;
use O4l3x4ndr3\SdkSempreOdonto\Types\Cidade;
use O4l3x4ndr3\SdkSempreOdonto\Types\Especialidade;
use O4l3x4ndr3\SdkSempreOdonto\Types\Plano;
use O4l3x4ndr3\SdkSempreOdonto\Types\Servico;
use O4l3x4ndr3\SdkSempreOdonto\Types\Uf;

class RedeCredenciada extends CallApi
{

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * Retrieves a list of UF (federative units) from the API and transforms the data into an array of Uf objects.
     *
     * @return array A list of Uf objects.
     * @throws GuzzleException
     */
    public function getUfs(): array
    {
        $result = $this->call('GET', '/api/RedeCredenciada/Uf');
        foreach ($result as $key => $uf) {
            $result[$key] = (new Uf($uf->id, $uf->descricao));
        }
        return $result;
    }

    /**
     * Retrieves a list of cities based on the given state ID.
     *
     * @param int $ufId The ID of the state to fetch cities for.
     * @return array The list of cities for the specified state.
     * @throws GuzzleException
     */
    public function getCidades(int $ufId): array
    {
        $result = $this->call('GET', "/api/RedeCredenciada/Cidade?ufId=$ufId");
        foreach ($result as $key => $cidade) {
            $result[$key] = (new Cidade($ufId, $cidade->id, $cidade->descricao));
        }
        return $result;
    }

    /**
     * Retrieves a list of neighborhoods (bairros) for a given state (uf) and city (cidade).
     *
     * @param int $ufId The ID of the state.
     * @param int $cidadeId The ID of the city.
     * @return array An array of Uf objects representing the neighborhoods.
     * @throws GuzzleException
     */
    public function getBairros(int $ufId, int $cidadeId): array
    {
        $result = $this->call('GET', "/api/RedeCredenciada/Bairro?ufId=$ufId&cidadeId=$cidadeId");
        foreach ($result as $key => $bairro) {
            $result[$key] = (new Bairro($ufId, $cidadeId, $bairro->id, $bairro->descricao));
        }
        return $result;
    }

    /**
     * Retrieves a list of service types from the API.
     *
     * @return array An array of Servico objects representing the types of services.
     * @throws GuzzleException
     */
    public function getTipoServicos(): array
    {
        $result = $this->call('GET', "/api/RedeCredenciada/TipoServico");
        foreach ($result as $key => $servico) {
            $result[$key] = (new Servico($servico->id, $servico->descricao));
        }
        return $result;
    }

    /**
     * Retrieves a list of specialties from the API.
     *
     * @return array An array of Especialidade objects representing the specialties.
     * @throws GuzzleException
     */
    public function getEspecialidades(): array
    {
        $result = $this->call('GET', "/api/RedeCredenciada/Especialidades");
        foreach ($result as $key => $especialidade) {
            $result[$key] = (new Especialidade($especialidade->id, $especialidade->descricao));
        }
        return $result;
    }

    /**
     * Fetches and retrieves a list of health plans.
     *
     * @return array An array of Plano objects containing details of each health plan.
     * @throws GuzzleException
     */
    public function getPlanos(): array
    {
        $result = $this->call('GET', "/api/RedeCredenciada/Planos");
        foreach ($result as $key => $plano) {
            $result[$key] = (new Plano($plano->codigoAns, $plano->id, $plano->descricao));
        }
        return $result;
    }

    /**
     * Retrieves the result of a network request based on the provided parameters.
     *
     * @param int $ufId Identifier for the state.
     * @param int|null $cidadeId Identifier for the city.
     * @param int|null $bairroId Identifier for the neighborhood.
     * @param int|null $tipoServicoId Identifier for the type of service.
     * @param int|null $especialidadeId Identifier for the specialty.
     * @param int|null $planoId Identifier for the plan.
     * @return array The result of the network request as an array of Plano objects.
     * @throws GuzzleException
     */
    public function getResultado(int $ufId, ?int $cidadeId, ?int $bairroId, ?int $tipoServicoId, ?int $especialidadeId, ?int $planoId): array
    {
        $params = array_filter([
            'ufId' => $ufId,
            'cidadeId' => $cidadeId,
            'bairroId' => $bairroId,
            'tipoServicoId' => $tipoServicoId,
            'especialidadeId' => $especialidadeId,
            'planoId' => $planoId,
        ]);
        $params = http_build_query($params);
        $result = $this->call('GET', "/api/RedeCredenciada/Resultado/$params");
        foreach ($result as $key => $plano) {
            $result[$key] = (new Plano($plano->codigoAns, $plano->id, $plano->descricao));
        }
        return $result;
    }
}
