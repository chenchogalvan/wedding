<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gerardo & Miroslaba</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery.countdown.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/animsition.min.css') }}" type="text/css">



    <!-- custom background -->
    <link rel="stylesheet" href="{{ asset('css/bg.css') }}" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="{{ asset('css/color.css') }}" type="text/css" id="colors">
    <script src="https://kit.fontawesome.com/96812fed6f.js" crossorigin="anonymous"></script>
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header>


            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.html">
                                <h2>Gerardo<span>&amp;</span>Miroslaba</h2>
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <span class="btn-rsvp">Itinerario</span>

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li class="active"><a href="#wrapper">Inicio</a></li>
								<li><a href="#section-couple">Gerardo y Miroslaba</a></li>
                                <li><a href="#section-story">Nuestra historia</a></li>
                                <li><a href="#section-event">Donde</a></li>
                            </ul>
                        </nav>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <div id="popup-box" class="full-height">
                <span class="btn-close">
					<i class="icon_close"></i>
				</span>

                <div class="container center-y">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="deco id-color"><span>Nuestro gran día</span></h2>
                            <h2 data-wow-delay=".2s">07/05/2022</h2>
                        </div>

                        <div class="spacer-double"></div>

                        <div class="col-md-5 col-md-offset-1 text-right">
                            <h3>Ceremonia</h3>
                            Lugar: Parroquia San Esteban<br>
                            Horario: 18:00<br>
                            Dirección: Guadalupe Victoria, Zona Centro. C.P. 25000, Saltillo, Coahuila.<br>
                            <a href="https://www.google.com/maps/place/Parroquia+San+Esteban/@25.4223343,-101.0042092,17z/data=!3m2!4b1!5s0x868872bda27bfe5d:0x993896eb59038d4a!4m5!3m4!1s0x868872bda2a002fb:0x1bd54b6aec8e51f6!8m2!3d25.4223295!4d-101.0020205"
                                class="btn btn-custom mt30" target="_blank">Ver ubicación</a>
                        </div>

                        <div class="col-md-5">
                            <h3>Jardin </h3>
                            Lugar: Quinta Boreal<br>
                            Horario: 19:30<br>
                            Dirección: Sin Nombre #32-109, Mesa de las Cabras, Arteaga Coah. C.P. 2535<br>
                            <a href="https://www.google.com/maps/place/Quinta+Boreal/@25.4412777,-100.8464845,17z/data=!3m1!4b1!4m5!3m4!1s0x86880f2bac288a99:0xf033b7b7b96f4d48!8m2!3d25.4412788!4d-100.8443026"
                                class="btn btn-custom mt30" target="_blank">Ver ubicación</a>
                        </div>

                        <div class="col-md-12 text-center" style="margin-top:40px">
                            <h3>Fin del Evento</h3>
                            Horario: 2:00 A.M.
                        </div>

                        <div class="spacer-double"></div>
                    </div>
                </div>
            </div>

            <!-- section begin -->
            <section id="section-hero" class="full-height relative z1 owl-slide-wrapper no-top no-bottom text-light" data-stellar-background-ratio=".2" style="background-image: url({{ asset('portada.jpg') }})">
                {{-- <div class="owl-slider-nav">
                    <div class="next"></div>
                    <div class="prev"></div>
                </div> --}}

                <div class="center-y fadeScroll relative" data-scroll-speed="4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="row">
                                    <div class="spacer-double"></div>
                                    <div class="spacer-single"></div>
                                    <div class="col-md-5 text-right text-center-sm relative">
                                        <h2 class="name">Gerardo</h2>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <span class="deco-big" data-scroll-speed="2">&amp;</span>
                                    </div>
                                    <div class="col-md-5 text-left text-center-sm relative">
                                        <h2 class="name">Miroslaba</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div id="custom-owl-slider" class="owl-slide" data-scroll-speed="2">
                    <div class="item">
                        <img src="{{ asset('portada.jpg') }}" class="img-responsive" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('image/2.jpg') }}" class="img-responsive" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('image/3.jpg') }}" class="img-responsive" alt="">
                    </div>
                </div> --}}
            </section>
            <!-- section close -->


            <!-- section begin -->
            <section id="section-couple" class="no-top">
                <div class="container relative mt-60 z-index">
                    <div class="row">

                        <div class="col-md-5 col-md-offset-1 text-center">
                            <img src="{{ asset('miro.jpeg') }}" alt="" class="img-responsive img-rounded wow fadeInLeft" data-wow-delay=".2s" />
                            <div class="padding40">
                                <h2>Miroslaba</h2>
                                <p>Miros es sin duda la mejor pediatra que jamás existirá además de inteligente, bella y con un corazón de oro, se ha encargado de hacer feliz a Ger con cariño y ternura en cada momento desde que son novios, cada cosa que hace es perfecta y llena de atención al detalle, tiene la sonrisa más hermosa y si la ves seguro trae elotes en la mano.</p>
                            </div>
                        </div>

                        <div class="col-md-5 text-center">
                            <img src="{{ asset('ger.jpeg') }}" alt="" class="img-responsive img-rounded wow fadeInRight" data-wow-delay=".2s" />
                            <div class="padding40">
                                <h2>Gerardo</h2>
                                <p>Gerardo (Ger para quienes lo estimamos) es un hombre noble, amable, extremadamente inteligente y divertido, no hay día que no me haga reír y al mismo tiempo siempre me asombra con todo su conocimiento. Es el diseñador más talentoso del mundo pero sobre todo es el mejor novio del Universo.</p>
                            </div>
                        </div>

                        <div class="col-md-2 col-md-offset-5 text-center absolute">
                            <span class="circle wow zoomIn" data-wow-delay=".8s">
								<i class="fa fa-heart"></i>
							</span>
                        </div>


                        <div class="clearfix"></div>
                    </div>
                </div>

            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-countdown" aria-label="section-countdown" class="text-light" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="deco id-color"><span>Cuenta regresiva</span></h2>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="spacer-double"></div>
                            <div id="defaultCountdown" class="wow fadeIn"></div>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <section id="section-story" data-bgcolor="#e2e4e8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Nuestra historia</h2>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <ul class="timeline">
                        <li class="wow fadeInUp">
                            <div class="timeline-badge"><i class="fa fa-heart"></i></div>
                            <div class="timeline-panel">

                                <div class="picframe img-rounded mb20">
                                    {{-- <a class="image-popup" href="images/story/1.jpg">
										<span class="overlay-v">
											<i></i>
										</span>
									</a> --}}
                                    <img src="{{ asset('image/1.jpg') }}" class="img-responsive img-rounded" alt="">
                                </div>

                                <div class="timeline-heading">
                                    {{-- <h4>1 July 2019</h4> --}}
                                    <h3 class="mt0">Serendipia</h3>
                                    <div class="tiny-border"></div>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                        No podemos encontrar palabra más hermosa y adecuada para definir nuestro amor. En está época donde las personas están a un clic de distancia, entre los 7 964 545 209 seres humanos que habitan hoy el planeta, logramos encontrarnos.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted wow fadeInUp">
                            <div class="timeline-badge"><i class="fa fa-heart"></i></div>
                            <div class="timeline-panel">
                                <div class="picframe img-rounded mb20">
                                    <img src="{{ asset('image/5.jpg') }}" class="img-responsive img-rounded" alt="">
                                </div>

                                <div class="timeline-heading">
                                    {{-- <h4>1 July 2019</h4> --}}
                                    <h3 class="mt0">Todo comenzó con un "Hola"</h3>
                                    <div class="tiny-border"></div>
                                </div>
                                <div class="timeline-body">
                                    <p>De un simple "Hola" a través del chat de una red social, nació la historia más bella. ¿Existe el amor a primera vista? Creo que nosotros lo comprobamos. Tras largas semanas de pláticas sin cesar de todos los temas que se puedan imaginar, finalmente decidimos conocernos en persona, en un lugar local de hamburguesas (muy ricas por cierto), dos horas y media de cita fueron suficientes para decidir que sí, que estábamos hechos el uno para el otro, que el destino, la fortuna, la suerte, cupido, Dios  y a quien queramos atribuir que el algoritmo que elige a quien le apareces en sugerencias de amigos haya decidido que una médico y un diseñador debían conocerse, había acertado.</p>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInUp">
                            <div class="timeline-badge"><i class="fa fa-heart"></i></div>
                            <div class="timeline-panel">
                                <div class="picframe img-rounded mb20">
                                    <img src="{{ asset('image/6.jpg') }}" class="img-responsive img-rounded" alt="">
                                </div>

                                <div class="timeline-heading">
                                    {{-- <h4>1 July 2019</h4> --}}
                                    <h3 class="mt0">El compromiso</h3>
                                    <div class="tiny-border"></div>
                                </div>
                                <div class="timeline-body">
                                    <p>Primero fue decirle sí a una relación formal, después prometernos un amor duradero y hoy, tras 5 años de relación (que se cumplen precisamente el 7 de Mayo), estamos anunciando frente a todos que estamos próximos a casarnos y pasar el resto de nuestras vidas juntos.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted wow fadeInUp">
                            <div class="timeline-badge"><i class="fa fa-heart"></i></div>
                            <div class="timeline-panel">
                                <div class="picframe img-rounded mb20">

                                    <img src="{{ asset('image/2.jpg') }}" class="img-responsive img-rounded" alt="">
                                </div>

                                <div class="timeline-heading">
                                    {{-- <h4>1 July 2019</h4> --}}
                                    <h3 class="mt0">Gracias infinitas</h3>
                                    <div class="tiny-border"></div>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                        Gracias por acompañarnos en este trayecto lleno del más puro amor, esperanza, felicidad, risas y muchas anécdotas que contar, estamos muy felices de compartir con ustedes nuestra alegría por unir nuestras vidas.  Que nuestra boda sea un lugar y evento para disfrutar, compartir y celebrar, los queremos mucho.

                                    </p>
                                </div>
                            </div>
                        </li>
                        {{-- <li class="wow fadeInUp">
                            <div class="timeline-badge"><i class="fa fa-heart"></i></div>
                            <div class="timeline-panel">
                                <div class="picframe img-rounded mb20">
                                    <img src="{{ asset('image/6.jpg') }}" class="img-responsive img-rounded" alt="">
                                </div>

                                <div class="timeline-heading">
                                    <h4>1 July 2019</h4>
                                    <h3 class="mt0">El gran día</h3>
                                    <div class="tiny-border"></div>
                                </div>
                                <div class="timeline-body">
                                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois
                                        divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis,
                                        nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.</p>
                                </div>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </section>

            <!-- section begin -->
            <section id="section-quote" aria-label="section-quote-1" class="text-light" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="row wow fadeInUp">
                        <div class="col-md-8 col-md-offset-2">
                            <blockquote class="very-big text-light wow fadeIn">
                                "Love recognizes no barriers. It jumps hurdles, leaps fences, penetrates walls to arrive at its destination full of hope."
                                <span>Maya Angelou</span>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->



            <!-- section begin -->
            <section aria-label="section" class="no-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="deco id-color"><span>¡Para los invitados!</span></h2>
                            <h2 data-wow-delay=".2s">07/05/2022</h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->





            <!-- section begin -->
            <section id="section-event">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/misc/3.jpg" alt="" class="img-responsive img-rounded wow fadeInLeft">
                        </div>

                        <div class="col-md-5 col-md-offset-1 pt40 pb40 wow fadeIn" data-wow-delay=".5s">
                            <h3>Ceremonia</h3>
                            Lugar: Parroquia San Esteban<br>
                            Horario: 18:00<br>
                            Dirección: Guadalupe Victoria, Zona Centro. C.P. 25000, Saltillo, Coahuila.<br>
                            <a href="https://www.google.com/maps/place/Parroquia+San+Esteban/@25.4223343,-101.0042092,17z/data=!3m2!4b1!5s0x868872bda27bfe5d:0x993896eb59038d4a!4m5!3m4!1s0x868872bda2a002fb:0x1bd54b6aec8e51f6!8m2!3d25.4223295!4d-101.0020205"
                                class="btn btn-custom mt30" target="_blank">Ver ubicación</a>
                        </div>
                    </div>

                    <div class="spacer-double"></div>

                    <div class="row">
                        <div class="col-md-5 pt40 pb40 text-left wow fadeIn" data-wow-delay=".5s">
                            <h3>Jardin</h3>
                            Lugar: Quinta Boreal<br>
                            Horario: 19:30<br>
                            Dirección: Sin Nombre #32-109, Mesa de las Cabras, Arteaga Coah. C.P. 2535<br>
                            <a href="https://www.google.com/maps/place/Quinta+Boreal/@25.4412777,-100.8464845,17z/data=!3m1!4b1!4m5!3m4!1s0x86880f2bac288a99:0xf033b7b7b96f4d48!8m2!3d25.4412788!4d-100.8443026"
                                class="btn btn-custom mt30" target="_blank">Ver ubicación</a>
                        </div>

                        <div class="col-md-6 col-md-offset-1">
                            <img src="images/misc/4.jpg" alt="" class="img-responsive img-rounded wow fadeInRight">
                        </div>
                    </div>


                </div>
            </section>
            <!-- section close -->

            <section id="section-services" data-bgcolor="#fff" style="background-color: rgb(255,255,255); background-size: cover;">
                <div class="container" style="background-size: cover;">
                            <div class="row" style="background-size: cover;">
								<div class="col-md-12 text-center" style="background-size: cover;">
									<h2 class="s1">Mesa de regalos</h2>
									<div class="small-border" style="background-size: cover;"></div>
								</div>

                                <div class="col-md-3 col-md-offset-3 text-center" style="background-size: cover;">
									<a href="https://www.amazon.com.mx/wedding/miroslaba-avila-gerardo-salazar-saltillo-may-2022/registry/QJE2NBQX7J4N" target="_blank"><img src="{{ asset('amazon.jpg') }}" alt="" class="img-responsive mb30"></a>
                                    {{-- <h4>Amazon</h4> --}}
                                </div>

								<div class="col-md-3 text-center" style="background-size: cover;">
									<a href="https://mesaderegalos.liverpool.com.mx/milistaderegalos/50692030" target="_blank"><img src="{{ asset('liverpool.jpg') }}" alt="" class="img-responsive mb30"></a>
                                    {{-- <h4>Liverpool</h4> --}}
                                </div>
                            </div>
                        </div>
            </section>

            <section id="section-about" class="text-light" data-bgcolor="#b28f1d" style="background-color: rgb(178, 143, 29); background-size: cover;">
                <div class="container" style="background-size: cover;">
                    <div class="row text-center" style="background-size: cover;">

                        <div class="col-md-8 col-md-offset-2" style="background-size: cover;">
							<h2 class="s1">Hotel</h2>
							<div class="small-border" style="background-size: cover;"></div>
							<p class="lead">
								Se ha realizado un convenio con el Hotel Nuvó Saltillo con tarifas convenientes para la familia y amigos que elijan esta opción, el mecanismo de contratación es muy simple. Cada interesado debe llamar al 844 485 040 y pedir una reservación con el Código MYG67.
							</p>
						</div>


                        <div class="col-md-8 col-md-offset-2" style="background-size: cover; margin-top:50px;">
							<h2 class="s1">Sugerencias sobre viaje</h2>
                            <div class="small-border" style="background-size: cover;"></div>
						</div>


						<div class="spacer-single" style="background-size: cover;"></div>

						<div class="col-md-6" style="background-size: cover;">
                            <i class="fa-solid fa-plane-arrival mb20 size40"></i>
							<h4>Avion</h4>
							<p style="text-align: justify !important;"> Hay que tomar en cuenta que el aeropuerto más cercano es el de Monterrey.</p>
                            <p style="text-align: justify !important;">
                                <b>Rentar Auto</b>: Hay varias opciones de arrendadoras con paquetes desde 600 pesos por día más impuestos y seguros dependiendo del auto elegido, Se sugiere contratarlo desde la compra del boleto de avión, todas las aerolíneas manejan convenios con Arrendadoras.
                            </p>
                            <p style="text-align: justify !important;">
                                <b>Autobús Directo</b>: Desde el aeropuerto hay transporte a la central de autobuses de Monterrey. De ahí encontrarán muchas opciones de corridas directas y precios a la central de autobuses de Saltillo, que está a 15 minutos del Hotel sugerido.
                            </p>
                            <p style="text-align: justify !important;">
                                <b>Taxi</b>: Existe un servicio desde saltillo de choferes que pueden recogerlos en el aeropuerto por una tarifa de alrededor de 1,200.00 pesos y se recomienda cuando viajan mas de 3 Personas, se reduce el tiempo y el costo no se incrementa demasiado. Para esta opción, me pueden contactar directo.
                            </p>
                            <p style="text-align: justify !important;">
                                Para elegir el horario de vuelo de regreso, se sugiere tomar en cuenta los tiempos necesarios para el regreso y los tiempos de espera en el aeropuerto.
                            </p>
						</div>

						<div class="col-md-6" style="background-size: cover;">
                            <i class="fa-solid fa-car-rear mb20 size40"></i>
							<h4>Carretera</h4>
							<p style="text-align: justify !important;">
                                <b>Desde la ciudad de México</b>: Hay 806 Kms y por la autopista 57 (ruta de cuota) el tiempo efectivo de viaje, dependiendo del horario es de unas 8.5 Hs
                            </p>
                            <p style="text-align: justify !important;">
                                <b>Desde Querétaro</b>: el tiempo se reduce a unas 6.5 Hs y una distancia 650 kms y Hs de viaje por la autopista 57.
                            </p>
                            <p style="text-align: justify !important;">
                               <b> Desde León Gto</b>: Son 605 Kms y unas 6.5 hs y la ruta sugerida, es también de cuota en algunos tramos, por la carretera 45D hasta zacatecas y la 54 de Zacatecas a Saltillo.
                            </p>
						</div>

                        <div class="spacer-double" style="background-size: cover;"></div>
                    </div>
                </div>
            </section>


            <!-- section begin -->
            {{-- <section id="section-guestbook" class="text-light" data-stellar-background-ratio=".2">
                <div class="container relative">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Guest Book</h2>
                            <div class="spacer-single"></div>
                        </div>


                        <div id="testimonial-carousel" class="de_carousel" data-wow-delay=".3s">

                            <div class="col-md-6 item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>To a special couple who show that love can be true and forever. May your lives continue
                                            to grow in love and happiness together!</p>
                                        <div class="de_testi_by">
                                            John, Friend
                                        </div>
                                    </blockquote>

                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>Wedding wishes for my dear friends. I hope your life together will be filled with
                                            joy, happiness and lots of love!</p>
                                        <div class="de_testi_by">
                                            Sarah, Friend
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>Hope you will have a long and happy life together. Always treat each other better
                                            than you want to be treated.</p>
                                        <div class="de_testi_by">
                                            Michael, Friend
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>I wish you a wonderful life together as you head down the road to married happiness.
                                            So happy for you!</p>
                                        <div class="de_testi_by">
                                            Jenny, Friend
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section> --}}
            <!-- section close -->





        </div>
        <!-- content close -->

        <!-- footer begin -->
        <footer>
            <div class="container text-center text-light">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="hs1 wow fadeInUp">Gerardo<span>&amp;</span>Miroslaba</h2>
                    </div>
                </div>
            </div>

            <div class="subfooter">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            With love by a friend
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

        <a href="#" id="back-to-top"></a>
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
    </div>

	{{-- <audio loop="loop" autoplay="autoplay">
		<source src="music/Feels Like a Wedding Day.mp3" type="audio/mpeg" />
	</audio> --}}

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('js/validation-rsvp.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/enquire.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('js/countdown-custom.js') }}"></script>
    <script src="{{ asset('js/animsition.min.js') }}"></script>
    <script src="{{ asset('js/designesia.js') }}"></script>

</body>

</html>
