<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itararé Prefeitura</title>
    <link rel="stylesheet" href="assets/styles/bootstrap.min.css">
    <link  rel="stylesheet" href="assets/styles/swiper-bundle.min.css">

    <link rel="stylesheet" href="assets/styles/main.css">
</head>
<body>
    <!-- CABEÇALHO PRINCIPAL -->
    <header id="header-main">
        <div class="container d-flex justify-content-between row-first py-2">
            <nav id="nav-top">
                <span class="tite-mobile fw-600 c-blue">Opções do site</span>
                <ul class="d-flex">
                    <li><a href="#">Transparência</a></li>
                    <li><a href="#">Legislação</a></li>
                    <li><a href="#">Licitações</a></li>
                    <li><a href="#">Esus</a></li>
                    <li><a href="#">Rm</a></li>
                    <li><a href="#">Plano Diretor</a></li>
                    <li><a href="#">Atendimento</a></li>
                    <li><a href="#">Webmail</a></li>
                </ul>
            </nav>

            <nav id="accessibility">
                <ul class="d-flex">
                    <li><strong class="c-blue">Acessibilidade:</strong></li>
                    <li><a href="#">Alto Contraste</a></li>
                    <li><a href="#">A+</a></li>
                    <li><a href="#">A-</a></li>
                </ul>
            </nav>
        </div>

        <div class="container d-flex justify-content-center justify-content-lg-between flex-wrap flex-lg-nowrap align-items-center py-4 my-2">
            <a href="index.php" class="mb-4 mb-lg-0 mr-4">
                <img src="assets/images/header/logo-itarare.png" alt="Itararé Prefeitura" class="img-fluid">
            </a>

            <form action="" class="search-form d-flex align-items-center justify-content-between">
                <input type="search" class="c-text-primary" placeholder="O que você procura?">
                <button type="submit">
                    <img src="assets/images/icons/search.svg" alt="Buscar no site" class="img-fluid">
                </button>
            </form>

            <div class="contact-phone d-none d-lg-block">
                <a href="#" class="d-flex align-items-center decoration-none text-6b6a">
                    <img src="assets/images/icons/phone-header.svg" alt="Fale com a Prefeitura" class="img-fluid mr-3">

                    <div>
                        <span class="subtitle c-blue d-block fs-16">fale com a gente</span>
                        <strong class="c-text-6b6a text-weight-500 d-block fs-22">(15) 3532-8000</strong>
                    </div>
                </a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg" id="nav-main" style="position: relative;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars c-light"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="d-flex align-items-start align-items-lg-center navbar-nav">
                        <li class="current-menu-item"><a href="index.php">Início</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">Site</a>
                            <ul class="sub-menu">
                                <li><a href="#">Acesso à Informação</a></li>
                                <li><a href="#">Transparência</a></li>
                                <li><a href="#">Legislação</a></li>
                            </ul>
                        </li>
                        <li><a href="#">A Cidade</a></li>
                        <li><a href="#">Governo Municipal</a></li>
                        <li><a href="#">Serviços</a></li>
                        <li><a href="page-news.php">Notícias</a></li>
                    </ul>
                </div>

                <ul class="access-btn">
                    <li>
                        <a href="#" class="d-flex align-items-center">
                            <span class="icon mr-2"><i class="fas fa-info"></i></span>
                            Acesso à Informação
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        
    </header>
    <!-- FIM CABEÇALHO PRINCIPAL -->