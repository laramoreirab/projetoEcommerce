<?php
session_start();

function adicionarAoCarrinho($id, $nome, $preco, $quantidade) {
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    // Se já existe o produto, soma quantidade
    if (isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id]['quantidade'] += $quantidade;
    } else {
        $_SESSION['carrinho'][$id] = [
            'nome' => $nome,
            'preco' => $preco,
            'quantidade' => $quantidade
        ];
    }
}

function removerDoCarrinho($id) {
    if (isset($_SESSION['carrinho'][$id])) {
        unset($_SESSION['carrinho'][$id]);
    }
}

function atualizarQuantidade($id, $quantidade) {
    if (isset($_SESSION['carrinho'][$id])) {
        if ($quantidade <= 0) {
            removerDoCarrinho($id);
        } else {
            $_SESSION['carrinho'][$id]['quantidade'] = $quantidade;
        }
    }
}

function calcularTotal() {
    $total = 0;
    if (isset($_SESSION['carrinho'])) {
        foreach ($_SESSION['carrinho'] as $item) {
            $total += $item['preco'] * $item['quantidade'];
        }
    }
    return $total;
}
?>
