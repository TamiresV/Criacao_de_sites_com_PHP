<!-- Comando para terminal: php -S localhost:8000 -->
<?php 

$mensagem = 'Hello World!<br>';

print $mensagem;

// VARIÁVEIS: SEMPRE COMEÇAM COM CIFRÃO E SÃO CASE SENSITIVE
// OPERAÇÕES:
$A = 2;
$B = 3;

$RES = $A + $B;
print 'SOMA:';
print $RES;

$RES = $A - $B;
print '<br>SUBTRAÇÃO:';
print $RES;

$RES = $A * $B;
print '<br>MULTIPLICAÇÃO:';
print $RES;

$RES = $A / $B;
print '<br>DIVISÃO:';
print $RES;

$RES = $A ** $B;
print '<br>EXPONENCIAÇÃO:';
print $RES;

// OPERADORES CONDICIONAIS:

if($A % 2 == 1){
	echo '<br>Número ímpar';
}else{
	echo '<br>Número par';
}

echo '<br>';
// LAÇOS DE REPETIÇÃO
echo 'WHILE:';
$i=0;
while($i < 10){
	echo $i;
	$i++;
}

echo '<br>';
$i=0;
echo 'DO WHILE:';
do{
	echo $i;
	$i++;
}while($i< 10);

echo '<br>';
echo 'FOR:';
for($i=0;$i<10;$i++){
	echo $i;
}

echo '<br>';
echo 'FOREACH:';
$i = [0,1,2,3,4,5,6,7,8,9];
// PARA CADA ELEMENTO DE I CHAMADO DE J FAZ
foreach ($i as $j) {
	echo $j;
}