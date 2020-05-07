<?php

namespace App;
use Src\Suspeito;
use Src\Infectado;

class FilaSuspeitos
{
	public Array $fila;

	public function enqueue(Suspeito $suspeito)
	{
		$this->fila[] = $suspeito;
	}

	public function dequeue(bool $infectado)
	{
		if($infectado){
			 $suspeito = array_shift($this->fila);
			 $Infectado = new Infectado(
			 	$suspeito->getNome(),
			 	$suspeito->getCPF(),
			 	date('d/m/Y'),
			 	date('d/m/Y')
			 );

			 return $Infectado;
            
		}  

		return array_shift($this->fila);
	}
}
