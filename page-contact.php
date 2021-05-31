<?php 
    require('header.php');
    $title_page = 'Atendimento';
?>
<?php require('temp-parts/breadcrumb.php'); ?>
<main id="main-content" class="py-4 py-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <section class="pr-md-3">
                  <p class="c-999">
                  Precisando de auxílio? Quer nos enviar suas sugestões ou críticas? <br>
                  Preencha o formulário abaixo e envie sua mensagem.
                  </p>

                  <form action="" class="form-default mt-4">
                    <div class="row">

                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label for="">Seu nome<span class="c-red">*</span></label>
                          <input type="text" class="form-control">
                        </div>
                      </div>

                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label for="">Seu e-mail<span class="c-red">*</span></label>
                          <input type="email" class="form-control">
                        </div>
                      </div>

                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label for="">Telefone<span class="c-red">*</span></label>
                          <input type="text" class="form-control">
                        </div>
                      </div>

                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label for="">Selecione o setor<span class="c-red">*</span></label>
                          <select class="form-control">
                            <option value="">Governo Municipal</option>
                            <option value="">Chefe do Gabinete</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Mensagem<span class="c-red">*</span></label>
                          <textarea class="form-control w-100"></textarea>
                        </div>
                      </div>

                      <div class="col-12">
                        <input type="submit" value="Enviar Mensagem" class="wpcf7-form-control wpcf7-submit text-uppercase" id="submit-contact">
                      </div>
                    </div>
                  </form>
              </section>
            </div>

            <div class="col-12 col-md-4">
              <aside id="sidebar-default">

                <div class="item-aside">
                  <ul class="list-items contact-list list-style-none p-0 mb-4 m-md-0">
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
                </div>


                <div class="item-aside">
                  <h6>Nossa Localização</h6>

                  <p class="c-999 fs-14">
                    Rua XV de Novembro, 83 - Centro <br>
                    Itararé, São Paulo <br>
                    CEP 18.460-000
                  </p>

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.601645341844!2d-49.34155028448671!3d-24.1155004844106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c3b56c02bf1e13%3A0x1ad4686daece5dcb!2sR.%20Quinze%20de%20Novembro%2C%2083%20-%20Centro%2C%20Itarar%C3%A9%20-%20SP%2C%2018460-000!5e0!3m2!1sen!2sbr!4v1622497448409!5m2!1sen!2sbr" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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