<?php 

# ======================= COMANDOS DE REPETIÇÃO ===================

$lanches = array("RISOLES", "EMPATADA", "XIS", "ENROLADINHO", "COXINHA");

$i = 0;
while ($i < count($lanches)){
	echo $lanches[$i]."<br>";
	$i++;
}


$i = 1;
while ($i <= 10) {
	echo $i."<br>";
	$i++;	
}

foreach ($lanches as $lanche) {
	echo $lanche." - ";
}

echo "<hr>";

# ================== ARRAY MULTIDIMENSIONAL ASSOCIATIVA =================

$carros = [
	array(
		"fabricante" => " Volkswagen ",
		"modelo" => "Gol",
		"ano" => "2015"
	),

	array(
		"fabricante" => " Nissan ",
		"modelo" => "Tiida",
		"ano" => "2010"
	),

	array(
		"fabricante" => " Ford ",
		"modelo" => "Fiesta",
		"ano" => "2013"
	),
];

#print_r($carros);
#foreach é mais específico para mostrar arrays
foreach ($carros as $carro){
	#echo $carro["fabricante"];
	echo "fabricante: ".$carro["fabricante"]."<br>";
}

#echo $carros[0]["fabricante"];




#foreach (variavel as chave => valor)

#for ($i=5; $i < 10 ; $i++) {
	# code...
#};






?>