let carrinho = [];

function adicionarAoCarrinho(nome, preco) {
    carrinho.push({ nome, preco });
    atualizarCarrinho();
}

function atualizarCarrinho() {
    const resumoCarrinho = document.getElementById('resumoCarrinho');
    resumoCarrinho.innerHTML = '';

    let total = 0;
    carrinho.forEach(item => {
        resumoCarrinho.innerHTML += `<p>${item.nome} - R$ ${item.preco.toFixed(2)}</p>`;
        total += item.preco;
    });

    resumoCarrinho.innerHTML += `<h3>Total: R$ ${total.toFixed(2)}</h3>`;
}
