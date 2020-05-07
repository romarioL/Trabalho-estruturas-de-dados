<?php

namespace App;
use Src\Relato;
use Src\Infectado;

class FilaLocais
{
	public Array $fila;

	public function enqueue(Relato $relato)
	{
		$this->fila[] = $relato;
	}

	public function dequeue()
	{
		
		return array_shift($this->fila);
	}
}
