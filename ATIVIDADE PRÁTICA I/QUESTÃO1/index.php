<?php

echo "CALCULANDO A MÉDIA DE UM ALUNO\n";

$nome = readline("Digite o nome do aluno: ");

for ($i = 1; $i < 4; $i++) {
    $nota = readline("Digite a nota $i: ");
    $notas[] = $nota;
}

$media = array_sum($notas) / count($notas);

if ($media >= 7) {
    echo "O aluno $nome foi aprovado.";
}elseif($media >= 5 && $media < 7) {
    echo "O aluno $nome está de recuperação.";
} else {
    echo "O aluno $nome foi reprovado.";
}
echo "\nA média do aluno $nome é: $media\n";

?>