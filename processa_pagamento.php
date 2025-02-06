<!-- filepath: /c:/Users/migue/Desktop/site galinheiro/processa_pagamento.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitização dos dados recebidos
    $nome = htmlspecialchars($_POST['nome']);
    $endereco = htmlspecialchars($_POST['endereco']);
    $cartao = htmlspecialchars($_POST['cartao']); // Em um sistema real, nunca exiba o número do cartão

    // Aqui você processaria o pagamento e geraria um resumo da compra
    // Em um sistema real, você deve validar e processar o pagamento de forma segura

    echo "<!DOCTYPE html>";
    echo "<html lang='pt-BR'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Compra Realizada - Madeiras Masters</title>";
    echo "<link rel='stylesheet' href='styles.css'>";
    echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>";
    echo "<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'></script>";
    echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js'></script>";
    echo "</head>";
    echo "<body>";
    echo "<header class='bg-dark text-white text-center py-3'>";
    echo "<h1 class='h3'>Madeiras Masters</h1>";
    echo "<nav>";
    echo "<ul class='nav justify-content-center'>";
    echo "<li class='nav-item'><a class='nav-link text-white' href='index.php'>Home</a></li>";
    echo "<li class='nav-item'><a class='nav-link text-white' href='sobre.html'>Sobre Nós</a></li>";
    echo "<li class='nav-item'><a class='nav-link text-white' href='produtos.html'>Produtos</a></li>";
    echo "<li class='nav-item'><a class='nav-link text-white' href='contato.html'>Contato</a></li>";
    echo "<li class='nav-item'><a class='nav-link text-white' href='carrinho.html'>Carrinho</a></li>";
    echo "</ul>";
    echo "</nav>";
    echo "</header>";
    echo "<main class='container my-5'>";
    echo "<h1 class='text-center'>Compra realizada com sucesso!</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Endereço:</strong> $endereco</p>";
    echo "<p><strong>Número do Cartão:</strong> **** **** **** " . substr($cartao, -4) . "</p>"; // Exibe apenas os últimos 4 dígitos do cartão
    echo "</main>";
    echo "<footer class='bg-dark text-white text-center py-3'>";
    echo "<p>&copy; 2025 Madeiras Masters - Todos os direitos reservados.</p>";
    echo "<p><a href='https://wa.me/seu_numero' class='text-white'>Contato via WhatsApp</a></p>";
    echo "</footer>";
    echo "</body>";
    echo "</html>";
} else {
    echo "<!DOCTYPE html>";
    echo "<html lang='pt-BR'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Erro - Madeiras Masters</title>";
    echo "<link rel='stylesheet' href='styles.css'>";
    echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>";
    echo "<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'></script>";
    echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js'></script>";
    echo "</head>";
    echo "<body>";
    echo "<header class='bg-dark text-white text-center py-3'>";
    echo "<h1 class='h3'>Madeiras Masters</h1>";
    echo "<nav>";
    echo "<ul class='nav justify-content-center'>";
    echo "<li class='nav-item'><a class='nav-link text-white' href='index.php'>Home</a></li>";
    echo "<li class='nav-item'><a class='nav-link text-white' href='sobre.html'>Sobre Nós</a></li>";
    echo "<li class='nav-item'><a class='nav-link text-white' href='produtos.html'>Produtos</a></li>";
    echo "<li class='nav-item'><a class='nav-link text-white' href='contato.html'>Contato</a></li>";
    echo "<li class='nav-item'><a class='nav-link text-white' href='carrinho.html'>Carrinho</a></li>";
    echo "</ul>";
    echo "</nav>";
    echo "</header>";
    echo "<main class='container my-5'>";
    echo "<h1 class='text-center'>Erro: Acesso inválido.</h1>";
    echo "</main>";
    echo "<footer class='bg-dark text-white text-center py-3'>";
    echo "<p>&copy; 2025 Madeiras Masters - Todos os direitos reservados.</p>";
    echo "<p><a href='https://wa.me/seu_numero' class='text-white'>Contato via WhatsApp</a></p>";
    echo "</footer>";
    echo "</body>";
    echo "</html>";
}
?>