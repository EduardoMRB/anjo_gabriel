<?php

namespace Anjo\EventoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evento
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Evento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inicio", type="date")
     */
    private $data_inicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_final", type="date")
     */
    private $data_final;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text")
     */
    private $descricao;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ativo", type="boolean")
     */
    private $ativo;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Evento
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    
        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set data_inicio
     *
     * @param \DateTime $dataInicio
     * @return Evento
     */
    public function setDataInicio($dataInicio)
    {
        $this->data_inicio = $dataInicio;
    
        return $this;
    }

    /**
     * Get data_inicio
     *
     * @return \DateTime 
     */
    public function getDataInicio()
    {
        return $this->data_inicio;
    }

    /**
     * Set data_final
     *
     * @param \DateTime $dataFinal
     * @return Evento
     */
    public function setDataFinal($dataFinal)
    {
        $this->data_final = $dataFinal;
    
        return $this;
    }

    /**
     * Get data_final
     *
     * @return \DateTime 
     */
    public function getDataFinal()
    {
        return $this->data_final;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Evento
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    
        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set ativo
     *
     * @param boolean $ativo
     * @return Evento
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    
        return $this;
    }

    /**
     * Get ativo
     *
     * @return boolean 
     */
    public function getAtivo()
    {
        return $this->ativo;
    }
}
