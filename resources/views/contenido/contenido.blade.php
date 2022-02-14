@extends('layouts.welcome') 
@section('content')
<section class="hero-area">
      <div class="hero-post-slides owl-carousel">
        <div class="single-hero-post bg-overlay">
          <div
            class="slide-img bg-img"
            style="background-image: url(/landing/img/aquacorp/9.jpg)"
          ></div>
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12">
                <!-- Post Content -->
                <div class="hero-slides-content text-center">
                  <h2>Dispensadores de agua para empresas</h2>
                  <p>
                    Purificación de agua fría, ambiente, caliente y con gas.
                    Innovación única sin precedentes. Dispensador de agua
                    diseñado pensando en el usuario, de ahí su fácil uso. El
                    futuro del consumo de agua.
                  </p>
                  <div class="welcome-btn-group">
                    <a
                      href="#"
                      class="btn alazea-btn active"
                      type="button"
                      data-toggle="modal"
                      data-target="#exampleModalCenter"
                      >CONTACTANOS</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="single-hero-post bg-overlay">
          <div
            class="slide-img bg-img"
            style="background-image: url(/landing/img/aquacorp/5.jpg)"
          ></div>
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12">
                <div class="hero-slides-content text-center">
                  <h2>
                    Contamos con diferentes tipos de dispensadores que se
                    adaptan a las necesidades de tu negocio
                  </h2>
                  <p>
                    Encontrarás lo que buscas para tu empresa dentro de nuestra
                    extensa gama de productos de dispensadores de agua
                  </p>
                  <div class="welcome-btn-group">
                    <a
                      href="#"
                      class="btn alazea-btn active"
                      type="button"
                      data-toggle="modal"
                      data-target="#exampleModalCenter"
                      >CONTACTANOS</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ##### Hero Area End ##### -->
    <!-- ##### Service Area Start ##### -->
    @if (Session::get('success'))
    <div id="myModal" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Mensaje enviado con exito</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Cerrar"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="alert alert-success" role="alert">
              {{ Session::get('success') }}
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn alazea-btn-cancel mt-15"
              data-dismiss="modal"
            >
              Cancelar
            </button>
          </div>
        </div>
      </div>
    </div>
    @endif
    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">
              Ponte en contacto
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <div class="section-heading">
              <p>Envianos un mensaje para responderte en breve</p>
            </div>

            <div class="contact-form-area mb-100">
              <form role="form" action="{{ route('form.post') }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        id="contact-name"
                        name="nombre"
                        placeholder="Nombre"
                      />
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        id="contact-email"
                        name="email"
                        placeholder="Correo"
                      />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        id="message"
                        name="comentario"
                        placeholder="Mensaje"
                      />
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn alazea-btn-cancel mt-15"
                    data-dismiss="modal"
                  >
                    Cancelar
                  </button>
                  <button type="submit" class="btn alazea-btn mt-15">
                    Enviar
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section
      id="servicios"
      class="our-services-area bg-gray section-padding-100-0"
    >
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- Section Heading -->
            <div class="section-heading text-center">
              <h2>Nuestros Servicios</h2>
              <p>
                brindamos servicios de venta y renta de diferentes tipos de
                dispensadores.
              </p>
            </div>
          </div>
        </div>

        <div class="row justify-content-between">
          <div class="col-12 col-lg-5">
            <div class="alazea-service-area mb-100">
              <div
                class="single-service-area d-flex align-items-center wow fadeInUp"
                data-wow-delay="100ms"
              >
                <div class="service-icon mr-30">
                  <i class="fas fa-snowflake" style="color: #f810e3"></i>
                </div>
                <div class="service-content">
                  <h5>Dispensadores de agua fría, caliente y con gas</h5>
                  <p>
                    In Aenean purus, pretium sito amet sapien denim moste
                    consectet sedoni urna placerat sodales.service its.
                  </p>
                </div>
              </div>
              <div
                class="single-service-area d-flex align-items-center wow fadeInUp"
                data-wow-delay="300ms"
              >
                <div class="service-icon mr-30">
                  <i class="fas fa-hands-holding" style="color: #f810e3"></i>
                </div>
                <div class="service-content">
                  <h5>Dispensadores de agua manos libres</h5>
                  <p>
                    In Aenean purus, pretium sito amet sapien denim moste
                    consectet sedoni urna placerat sodales.service its.
                  </p>
                </div>
              </div>
              <div
                class="single-service-area d-flex align-items-center wow fadeInUp"
                data-wow-delay="500ms"
              >
                <div class="service-icon mr-30">
                  <i class="fas fa-glass" style="color: #f810e3"></i>
                </div>
                <div class="service-content">
                  <h5>Jarras y botellas personalizadas</h5>
                  <p>
                    In Aenean purus, pretium sito amet sapien denim moste
                    consectet sedoni urna placerat sodales.service its.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-6">
            <div class="alazea-video-area bg-overlay mb-100">
              <img src="/landing/img/aquacorp/10.jpg" alt="" />
              <a
                href="http://www.youtube.com/watch?v=7HKoqNJtMTQ"
                class="video-icon"
              >
                <i class="fa fa-play" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ##### Service Area End ##### -->
    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-12 col-lg-5">
            <!-- Section Heading -->

            <div class="section-heading">
              <h2>Ponte en contacto</h2>
              <p>Envianos un mensaje para responderte en breve</p>
            </div>
            <!-- Contact Form Area -->
            <div class="contact-form-area mb-100">
              <form role="form" action="{{ route('form.post') }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        name="nombre"
                        id="contact-name"
                        placeholder="Nombre"
                      />
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        id="contact-email"
                        name="email"
                        placeholder="Correo"
                      />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        id="message"
                        name="comentario"
                        placeholder="Comentario"
                      />
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn alazea-btn mt-15">
                      Enviar
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="col-12 col-lg-6">
            <!-- Google Maps -->
            <div class="map-area mb-100">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137"
                allowfullscreen
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
 @endsection