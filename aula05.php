<?php 
# ================================= SWITCH CASE =============================================
$idioma = "pt-br";

switch ($idioma) {
    case 'pt-br':
        echo "BOA NOITE!";
        break;
    case 'en-us':
        echo "GOOD NIGHT!";
        break;
    case 'es-sp':
        echo "BUENAS NOCHES!";
        break;
    case 'jp-jp':
        echo "SAYONARA!";
        break;

    default:
        echo "VALOR NÃO ENCONTRADO";
        break;
}
echo "<hr>";

$idade = 45;

switch ($idade) {
    case $idade < 18:
        echo "MENOR DE IDADE";
        break;
    case $idade < 30:
        echo "ADULTO";
        break;
    case $idade < 50:
        echo "MEIA IDADE";
        break;
    case $idade < 65:
        echo "PESSOA NO PONTO";
        break;
    default:
        echo "PESSOA EXPERIENTE";
        break;
}
echo "<hr>";

# ================================ OPERADOR TERNÁRIO =======================================
# Teste lógico ? 'Verdadeiro' : 'Falso'

$nota = 3;
echo $nota >= 7 ? 'Aprovado' : 'Reprovado';
echo "<hr>";

# ================================ FUNÇÕES DE ARRAYS =======================================

$pastel = array('CALABRESA',
                'FRANGO COM CATUPIRY',
                'BACON',
                'BOMBOM',
                'PIZZA',
                'BANANA',
                'STROGONOFF');
print_r($pastel);
echo "<hr>";
# Adiciona um valor no final da lista, estilo .append do Python
$pastel[] = 'CARNE COM OVO';
print_r($pastel);
echo "<hr>";

$pedidos = [
    'bebida' => 'fanta uva',
    'maionese' => 'bacon',
    'acompanhamento' => 'batata frita'
];
print_r($pedidos);

$pedidos['condimento'] = 'ketchup';
echo "<hr>";
print_r($pedidos);
echo "<hr>";

# PUSH adiciona um valor no final da lista (mesma coisa que o $pastel[] = 'sabor')
array_push($pastel, 'LOMBO CANADENSE', 'MILHO E BACON');
print_r($pastel);
echo "<hr>";

# POP serve para retirar o ÚLTIMO valor de um array
$last = array_pop($pastel);
print_r($pastel);
echo "<hr>";
echo $last;
echo "<hr>";

# SHIFT serve para retirar o PRIMEIRO valor de um array
$first = array_shift($pastel);
echo $first;
echo "<hr>";

# KEYS serve para criar outro array com os índices desse array - CRIA um novo array, os demais modificam.
$indices = array_keys($pedidos);
print_r($indices);
echo "<hr>";

# SUM serve para somar os valores de um array - IDEAL é que o array tenha somente valores que possam ser somados (sem strings)
$total = [10, 5, 3, 33, 11, 20];
echo array_sum($total);

?>