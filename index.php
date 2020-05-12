<?php


require_once "vendor/autoload.php";

use Src\Infectado;
use Src\Suspeito;
use Src\Local;
use Src\Agente;
use Src\Relato;
use App\FilaSuspeitos;
use App\FilaLocais;


$infectado = new Infectado("Romis", "66666666633", "03/04/1996", "06/06/1996");

$filaSuspeitos = new FilaSuspeitos();

$suspeito1 = new Suspeito("Terra", "66766767733", ["Exame1", "Exame2"]);

$filaSuspeitos->enqueue($suspeito1);


$suspeito2 = new Suspeito("Terra", "66766767733", ["Exame1", "Exame2"]);

$filaSuspeitos->enqueue($suspeito2);


$suspeito3 = new Suspeito("Terra", "66766767733", ["Exame1", "Exame2"]);

$filaSuspeitos->enqueue($suspeito3);


$suspeito4 = new Suspeito("Terra", "66766767733", ["Exame1", "Exame2"]);

$filaSuspeitos->enqueue($suspeito4);


$suspeito5 = new Suspeito("Terra", "66766767733", ["Exame1", "Exame2"]);

$filaSuspeitos->enqueue($suspeito5);


$suspeito6 = new Suspeito("Terra", "66766767733", ["Exame1", "Exame2"]);

$filaSuspeitos->enqueue($suspeito6);


$Local = new Local(4.56, 5.56);

$agente = new Agente("Lucas", "66566933345");

$Relato = new Relato("03/04/1996", "estranho.jpg", $agente, $Local);

$filalocais = new FilaLocais();

$filalocais->enqueue($Relato);
print_r($filalocais->dequeue());


print_r($infectado);

print_r($filaSuspeitos->dequeue(true));
print_r($filaSuspeitos->dequeue(false));
print_r($filaSuspeitos->dequeue(true));
print_r($filaSuspeitos->dequeue(false));
print_r($filaSuspeitos->dequeue(true));
print_r($filaSuspeitos->dequeue(false));
print_r($filaSuspeitos->dequeue(true));
print_r($filaSuspeitos->dequeue(false));

print_r($filaSuspeitos);

print_r($Relato);