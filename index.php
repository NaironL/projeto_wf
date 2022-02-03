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

    <!-- popup scripts -->

  <!-- Slick Scripts -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css"/>
  <!-- Vendor CSS Files -->
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
          <li><a class="nav-link scrollto" href="#portfolio">Galeria de Alunos</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

        <?php if (isset($_SESSION['autenticado']) != 'sim') { ?>
        <a href="src/login.php" class="get-started-btn">Entrar</a>
        <?php } ?>
            <?php
        if (isset($_GET['autenticado']) == 'sim') {
            ?>
                <button class="btn get-started-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['user_name']?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Adicionar Imagem</a></li>
                    <li><a class="dropdown-item" href="#">Editar Agenda</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="src/logout.php">Sair</a></li>
                </ul>
            </div>
              <div style="width: 324px; display: inline-block; margin-left: 1000px; font-size: 13.5px" class="alert alert-info alert-dismissible fade show" role="alert">
                 Olá professor <strong><?php echo $_SESSION['user_name'] ?></strong>. Seja bem-vindo.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        <?php } ?>
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
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="horarios.php">Horários Disponíveis</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="">Forma de Trabalho</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-database-2-line"></i>
            <h3><a class="scrollto" href="#planos">Valores e Descontos</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="">Resultados Obtidos</a></h3>
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
            <img src="assets/img/about.jpeg" class="img-fluid" alt="">
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

      <section id="planos" class="d-flex align-items-center justify-content-center">
          <div class="container" data-aos="fade-up">

              <div class="row">

                  <div class="row justify-content-center" data-aos="fade-right" data-aos-delay="100">
                      <div>
                      <h1 style="margin-top: -50px" >Conheça os Planos.</h1>
                      </div>
                      <table class="table table-dark table-striped">
                          <thead>
                          <tr>
                              <th scope="col">Info</th>
                              <th scope="col">Prata</th>
                              <th scope="col">Ouro</th>
                              <th scope="col">Diamante</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td>Valor</td>
                              <td>49,90</td>
                              <td>69,90</td>
                              <td>89,90</td>
                          </tr>
                          <tr>
                              <td>Período</td>
                              <td>1 Mês</td>
                              <td>3 Meses</td>
                              <td>6 Meses</td>
                          </tr>
                          <tr>
                              <td>Aulas semanais</td>
                              <td>Sim</td>
                              <td>Sim</td>
                              <td>Sim</td>
                          </tr>
                          <tr>
                              <td>Avaliação Mensal</td>
                              <td>Não</td>
                              <td>Não</td>
                              <td>Sim</td>
                          </tr>
                          <tr>
                              <td>Desconto mensal</td>
                              <td>Não</td>
                              <td>Não</td>
                              <td>Não</td>
                          </tr>
                          <tr>
                              <td></td>
                              <td><a href="#contratar-prata" class="btn btn-outline-info">Tenho interesse</a></td>
                              <td><a href="#contratar-prata" class="btn btn-outline-info">Tenho interesse</a></td>
                              <td><a href="#contratar-prata" class="btn btn-outline-info">Tenho interesse</a></td>
                          </tr>
                      </table>
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
                  <a href="#" class="gallery-items">
                      <img src="assets/img/carrossel/video1.gif" alt="aluno1">
                  </a>
                  <a href="#" class="gallery-items">
                      <img src="assets/img/carrossel/video2.gif" alt="aluno1">
                  </a>
                  <a href="#" class="gallery-items">
                      <img src="assets/img/carrossel/video1.gif" alt="aluno1">
                  </a>
                  <a href="#" class="gallery-items">
                      <img src="assets/img/carrossel/video2.gif" alt="aluno1">
                  </a>
                  <a href="#" class="gallery-items">
                      <img src="assets/img/carrossel/video1.gif" alt="aluno1">
                  </a>
                  <a href="#" class="gallery-items">
                      <img src="assets/img/carrossel/video2.gif" alt="aluno1">
                  </a>
                  <a href="#" class="gallery-items">
                      <img src="assets/img/carrossel/video1.gif" alt="aluno1">
                  </a>
                  <a href="#" class="gallery-items">
                      <img src="assets/img/carrossel/video2.gif" alt="aluno1">
                  </a>
                  <a href="#" class="gallery-items">
                      <img src="assets/img/carrossel/video1.gif" alt="aluno1">
                  </a>
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

</body>

</html>