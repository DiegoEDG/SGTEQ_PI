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
    <title>Document</title>
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
            <a class="text-light text-decoration-none ms-3" href="#">
                Inicar sesión
            </a>
        </div>
    </nav>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('images/car1.webp')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/car2.jpg')}}" class="d-block w-100 imgcar" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/car3.jpg')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <br />
		<hr />

		<h1 class="text-center">Todos los trámites, centralizados...</h1>
		<h4 class="text-center text-muted">
			Evita largos traslados, grandes filas y ahorra tiempo con el nuevo Sistema
			Gestor de Tránsito del Estado de Querétaro, consulta información, inicia
			trámites y dales seguimiento de manera sencilla desde un solo sitio web
		</h4>

		<br />

		<!-- Tarjetas -->
		<div class="tarjetas d-flex justify-content-around">
			<div class="card" style="width: 18rem">
				<img
					class="card-img-top"
					src="{{asset('images/tar1.jpg')}}"
					alt="Card image cap"
				/>
				<div class="card-body">
					<h5 class="card-title">Realiza diversos trámites</h5>
					<p class="card-text">
						¿Nueva licencia o renovación? ¿Alta o baja de vehículo? ¿Pago de
						multas o tenencia? Registrate o inicia sesión, estos y más trámites
						a un clic
					</p>
				</div>
			</div>
			<div class="card mr-3" style="width: 18rem">
				<img
					class="card-img-top"
					src="{{asset('images/tar3.jpg')}}"
					alt="Consulta información"
				/>
				<div class="card-body">
					<h5 class="card-title">Consulta información</h5>
					<p class="card-text">
						Resuelve tus dudas acerca de los procesos disponibles, entérate de
						requisitos y otra información relevante a la hora de realizar tus
						trámites
					</p>
				</div>
			</div>
			<div class="card" style="width: 18rem">
				<img
					class="card-img-top"
					src="{{asset('images/tar4.jpg')}}"
					alt="Card image cap"
				/>
				<div class="card-body">
					<h5 class="card-title">Siempre disponible</h5>
					<p class="card-text">
						Sin horarios a los que ajustarse. Disponibilidad 24/7 en la
						plataforma, optimiza tu tiempo y agiliza los procesos en trámites
						con disponibilidad total
					</p>
				</div>
			</div>
			<div class="card" style="width: 18rem">
				<img
					class="card-img-top"
					src="{{asset('images/tar2.jpg')}}"
					alt="Soporte técnico"
				/>
				<div class="card-body">
					<h5 class="card-title">Recibe soporte técnico</h5>
					<p class="card-text">
						¿Aún tienes dudas? Pide ayuda a al equipo de soporte técnico, ellos
						podrán orientarte dependiendo de tus necesidades dentro de la
						plataforma
					</p>
				</div>
			</div>
		</div>

		<br />
		<hr />

		<h1 class="text-center">¿Qué trámites puedo llevar a cabo?</h1>
		<h4 class="text-center text-muted">
			¿Buscas un trámite en específico? Aquí hay algunas de las posibilidades
			que te ofrece la plataforma, inicia sesión o registrate para verlos todos,
			es gratis
		</h4>

		<br />

		<div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Trámita tu licencia o permiso para conducir
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    ¿Comenzarás a conducir pronto? Ya sea que requieras una licencia o
                    permiso deberás reunir los requisitos solicitados por la
                    plataforma y añadirlos a tu solicitud, en cuanto el personal vea
                    tu solicitud, agendará tu cita para el proceso presencial, acude
                    al centro indicado, realiza los examenes físicos y de aptitud,
                    tomaté tu foto y ¡listo! Tienes tu documento oficial que avalá tu
                    aptitud para conducir dentro de la república
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Realiza pagos de infracciones
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    ¿Te multaron o tienes infracciones vigentes dentro del estado de
                    Querétaro? No hagas más filas, ingresa los datos acerca de tu
                    reporte o boleta de infraccion en la plataforma, se mostrará el
                    importe de la infracción y una pasarela de pago, ingresa tus datos
                    de pago, unos clics más y habrás pagado tu infracción de manera
                    exitosa
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Agenda tu próxima verificación
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    ¿La próxima fecha de verificación de tu vehículo se acerca? Inicia
                    sesión en la plataforma, elige el trámite corresponidente e
                    ingresa tus datos para agendar tu cita en el centro de
                    verificación, no gastes más tiempo del necesario, elige tu centro
                    de verificación más cercano o el de tu conveniencia y asiste a tu
                    cita, ¡Listo! Tu vehículo ya cuenta con la verificación más
                    reciente requierida
                </div>
              </div>
            </div>
          </div>

		<br />
		<br />

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
