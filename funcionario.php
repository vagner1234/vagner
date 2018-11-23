<?php
	class Funcionario
	{


	    public $nome_fun;
	    public $departamento_fun;
	    public $salario_fun;
	    private $dataEntrada_fun; 
	    public $CPF_fun;
	    
	    public function colocarData(Data $data){
	        $this->dataEntrada_fun = $data;
	    }

	    public function Aumento(){
	        $this->salario_fun=$this->salario_fun+($this->salario_fun*0.1);
	    }
	    
	    public function GanhoAnual(){
	        return $this->salario_fun*12;
	    }

	    public function mostra(){
	        
	        echo "O funcionario {$this->nome_fun} do departamento {$this->departamento_fun}, funcionario desde {$this->dataEntrada_fun}, possui um salario de R$ {$this->salario} \n";
	    }
	}



class Data {

    private $dia;
    public $mes;
    public $ano;

    public function  __construct(int $dia,int $mes,int $ano)
    {
        if ($dia < 1 || $dia > 31) {
            throw new Exception("Dia incorreto");
            
        }

        $this->dia=$dia;
        $this->mes=$mes;
        $this->ano=$ano;
    }

    public function __toString()
    {
        $data = $this->dia."/".$this->mes."/".$this->ano;
        return $data;

    }
}








