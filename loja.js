// FUNÇÃO REMOVER DO CARRINHO
const removerprodutocarrinho = document.getElementsByClassName("removerprodutocarrinho")
for (var i = 0; i < removerprodutocarrinho.length; i++) {
    removerprodutocarrinho[i].addEventListener("click", function() {
        event.target.parentElement.parentElement.remove()
    })
}
// FUNÇÃO ALTERAR O PREÇO DO CARRINHO
let precototal = 0
const produtoscarrinho = document.getElementsByClassName("produtoscarrinho")
for (var i = 0; i < produtoscarrinho.length; i++){
    const precoproduto = produtoscarrinho[i].getElementsByClassName("precoproduto")[0].innerText.replace("R$", "").replace(",", ".")
    const quantidadeprodutos = produtoscarrinho[i].getElementsByClassName("quantidadeprodutos")[0].value
precototal = precototal + (precoproduto * quantidadeprodutos)
}
document.querySelector("precoproduto span").innerText = precototal