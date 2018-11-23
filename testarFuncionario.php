<?php

include('funcionario.php');

try{
	$data = new Data(3,11,2017);

} catch(Exception $e){

	echo $e->getMessage();
	exit();
}
//funcionario1
$funcionario=new Funcionario();
$funcionario->nome='Vagner';
$funcionario->departamento='Informatica';
$funcionario->salario=1800;

$funcionario->colocarData($data);

$funcionario->CPF='123.456.789-10';
$calculoGanhoAnual=$funcionario->GanhoAnual();

//funcionario2
$funcionario2=new Funcionario();
$funcionario2->nome='Razzini';
$funcionario2->departamento='Contabilidade';
$funcionario2->salario=1600;

$funcionario2->colocarData(new Data(10,4,2014));

$funcionario2->CPF='109.876.543-21';
$calculoGanhoAnual2=$funcionario2->GanhoAnual();



print("<pre>");
print("Testando funcionario numero 1° \n");

$funcionario->mostra();


print("\n Testando funcionario numero 2° \n");
$funcionario2->mostra();