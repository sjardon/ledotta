<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage LEDotta
 * @since LEDotta 1.0
 */


// Ejemplo: http://demo.harnishdesign.net/html/simone/index-classic-header.html
//Estructura:
//  - Bienvenido
//  - Presentación de Luciana (Conoceme)
//  - Qué hago?
//  - Estudios / CV
//  - Comentarios de clientes
//  - Contactar


get_header();
?>
<section id='home' class='section-wraper full'>
    <div class='home-bg w-100 h-100'></div>
    <div class='mask'></div>
    <div class='home-content w-100 h-100 d-flex'>
        <div class="container d-flex justify-content-center align-items-center">
            <div class='row'>
                <div class='col-12 col-sm-8 text-start'>
                    <h3 class='p-2'>Bienvenido</h3>
                    <h1 class='p-2'>Luciana Elizabeth Dotta, mandataria naval y automotor</h1>
                    <p class='p-2'>Buenos Aires, Argentina</p>
                    <p class='p-2'><a href='#contact' class="btn btn-info btn-lg">Contactame</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id='about' class='section-wraper'>
    <div class='container'>
        <div class="row">
            <div class="col-12">
                <h1 class='title'>Sobre mi</h1>
            </div>
        </div>
        <div class="row align-content-stretch">
            <div class="col-5" style="background-image: url(http://localhost/ledotta/wp-content/themes/ledotta/assets/background-02.jpg); background-size:cover; background-repeat: no-repeat;">

            </div>
            <div class="col-12 col-md-7 p-4">
                <h2 class="title">Soy Luciana Dotta, mandataria naval y automotor.</h2>
                <p>Actualmente resido en Buenos Aires. Soy una profesional dedicada al rubro de la gestoría naval, automotor, motovehiculo, créditos prendarios y demás trámites del sector.</p>
                <p>Mi principal interes es la clariadad y la responsabilidad en cada trabajo. Siempre busco lograr la confianza y transparencia con mis clientes y sus operaciones.</p>
                <p class="text-right"><a href='#contact' class="btn btn-info btn-lg">¡Conoce más!</a></p>
            </div>
        </div>
    </div>
</section>

<section id='make' class='section-wraper'>
    <div class='container'>
        <div class="row align-content-stretch">
            <div class="col-12">
                <h1 class='title'>¿Qué puedo hacer por vos?</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 mx-auto">
                <h2 class="title">Me dedico a diferentes tramites del automotor, motovehiculo y naval.</h2>
                <p>¿Cuales son los trámites que puedo hacer por vos? ...</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <div class="card bg-transparent">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-car fa-2x"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="card-title">Tramites de autos</h5>
                                <p class="card-text">Algunos tipos de tramites para autos.</p>
                                <p class="card-text">Algunos tipos de tramites para autos.</p>
                                <p class="card-text">Algunos tipos de tramites para autos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <div class="card bg-transparent">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-car fa-2x"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="card-title">Tramites de autos</h5>
                                <p class="card-text">Algunos tipos de tramites para autos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card bg-transparent">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-ship fa-2x"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="card-title">Tramites de barcos</h5>
                                <p class="card-text">Algunos tipos de tramites de barcos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card bg-transparent">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-car fa-2x"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="card-title">Tramites de autos</h5>
                                <p class="card-text">Algunos tipos de tramites para autos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card bg-transparent">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-ship fa-2x"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="card-title">Tramites de barcos</h5>
                                <p class="card-text">Algunos tipos de tramites de barcos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card bg-transparent">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-car fa-2x"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="card-title">Tramites de autos</h5>
                                <p class="card-text">Algunos tipos de tramites para autos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card bg-transparent">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-ship fa-2x"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="card-title">Tramites de barcos</h5>
                                <p class="card-text">Algunos tipos de tramites de barcos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id='cv' class='section-wraper'>
    <div class='container'>
        <div class="row align-content-stretch">
            <div class="col-12">
                <h1 class='title'>Estudios</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <div class="card bg-transparent">
                    <div class="card-header card-description"><span class="badge">2000 - 2002</span></div>
                    <div class="card-body">
                        <h5 class="card-title">Bachiller en Humanidades y Ciencias Sociales</h5>
                        <p>C.N. Rafael Obligado en Lenguas Vivas, San Nicolás de los Arroyos</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card bg-transparent">
                    <div class="card-header card-description"><span class="badge">2012</span></div>
                    <div class="card-body">
                        <h5 class="card-title">Curso de Medio Ambiente</h5>
                        <p>Instituto Sindicato CETERA, San Nicolás de los Arroyos</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card bg-transparent">
                    <div class="card-header card-description"><span class="badge">2012</span></div>
                    <div class="card-body">
                        <h5 class="card-title">Curso de Auxiliar en Seguridad e Higiene Laboral</h5>
                        <p>Instituto Sindicato CETERA, San Nicolás de los Arroyos</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card bg-transparent">
                    <div class="card-header card-description"><span class="badge">2013 - 2014</span></div>
                    <div class="card-body">
                        <h5 class="card-title">Mandataria del Automotor</h5>
                        <p>FUNICOMAPU, Rosario</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card bg-transparent">
                    <div class="card-header card-description"><span class="badge">2019</span></div>
                    <div class="card-body">
                        <h5 class="card-title">Actualización de conocimientos en Mandataria del Automotor</h5>
                        <p>FINDEP, CABA</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card bg-transparent">
                    <div class="card-header card-description"><span class="badge">2020</span></div>
                    <div class="card-body">
                        <h5 class="card-title">Mandataria Naval</h5>
                        <p>FINDEP, CABA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id='contact' class='section-wraper'>
    <div class='container'>
        <div class="row align-content-stretch">
            <div class="col-12">
                <h1 class='title'>Contactame</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8">
                <form>
                    <div class="row">

                        <div class="col">
                            <div class="form-outline mb-4">
                                <input type="text" id="form4Example1" class="form-control" />
                                <label class="form-label" for="form4Example1">Nombre</label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline mb-4">
                                <input type="email" id="form4Example2" class="form-control" />
                                <label class="form-label" for="form4Example2">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                                <label class="form-label" for="form4Example3">Consulta / Mensaje</label>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12 col-md-3 offset-md-9"><button type="submit" class="btn btn-info btn-block mb-4 ripple-surface">Enviar</button></div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-4">

                <!-- <p class=''><span class="text-primary me-2"><i class="fas fa-mobile-alt fa-sm"></i></span>3364 58-0391</p>
                <p class=''><span class="text-primary me-2"><i class="fas fa-envelope fa-sm"></i></span>luchiidotta@gmail.com</p>
                <p class=''><span class="text-primary me-2"><i class="fas fa-home fa-sm"></i></span>Avellaneda, Buenos Aires</p> -->


                <ul class="list-group">
                    <li class="list-group-item"><i class="fas fa-mobile-alt fa-x2"></i> 3364 58-0391</li>
                    <li class="list-group-item"><i class="fas fa-envelope fa-x2"></i> luchiidotta@gmail.com</li>
                    <li class="list-group-item"><i class="fas fa-home fa-x2"></i> Avellaneda, Buenos Aires</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php

get_footer();

?>