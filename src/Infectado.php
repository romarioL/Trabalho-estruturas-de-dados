<?php 

namespace Src;

use Src\Pessoa;

class Infectado extends Pessoa 
{
	private $dataInfeccao;
	private $dataAlta;

	public function __construct(String $nome,  String $cpf, $dataInfeccao, $dataAlta)
	{
		parent::__construct($nome, $cpf);
		$this->dataInfeccao = $dataInfeccao;
		$this->dataAlta = $dataAlta;
	}

	public function setDataInfeccao($data)
	{
		$this->$dataInfeccao = $data;
	}

	public function setDataAlta($data)
	{
		$this->dataAlta = $data;
	}

	public function getDataInfeccao()
	{
		return $this->dataInfeccao;
	}

	public function getDataAlta()
	{
		return $this->dataAlta;
	}

}