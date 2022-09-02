<?php 



# ================================= CONSTANTE ==========================================
#Declarar constantes define(name,value).
#Geralmente se tem o hábito de os nomes das constante serem em maíuculo.
define("SALA", "601");

#printar a constante
echo SALA;

# ================================== VARIÁVEL =========================================
$sala = "<br>901";

echo $sala;
echo "<br>neymar melhor do mundo";

# ================================ ARRAYS ASSOCIATIVAS ================================

#$dogs = array() ou

$dogs = ["BOXER", "PASTOR-ALEMÃO", "CARAMELO", "PUG", "PINSCHER", "YORKSHIRE"];

echo "<br>".$dogs[2];

$fichaDog = [
	"nome" => "Gamora",
	"raça" => "PASTOR-ALEMÃO",
	"idade" => "3 anos",
	"peso" => " 28kg"
];

print_r($dogs);

echo "<hr>";

print_r($fichaDog);

echo "<hr>";

#Imprime o "nome" Gamora. "nome" é o "índice"
echo $fichaDog["nome"].$fichaDog["peso"];

echo "<hr>";

# ============================= ARRAY MULTIDIMENSIONAL ==================================
$cadastroDog = [
	array(
		"nome" => "Laika",
		"raça" => "VIRA-LATA"
	),
	array(
		"nome" => "Dolly",
		"raça" => "LINGUICINHA"
	),
	array(
		"nome" => "Pink",
		"raça" => "PUG"
	),
];

print_r($cadastroDog);

echo "<hr>";

echo $cadastroDog[2]["nome"];

# ============================ LAÇOS
echo "<hr>";

for ($i=1;$i < 10; $i++){
    echo " Posição ".$i."<br>";
}

$dogs = ["BOXER", "PASTOR ALEMAO", "SALSICHA", "CARAMELO", "PUG", "PINSCHER"];

$contagem = count($dogs);

echo $contagem;

?>