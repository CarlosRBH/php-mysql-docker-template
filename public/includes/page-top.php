<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madruguinha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./css/default.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/logo.png" alt="" width="32" height="32"> Madruguinha
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
                aria-controls="navbarMain" aria-expanded="false" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home Page</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Cardapio</a>
                        <ul class="dropdown-menu" aria-labelledby="menuLink">
                            <li>
                                <a class="dropdown-item" href="cardapio-hamburger.php">Hamburger</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="cardapio-hotdog.php">Hot Dog</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="cardapio-potato.php">Batatas</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="cardapio-snacks.php">Petiscos</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="cardapio-bebidas.php">Bebidas</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>