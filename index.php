<?php

require_once("config.php");


//Classe a ser utilizada dentro do namespace cliente
use Cliente\Cadastro;


$cad = new Cadastro();

$cad->setNome("Fabricio Farias");
$cad->setEmail("fabriciosf@ufpa.br");
$cad->setSenha("12345");

//echo $cad;

//echo "------------<br><br><br>";
$cad->registrarVenda();

?>