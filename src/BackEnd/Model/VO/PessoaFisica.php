<?php
/**
 * Created by PhpStorm.
 * User: Isaque
 * Date: 14/07/2017
 * Time: 16:02
 */


namespace PmroPadraoLib\Model\VO;

class PessoaFisica extends Pessoa
{
    use \PmroPadraoLib\Util\TraitFillFromArray;

    const TABLE_NAME = "pessoas_fisicas";
    const KEY_ID = "idPessoa";
    const CPF = "cpf";
    const RG = "rg";
    const DATA_EMISSAO = "dataEmissao";
    const ORGAO_EMISSOR = "orgaoEmissor";
    const ID_UF_ORGAO_EMISSOR = "idUfOrgaoEmissor";
    const ID_PAIS_NACIONALIDADE = "idPaisNacionalidade";
    const DATA_NASCIMENTO = "dataNascimento";
    const SEXO = "sexo";

    //campos novos 27.03.2018
    const GRUPO_SANGUINEO = "grupoSanguineo";
    const FATOR_RH = "fatorRH";
    const PROFISSAO = "profissao";

    const PIS = "pis";
    const ESTADO_CIVIL = "estadoCivil";
    const NOME_PAI = "nomePai";
    const NOME_MAE = "nomeMae";

    const NATURALIDADE_MUNICIPIO = "naturalidadeMunicipio";
    const NATURALIDADE_UF = "naturalidadeUF";

    const DISPLAY_NAMES =
        [
            'cpf' => 'CPF',
            'rg' => 'RG',

            'nome' => 'Nome',
            'emailPrincipal' => 'E-mail',
            'sexo' => 'Sexo'
        ];

    const SEXO_MASCULINO = 'Masculino';
    const SEXO_FEMININO = 'Feminino';
    const SEXO_OUTRO = 'Outro';

    private $idPessoa;
    private $cpf;
    private $rg;
    private $dataEmissao;
    private $orgaoEmissor;
    private $idUfOrgaoEmissor;
    private $idPaisNacionalidade;
    private $dataNascimento;
    private $sexo;

    //campos novos 27.03.2018
    private $grupoSanguineo;
    private $fatorRH;
    private $profissao;

    private $pis;
    private $estadoCivil;
    private $nomePai;
    private $nomeMae;

    private $naturalidadeMunicipio;
    private $naturalidadeUF;



    /**
     * @return mixed
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     * @param mixed $idPessoa
     */
    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @param mixed $rg
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    /**
     * @return mixed
     */
    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    /**
     * @param mixed $dataEmissao
     */
    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;
    }

    /**
     * @return mixed
     */
    public function getOrgaoEmissor()
    {
        return $this->orgaoEmissor;
    }

    /**
     * @param mixed $orgaoEmissor
     */
    public function setOrgaoEmissor($orgaoEmissor)
    {
        $this->orgaoEmissor = $orgaoEmissor;
    }

    /**
     * @return mixed
     */
    public function getIdUfOrgaoEmissor()
    {
        return $this->idUfOrgaoEmissor;
    }

    /**
     * @param mixed $idUfOrgaoEmissor
     */
    public function setIdUfOrgaoEmissor($idUfOrgaoEmissor)
    {
        $this->idUfOrgaoEmissor = $idUfOrgaoEmissor;
    }

    /**
     * @return mixed
     */
    public function getIdPaisNacionalidade()
    {
        return $this->idPaisNacionalidade;
    }

    /**
     * @param mixed $idPaisNacionalidade
     */
    public function setIdPaisNacionalidade($idPaisNacionalidade)
    {
        $this->idPaisNacionalidade = $idPaisNacionalidade;
    }

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * @param mixed $dataNascimento
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getGrupoSanguineo()
    {
        return $this->grupoSanguineo;
    }

    /**
     * @param mixed $grupoSanguineo
     */
    public function setGrupoSanguineo($grupoSanguineo)
    {
        $this->grupoSanguineo = $grupoSanguineo;
    }

    /**
     * @return mixed
     */
    public function getFatorRH()
    {
        return $this->fatorRH;
    }

    /**
     * @param mixed $fatorRH
     */
    public function setFatorRH($fatorRH)
    {
        $this->fatorRH = $fatorRH;
    }

    /**
     * @return mixed
     */
    public function getProfissao()
    {
        return $this->profissao;
    }

    /**
     * @param mixed $profissao
     */
    public function setProfissao($profissao)
    {
        $this->profissao = $profissao;
    }

    /**
     * @return mixed
     */
    public function getPis()
    {
        return $this->pis;
    }

    /**
     * @param mixed $pis
     */
    public function setPis($pis)
    {
        $this->pis = $pis;
    }

    /**
     * @return mixed
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * @param mixed $estadoCivil
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;
    }

    /**
     * @return mixed
     */
    public function getNomePai()
    {
        return $this->nomePai;
    }

    /**
     * @param mixed $nomePai
     */
    public function setNomePai($nomePai)
    {
        $this->nomePai = $nomePai;
    }

    /**
     * @return mixed
     */
    public function getNomeMae()
    {
        return $this->nomeMae;
    }

    /**
     * @param mixed $nomeMae
     */
    public function setNomeMae($nomeMae)
    {
        $this->nomeMae = $nomeMae;
    }

    /**
     * @return mixed
     */
    public function getNaturalidadeMunicipio()
    {
        return $this->naturalidadeMunicipio;
    }

    /**
     * @param mixed $naturalidadeMunicipio
     */
    public function setNaturalidadeMunicipio($naturalidadeMunicipio)
    {
        $this->naturalidadeMunicipio = $naturalidadeMunicipio;
    }

    /**
     * @return mixed
     */
    public function getNaturalidadeUF()
    {
        return $this->naturalidadeUF;
    }

    /**
     * @param mixed $naturalidadeUF
     */
    public function setNaturalidadeUF($naturalidadeUF)
    {
        $this->naturalidadeUF = $naturalidadeUF;
    }




    public static function getClassName()
    {
        return get_called_class();
    }
}