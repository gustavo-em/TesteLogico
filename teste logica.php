<?php
//Criar um algoritimo para ver quantas vezes a pessoa vai ter que treinar para atingiro peso desejado,
//se ela tiver menos que 28 anos, sera necessario uma vez para perder 2kg, se mais, apenas 1kg

/*
Explicativo: Com classes voçe pode reaproveitar as funções e valores dela para outros objetos
Esse é o unico motivo de se criar classes.
*/

//SEM CLASSES E OBJETOS
$peso = 80;
$idade = 20;
$peso_desejo = 50;
for($i = 0; $peso > $peso_desejo; $i++){ //com o while o $i teria que ser definido antes.
	if($idade > 28){                     //essa é a diferença de while e for.
		$peso -= 2;
	} else {
		$peso -= 1;
	}
	echo "Dia de treino $i<br>";
}
echo "No final ira ter malhado $i para alcançar $peso_desejo kg, com $idade anos.";

//COM CLASSES E OBJETOS
class FuncaoIdade 
{
//variaveis
	public $idade;
	public $peso;
	public $peso_desejado;

//função para setar valores
	public function setValor($i, $p, $pd)
	{
		$this->peso_desejado = $pd;
		$this->idade = $i;
		$this->peso = $p;
	}
//função para fazer a condição do peso
	public function idadePeso()
	{
		if($this->idade < 28)
		{
			$this->peso -= 2;
		} else 
		{
			$this->peso -= 1;
		}
	}
}
//criando objeto pessoa1 para receber os valores e as funções da classe
$pessoa1 = new FuncaoIdade;
//definindo os valores da pessoa1
$pessoa1->setValor(20, 70, 50);
//fazer o loop de repetição para ver quantas vezes precisara treinar para chegar ao peso_desejado
//baseado na idade
$cont = 0;
while($pessoa1->peso > $pessoa1->peso_desejado)
//aplicando a função da condição idade
{
	$pessoa1->idadePeso();
	$cont += 1;
	$vezes = $cont;
}
echo "<hr>No padrão de classes voçe ira malhar $vezes vezes<br>";
?>