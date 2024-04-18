@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@stop

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Logo shalom" id="logo">
                    <h2 class="">¡Contáctanosx con un solo Click! <br> Elvio Lopez Mendoza</h2>
                </div>
              
    
            </div>
    
            <div id="logos-container">
                <a href="https://www.facebook.com/shalomservicemensajeria"><img src="{{ asset('images/facebook.png') }}" alt="Logo de Facebook" class="logo"></a>
                <a href="https://www.facebook.com/shalomservicemensajeria"><img src="{{ asset('images/ubicacion.png') }}" alt="Logo de Correo electrónico" class="logo"></a>
                <a href="https://omegacard.net/shalom"><img src="{{ asset('images/youtube.png') }}" alt="Logo de YouTube" class="logo"></a>
                <a href="https://www.tiktok.com/@elviolopezmendoza"><img src="{{ asset('images/tiktok.png') }}" alt="Logo de TikTok" class="logo"></a>
                <a href="https://www.facebook.com/shalomservicemensajeria"><img src="{{ asset('images/whatsapp.png') }}" alt="Logo de WhatsApp" class="logo"></a>
                <a href="mailto:elviolopez@shalomcourier.com.bo"><img src="{{ asset('images/correo.png') }}" alt="Logo de Correo electrónico" class="logo"></a>
                <a href="https://www.instagram.com/shalomcourierbolivia/"><img src="{{ asset('images/instagram.png') }}" alt="Logo de YouTube" class="logo"></a>
                <a href="sms:77331160"><img src="{{ asset('images/sms.png') }}" alt="Logo de TikTok" class="logo"></a>
                <a href="tel:77331160"><img src="{{ asset('images/celular.webp') }}" alt="Logo de WhatsApp" class="logo"></a>
                <a href="https://m.me/shalomservicemensajeria"><img src="{{ asset('images/messenger.png') }}" alt="Logo de Correo electrónico" class="logo"></a>
                <a href="https://www.shalomcourier.com.bo"><img src="{{ asset('images/web.png') }}" alt="Logo de Correo electrónico" class="logo"></a>
                <a href="{{ route("descargar.contacto") }}"><img src="{{ asset('images/descargar.png') }}" alt="Logo de Correo electrónico" class="logo"></a>
            </div>
            
            <!-- Sección de Ubicación -->
            <section id="productos">
                <h2 class="">Nuestros servicios</h2>
                <p>Nuestros servicios incluyen envíos y recolección de correspondencia 📦 puerta a puerta en todo el país</p>
                <!-- Contenedor de los Productos -->
                <div id="productos-container">
                    <!-- Producto 1 -->
                    <div class="producto">
                        <img src="{{ asset('images/1.jpg') }}" alt="Producto 1">
                        <p>Shalom: entregas con paz y precisión.</p>
                        
                    </div>
                    <!-- Producto 2 -->
                    <div class="producto">
                        <img src="{{ asset('images/2.jpg') }}" alt="Producto 2">
                        <p>Confía en Shalom, tu mensajero de confianza.</p>
                        
                    </div>
                    <div class="producto">
                        <img src="{{ asset('images/8.jpeg') }}" alt="Producto 2">
                        <p>Shalom: rapidez que te conecta.</p>
                        
                    </div>
                        <!-- Producto 2 -->
                    <div class="producto">
                        <img src="{{ asset('images/9.jpeg') }}" alt="Producto 2">
                        <p>Envíos con Shalom: tranquilidad asegurada.</p>
                        
                    </div>
                        <!-- Producto 2 -->
                    <div class="producto">
                        <img src="{{ asset('images/10.jpeg') }}" alt="Producto 2">
                        <p>Shalom, llevando tus paquetes con amor y cuidado.</p>
                        
                    </div>
                        <!-- Producto 2 -->
                    <div class="producto">
                        <img src="{{ asset('images/11.jpeg') }}" alt="Producto 2">
                        <p>Shalom: tu ruta directa hacia la entrega perfecta.</p>
                        
                    </div>
                    <div class="producto">
                        <img src="{{ asset('images/12.jpeg') }}" alt="Producto 2">
                        <p>¡Relájate y deja que Shalom se encargue del resto!</p>
                        
                    </div>
                    <div class="producto">
                        <img src="{{ asset('images/13.jpeg') }}" alt="Producto 2">
                        <p>Con Shalom, la distancia se hace más corta.</p>
                        
                    </div>
                    <div class="producto">
                        <img src="{{ asset('images/14.jpeg') }}" alt="Producto 2">
                        <p>Shalom: porque tus entregas merecen lo mejor.</p>
                        
                    </div>
                    <div class="producto">
                        <img src="{{ asset('images/15.jpeg') }}" alt="Producto 2">
                        <p>Eficiencia y compromiso, el sello de Shalom.</p>
                        
                    </div>
                    <div class="producto">
                        <img src="{{ asset('images/16.jpeg') }}" alt="Producto 2">
                        <p>Shalom: entregas sin preocupaciones.</p>
                        
                    </div>
                    <div class="producto">
                        <img src="{{ asset('images/17.jpeg') }}" alt="Producto 2">
                        <p>Tu paquete, nuestro compromiso: Shalom.</p>
                        
                    </div>
                    <div class="producto">
                        <img src="{{ asset('images/18.jpeg') }}" alt="Producto 2">
                        <p>Rápido, seguro, Shalom.</p>
                        
                    </div>
                        <!-- Producto 2 -->
                   
                    <!-- Agrega más productos aquí -->
                </div>
            </section>
    
            <div class="contact-map-section col-lg-8 col-md-7 col-sm-12">
                <div class="map-boxed mt-30">
                    <!--Map Outer-->
                    <div class="map-outer">
                        
                    </div>
                </div>
            </div>
            <section id="ubicacion">
                <h2>Encuéntranos aquí en <br> SANTA CRUZ</h2>
                <!-- Contenedor del Mapa -->
                <div id="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1899.0231568478252!2d-63.158796264114144!3d-17.836463709524455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e98773c36e43%3A0x4084311e40955905!2sShalom%20Courier%20(Santa%20Cruz%20-%20Bolivia)!5e0!3m2!1ses!2sbo!4v1712530099136!5m2!1ses!2sbo" 
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
            <br>
            <br>
            <section id="ubicacion">
                <h2>Encuéntranos aquí en <br> LA PAZ</h2>
                <!-- Contenedor del Mapa -->
                <div id="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d239.11112130415702!2d-68.141509!3d-16.486778!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f200a21b00789%3A0xf3d6432a492c2af3!2sC.%20Omasuyos%20372!5e0!3m2!1ses!2sbo!4v1712530707833!5m2!1ses!2sbo" 
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
            <br>
            <br>
            <section id="ubicacion">
                <h2>Encuéntranos aquí en <br> COCHABAMBA</h2>
                <!-- Contenedor del Mapa -->
                <div id="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d475.9270134206043!2d-66.15282034970285!3d-17.391807393804086!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e373f82261cee9%3A0x7255cfc5d986f331!2sAv.%20Hero%C3%ADnas%200640%2C%20Cochabamba!5e0!3m2!1ses-419!2sbo!4v1712530775981!5m2!1ses-419!2sbo" 
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
            
            <br>
            <br>
            <br>
            <br>
            <footer>
                <div>
                    <p>Shalom COURIER – MENSAJERÍA – DELIVERY</p>
                    <p>Elvio López Mendoza - Gerente General</p>
                    <a href="https://wa.me/59177331160"> <p>WhatsApp: 77331160</p> </a>
                </div>
                <div>
                    <p>Facebook: <a href="https://www.facebook.com/ShalomCourierBolivia">Shalom Courier Bolivia</a></p>
                    <p>Instagram: <a href="https://www.instagram.com/ShalomCourierBolivia">Shalom Courier Bolivia</a></p>
                    <p>TikTok: <a href="https://www.tiktok.com/@ShalomCourierBolivia">Shalom Courier Bolivia</a></p>
                </div>
                <div>
                    <p>Correo: <a href="mailto:elviolopez@shalomcourier.com.bo">elviolopez@shalomcourier.com.bo</a></p>
                    <p>Pag web: <a href="https://www.shalomcourier.com.bo">www.shalomcourier.com.bo</a></p>
                    <p>Dirección: Zona Sur, Calle 10, Casa 10</p>
                </div>
            </footer>
    
    </div>
    </div>
@stop




@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
    <script src="{{ asset('js/custom.js') }}"></script>
@stop