<?php include('header.php'); ?>

<div class="container mt-5">
    <!-- Sección de Presentación -->
    <section id="about">
        <h2 class="text-center">Bienvenidos a TechSolutions</h2>
        <p class="text-center">Somos líderes en consultoría tecnológica, desarrollo de software y seguridad informática.</p>
    </section>

    <!-- Carrusel de Testimonios -->
    <section id="testimonials" class="mt-5">
        <h3 class="text-center">Lo que dicen nuestros clientes</h3>
        <div id="carouselTestimonials" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p class="text-center">"Excelente servicio y atención al detalle."</p>
                    <p class="text-center">- Cliente 1</p>
                </div>
                <div class="carousel-item">
                    <p class="text-center">"Altamente recomendados para soluciones IT."</p>
                    <p class="text-center">- Cliente 2</p>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselTestimonials" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselTestimonials" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </section>
</div>

<?php include('footer.php'); ?>
