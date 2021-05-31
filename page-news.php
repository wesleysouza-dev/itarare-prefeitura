<?php 
    require('header.php');
    $title_page = 'Todas as Notícias';
    require('temp-parts/breadcrumb.php')
?>

<main id="main-content" class="py-4 py-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <section class="pr-md-3">
                    
                    <ul class="list-style-none list-news p-0 m-0">
                        <?php for ($i=0;$i<5;$i++) : ?>
                        <li>
                            <article class="d-block d-md-flex">
                                <a href="single-news.php" class="mb-3 mb-md-0 d-table mr-0 mr-md-4 w-100">
                                    <img src="assets/images/noticias/thumb-news.jpg" alt="" class="w-100">
                                </a>
                                <div>
                                    <header>
                                        <a href="single-news.php">
                                            <h6>Prefeitura de Itararé (SP) realiza ação de acolhimento a pessoas em situação de rua</h6>
                                        </a>
                                    </header>

                                    
                                        <p>
                                            <a href="single-news.php">
                                            Munícipes receberam cobertores e foram convidados a passar a noite na Casa de Passagem do município.
                                            </a>
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
                    
                </section>
            </div>

            <div class="col-12 col-md-4">
                <?php require('temp-parts/sidebar.php'); ?>
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