<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Karol e Leonardo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/glightbox/css/glightbox.min.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/swiper/swiper-bundle.min.css")}} rel="stylesheet">

  <link href={{asset("assets/css/style.css")}} rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
        <li><a class="nav-link scrollto" href="#about">Local/Horário</a></li>
        <li><a class="nav-link scrollto " href="#portfolio">Galeria </a></li>
        <li><a class="nav-link scrollto" href="#contact">Confirmar Presença</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Karol e Leonardo</h1>
      <br>
      <h2 style="text-align: justify; padding: 0 10%; text-indent: 2%;">O grande dia está chegando e não poderíamos estar mais animados para compartilhar com a nossa família e amigos um dos dias mais especiais das nossas vidas! Queremos muito sua presença neste dia tão importante com muita festa, amor e carinho em uma comemoração que irá nos marcar para sempre!</h2>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <span>Local/Horário</span>
          <h2>Local/Horário</h2>
          <p>Venha prestigiar esse momento emocionante conosco</p>
        </div>

        <div class="row">
          <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-lg-8 d-flex flex-column align-items-stretch">
            <div class="content ps-lg-4 d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Local:</strong> <span>Igreja Matriz</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Data:</strong> <span>14 de Janeiro de 2023</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Hora:</strong> <span>10 horas </span></li>
                  </ul>
                </div>
              </div>
              

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock" style="color: #2cbdee;"></i>
                    <span>10 Horas</span>
                    <p><strong>Chegar 30 minutos antes!</strong> Para evitar imprevistos e garantir que a cerimônia ocorra perfeitamente.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Me Section -->

    <!-- ======= My Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Galeria</span>
          <h2>Galeria</h2>
          <p>Alguns momentos eternizados em imagens</p>
        </div>  

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src={{asset("assets/img/portfolio/1.jpeg")}} class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <a href={{asset("assets/img/portfolio/1.jpeg")}} data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src={{asset("assets/img/portfolio/2.jpeg")}} class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <a href={{asset("assets/img/portfolio/2.jpeg")}} data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src={{asset("assets/img/portfolio/3.jpeg")}} class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <a href={{asset("assets/img/portfolio/3.jpeg")}} data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src={{asset("assets/img/portfolio/4.jpeg")}} class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <a href={{asset("assets/img/portfolio/4.jpeg")}} data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src={{asset("assets/img/portfolio/5.jpeg")}} class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <a href={{asset("assets/img/portfolio/5.jpeg")}} data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src={{asset("assets/img/portfolio/6.jpeg")}} class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <a href={{asset("assets/img/portfolio/6.jpeg")}} data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src={{asset("assets/img/portfolio/7.jpeg")}} class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <a href={{asset("assets/img/portfolio/7.jpeg")}} data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src={{asset("assets/img/portfolio/8.jpeg")}} class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <a href={{asset("assets/img/portfolio/8.jpeg")}} data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src={{asset("assets/img/portfolio/9.jpeg")}} class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <a href={{asset("assets/img/portfolio/9.jpeg")}} data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End My Portfolio Section -->

    <!-- ======= Contact Me Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Confirmar Presença</span>
          <h2>Confirmar Presença</h2>
          <p>Se junte a nós nesse momento único! Confirme sua presença</p>
        </div>

        <div class="row">
          <div class="col">
            <form action="{{url('/confirm')}}" method="post" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="firstname" class="form-control" id="name" placeholder="Nome" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="lastname" id="email" placeholder="Sobrenome" required>
                </div>
              </div>

              <div class="row">
                <div class="col-6 pt-4 form-group">
                  <input type="text" class="form-control" name="telephone" id="subject" placeholder="Telefone" required >
                </div>
                <div class="col-6 pt-4 form-group">
                  <select class="form-control" aria-label="Default select example" name="gift" required>
                    @foreach ($presentes as $presente)
                    @if ($presente->valid == 0)
                    <option value="{{$presente->id}}">{{$presente->name}}</option>
                    @endif
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="my-3">
                <div class="loading">Carregando</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua presença foi confirmada!</div>
              </div>
              
              <div class="text-center"><button type="submit">Confirmar Presença</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Me Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Karol e Leonardo</h3>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src={{asset("assets/vendor/purecounter/purecounter_vanilla.js")}}></script>
  <script src={{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
  <script src={{asset("assets/vendor/glightbox/js/glightbox.min.js")}}></script>
  <script src={{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}></script>
  <script src={{asset("assets/vendor/swiper/swiper-bundle.min.js")}}></script>
  <script src={{asset("assets/vendor/waypoints/noframework.waypoints.js")}}></script>
  <script src={{asset("assets/vendor/php-email-form/validate.js")}}></script>

  <!-- Template Main JS File -->
  <script src={{asset("assets/js/main.js")}}></script>
</body>
</html>