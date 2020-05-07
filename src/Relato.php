<?php

namespace Src;

use Src\Agente;
use Src\Local;

class Relato
{
	private $data;
	private String $foto;
	private Agente $agente;
	private Local $local;

	public function __construct($data, String $foto, Agente $agente, Local $local)
	{
		$this->data = $data;
		$this->foto = $foto;
		$this->agente = $agente;
		$this->local = $local;
	}

	public function setData($data)
	{
		$this->data = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setFoto(String $foto)
	{
		return $this->foto = $foto;
	}

	public function getFoto() : String 
	{
		return $this->foto;
	}

	public function getAgente() : Agente
	{
		return $this->agente;
	}

	public function getLocal() : Local
	{
		return $this->local;
	}
}