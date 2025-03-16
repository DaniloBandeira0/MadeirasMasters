<!-- filepath: /c:/Users/migue/Desktop/site galinheiro/index.php -->
<?php
// Dados dos produtos
$produtos = [
    ['nome' => 'Galinheiro Modelo 1', 'preco' => 500.00, 'imagem' => 'galinheiro1.jpg'],
    ['nome' => 'Viveiro Modelo 1', 'preco' => 700.00, 'imagem' => 'viveiro1.jpg']
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madeiras Masters - Galinheiros e Viveiros</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="script.js" defer></script>
</head>
<body>
    <header class="bg-dark text-white text-center py-3">
        <h1 class="h3">Madeiras Masters</h1>
        <nav>
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link text-white" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="sobre.html">Sobre Nós</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="produtos.html">Produtos</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="contato.html">Contato</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="container my-5">
        <section class="banner text-center mb-5">
            <h2 class="h2 mb-3">Galinheiros e Viveiros Americanos</h2>
            <p>Qualidade e durabilidade para sua criação.</p>
        </section>
        
        <section class="produtos">
            <h2 class="text-center mb-4">Nossos Produtos</h2>
            <div class="row">
                <?php foreach ($produtos as $produto): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?= $produto['imagem'] ?>" class="card-img-top" alt="<?= $produto['nome'] ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?= $produto['nome'] ?></h5>
                                <p class="card-text">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
                                <button class="btn btn-success" onclick="adicionarAoCarrinho('<?= $produto['nome'] ?>', <?= $produto['preco'] ?>)">Adicionar ao Carrinho</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Madeiras Masters - Todos os direitos reservados.</p>
        <p><a href="https://wa.me/seu_numero" class="text-white">Contato via WhatsApp</a></p>
    </footer>
</body>
</html>