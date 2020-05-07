<?php

namespace Src;

use Src\Pessoa;

class Suspeito extends Pessoa
{
	private Array $exames;

	public function __construct(String $nome, String $cpf, Array $exames)
	{
		parent::__construct($nome, $cpf);
		$this->exames = $exames;
	}

	public function addExame(String $exame)
	{
		$this->exames[] = $exame;
	}

	public function getExames() : Array
	{
		return $this->exames;
	}
}