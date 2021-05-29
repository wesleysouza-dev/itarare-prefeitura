<?php require('header.php'); ?>

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
        <div class="container mb-4">
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
    <?php require('footer.php'); ?>