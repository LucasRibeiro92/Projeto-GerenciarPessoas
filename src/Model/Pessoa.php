<?php

namespace Lucas\Gerenciarpessoas\Model;

/**
 * @Entity Pessoa
 * @Table(name="pessoa")
 */
class Pessoa
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private string $nomePessoa;
    /**
     * @Column(type="string")
     */
    private string $emailPessoa;

    /**
     * @Column(type="string")
     */
    private string $senhaPessoa;

    /**
     * @param string $senhaPessoa
     */
    public function setSenhaPessoa(string $senhaPessoa): void
    {
        $this->senhaPessoa = $senhaPessoa;
    }

    /**
     * @return string
     */
    public function getEmailPessoa(): string
    {
        return $this->emailPessoa;
    }

    /**
     * @param string $emailPessoa
     */
    public function setEmailPessoa(string $emailPessoa): void
    {
        $this->emailPessoa = $emailPessoa;
    }

    /**
     * @return string
     */
    public function getNomePessoa(): string
    {
        return $this->nomePessoa;
    }

    /**
     * @param string $nomePessoa
     */
    public function setNomePessoa(string $nomePessoa): void
    {
        $this->nomePessoa = $nomePessoa;
    }

}