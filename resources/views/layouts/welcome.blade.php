<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Title -->
    <title>AquaCorp</title>
    <!-- Favicon -->
    <link rel="icon" href="/img/core-img/favicon.ico" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="/landing/style.css" />
    <!-- verde #10F86B y rosa #F810E3.  -->
  </head>
  <style type="text/css">
    .fa.fa-facebook {
      color: #f810e3;
    }
    .fa.fa-facebook:hover {
      color: #063970;
    }
    .fa.fa-twitter {
      color: #f810e3;
    }
    .fa.fa-twitter:hover {
      color: #00acee;
    }
    .fa.fa-instagram {
      color: #f810e3;
    }
  </style>
  <body>
    <header class="header-area">
      <div class="top-header-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div
                class="top-header-content d-flex align-items-center justify-content-between"
              >
                <div class="top-header-meta">
                  <a
                    href="#"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title=""
                    ><i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <span>Email: kevindavila.developer@gmail.com</span></a
                  >
                  <a
                    href="#"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="+1 234 122 122"
                    ><i class="fa fa-phone" aria-hidden="true"></i>
                    <span>llamanos 99-94979232</span></a
                  >
                </div>
                <div class="top-header-meta d-flex"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="alazea-main-menu">
        <div class="classy-nav-container breakpoint-off">
          <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="alazeaNav">
              <a
                href="index.html"
                class="nav-brand"
                style="color: white !important"
                >Logo</a
              >
              <div class="classy-navbar-toggler">
                <span class="navbarToggler"
                  ><span></span><span></span><span></span
                ></span>
              </div>
              <div class="classy-menu">
                <div class="classycloseIcon">
                  <div class="cross-wrap">
                    <span class="top"></span><span class="bottom"></span>
                  </div>
                </div>
                <div class="classynav">
                  <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li>
                      <a href="#">Servicios</a>
                      <ul class="dropdown">
                        <li><a href="#servicios">Venta </a></li>
                        <li><a href="#servicios">Renta</a></li>
                      </ul>
                    </li>
                    <li>
                      <a
                        type="button"
                        class="btn"
                        data-toggle="modal"
                        data-target="#exampleModalCenter"
                        >Contacto</a
                      >
                    </li>
                  </ul>

                  <!-- Search Icon -->
                  <div id="searchIcon">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </div>
                </div>
                <!-- Navbar End -->
              </div>
            </nav>

            <!-- Search Form -->
            <div class="search-form">
              <form action="#" method="get">
                <input
                  type="search"
                  name="search"
                  id="search"
                  placeholder="Type keywords &amp; press enter..."
                />
                <button type="submit" class="d-none"></button>
              </form>
              <!-- Close Icon -->
              <div class="closeIcon">
                <i class="fa fa-times" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
     @yield('content') 
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background: #10f86b">
      <!-- Main Footer Area -->
      <div class="main-footer-area">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-6 col-lg-6">
              <div class="single-footer-widget">
                <div class="footer-logo mb-30">
                  <a href="#">logo</a>
                </div>
                <p>
                  Lorem ipsum dolor sit samet, consectetur adipiscing elit.
                  India situs atione mantor
                </p>
                <div class="social-info">
                  <a href="#"
                    ><i class="fa fa-facebook" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-instagram" aria-hidden="true"></i
                  ></a>
                </div>
              </div>
            </div>
            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="single-footer-widget">
                <div class="widget-title">
                  <h5>Accesos Rapidos</h5>
                </div>
                <nav class="widget-nav">
                  <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="single-footer-widget">
                <div class="widget-title">
                  <h5>CONTACTO</h5>
                </div>

                <div class="contact-information">
                  <p><span>Dirección:</span> 42 francisco de montejo</p>
                  <p><span>Telefono:</span> 99-94979232</p>
                  <p><span>Email:</span> kevindavila.developer@gmail.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="border-line"></div>
            </div>
            <!-- Copywrite Text -->
            <div class="col-12 col-md-6">
              <div class="copywrite-text">
                <p>
                  Desarrollado por <i class="fa fa-camera-retro"></i>
                  <a href="" target="_blank">K8bits</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="/landing/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/landing/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/landing/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="/landing/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="/landing/js/active.js"></script>
  </body>
</html>
<script type="text/javascript">
  $("#myModal").modal("show");
</script>
