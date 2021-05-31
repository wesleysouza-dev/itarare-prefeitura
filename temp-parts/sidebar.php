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

  <div class="item-aside text-center">
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

  <div class="item-aside">
    <h6>Veja também</h6>
    <div class="rpwwt-widget">
      <ul>
        <li>
          <a href="#">
            <img src="assets/images/noticias/thumb-news.jpg" class="wp-post-image" alt="">
            <span class="rpwwt-post-title">Titulo da Notícia que você também pode gostar</span>
          </a>
          <div class="rpwwt-post-date">29/09/2020</div>
        </li>
        <li>
          <a href="#">
            <img src="assets/images/noticias/thumb-news.jpg" class="wp-post-image" alt="">
            <span class="rpwwt-post-title">Titulo da Notícia que você também pode gostar</span>
          </a>
          <div class="rpwwt-post-date">29/09/2020</div>
        </li>
        <li>
          <a href="#">
            <img src="assets/images/noticias/thumb-news.jpg" class="wp-post-image" alt="">
            <span class="rpwwt-post-title">Titulo da Notícia que você também pode gostar</span>
          </a>
          <div class="rpwwt-post-date">29/09/2020</div>
        </li>
      </ul>
    </div>
  </div>
</aside>