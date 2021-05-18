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
            <a href="#" class="mb-4 mb-lg-0 mr-4">
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
                        <li class="current-menu-item"><a href="#">Início</a></li>
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
                        <li><a href="#">Notícias</a></li>
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

    <!-- SLIDERS HOME -->
    <section id="mural-news">
        <div class="container">
            <div class="d-flex align-items-start justify-content-center justify-content-lg-between flex-wrap">
                <div class="col-slider">
                    <div class="swiper-container news-slider">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php for ($i=1;$i<4;$i++) : ?>
                            <div class="swiper-slide">
                                <div class="item text-left">
                                    <a href="#">
                                        <img src="assets/images/noticias/banner-home/principal-1.jpg" class="w-100"/>
                                    </a>
                                    <div class="content">
                                        <a href="#">
                                            <span class="category-news c-yellow-light mb-2 fs-14 d-block">Política</span>
                                            <h6 class="c-text-eaeaea fs-20">Em Brasília <?= $i; ?> (DF), Heliton do Valle busca recursos e melhorias para a Saúde de Itararé (SP), junto ao Ministério da Saúde.</h6>
                                        </a>
                                    </div>

                                    <a href="#" class="see-all-news fs-13 d-flex align-items-center">
                                        <span class="mr-2">Ver todas as notícias</span>
                                        <i class="fas fa-caret-right c-blue"></i>
                                    </a>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        -->
                        <!-- If we need scrollbar
                        <div class="swiper-scrollbar"></div>
                        -->
                    </div>
                </div>
                <div class="col-news">
                    <?php for ($i=2;$i<4;$i++) : ?>
                    <div class="box-news mb-4">
                        <div class="item text-left">
                            <a href="#">
                                <img src="assets/images/noticias/banner-home/<?= $i; ?>.jpg" class="w-100"/>
                                <div class="content pb-2">
                                    <span class="category-news c-yellow-light mb-2 fs-14 d-block">Categoria Tal</span>
                                    <h6 class="c-text-eaeaea fs-16">Um título bem elaborado para a notícia deverá vir aqui nesse espaço, legal né!!</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- FIM SLIDER HOME -->

    <!-- BOTÕES DESTAQUE -->
    <section id="buttons-access-home" class="py-4 mt-2">
        <div class="container d-flex justify-content-between flex-wrap">
            <div class="card-items-access">
                <h6 class="fs-22 c-blue-title border-blue title-border-left">Coronavirus</h6>

                <ul class="d-flex align-items-center justify-content-center flex-wrap list-style-none mt-4">
                    <!-- CORONAVIRUS -->
                    <li class="bg-blue">
                        <a href="#" class="d-block text-center">
                            <img src="assets/images/icons/corona-dengue-imprensa/coronavirus.svg" alt="" class="img-fluid icon-mask">
                            <span class="icon d-flex justify-content-center align-items-center">
                                <img src="assets/images/icons/corona-dengue-imprensa/boletins-de-noticias.svg" alt="" class="img-fluid">
                            </span>
                            <span class="title-button d-block mt-2">Boletins de <br>Notícias</span>
                        </a>
                    </li>

                    <li class="bg-blue">
                        <a href="#" class="d-block text-center">
                            <img src="assets/images/icons/corona-dengue-imprensa/coronavirus.svg" alt="" class="img-fluid icon-mask">
                            <span class="icon d-flex justify-content-center align-items-center">
                                <img src="assets/images/icons/corona-dengue-imprensa/acompanhe-em-tempo-real.svg" alt="" class="img-fluid">
                            </span>
                            <span class="title-button d-block mt-2">Acompanhe em tempo real</span>
                        </a>
                    </li>

                    <li class="bg-blue">
                        <a href="#" class="d-block text-center">
                            <img src="assets/images/icons/corona-dengue-imprensa/coronavirus.svg" alt="" class="img-fluid icon-mask">
                            <span class="icon d-flex justify-content-center align-items-center">
                                <img src="assets/images/icons/corona-dengue-imprensa/todos-os-decretos.svg" alt="" class="img-fluid">
                            </span>
                            <span class="title-button d-block mt-2">Todos os decretos</span>
                        </a>
                    </li>

                    
                </ul>
            </div>

            <!-- DENGUE -->
            <div class="card-items-access">
                <h6 class="fs-22 c-blue-title border-green title-border-left">Dengue</h6>
                <ul class="d-flex align-items-center justify-content-center flex-wrap list-style-none mt-4">
                    <li class="bg-green">
                        <a href="#" class="d-block text-center">
                            <img src="assets/images/icons/corona-dengue-imprensa/dengue.svg" alt="" class="img-fluid icon-mask icon-dengue">
                            <span class="icon d-flex justify-content-center align-items-center">
                                <img src="assets/images/icons/corona-dengue-imprensa/boletins-de-noticias.svg" alt="" class="img-fluid">
                            </span>
                            <span class="title-button d-block mt-2">Boletins de <br>Notícias</span>
                        </a>
                    </li>

                    <li class="bg-green">
                        <a href="#" class="d-block text-center">
                            <img src="assets/images/icons/corona-dengue-imprensa/dengue.svg" alt="" class="img-fluid icon-mask icon-dengue">
                            <span class="icon d-flex justify-content-center align-items-center">
                                <img src="assets/images/icons/corona-dengue-imprensa/acompanhe-em-tempo-real.svg" alt="" class="img-fluid">
                            </span>
                            <span class="title-button d-block mt-2">Acompanhe em tempo real</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- IMPRENSA -->
            <div class="card-items-access">
                <h6 class="fs-22 c-blue-title border-orange title-border-left">Imprensa</h6>
                <ul class="d-flex align-items-center justify-content-center flex-wrap list-style-none mt-4">
                    <li class="bg-orange">
                        <a href="#" class="d-block text-center">
                            <img src="assets/images/icons/corona-dengue-imprensa/imprensa.svg" alt="" class="img-fluid icon-mask icon-imprensa">
                            <span class="icon d-flex justify-content-center align-items-center">
                                <img src="assets/images/icons/corona-dengue-imprensa/boletins-de-noticias.svg" alt="" class="img-fluid">
                            </span>
                            <span class="title-button d-block mt-2">Sala de Imprensa</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- FIM BOTÕES DESTAQUE -->

    <!-- ACESSO RÁPIDO -->
    <section id="quick-access" class="mb-5 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h6 class="fs-22 c-blue-title fw-600 pt-5">Acesso Rápido</h6>
                </div>
            </div>

            <ul class="row list-quick-access text-center list-style-none p-0 m-0 my-4">
                <?php
                    $titulos = [
                        'Portal de <br><strong style="color: #009452;">Transparência</strong>',
                        '<strong style="color: #218CA5;">Nota Fiscal<br></strong> Eletrônica',
                        'Mural de <br><strong style="color: #4372C6;">Notícias</strong>',
                        '<strong style="color: #1E7EBE;">Jornal<br></strong> Oficial',
                        'Acesso às <br><strong style="color: #EE7928;">Licitações</strong>',
                        'Processo <br><strong style="color: #F6AF26;">Seletivo</strong>',
                    ];
                    $imagens= [
                        'portal-de-transparencia',
                        'nota-fiscal-eletronica',
                        'mural-de-noticias',
                        'jornal-oficial',
                        'acesso-as-licitacoes',
                        'processo-seletivo'
                    ];

                    foreach ($titulos as $key => $titulo) {
                ?>
                <!-- item -->
                <li class="col-6 col-md-3 col-lg-2 item my-2">
                    <a href="#">
                        <span class="icon d-flex align-items-center justify-content-center mb-3 mx-auto">
                            <img src="assets/images/icons/acesso-rapido/<?=$imagens[$key];?>.svg" alt="" class="img-fluid">
                        </span>
                        <span class="title d-block"><?=$titulo;?></span>
                    </a>
                </li>
                <!-- item -->
                <?php } ?>
            </ul>

            <a href="#" class="btn-default btn-icon d-table mx-auto my-5">
                <div class="d-flex align-items-center">
                    <span class="icon d-flex align-items-center justify-content-center"><i class="fas fa-plus"></i></span>
                    <span class="text-uppercase">Mais Serviços</span>
                </div>
            </a>
        </div>
    </section>
    <!-- FIM ACESSO RÁPIDO -->

    <!-- TURISMO -->
    <section id="tourism" class="" style="background-image: url('assets/images/turismo/bg.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row mb-4 pt-0 pt-lg-5">
                        <div class="col-12 col-lg-10 text-center col-text mt-4 pt-2">
                            <h6 class="fs-22 c-blue fw-300">Turismo Itararé</h6>
                            <h5 class="fs-32 c-light fw-600">Venha conhecer um pouco da nossa história!</h5>
                            <p class="fs-14 c-light">Conheça as belezas e os pontos turísticos de Itararé, se informe e tire suas dúvidas pelo nosso portal.</p>

                            <a href="#" class="btn-default btn-icon d-table mx-auto my-5">
                                <div class="d-flex align-items-center">
                                    <span class="icon d-flex align-items-center justify-content-center"><i class="fas fa-plus"></i></span>
                                    <span class="text-uppercase">Acessar Portal</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="photos-small w-100">
                        <div class="row">
                            <div class="col-6 col-sm-6">
                                <div class="img-border-mold">
                                    <img src="assets/images/turismo/small-1.jpg" alt="" class="w-100">
                                </div>
                            </div>

                            <div class="col-6 col-sm-6">
                                <div class="img-border-mold">
                                    <img src="assets/images/turismo/small-2.jpg" alt="" class="w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>

                <div class="col-12 col-lg-6 d-none d-lg-block">
                    <div class="img-border-mold img-big">
                        <img src="assets/images/turismo/big.jpg" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sep-tourism"></div>
    <!-- FIM TURISMO -->

    <!-- PRINCIPAIS SERVIÇOS -->
    <section id="main-services" class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="content w-100">
                                <header>
                                    <h6 class="fs-22 c-blue-title fw-600 mb-4">Principais Serviços</h6>
                                </header>
                                <p>A Central de Serviços Digitais tem por objetivo possibilitar acesso da população aos serviços públicos no formato digital.<br>
                                Para acessar todos os serviços, clique no botão abaixo:</p>

                                <a href="#" class="btn-default btn-icon d-table mt-5">
                                    <div class="d-flex align-items-center">
                                        <span class="icon d-flex align-items-center justify-content-center"><i class="fas fa-plus"></i></span>
                                        <span class="text-uppercase">Todos os Serviços</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                    <div class="swiper-container main-services-slider">
                        <!-- If we need navigation buttons -->
                        <div class="btn-control button-prev">
                            <img src="assets/images/icons/servicos/arrow-left.svg" alt="">
                        </div>
                        <div class="btn-control button-next">
                            <img src="assets/images/icons/servicos/arrow-right.svg" alt="">
                        </div>
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php for ($i=0;$i<3;$i++) : ?>
                            <!-- item  -->
                            <div class="swiper-slide">
                                <div class="item text-left d-flex justify-content-between flex-wrap">
                                    <!-- linha -->
                                    <a href="#" class="d-flex align-items-center" style="border-left-color: #009452;">
                                        <span class="icon d-flex align-items-center justify-content-center mr-2" style="background: #009452;">
                                            <img src="assets/images/icons/servicos/banco-povo.svg" class="img-fluid"/>
                                        </span>
                                        <span class="title">
                                            Banco do <br>Povo
                                        </span>
                                    </a>

                                    <!-- linha -->
                                    <a href="#" class="d-flex align-items-center" style="border-left-color: #66388D;">
                                        <span class="icon d-flex align-items-center justify-content-center mr-2" style="background: #66388D;">
                                            <img src="assets/images/icons/servicos/horario-de-onibus.svg" class="img-fluid"/>
                                        </span>
                                        <span class="title">
                                            Horário de Ônibus
                                        </span>
                                    </a>

                                    <!-- linha -->
                                    <a href="#" class="d-flex align-items-center" style="border-left-color: #004A98;">
                                        <span class="icon d-flex align-items-center justify-content-center mr-2" style="background: #004A98;">
                                            <img src="assets/images/icons/servicos/acesse-links-uteis.svg" class="img-fluid"/>
                                        </span>
                                        <span class="title">
                                            Acesse os links úteis
                                        </span>
                                    </a>

                                    <!-- linha -->
                                    <a href="#" class="d-flex align-items-center" style="border-left-color: #EAAA0A;">
                                        <span class="icon d-flex align-items-center justify-content-center mr-2" style="background: #EAAA0A;">
                                            <img src="assets/images/icons/servicos/vagas-de-emprego.svg" class="img-fluid"/>
                                        </span>
                                        <span class="title">
                                            Vagas de Emprego
                                        </span>
                                    </a>

                                    <!-- linha -->
                                    <a href="#" class="d-flex align-items-center" style="border-left-color: #EE7928;">
                                        <span class="icon d-flex align-items-center justify-content-center mr-2" style="background: #EE7928;">
                                            <img src="assets/images/icons/servicos/conselho-municipal-da-crianca-e-adolescente.svg" class="img-fluid"/>
                                        </span>
                                        <span class="title">
                                            Conselho Municipal da Criança...
                                        </span>
                                    </a>

                                    <!-- linha -->
                                    <a href="#" class="d-flex align-items-center" style="border-left-color: #009452;">
                                        <span class="icon d-flex align-items-center justify-content-center mr-2" style="background: #009452;">
                                            <img src="assets/images/icons/servicos/fale-com-a-prefeitura.svg" class="img-fluid"/>
                                        </span>
                                        <span class="title">
                                            Fale com a Prefeitura
                                        </span>
                                    </a>

                                    <!-- linha -->
                                    <a href="#" class="d-flex align-items-center" style="border-left-color: #1A88D9;">
                                        <span class="icon d-flex align-items-center justify-content-center mr-2" style="background: #1A88D9;">
                                            <img src="assets/images/icons/servicos/defesa-do-consumidor.svg" class="img-fluid"/>
                                        </span>
                                        <span class="title">
                                            Defesa do Consumidor
                                        </span>
                                    </a>

                                    <!-- linha -->
                                    <a href="#" class="d-flex align-items-center" style="border-left-color: #349F8D;">
                                        <span class="icon d-flex align-items-center justify-content-center mr-2" style="background: #349F8D;">
                                            <img src="assets/images/icons/servicos/2-via-boleto.svg" class="img-fluid"/>
                                        </span>
                                        <span class="title">
                                            2ª via boleto ISSQN/TLF
                                        </span>
                                    </a>

                                    <!-- linha -->
                                    <a href="#" class="d-flex align-items-center" style="border-left-color: #81AF27;">
                                        <span class="icon d-flex align-items-center justify-content-center mr-2" style="background: #81AF27;">
                                            <img src="assets/images/icons/servicos/licitacoes.svg" class="img-fluid"/>
                                        </span>
                                        <span class="title">
                                            Licitações
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        
                        
                        <!-- If we need scrollbar
                        <div class="swiper-scrollbar"></div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROPAGANDA -->                           
    <section id="adv-footer" class="py-4 my-5">
        <div class="container">
            <a href="#">
                <img src="assets/images/banner-coronavirus.jpg" alt="" class="w-100">
            </a>
        </div>
    </section>
    <!-- FIM PROPAGANDA -->                           

    <!-- RODAPE -->
    <footer id="footer-main" class="pt-5">
        <div class="container my-4 mb-0 pb-5">
            <div class="row align-items-center">
                <div class="col-12 col-lg-3 text-center text-lg-left mb-5 mb-lg-0" style="position: relative;">
                    <span class="fw-300 sobtitle d-block ls-2px">fale conosco</span>
                    <span class="fw-600 fs-26 d-block c-blue-extralight">Atendimento</span>

                    <div class="arrow-div d-none d-lg-block">
                        <img src="assets/images/rodape/seta.svg" alt="">
                    </div>
                </div>

                <div class="col-12 col-lg-9 d-flex justify-content-between flex-wrap flex-md-nowrap">
                     <ul class="list-items list-style-none p-0 mb-4 m-md-0">
                        <li>
                            <a href="#" class="d-flex align-items-center">      
                                <span class="icon mr-3 d-flex align-items-center justify-content-center">
                                    <img src="assets/images/rodape/telefone.svg" alt="Telefone">
                                </span>
                                <div>
                                    <span class="subtitle d-block">
                                        telefone
                                    </span>
                                    <span class="title d-block">(15) 3532-8000</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="d-flex align-items-center">      
                                <span class="icon mr-3 d-flex align-items-center justify-content-center">
                                    <img src="assets/images/rodape/email.svg" alt="E-mail">
                                </span>
                                <div>
                                    <span class="subtitle d-block">
                                        e-mail
                                    </span>
                                    <span class="title d-block">protocolo@itarare.sp.gov.br</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="d-flex align-items-center">      
                                <span class="icon mr-3 d-flex align-items-center justify-content-center">
                                    <img src="assets/images/rodape/facebook.svg" alt="Facebook">
                                </span>
                                <div>
                                    <span class="subtitle d-block">
                                        Rede Social
                                    </span>
                                    <span class="title d-block">Acompanhe nossa Fanpage</span>
                                </div>
                            </a>
                        </li>
                     </ul>
                     
                     <div class="border-col d-none d-md-block"></div>
                     
                     <ul class="list-items list-style-none p-0 m-0">
                        <li>
                            <a href="#" class="d-flex align-items-start">      
                                <span class="icon mr-3 d-flex align-items-center justify-content-center">
                                    <img src="assets/images/rodape/localizacao.svg" alt="Localização">
                                </span>
                                <div>
                                    <span class="subtitle d-block">
                                        localização
                                    </span>
                                    <span class="title d-block">
                                    Rua XV de Novembro, 83 - Centro<br>
                                    Itararé SP <br>
                                    CEP 18.460-000
                                    </span>
                                </div>
                            </a>
                        </li>

                        <li class="rota mt-3">
                            <a href="#" class="btn-default btn-icon d-table mt-4">
                                <div class="d-flex align-items-center">
                                    <span class="mr-2 d-flex align-items-center justify-content-center">
                                        <img src="assets/images/rodape/tracar-rota.svg" alt="Traçar Rota">
                                    </span>
                                    <span class="text-uppercase">TRAÇAR ROTA | GOOGLE MAPS</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <footer class="pb-5">
            <div class="container">
                <div class="row row-items-menu pt-5">
                    <div class="col-12 d-flex flex-wrap flex-md-nowrap justify-content-between">
                        <nav class="navbar-footer">
                            <span class="title c-blue-extralight fs-20 fw-600">Site</span>
                            <ul class="list-style-none p-0 my-2">
                                <li><a href="#">Início</a></li>
                                <li><a href="#">Acesso à Informação</a></li>
                                <li><a href="#">Transparência</a></li>
                                <li><a href="#">Legislação</a></li>
                                <li><a href="#">A Cidade</a></li>
                                <li><a href="#">Licitações</a></li>
                                <li><a href="#">ESUS</a></li>
                                <li><a href="#">RM</a></li>
                                <li><a href="#">Atendimento</a></li>
                                <li><a href="#">Webmail</a></li>
                            </ul>
                        </nav>


                        <nav class="navbar-footer">
                            <span class="title c-blue-extralight fs-20 fw-600">A Cidade</span>
                            <ul class="list-style-none p-0 my-2">
                                <li><a href="#">História</a></li>
                                <li><a href="#">Dados do Município</a></li>
                                <li><a href="#">Símbolos Oficiais</a></li>
                            </ul>
                        </nav>


                        <nav class="navbar-footer">
                            <span class="title c-blue-extralight fs-20 fw-600">Governo Municipal</span>
                            <ul class="list-style-none p-0 my-2">
                                <li><a href="#">Prefeito</a></li>
                                <li><a href="#">Vice-Prefeito</a></li>
                                <li><a href="#">Chefe de Gabinete</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Secretarias</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Secretaria 1</a></li>
                                        <li><a href="#">Secretaria 2</a></li>
                                        <li><a href="#">Secretaria 3</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Cordenadorias</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Coordenadoria de Cultura</a></li>
                                        <li><a href="#">Coordenadoria de Esportes</a></li>
                                        <li><a href="#">Coordenadoria de Turismo</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Conselhos Municipais</a></li>
                            </ul>
                        </nav>
                        
                        
                        <nav class="navbar-footer">
                            <span class="title c-blue-extralight fs-20 fw-600">Serviços</span>
                            <ul class="list-style-none p-0 my-2">
                                <li><a href="#">Acesso à Informação</a></li>
                                <li><a href="#">Moradores</a></li>
                                <li><a href="#">Empresas</a></li>
                                <li><a href="#">Servidores</a></li>
                                <li><a href="#">Turistas</a></li>
                                <li><a href="#">Investidores</a></li>
                                <li><a href="#">Clube de Desc. do Servidor</a></li>
                                <li><a href="#">Demutran</a></li>
                                <li><a href="#">Downloads</a></li>
                                <li><a href="#">Links e Telefones Úteis</a></li>
                                <li><a href="#">Vagas de Emprego</a></li>
                                <li><a href="#">Horário de Ônibus</a></li>
                                <li><a href="#">Prefeito</a></li>
                            </ul>
                        </nav>
                        
                    </div>
                </div>
            </div>
        </footer>
    </footer>

    <div class="copy py-4 px-4 text-center ls-2px fs-14">
        <p class="mb-0 c-text-eaeaea">Copyright © 2020 - Prefeitura Municipal de Itararé | Todos direitos reservados</p>
    </div>
    <!-- FIM RODAPE -->


    <!-- FIM PRINCIPAIS SERVIÇOS -->

    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/56d8a8be32.js" crossorigin="anonymous"></script>
    <script src="assets/js/swiper-bundle.min.js" crossorigin="anonymous"></script>

    <script>
        const swiper = new Swiper('.news-slider', {
            loop: true,
            effect: "fade",
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });

        const swiper2 = new Swiper('.main-services-slider', {
            loop: true,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                481: {
                    slidesPerView: 1,
                    direction: "horizontal",
                },
            },
            pagination: {
                el: '.main-services-slider .swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.main-services-slider .button-next',
                prevEl: '.main-services-slider .button-prev',
            },
            scrollbar: {
                el: '.main-services-slider .swiper-scrollbar',
            },
        });
    </script>
</body>
</html>