<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas Condicionais</title>
</head>
<body>
    <form action="">

    <h3>1 - Faça um algoritmo que calcule a media ponderada das notas de 3 provas. A primeira e  a segunda prova tem peso 1 e a terceira tem peso 2. Ao final, mostrar a média do aluno e indicar se o aluno foi aprovado ou reprovado. A nota para aprovação deve ser igual ou  superior a 7.0 pontos. </h3>

    Digite a primeira nota: <input type="text" name="nota1"> <br><br>

    Digite a segunda nota: <input type="text" name="nota2"> <br><br>

    Digite a terceira nota: <input type="text" name="nota3"> <br><br>


    <h3>2- Leia a idade e o tempo de serviço de um trabalhador e escreva se ele pode ou não se  aposentar. As condições para aposentadoria são: 
        <br>• Ter pelo menos 65 anos; 
        <br>• Ou ter trabalhado pelo menos 30 anos; 
        <br>• Ou ter pelo menos 60 anos e trabalhado pelo menos 25 anos.</h3>

    Digite a idade: <input type="text" name="idade"> <br><br>

    Digite o tempo de serviço: <input type="text" name="tempoServico"> <br><br>

    <h3>3 - Uma empresa decide dar um aumento aos seus funcionários de acordo com uma tabela que considera o salario atual e o tempo de serviço de cada funcionário. Os funcionários com menor salario terão um aumento proporcionalmente maior do que os funcionários  com um salario maior, e conforme o tempo de serviço na empresa, cada funcionário irá receber um bônus adicional de salário. Faça um programa que leia:
        <br>• o valor do salario atual do funcionário; 
        <br>• o tempo de serviço desse funcionário na empresa (número de anos de trabalho na empresa).</h3>

    Digite o salário atual: <input type="text" name="salarioAtual"> <br><br>

    Digite o tempo de serviço (número de anos de trabalho na empresa): <input type="text" name="tempoTrabalho"> <br><br>

    <h3>4 - Calcule as raízes da equação de 2º grau. A variável a tem que ser diferente de zero. Caso seja igual, imprima a mensagem “Não e equação de segundo grau”.
    <br>• Se ∆ < 0, não existe real. Imprima a mensagem: Não existe raiz. 
    <br>• Se ∆ = 0, existe uma raiz real. Imprima a raiz e a mensagem Raiz  única.
    <br>• Se ∆ ≥ 0, imprima as duas raízes reais.</h3>

    Digite o valor de a: <input type="text" name="a"> <br><br>
    Digite o valor de b: <input type="text" name="b"> <br><br>
    Digite o valor de c: <input type="text" name="c"> <br><br>


    <input type="submit" value="verificar">


    </form>


</body>
</html>


<?php 

#Exercício 01

// Notas das provas
$nota1 = $_GET["nota1"]; // Primeira prova
$nota2 = $_GET["nota2"]; // Segunda prova
$nota3 = $_GET["nota3"]; // Terceira prova

// Pesos das provas
$peso1 = 1;
$peso2 = 1;
$peso3 = 2;

// Cálculo da média ponderada
$media = ($nota1 * $peso1 + $nota2 * $peso2 + $nota3 * $peso3) / ($peso1 + $peso2 + $peso3);

// Verificação de aprovação

if ($media >= 7.0) {
    echo "<br><br> Questão 01 <br><br> A média ponderada das notas informadas {$nota1}, {$nota2} e {$nota3} é {$media}, portanto o aluno está Aprovado. <br>";}

else { 
    echo "<br><br> Questão 01 <br><br> A média ponderada das notas informadas {$nota1}, {$nota2} e {$nota3} é {$media}, portanto o aluno está Reprovado. <br>";}


#Exercício 02

// Leitura da idade e tempo de serviço
$idade = $_GET["idade"];
$tempoServico = $_GET["tempoServico"];

#Condições:
// Ter pelo menos 65 anos; 
// Ou ter trabalhado pelo menos 30 anos; 
// Ou ter pelo menos 60 anos e trabalhado pelo menos 25 anos.

// Verificação das condições de aposentadoria
if ($idade >= 65 || $tempoServico >= 30 || ($idade >= 60 && $tempoServico >= 25)) {
    echo "<br><br> Questão 02 <br><br> Para idade {$idade} e tempo de serviço {$tempoServico} informado o trabalhador pode se aposentar. <br>";
} else {
    echo "<br><br> Questão 02 <br><br> Para idade {$idade} e tempo de serviço {$tempoServico} informado o trabalhador não pode se aposentar ainda. <br>";
}


#Exercício 03

// Leitura do salário atual e tempo de trabalho
$salarioAtual = $_GET["salarioAtual"];
$tempoTrabalho = $_GET["tempoTrabalho"];

/* Use os critérios abaixo para calcular o salario reajustado deste funcionário e imprima o valor do salario final reajustado, ou uma mensagem caso o funcionário não tenha direito a nenhum aumento.*/ 

/*
/*Critérios:
Salário Atual Até 500,00 Reajuste(%) 25% Tempo de Serviço Abaixo de 1 ano Bônus Sem bônus.
Salário Atual Até 1000,00 Reajuste(%) 20% Tempo de Serviço De 1 a 3 anos Bônus 100,00.
Salário Atual Até 1500,00 Reajuste(%) 15% Tempo de Serviço De 4 a 6 anos Bônus 200,00.
Salário Atual Até 2000,00 Reajuste(%) 10% Tempo de Serviço De 7 a 10 anos Bônus 300,00.
Salário Atual Até Acima de 2000,00 Reajuste(%) Sem reajuste Tempo de Serviço Mais de 10 anos Bônus 500,00. */

// Cálculo do reajuste salarial e novo salário, conforme as faixas salariais:
if ($salarioAtual <= 500) {
    $reajuste = $salarioAtual * 0.25;
    $novoSalario = $salarioAtual + $reajuste;
} elseif ($salarioAtual > 500 && $salarioAtual <= 1000.00) {
    $reajuste = $salarioAtual * 0.20;
    $novoSalario = $salarioAtual + $reajuste;
} elseif ($$salarioAtual > 1000.00 && $$salarioAtual <= 1500.00) {
    $reajuste = $salarioAtual * 0.15;
    $novoSalario = $salarioAtual + $reajuste;
} elseif ($salarioAtual > 1500.00 && $salarioAtual <= 2000.00) {
    $reajuste = $salarioAtual * 0.15;
    $novoSalario = $salarioAtual + $reajuste;
} else {
    $reajuste = 0; // Acima de R$ 2000,00 Sem reajuste
    $novoSalario = $salarioAtual + $reajuste;
}

// Definição dos bônus por tempo de serviço
if ($tempoTrabalho < 1) {
    $bonus = 0;
} elseif ($tempoTrabalho >= 1 && $tempoTrabalho <= 3) {
    $bonus = 100.00;
} elseif ($tempoTrabalho >= 4 && $tempoTrabalho <= 6) {
    $bonus = 200.00;
} elseif ($tempoTrabalho >= 7 && $tempoTrabalho <= 10) {
    $bonus = 300.00;
} else {
    $bonus = 500.00;
}

// Cálculo do novo salário com bônus
$novoSalarioComBonus = $novoSalario + $bonus;

// Exibição dos resultados
echo "<br><br> Questão 03 <br><br> Salário atual: R$ {$salarioAtual}. <br>";
echo "Novo salário com reajuste: R$ {$novoSalario}. <br>";
echo "Bônus adicional: R$ {$bonus}. <br>";
echo "Novo salário com bônus: R$ {$novoSalarioComBonus}. <br>";


#Exercício 04

// Coeficientes da equação ax^2 + bx + c = 0
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];

#Neste algoritmo:
// Os coeficientes a, b e c representam os termos da equação quadrática.
// O discriminante (∆) é calculado como Δ=b2−4ac

// Cálculo do discriminante (∆)
$delta = $b * $b - 4 * $a * $c;

// Verificação se é uma equação de segundo grau
if ($a == 0) {
    echo "<br><br> Questão 04 <br><br> Não é uma equação de segundo grau. <br>";
} else {
    if ($delta < 0) {
        echo "Não existe raiz real.";
    } elseif ($delta == 0) {
        $raizUnica = -$b / (2 * $a);
        echo "<br><br> Questão 04 <br><br> Raiz única: {$raizUnica}. <br>";
    } else {
        $raiz1 = (-$b + sqrt($delta)) / (2 * $a);
        $raiz2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "<br><br> Questão 04 <br><br> Raiz 1: {$raiz1}. <br>";
        echo "Raiz 2: {$raiz2}. <br>";
    }
}



?>