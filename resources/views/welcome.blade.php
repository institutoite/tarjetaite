@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/boton.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" sizes="16x16" href="{{ asset('favicon/favicon16x16.png') }}" type="image/png">
    <link rel="icon" sizes="32x32" href="{{ asset('favicon/favicon32x32.png') }}" type="image/png">
    <link rel="icon" sizes="48x48" href="{{ asset('favicon/favicon48x48.png') }}" type="image/png">
    <link rel="icon" sizes="96x96" href="{{ asset('favicon/favicon96x96.png') }}" type="image/png">
@stop

@section('title', 'Educabol')

@section('content_header')
@stop

@section('content')
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="foto" src="{{ asset('images/logo.png') }}" alt="">
                    <div class="titulo">
                        <div class="text-center p-3">
                            <span class="text-center slogan">Facilitamos tu educación</span>
                        </div>
                    </div>
                </div>
                <div class="foto">
                </div>
            </div>
    
            <div id="logos-container">
                <div class="logos facebook">
                    <a href="https://www.facebook.com/ite.educabol" target="_blank"><i class="fa-brands fa-facebook fa-shake text-white fa-3x"></i>
                        <span class="social-name">Facebook</span>
                    </a>
                </div>
                <div class="logos ubicacion">
                    <a href="#ubicaciones" onclick="scrollToElement('ubicaciones')" target="_blank"><i class="fa-solid fa-location-pin fa-beat fa-3x text-white"></i>
                        <span class="social-name">Ubicaciones</span>
                    </a>
                </div>
                <div class="logos tiktok">
                    <a href="https://www.tiktok.com/@ite_educabol" target="_blank"><i class="fa-brands fa-tiktok fa-bounce fa-3x text-white"></i>
                        <span class="social-name">TikTok</span>
                    </a>
                </div>
                <div class="logos whatsapp">
                    <a href="https://wa.me/59171039910" target="_blank"><i class="fa-brands fa-whatsapp fa-bounce fa-3x text-white"></i>
                        <span class="social-name">Agencia plan 3000</span>
                    </a>
                </div>
                <div class="logos whatsapp">
                    <a href="https://wa.me/59175553338" target="_blank"><i class="fa-brands fa-whatsapp fa-bounce fa-3x text-white"></i>
                        <span class="social-name">Agencia central</span>
                    </a>
                </div>
                <div class="logos whatsapp">
                    <a href="https://wa.me/59171324941" target="_blank"><i class="fa-brands fa-whatsapp fa-bounce fa-3x text-white"></i>
                        <span class="social-name">Villa 1 Mayo</span>
                    </a>
                </div>
                <div class="logos mail">
                    <a href="mailto:ifo@ite.com.bo"><i class="fa-solid fa-envelope-open-text fa-3x text-white"></i>
                        <span class="social-name">Correo</span>
                    </a>
                </div>
                <div class="logos instagram">
                    <a href="https://www.instagram.com/ite.educabol" target="_blank"><i class="fa-brands fa-instagram fa-3x text-white"></i>
                        <span class="social-name">Instagram</span>
                    </a>
                </div>
                <div class="logos sms">
                    <a href="sms:71039910"><i class="fa-solid fa-comment-sms text-white fa-3x"></i>
                        <span class="social-name">SMS</span>
                    </a>
                </div>
                <div class="logos celular">
                    <a href="tel:71039910"><i class="fa-solid fa-mobile-screen fa-3x text-white"></i>
                        <span class="social-name">Celular</span>
                    </a>
                </div>
                <div class="logos messenger">
                    <a href="https://m.me/ite.educabol" target="_blank"><i class="fa-brands fa-facebook-messenger text-white fa-3x"></i>
                        <span class="social-name">Messenger</span>
                    </a>
                </div>
                <div class="logos web">
                    <a href="https://www.ite.com.bo" target="_blank"><i class="fa-solid fa-globe fa-spin fa-3x text-white"></i>
                        <span class="social-name">Web</span>
                    </a>
                </div>
                <div class="logos descargar">
                    <a href="{{ route("descargar.contacto") }}"><i class="fa-solid fa-cloud-arrow-down fa-shake fa-3x text-white"></i>
                        <span class="social-name">Guardar contacto</span>
                    </a>
                </div>
            </div>
            
            <!-- Sección de Ubicación -->
            <section id="productos">
                <h2 class="text-white">Nuestros servicios</h2>
                <p>En ITE, transformamos el aprendizaje en una aventura emocionante, combinando innovación y educación para empoderar a cada estudiante.</p>
                <!-- Contenedor de los Productos -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">APOYO ESCOLAR PRIMARIA</h5>
                            <p class="card-text">Construyendo las bases del conocimiento con diversión y entusiasmo.</p>
                            <a class="btn-custom small" href="https://api.whatsapp.com/send?phone=59171039910&text=Quiero%20más%20información%20sobre%20el%20Apoyo%20Escolar%20Primaria" class="btn btn-primary" target="_blank">Más Información</a>
                          </div>
                        </div>
                      </div>
                      <!-- Card 2: Secundaria -->
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">APOYO ESCOLAR SECUNDARIA</h5>
                            <p class="card-text">Preparando a los adolescentes para un futuro brillante y exitoso.</p>
                            <a class="btn-custom small" href="https://api.whatsapp.com/send?phone=59171039910&text=Quiero%20más%20información%20sobre%20el%20Apoyo%20Escolar%20Secundaria" class="btn btn-primary" target="_blank">Más Información</a>
                          </div>
                        </div>
                      </div>
                      <!-- Card 3: Preuniversitario -->
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">APOYO ESCOLAR PREUNIVERSITARIO</h5>
                            <p class="card-text">Tu camino al éxito universitario comienza aquí.</p>
                            <a class="btn-custom small" href="https://api.whatsapp.com/send?phone=59171039910&text=Quiero%20más%20información%20sobre%20el%20Apoyo%20Escolar%20Preuniversitario" class="btn btn-primary" target="_blank">Más Información</a>
                          </div>
                        </div>
                      </div>
                      <!-- Card 4: Universitario -->
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">APOYO UNIVERSITARIO</h5>
                            <p class="card-text">Supera cada desafío académico con confianza y excelencia.</p>
                            <a class="btn-custom small" href="https://api.whatsapp.com/send?phone=59171039910&text=Quiero%20más%20información%20sobre%20el%20Apoyo%20Universitario" class="btn btn-primary" target="_blank">Más Información</a>
                          </div>
                        </div>
                      </div>
                      <!-- Card 5: Profesionales -->
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">APOYO PARA PROFESIONALES</h5>
                            <p class="card-text">Impulsa tu carrera con aprendizaje continuo y especializado.</p>
                            <a class="btn-custom small" href="https://api.whatsapp.com/send?phone=59171039910&text=Quiero%20más%20información%20sobre%20el%20Apoyo%20para%20Profesionales" class="btn btn-primary" target="_blank">Más Información</a>
                          </div>
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">CURSO DE CUBO RUBIK</h5>
                            <p class="card-text">Desafía tu mente y domina el cubo con nuestras clases especializadas.</p>
                            <a class="btn-custom small" href="https://api.whatsapp.com/send?phone=59171039910&text=Quiero%20más%20información%20sobre%20el%20Curso%20de%20Cubo%20Rubik" class="btn btn-primary" target="_blank">Más Información</a>
                          </div>
                        </div>
                      </div>
                      <!-- Card 2: Clases de Ajedrez -->
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">CLASES DE AJEDREZ</h5>
                            <p class="card-text">Estrategia, paciencia y victoria en cada movimiento.</p>
                            <a class="btn-custom small" href="https://api.whatsapp.com/send?phone=59171039910&text=Quiero%20más%20información%20sobre%20las%20Clases%20de%20Ajedrez" class="btn btn-primary" target="_blank">Más Información</a>
                          </div>
                        </div>
                      </div>
                      <!-- Card 3: Programación -->
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">PROGRAMACIÓN</h5>
                            <p class="card-text">Desarrolla tus habilidades tecnológicas y crea el futuro.</p>
                            <a class="btn-custom small" href="https://api.whatsapp.com/send?phone=59171039910&text=Quiero%20más%20información%20sobre%20las%20clases%20de%20Programación" class="btn btn-primary" target="_blank">Más Información</a>
                          </div>
                        </div>
                      </div>
                      <!-- Card 4: Computación -->
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">COMPUTACIÓN</h5>
                            <p class="card-text">Domina las herramientas digitales y triunfa en el mundo moderno.</p>
                            <a class="btn-custom small" href="https://api.whatsapp.com/send?phone=59171039910&text=Quiero%20más%20información%20sobre%20las%20clases%20de%20Computación" class="btn btn-primary" target="_blank">Más Información</a>
                          </div>
                        </div>
                      </div>
                      <!-- Card 5: Desarrollo de Software -->
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">DESARROLLO DE SOFTWARE</h5>
                            <p class="card-text">Innovación tecnológica para un mundo en constante cambio.</p>
                            <a class="btn-custom small" href="https://api.whatsapp.com/send?phone=59171039910&text=Quiero%20más%20información%20sobre%20el%20Desarrollo%20de%20Software" class="btn btn-primary" target="_blank">Más Información</a>
                          </div>
                        </div>
                      </div>
                </div>
            </section>
    
            <div class="contact-map-section col-lg-8 col-md-7 col-sm-12">
                <div class="map-boxed mt-30">
                    <!--Map Outer-->
                    <div class="map-outer">
                        
                    </div>
                </div>
            </div>
            <section id="ubicaciones">
                <h2>Agencia <br> Central </h2>
                <!-- Contenedor del Mapa -->
                <div id="map-container">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7597.513246938265!2d-63.13892701862163!3d-17.803131705728497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e9948f88a431%3A0x448c1b5adb32a0f0!2site%20(central)!5e0!3m2!1ses-419!2sbo!4v1717215763506!5m2!1ses-419!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
            <br>
            <br>
            <section id="ubicacionlp">
                <h2>Agencia<br> 1º de Mayo</h2>
                <!-- Contenedor del Mapa -->
                <div id="map-container">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9035.016329804328!2d-63.14008057379088!3d-17.803141180379537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e9d3360e592d%3A0xbb1ce56a94dcace2!2site(Villa%201%20de%20Mayo)!5e0!3m2!1ses-419!2sbo!4v1717215700428!5m2!1ses-419!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
            <br>
            <br>
            <section id="ubicacioncba">
                <h2>Agencia<br>Plan 3000</h2>
                <!-- Contenedor del Mapa -->
                <div id="map-container">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4517.160560336606!2d-63.139532516811265!3d-17.81686492510433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e93964fb0ad3%3A0x7f013a1818c8b975!2sITE%20INNOVA!5e0!3m2!1ses-419!2sbo!4v1717215604127!5m2!1ses-419!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
            
            <br>
            <br>
            <br>
            <br>
            <footer>
                <div>
                    <p>APOYO ESCOLAR – COMPUTACION – PROGRAMACION – ROBOTICA</p>
                    <p>David Eduardo Flores Beltran - Gerente General</p>
                    <a href="https://wa.me/59171039910"> <p>WhatsApp: 71039910</p> </a>
                </div>
                <div>
                    <p>Facebook: <a href="https://www.facebook.com/ite.educabol">ite.educabol</a></p>
                    <p>Instagram: <a href="https://www.instagram.com/ite.educabol">ite.educabol</a></p>
                    <p>TikTok: <a href="https://www.tiktok.com/@ite_educabol">ite_educabol</a></p>
                </div>
                <div>
                    <p>Correo: <a href="mailto:info@ite.com.bo">info@ite.com.bo</a></p>
                    <p>Pag web: <a href="https://www.ite.com.bo">www.ite.com.bo</a></p>
                    <p>Dirección: Villa 1 de Mayo calle 16, oeste #9</p>
                </div>
            </footer>
    </div>
@stop




@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        function scrollToElement(elementId) {
            var element = document.getElementById(elementId);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    </script>
@stop