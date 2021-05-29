<?php 
    require('header.php');
    require('temp-parts/breadcrumb.php')
?>

<main id="main-content" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="pr-md-3">
                    
                    <ul class="list-style-none list-news p-0 m-0">
                        <?php for ($i=0;$i<5;$i++) : ?>
                        <li>
                            <article class="d-flex">
                                <a href="#" class="mr-0 mr-md-4">
                                    <img src="assets/images/noticias/thumb-news.jpg" alt="">
                                </a>
                                <div>
                                    <header>
                                        <h6>Prefeitura de Itararé (SP) realiza ação de acolhimento a pessoas em situação de rua</h6>
                                    </header>
                                    <p>
                                    Munícipes receberam cobertores e foram convidados a passar a noite na Casa de Passagem do município.
                                    </p>

                                    <footer class="d-flex justify-content-between">
                                        <ul class="list-categories list-style-none p-0 m-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#">
                                                    Assistência Social
                                                </a>
                                            </li>
                                        </ul>
                                        
                                        <time datetime="2021-05-24 12:30">
                                            24 de Maio de 2021
                                        </time>
                                    
                                    </footer>
                                </div>
                            </article>
                        </li>
                        <?php endfor; ?>
                    </ul>

                    <!-- paginacao -->
                    <nav id="pagination-news">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                    
                </div>
            </div>

            <div class="col-12 col-md-4">
                <aside id="sidebar-default">
                    <div class="item-aside">
                        <h6>Acesso Rápido</h6>

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
                            <li class="col-6 item my-2">
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

                        <a href="#" class="btn-default btn-icon d-table mx-auto mt-4">
                            <div class="d-flex align-items-center">
                                <span class="icon d-flex align-items-center justify-content-center"><i class="fas fa-plus"></i></span>
                                <span class="text-uppercase">Acesse Todos</span>
                            </div>
                        </a>
                    </div>

                    <div class="item-aside">
                        <a href="#">
                            <img src="assets/images/noticias/covid-sidebar.jpg" alt="" class="img-fluid">
                        </a>
                    </div>

                    <div class="item-aside">
                        <h6>Principais Serviços</h6>

                        <div class="main-services-slider">
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
                            </div>
                        </div>

                        <a href="#" class="btn-default btn-icon d-table mx-auto mt-4">
                            <div class="d-flex align-items-center">
                                <span class="icon d-flex align-items-center justify-content-center"><i class="fas fa-plus"></i></span>
                                <span class="text-uppercase">Mais Serviços</span>
                            </div>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
                
    </div>
</main>
  
    <!-- PROPAGANDA -->                           
    <section id="adv-footer" class="pb-4 my-5">
        <div class="container">
            <a href="#">
                <img src="assets/images/banner-coronavirus.jpg" alt="" class="w-100">
            </a>
        </div>
    </section>
    <!-- FIM PROPAGANDA -->                           

    <!-- RODAPE -->
    <?php require('footer.php'); ?>