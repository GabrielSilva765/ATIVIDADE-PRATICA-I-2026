<?php

echo "CALCULANDO A MAIOR E A MENOR MÉDIA\n";

$alunos = [];
for($i=1; $i<4; $i++){
    echo "Aluno $i\n";

    $nome = readline("Digite o nome do aluno: ");
    $notas = [];
    for ($j = 1; $j < 4; $j++) {
        $nota = (float) readline("Digite a nota $j: ");
        $notas[] = $nota;
    }

    $media = array_sum($notas) / count($notas);

    $alunos[$i] = [
        'nome' => $nome,
        'notas' => $notas,
        'media' => $media
    ];
}

$maiorMedia = $alunos[1]['media'];
$menorMedia = $alunos[1]['media'];
$alunoMaiorMedia = $alunos[1]['nome'];
$alunoMenorMedia = $alunos[1]['nome'];

foreach ($alunos as $i => $aluno) {
    if ($aluno['media'] > $maiorMedia) {
        $maiorMedia = $aluno['media'];
        $alunoMaiorMedia = $aluno['nome'];
    }
    if ($aluno['media'] < $menorMedia) {
        $menorMedia = $aluno['media'];
        $alunoMenorMedia = $aluno['nome'];
    }
}

echo "A maior média é: $maiorMedia do aluno $alunoMaiorMedia\n";
echo "A menor média é: $menorMedia do aluno $alunoMenorMedia";
echo "\n";

?>