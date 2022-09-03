<?php 

if (5 < 10) {
    echo "Verdadeiro";
} else {
    echo "Falso";
}

echo "<hr>";

#===============================================================================
$x = 10;
$y = 5;
if ($y > $x){
    echo "Verdadeiro";
} else {
    echo "Falso";
}

echo "<hr>";

#===============================================================================
$aluno = "Haydi";
if ($aluno == "Haydi") {
    echo "o aluno ".$aluno." passar na Secretaria.";
} else {
    echo "Bem Vindo!";
}

echo "<hr>";

#===============================================================================
$aluno = "Jorge";
# Ou no PHP podemos usar o "or" ou "||"
if ($aluno == "Erick" || $aluno == "Luiza") {
    echo "o aluno ".$aluno." passar na Secretaria.";
} else {
    echo "Bem Vindo!";
}

echo "<hr>";

#===============================================================================
$aluno = "Elias";
$curso = "ADS";
# e no PHP podemos usar o "and" ou "&"
if ($aluno == "Elias" and $curso == "ADS") {
    echo "o aluno ".$aluno." passar na Secretaria.";
} else {
    echo "Bem Vindo!";
}

echo "<hr>";

#===============================================================================
$media = 7;
$notaFinal = 9;

if ($notaFinal >= $media) {
    echo "APROVADO";
} 

elseif ($notaFinal <= 5) {
    echo "REPROVADO";
}

else {
    echo "RECUPERAÇÃO";
}

?>