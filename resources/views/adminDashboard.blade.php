<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <script src="{{asset('js/app.js')}}"></script>
        <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}" />
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <script src="https://use.fontawesome.com/c42eb0bcd4.js"></script>
        <title>Login</title>
    </head>
    <body>
        <nav class="navbar">
            <div class="navbar">
               <a href="{{url('/')}}">
                    <img
                        class="imgnav mx-4"
                        src="{{ asset('images/logo.png') }}"
                        alt="logotipo navbar"
                    />
               </a>
                <p class="fs-3 titulonav">
                    Sistema Gestor de Tránsito del Estado de Querétaro
                </p>
            </div>
            <div class="me-4">
                <a class="text-light text-decoration-none ms-3" href="{{url('/')}}">
                    Cerrar sesión
                </a>
            </div>
        </nav>

        <div class="container mt-2 mb-2">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <h1 class="display-4 text-center">Bienvenido!</h1>
                  <p class="text-center">Aquí encontrarás toda la información necesaria en cuanto a trámites y citas para trabajar con ellas.</p>
                </div>
              </div>
        </div>

        <div class="container">
            <div class="card mb-3 col-md-6" style="max-width: 1200px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <a href="{{route('validarTramites')}}">
                        <img src="{{asset('images/tra.jpg')}}" style="max-width: 100%;">
                    </a>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="{{route('validarTramites')}}">
                          <h5 class="card-title">Validar trámites</h5>
                      </a>
                      <p class="card-text">Aquí podrás encontrar los diferentes trámnites solicitados para su autorización.</p>
                    </div>
                  </div>
                </div>
              </div>

                  <div class="card mb-3 col-md-6" style="max-width: 1200px;">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <a href="{{route('validarCita')}}">
                            <img src="{{asset('images/tar4.jpg')}}" style="max-width: 100%;">
                        </a>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <a href="{{route('validarCita')}}">
                              <h5 class="card-title">Citas por atender</h5>
                          </a>
                          <p class="card-text">Aquí podrás encontrar las citas por atender el dia de hoy.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-3 col-md-6" style="max-width: 1200px;">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <a href="{{route('administrarPersonas')}}">
                            <img src="{{asset('images/tar3.jpg')}}" style="max-width: 100%;">
                        </a>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <a href="{{route('administrarPersonas')}}">
                              <h5 class="card-title">Personas</h5>
                          </a>
                          <p class="card-text">Aquí encotrarás la lista de las personas que usan el sistema para administrar su información.</p>
                        </div>
                      </div>
                    </div>
                  </div>
        </div>

            <!-- Footer -->
            <footer class="text-center text-lg-start mifoot text-light">
                <section
                    class="
                        d-flex
                        justify-content-center justify-content-lg-between
                        p-4
                        border-bottom
                    "
                >
                    <div class="me-5 d-none d-lg-block">
                        <span>Visitanos en nuestras redes sociales:</span>
                    </div>
                    <div>
                        <a href="#!" class="me-4 text-reset text-decoration-none">
                            <span
                                class="iconify"
                                data-icon="brandico:facebook"
                                data-inline="false"
                            ></span>
                        </a>
                        <a href="#!" class="me-4 text-reset text-decoration-none">
                            <span
                                class="iconify"
                                data-icon="akar-icons:twitter-fill"
                                data-inline="false"
                            ></span>
                        </a>
                        <a href="#!" class="me-4 text-reset text-decoration-none">
                            <span
                                class="iconify"
                                data-icon="bx:bxl-instagram-alt"
                                data-inline="false"
                            ></span>
                        </a>
                        <a href="#!" class="me-4 text-reset text-decoration-none">
                            <span
                                class="iconify"
                                data-icon="akar-icons:youtube-fill"
                                data-inline="false"
                            ></span>
                        </a>
                        <a href="#!" class="me-4 text-reset text-decoration-none">
                            <span
                                class="iconify"
                                data-icon="mdi:google-maps"
                                data-inline="false"
                            ></span>
                        </a>
                        <a href="#!" class="me-4 text-reset text-decoration-none">
                            <span
                                class="iconify"
                                data-icon="cib:issuu"
                                data-inline="false"
                            ></span>
                        </a>
                    </div>
                </section>
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                        <div class="row mt-3">
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <img class="" src="{{asset('images/escbla.png')}}" alt="Card image cap" />
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold mb-4">Sitios de interés</h6>
                                <p>
                                    <a href="#!" class="text-reset">Informes de Gobierno</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Configuración</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Privacidad</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Ayuda</a>
                                </p>
                            </div>
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <h6 class="text-uppercase fw-bold mb-4">Contáctanos</h6>
                                <p><i class="fa fa-home me-3"></i> Querétaro, Qro. 76000, MX</p>
                                <p><i class="fa fa-envelope me-3"></i> sgteq@queretaro.com.mx</p>
                                <p><i class="fa fa-phone me-3"></i> + 52 (442) 211 7070</p>
                                <p><i class="fa fa-phone me-3"></i> + 52 800 237 2233</p>
                            </div>
                        </div>
                    </div>
                </section>
                <div
                    class="text-center p-4"
                    style="background-color: rgba(0, 0, 0, 0.05)"
                >
                    © 2021 Todos los derechos reservados:
                    <a class="text-reset fw-bold" href="https://www.queretaro.gob.mx/"
                        >Poder Ejecutivo del Estado de Querétaro 2016-2021</a
                    >
                </div>
            </footer>
    </body>
    </html>
