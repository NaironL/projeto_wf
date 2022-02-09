<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WF Personal Trainer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Tabela de Preços -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- popup scripts -->
    <script type="text/javascript" src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
   
  <!-- Slick Scripts -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css"/>
  <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="assets/css/planos.css">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Principal Arquivo CSS -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Topo ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <a href="#hero"><img src="assets/img/logo.png" width="150px"></a>


      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Início</a></li>
          <li><a class="nav-link scrollto" href="#about">Conheça-me</a></li>
          <li><a class="nav-link scrollto" href="#planos">Planos</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Galeria de Alunos</a></li>
          <li><a class="nav-link scrollto" href="#horarios">Horarios</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      
      
        <?php if (isset($_SESSION['user_name']) != true) { ?>
        <a href="src/login.php" class="get-started-btn">Entrar</a>
        <?php } ?>
            <?php
                if (isset($_SESSION['user_name'])) {
            ?>

                <a class="btn get-started-btn dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['user_name']?>
                </a>


                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li>
                      <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Importar imagem
                      </button>
                    </li>
                    <li>
                          <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#agendaStatic">
                              Editar Agenda
                          </button>
                      </li></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="src/logout.php">Sair</a></li>
                </ul>
            </div>
        <?php } ?>
      <?php
      if (isset($_SESSION['notice'])){
      ?>

      <div style="font-size:13px; width: 250px; margin-left: 1050px; margin-top: -10px"  class="alert alert-success d-flex align-items-center" id="success-alert" role="alert">
          <?php echo $_SESSION['notice'] . ' '  . $_SESSION['user_name']; ?>
      </div>

      <script>
          window.setTimeout(function() {
              $(".alert").fadeTo(500, 150).slideUp(500, function(){
                  $(this).remove();
              });
          }, 4000);
      </script>
      <?php
        }
        unset($_SESSION['notice']);
      ?>
    </div>
  </header>

    <!-- Fim do Topo -->

  <!-- ======= Menu principal ======= -->
  <section id="hero" style="  background: url(assets/img/bg-wf.png) top center;
  background-size: cover;" class="d-flex align-items-center justify-content-center">

    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">

          <h1>Chegou a hora de realmente obter bons resultados<span>.</span></h1>
          <h2>Agende seu horário. e vamos juntos começar já essa evolução</h2>
        </div>
      </div>
        <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="col-xl-2 col-md-4">
                <a href="#planos"><div class="icon-box">
                    <a href="#planos"><i class="bi-play-circle"  style="width: 200px"></i></a>
                    <h3><a href="#planos">Vamos lá</a></h3>
                </div>
            </div>
      </div>

    </div>
  </section><!-- Fim menu Principal -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpeg" class="img-fluid" alt="" style="margin-left: 120px; margin-top: -60px">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Um pouquinho sobre mim.</h3>
              <p class="fst-italic">
                  Olá!! Seja bem vindo(a) ao meu site!
                  Sou Wantuil Filho, Bacharel em Educação Física pela UNA-BD, Mestrando em Ciências do Envelhecimento pela USJT-SP, Pesquisador do Laboratório do Movimento Humano e instrutor no Studio Samara Lauriano.
                  Quem me conhece sabe que sou um intusiasta dos estudos e estou sempre me aperfeiçoando e capacitando para melhor atender meus alunos.
                  E se você que está passando por aqui, procura um atendimento personalizado e de qualidade, você está no lugar certo!
                  Venha fazer parte desse time!!
              </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

      <!-- ======= Planos ======= -->

      <section id="planos" class="d-flex align-items-center justify-content-center" style="margin-top: -60px;">
          <div class="container-fluid">
              <div class="container p-5">
                  <div class="section-title justify-content-center">
                      <h2 style="color: #000; text-align: left">Planos</h2>
                      <p style="color: #ffffff; text-align: left">Selecione seu plano</p>
                  </div>
                  <div class="row">
                      <div class="col-lg-4 col-md-12 mb-4">
                          <div class="card card1 h-100">
                              <div class="card-body">

                                  <h5 class="card-title">Prata</h5>
                                  <small class='text-muted'>Mensal</small>
                                  <br><br>
                                  <span class="h2">$59,90</span>/mês
                                  <br><br>
                                  <div class="d-grid my-3">
                                      <button class="btn btn-outline-dark btn-block">Vamos lá!</button>
                                  </div>
                                  <ul class="planos-list">
                                      <li>Aulas Semanais</li>
                                      <li>Avaliação mensal</li>
                                      <li>Suporte WhatsApp</li>

                                  </ul>
                              </div>


                          </div>
                      </div>
                      <div class="col-lg-4 col-md-12 mb-4">
                          <div class="card card2 h-100">
                              <div class="card-body">

                                  <h5 class="card-title">Ouro</h5>
                                  <small class='text-muted'>Trimestral</small>
                                  <br><br>
                                  <span class="h2">$179,90</span>/trimestre
                                  <br><br>
                                  <div class="d-grid my-3">
                                      <button class="btn btn-outline-dark btn-block">Vamos lá!!</button>
                                  </div>
                                  <ul class="planos-list">
                                      <li>Aulas Semanais</li>
                                      <li>Avaliação mensal</li>
                                      <li>Suporte WhatsApp</li>
                                      <li>Treino Personalizado</li>

                                  </ul>
                              </div>


                          </div>
                      </div>
                      <div class="col-lg-4 col-md-12 mb-4">
                          <div class="card card3 h-100">
                              <div class="card-body">

                                  <h5 class="card-title">Diamante</h5>
                                  <small class='text-muted'>Semestral</small>
                                  <br><br>
                                  <span class="h2">$599,90</span>/semestre
                                  <br><br>
                                  <div class="d-grid my-3">
                                      <button class="btn btn-outline-dark btn-block">Vamos lá!!</button>
                                  </div>
                                  <ul class="planos-list">
                                      <li>Aulas Semanais</li>
                                      <li>Avaliação mensal</li>
                                      <li>Suporte WhatsApp</li>
                                      <li>Treino Personalizado</li>
                                      <li>Desconto de 5% na mensalidade</li>

                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
      </section>
      <!-- Fim Planos -->
    <!-- Início Galeria de alunos -->
      <section id="portfolio" class="portfolio">
          <div class="container" data-aos="fade-up">

              <div class="section-title">
                  <h2 style="color: #000">Galeria</h2>
                  <p style="color: #ffffff">Alguns alunos.</p>
              </div>
              <div class="gallery-container">
                  <?php
                  $pasta = "assets/img/carrossel/";
                  if (!is_dir($pasta))
                      die("<h2>O caminho $pasta não existe</h2>");
                  $arquivos = glob("$pasta{*.jpg,*.png,*.gif,*.bmp,*.JPG}", GLOB_BRACE);
                  foreach ($arquivos as $img) {
                      ?>
                      <a class="gallery-items"  href="#portfolio">
                          <img src="<?php echo $img; ?>"/>
                      </a>
                  <?php } ?>
              </div>
          </div>
          <script type="text/javascript">
              $('.gallery-container').slick({
                  infinite: true,
                  speed: 500,
                  slidesToShow: 4,
                  slidesToScroll: 3,
              });
          </script>
       </section>
     <!-- Fim Galeria de Alunos -->
      <!-- Início lista de horários -->

      <section id="horarios">
          <?php
          $arquivo = fopen('src/horarios.wf', 'r');

          while (!feof($arquivo)){

              $registro = fgets($arquivo);
              $horarios[] = $registro;
          }
          fclose($arquivo);
          ?>
          <div class="container" data-aos="fade-up">
              <div class="section-title justify-content-center">
                  <h2 style="color: #000">Horários</h2>
                  <p style="color: #fff">Confira os horários</p>
              </div>
              <div class="horarios">
              <table>
                  <thead>
                  <tr>
                    <th>Dia</th>
                    <th colspan="5">Horários</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  foreach ($horarios as $hora){
                      $horario_dados = explode('#', $hora);
                      if (count($horario_dados) < 3){
                          continue;
                      } 
                    }
                  ?>
                  <?php
                  foreach($horario_dados as $key => $dado){ 
                      if ($key['dia'] == 'segunda') { ?>
                        <tr>
                          <th>Seg</th>
                          <td><?php echo $dado[1]; ?></td>
                        </tr>
                        <?php
                      }
                    }
                    ?>
               
              <tr>
                <th>Ter</th>
                <td>Horário 1</td>
                <td>Horário 2</td>
                <td>Horário 3</td>
                <td>Horário 4</td>
                <td>Horário 5</td>
            </tr>
            <tr>
                <th>Qua</th>
                <td>Horário 1</td>
                <td>Horário 2</td>
                <td>Horário 3</td>
                <td>Horário 4</td>
                <td>Horário 5</td>
            </tr>
            <tr>
                <th>Qui</th>
                <td>Horário 1</td>
                <td>Horário 2</td>
                <td>Horário 3</td>
                <td>Horário 4</td>
                <td>Horário 5</td>
            </tr>
            <tr>
              <th>Sex</th>
              <td>Horário 1</td>
              <td>Horário 2</td>
              <td>Horário 3</td>
              <td>Horário 4</td>
              <td>Horário 5</td>
            </tr>
            <tr>
                <th>Sáb</th>
                <td>Horário 1</td>
                <td>Horário 2</td>
                <td>Horário 3</td>
                <td>Horário 4</td>
                <td>Horário 5</td>
            </tr>
          </table>
          </div>

      </section>

      <!-- Fim da lista de horários -->
    <!-- ======= Sessão contato ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contato</h2>
          <p>Contate-me</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localização:</h4>
                <p>Santo Antônio do Monte</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>wantuilfilho@email.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefone</h4>
                <p>(37)9 91383512</p>
              </div>
            </div>
          </div>
            <div class="col-lg-8 mt-5 mt-lg-0">

                <form class="row g-3" action="src/contact.php" method="post">
                    <div class="col-md-6">
                        <label class="form-label">Nome</label>
                        <input name="nome" type="text" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="inputPassword4" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Telefone</label>
                        <input name="cel" type="text" class="form-control" id="inputCity" placeholder="DDD + Número" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Plano desejado</label>
                        <select name="plano" id="inputState" class="form-select" required>
                            <option selected>Escolha...</option>
                            <option>Plano mensal (1 mês)</option>
                            <option>Plano trimestral (3 meses)</option>
                            <option>Plano semestral (6 meses)</option>
                        </select>
                    </div>

                                <?php if (isset($_GET['enviado']) == 'sim'){ ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Olá!</strong> Seus dados foram enviados, em breve entrarei em contato com você.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php } ?>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>

            </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>WF<span>.</span></h3>
              <p>
                Santo Antônio do Monte<br><br><br>
                <strong>Telefone:</strong>(37)9 91383512<br>
                <strong>Email:</strong> wantuilfilho@email.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/wantuil.filho.73" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/wantuil_filho" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-whatsapp"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Vale a pena ver</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Início</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Biografia</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Serviços</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Termos de uso</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Política de privacidade</a></li>
            </ul>
          </div>
            
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>WF</span></strong>. Todos os direitos reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Desenvolvido por: <a href="#">Nairon Luiz</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

          <!-- Modal De importação -->
        <div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="false">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Importar imagens</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <form action="src/upload.php" method="POST" enctype="multipart/form-data"> 
                    <label for="conteudo">Enviar imagem:</label>
                    <input type="file" name="pic" accept="image/*">    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
  <!-- Fim do modal de Importação -->
  <!-- Modal de Agenda -->
  <div class="modal" id="agendaStatic" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="false">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Editar agenda</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <h6>Selecione o dia que deseja atualizar</h6>
                  <form action="src/atualizar_agenda.php" method="POST" enctype="multipart/form-data">
                      <select id="inputState" class="form-select" required name="dia">
                          <option selected>Escolha...</option>
                          <option>Segunda</option>
                          <option>Terça</option>
                          <option>Quarta</option>
                          <option>Quinta</option>
                          <option>Sexta</option>
                          <option>Sábado</option>
                      </select><br>
                      <h6>Informe o Horário desejado</h6>
                      <input class="form-control" type="text" name="horario" placeholder="Informe o horário no modelo (Hora:Minuto)">
                      <hr>
                      <input type="radio" id="preenchido" name="vaga" value="preenchido">
                      <label for="preenchido">Preenchido</label><br>
                      <input type="radio" id="vazio" name="vaga" value="vazio">
                      <label for="vazio">Vazio</label><br>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary">Salvar</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
      <!-- Fim do modal de agenda -->
</body>

</html>