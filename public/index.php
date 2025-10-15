<?php require_once("./includes/page-top.php") ?>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="./img/hamburger.jpg" class="d-block" alt="..." width="700">
            </div>
            <div class="carousel-item">
                <img src="./img/cachorro.png" class="d-block" alt="..." width="700">
            </div>
            <div class="carousel-item">
                <img src="./img/batata.png" class="d-block" alt="..." width="700">
            </div>
            <div class="carousel-item">
                <img src="./img/frango.png" class="d-block" alt="..." width="700">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <main class="container p-3">
        <div class="row">
            <div class="col">
                <div class="card text-white bg-warning">
                    <img class="card-img-top" src="./img/cartoon.png" alt="Card image cap" style="width: 150px; height: auto; margin: 0 auto;">
                    <div class="card-body">
                        <p class="card-text">Sabor e qualidade em cada mordida. Nosso hambúrguer artesanal é feito com os melhores ingredientes, oferecendo uma experiência deliciosa e única.</p>
                        <a href="cardapio-hamburger.php" class="btn btn-vermelho">Ver opções</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-warning ">
                    <img class="card-img-top" src="./img/dogcartoon.png" alt="Card image cap" style="width: 150px; height: auto; margin: 0 auto;">
                    <div class="card-body">
                        <p class="card-text">O clássico hot dog, simples e irresistível. Salsicha suculenta, pão macio e o toque perfeito de condimentos. Uma delícia para qualquer momento!</p>
                        <a href="cardapio-hotdog.php" class="btn btn-vermelho">Ver opções</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-warning ">
                    <img class="card-img-top" src="./img/frita.png" alt="Card image cap" style="width: 150px; height: auto; margin: 0 auto;">
                     <div class="card-body">
                        <p class="card-text">Batata frita. Uma opção perfeita para quem busca algo rapido e delicioso!</p>
                        <a href="cardapio-potato.php" class="btn btn-vermelho">Ver opções</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-warning ">
                    <img class="card-img-top" src="./img/imagem.png" alt="Card image cap" style="width: 150px; height: auto; margin: 0 auto;">
                    <div class="card-body">
                        <p class="card-text">frango a passarinho, crocantes e com pelinhas douradas , perfeitos para acompanhar uma bebida. A combinação ideal de sabor e textura!</p>
                        <a href="cardapio-snacks.php" class="btn btn-vermelho">Ver opções</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require_once("./includes/page-botton.php") ?>