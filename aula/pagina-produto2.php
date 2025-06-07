<?php

$nome =  $_POST['nome'];
$preco = $_POST['preco']; 
$img = $_POST['img'];
$ava = $_POST['ava'];
$desc = $_POST['desc']
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="icon" type="image/png" href="" />
    <title>e-Tech</title>
</head>

<body class="bodyendereco">
    <header id="header" class="header1">
        <nav class="box1" id="box1">
            <img src="logo.png">
            <div class="icones">
                <a href="#">
                    <span class="material-symbols-outlined size-20">
                        search
                    </span>
                </a>
                <a href="carrinhocompra.html">
                    <span class="material-symbols-outlined size-20">
                        shopping_cart
                    </span>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined size-20">
                        person
                    </span>
                </a>
            </div>

        </nav>
        <nav class="box" id="box" class="header1">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="paginas_produtos/computadores.html">Computadores</a></li>
                <li><a href="paginas_produtos/hardwares.html">Hardwares</a></li>
                <li><a href="paginas_produtos/celulares.html">Celulares</a></li>
                <li><a href="paginas_produtos/tablets.html">Tablets</a></li>
                <li><a href="paginas_produtos/fones.html">Fones</a></li>
                <li><a href="paginas_produtos/notebooks.html">Notebooks</a></li>
                <li><a href="paginas_produtos/perifericos.html">Periféricos</a></li>
                <li><a href="paginas_produtos/outros.html">Outros</a></li>
            </ul>
        </nav>
    </header>
<?php
echo"
    <div id='tudo' class='tudo'></div>

    <div class='alinharimg-nome'>
        <div class='imgprodutopagina'><img src=$img alt='imgproduto'></div>
        <div class='nomeprodutopagina'>$nome</div>

        <div class='alinhar-avaliacao'>
            <div class='estrela-produto'><img src='icones/star.png' alt='estrela' class='estrela'></div>
            <div class='txtavaliacao'>$ava Avaliaram</div>
        </div>
        <div class='preco-pagina-produto'>R$3669,99</div>
        <div class='txtquantidade-produto'>Quantidade</div>
        <div class='botao-adicionar'><button>+</button></div>
        <div class='quantidade-itens-produto'>1</div>
        <div class='botao-diminuir'><button>-</button></div>
        <div class='descricao-pagina-produto'>$desc</div>
            <div class='botao-adicionar-ao-carrinho'><svg xmlns='http://www.w3.org/2000/svg' class='imgaddcarrinho' height='40px' viewBox='0 -960 960 960' width='2vw' fill='#1f1f1f'>
                <path d='M465-613v-123H341v-60h124v-123h60v123h123v60H525v123h-60ZM289.79-80Q260-80 239-101.21t-21-51Q218-182 239.21-203t51-21Q320-224 341-202.79t21 51Q362-122 340.79-101t-51 21Zm404 0Q664-80 643-101.21t-21-51Q622-182 643.21-203t51-21Q724-224 745-202.79t21 51Q766-122 744.79-101t-51 21ZM62-820v-60h116l170 364h287.71L796-796h67L701-493q-11 19-28.56 30.5T634-451H331l-56 104h491v60H284q-37.66 0-57.33-30T224-378l64-118-148-324H62Z' />
                </svg>";
?>
                <button>
                    <a href="#" onclick="document.getElementById('1').submit(); return false;"><p> Adicionar ao carrinho</p></a>
                </button>
            </div>
    </div>
    
<?php
    echo"<form id='1' action='adicionar.php' method='post' style='display: none;'>
        <input type='hidden' name='nome' value='$nome'>
        <input type='hidden' name='preco' value='$preco'>
        <input type='hidden' name='img' value='$img'>
    </form>";
?>


    <svg xmlns="http://www.w3.org/2000/svg" class="img-frete" xmlns:xlink="http://www.w3.org/1999/xlink"
        preserveAspectRatio="xMidYMid meet" version="1.0" viewBox="0.0 -0.0 98.5 62.9" zoomAndPan="magnify"
        style="fill: rgb(0, 0, 0);" original_string_length="2268" width="3vw" height="1.5vw">
        <g id="__id1_stotvzmu2b" style="fill: rgb(0, 0, 0);">
            <path d="m17.5,20.5H1.5c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5h16c.83,0,1.5.67,1.5,1.5s-.67,1.5-1.5,1.5Z"
                style="fill: inherit;" />
            <path d="m17.5,28.5H7.5c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5h10c.83,0,1.5.67,1.5,1.5s-.67,1.5-1.5,1.5Z"
                style="fill: inherit;" />
            <path d="m17.5,36.5h-4c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5h4c.83,0,1.5.67,1.5,1.5s-.67,1.5-1.5,1.5Z"
                style="fill: inherit;" />
            <path
                d="m92.96,53.26h-3.98c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5h3.98c1.4,0,2.54-1.14,2.54-2.54v-10.1c0-2.47-.89-4.87-2.49-6.74l-9.95-11.61c-1.65-1.93-4.05-3.03-6.59-3.03h-11.42c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5h11.42c3.42,0,6.65,1.49,8.87,4.08l9.95,11.61c2.07,2.42,3.22,5.51,3.22,8.69v10.1c0,3.05-2.48,5.54-5.54,5.54Z"
                style="fill: inherit;" />
            <path
                d="m69.59,53.26h-20.07c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5h20.07c.83,0,1.5.67,1.5,1.5s-.67,1.5-1.5,1.5Z"
                style="fill: inherit;" />
            <path
                d="m30.1,53.26h-7.46c-3.85,0-6.98-3.13-6.98-6.98v-5.38c0-.83.67-1.5,1.5-1.5s1.5.67,1.5,1.5v5.38c0,2.2,1.79,3.98,3.98,3.98h7.46c.83,0,1.5.67,1.5,1.5s-.67,1.5-1.5,1.5Z"
                style="fill: inherit;" />
            <path
                d="m64.25,45.5c-.83,0-1.5-.67-1.5-1.5V6.98c0-2.2-1.79-3.98-3.98-3.98H22.63c-2.2,0-3.98,1.79-3.98,3.98v6.26c0,.83-.67,1.5-1.5,1.5s-1.5-.67-1.5-1.5v-6.26c0-3.85,3.13-6.98,6.98-6.98h36.13c3.85,0,6.98,3.13,6.98,6.98v37.02c0,.83-.67,1.5-1.5,1.5Z"
                style="fill: inherit;" />
            <path
                d="m39.64,62.57c-5.86,0-10.62-4.76-10.62-10.62s4.76-10.62,10.62-10.62,10.62,4.76,10.62,10.62-4.76,10.62-10.62,10.62Zm0-18.24c-4.2,0-7.62,3.42-7.62,7.62s3.42,7.62,7.62,7.62,7.62-3.42,7.62-7.62-3.42-7.62-7.62-7.62Z"
                style="fill: inherit;" />
            <path
                d="m79.22,62.89c-5.86,0-10.62-4.76-10.62-10.62s4.76-10.62,10.62-10.62,10.62,4.76,10.62,10.62-4.76,10.62-10.62,10.62Zm0-18.24c-4.2,0-7.62,3.42-7.62,7.62s3.42,7.62,7.62,7.62,7.62-3.42,7.62-7.62-3.42-7.62-7.62-7.62Z"
                style="fill: inherit;" />
            <path
                d="m96.76,36.77h-12.93c-3.1,0-5.62-2.52-5.62-5.62v-8.99c0-.83.67-1.5,1.5-1.5s1.5.67,1.5,1.5v8.99c0,1.44,1.17,2.62,2.62,2.62h12.93c.83,0,1.5.67,1.5,1.5s-.67,1.5-1.5,1.5Z"
                style="fill: inherit;" />
        </g>
    </svg>
    <p class="calcularfrete"><u>Calcular frete</u></p>
    <div class="caixa-avaliacao"><input type="text"></div>
    <p class="txt-deixe-aqui-sua-avaliacao">Deixe aqui sua avaliação:</p>
    <input class="botao-enviar-avaliacao" type="submit" value=">">
    <h1 class="txtprodutos-que-voce-pode-gostar">Produtos que você pode gostar</h1>
    <div class="alinhar-recomendacoes">
        <div class="recomendacao1"></div>
        <div class="recomendacao2"></div>
        <div class="recomendacao3"></div>
    </div>



    <footer>
        <div class="footerNovosProdutos">
            <h1>Pronto para receber nossos novos produtos?</h1>
            <input type="email" name="emailfooter" placeholder="Seu Email">
            <button type="submit">Enviar</button>
        </div>
        <div class="footerSobre">
            <div class="sobref">
                <li><a href="" class="negritosobre">Sobre</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Sobre Nós</a></li>
                <li><a href="">Contate-nos</a></li>
            </div>
            <div class="suportef">
                <li><a href="" class="negritosuporte">Suporte</a></li>
                <li><a href="">Contate-nos</a></li>
                <li><a href="">Entrega</a></li>
                <li><a href="">Devolução</a></li>
                <li><a href="">FAQ</a></li>
            </div>
            <div class="mexerCurriculo">
                <div class="footerCurriculo">
                    <p>Trabalhe conosco</p>
                    <div class="botaocurriculo"><a href="">Envie seu curriculo aqui!</a></div>
                </div>
            </div>
        </div>
        <div class="footerf">
            <div class="footerredes">
                <div class="tamanhof">
                    <div class="blocosfooter">
                        <a href="#">Cookies</a>
                        <a href="#" class="espacoblocos">Condições de uso</a>
                    </div>
                    <div class="blocosfooter">
                        <a href="#">©2025 etech.com.br</a>
                        <a href="#" class="espacoblocos">Privacidade</a>
                    </div>
                    <div class="blocosfooter">
                        <a href="#">Nossas redes sociais</a>
                        <div class="imgbloco">
                            <a href="#"><img src="icones/youtube-logo.png"></a>
                            <a href="#"><img src="icones/instagram-logo.png"></a>
                            <a href="#"><img src="icones/x-logo.png"></a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

<script>  // script feito para borrar o fundo quando o mouse passar por cima do header

    const box = document.getElementById("box")
    const box1 = document.getElementById("box1")
    const borrar = document.getElementById("tudo")


    const boxs = [box, box1]
    boxs.forEach((bx) => {

        bx.addEventListener("mouseenter", () => {
            borrar.classList.add("borrar");
        });

        bx.addEventListener("mouseleave", () => {
            borrar.classList.remove("borrar")
        })

    })
</script>

</html>