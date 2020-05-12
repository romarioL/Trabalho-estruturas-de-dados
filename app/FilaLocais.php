<?php

namespace App;
use Src\Relato;

class FilaLocais
{
	public Array $fila;

	public function enqueue(Relato $relato)
	{
		$this->fila[] = $relato;
	}

	public function dequeue()
	{
		if(empty($this->fila)){
              return "Fila  vazia";
		}

		return array_shift($this->fila);
	}
}
