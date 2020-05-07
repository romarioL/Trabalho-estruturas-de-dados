<?php

namespace Src;

class Agente
{
	private String $nome;
	private String $CPF;

     
    public function getNome() : String
	{
		return $this->nome;
	}

	public function getCPF() : String
	{
		return $this->CPF;
	}

	public function setNome(String $nome)
	{
		$this->nome = $nome;
	}

	public function setCPF(String $cpf)
	{
		$this->CPF = $cpf;
	}
}