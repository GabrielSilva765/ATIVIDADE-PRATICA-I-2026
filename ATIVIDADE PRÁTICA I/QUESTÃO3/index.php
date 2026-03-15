<?php

echo "ATENDIMENTO DE UM A LANCHONETE\n";

$nome = readline("Digite o nome do cliente: ");

echo "Olá, $nome! Bem-vindo à nossa lanchonete.\n";
echo "Aqui estão as opções do nosso cardápio:\n";
echo "==============================\n";
echo "Código: 1 - X-Burguer - R$ 18,00\n";
echo "Código: 2 - X-Salada - R$ 20,00\n";
echo "Código: 3 - Batata Frita - R$ 15,00\n";
echo "Código: 4 - Refrigerante - R$ 8,00\n";
echo "Código: 5 - Suco Natural - R$ 10,00\n";
echo "==============================\n";

$produtos = [
    [
        'codigo' => 1,
        'nome' => 'X-Burguer',
        'preco' => 18.00,
        'quantidade' => 0
    ],
    [
        'codigo' => 2,
        'nome' => 'X-Salada',
        'preco' => 20.00,
        'quantidade' => 0
    ],
    [
        'codigo' => 3,
        'nome' => 'Batata Frita',
        'preco' => 15.00,
        'quantidade' => 0
    ],
    [
        'codigo' => 4,
        'nome' => 'Refrigerante',
        'preco' => 8.00,
        'quantidade' => 0
    ],
    [
        'codigo' => 5,
        'nome' => 'Suco Natural',
        'preco' => 10.00,
        'quantidade' => 0
    ]
];

$pedido = [];
while (true) {
    $codigoProduto = (int) readline("Digite o código do produto que deseja pedir (ou 0 para finalizar o pedido): ");

    if ($codigoProduto == 0) {
        break;
    }else {
        $quantidadeProduto = (int) readline("Digite a quantidade do produto: ");
    }
    
    $produtoEncontrado = 0;
    foreach ($produtos as $produto) {
        if ($produto['codigo'] == $codigoProduto) {
            $produtoEncontrado = $produto;
            break;
        }
    }
    if ($produtoEncontrado) {
        $produtoEncontrado['quantidade'] = $quantidadeProduto;
    }

    $preco = $produtoEncontrado['preco'] * $quantidadeProduto;
    
    if ($produtoEncontrado) {
        $pedido[] = $produtoEncontrado;
        echo "Produto adicionado ao pedido: {$produtoEncontrado['quantidade']} {$produtoEncontrado['nome']} - R$ $preco\n";
    } else {
        echo "Código de produto inválido. Por favor, tente novamente.\n";
    }
}
if (count($pedido) == 0) {
    echo "Nenhum produto foi pedido. Pedido cancelado.\n";
    exit;
}

$total = 0;
foreach ($pedido as $produto) {
    $total += $produto['preco'] * $produto['quantidade'];
}
echo "Preço final: R$ $total\n";

$valorPago = (float) readline("Digite o valor a ser pago: R$ ");

if ($valorPago < $total) {
    echo "Valor insuficiente. O valor pago é menor que o total do pedido.\n";
    exit;
}
$troco = $valorPago - $total;

echo "Pedido finalizado. Obrigado por escolher nossa lanchonete!\n";
echo "============Resumo do pedido ============\n";
echo "Cliente: $nome\n";
echo "Produtos pedidos: \n";
foreach ($pedido as $produto) {
    echo "- {$produto['quantidade']} {$produto['nome']}\n";
}
echo "Total a pagar: R$ $total\n";
echo "Valor pago: R$ $valorPago\n";
echo "Troco: R$ $troco\n";
echo "========================================\n";

?>