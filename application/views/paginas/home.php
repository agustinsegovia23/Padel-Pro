<div class="container my-5">
    
    <!-- CARRUSEL  -->
    <div class="row mb-5 justify-content-center">
        <div class="col-12">
            <div id="carouselHome" class="carousel slide shadow-sm rounded overflow-hidden" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>

              <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url('assets/img/carrousel-1.jpg'); ?>" class="d-block w-100" alt="Padel Pro Dynamic Action" style="height: 420px; object-fit: cover;">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 rounded p-3 mb-4 text-center">
                            <div class="col-lg-10 mx-auto">
                                <h1 class="fw-bold text-white mb-1 mb-md-2 fs-5 fs-md-3">Conviértete en leyenda del pádel</h1>
                                <p class="text-light small mb-2">Viví la historia de Alex, un jugador que lucha por regresar al circuito profesional tras una lesión que cambió su vida.</p>
                                <div class="d-flex justify-content-center gap-3 mt-2">
                                    <a href="<?= base_url('index.php/paginas/usuario'); ?>" class="btn btn-cta-comprar btn-sm px-3 py-1">Comprar Juego</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="<?= base_url('assets/img/carrousel-2.jpg'); ?>" class="d-block w-100" alt="Padel Pro Strike Power" style="height: 420px; object-fit: cover;">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 rounded p-3 mb-4 text-center">
                            <div class="col-lg-10 mx-auto">
                                <h1 class="fw-bold text-white mb-1 mb-md-2 fs-5 fs-md-3">Explora el universo visual de Padel Pro</h1>
                                <p class="text-light small mb-2">Sumérgete en nuestra galería de capturas oficiales, videos exclusivos de gameplay y bocetos de desarrollo.</p>
                                <div class="d-flex justify-content-center gap-3 mt-2">
                                    <a href="<?= base_url('index.php/paginas/multimedia'); ?>" class="btn btn-cta-comprar btn-sm px-3 py-1">Ver centro multimedia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </div>

    <!-- TARJETA CENTRAL -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 text-center p-4">
                <div class="card-body">
                    <div class="bg-light border rounded p-3 mb-3 text-muted">
                        <img src="<?= base_url('assets/img/logo.png'); ?>" alt="Logo" class="img-fluid" style="max-height: 100px;">
                    </div>
                    <p class="text-secondary mb-4">
                        Simulación deportiva y aventura narrativa sobre la superación personal, rivalidades intensas y la redención en el deporte profesional.
                    </p>
                    <a href="<?= base_url('index.php/paginas/gameplay'); ?>" class="btn btn-outline-info btn-sm fw-bold mt-auto px-4">Explorar mecánicas de juego</a>
                </div>
            </div>
        </div>
    </div>

    <!-- TARJETAS INFERIORES -->
    <div class="row g-4">
        <!-- TARJETA 1 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 p-3">
                <img src="<?= base_url('assets/img/superacion-1.jpg'); ?>" alt="Superacion" class="card-img-top img-card-historia">
                <div class="card-body d-flex flex-column align-items-center text-center">
                    <h4 class="card-title fw-bold mb-3">Un camino de superación</h4>
                    <p class="text-secondary small mb-4">
                        A lo largo de su carrera, Alex enfrentará desafíos físicos y emocionales que pondrán a prueba su determinación.
                    </p>
                    <a href="<?= base_url('index.php/paginas/historia'); ?>" class="btn btn-outline-info btn-sm fw-bold mt-auto px-4">Ver historia</a>
                </div>
            </div>
        </div>

        <!-- TARJETA 2 -->
       <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 p-3">
                <img src="<?= base_url('assets/img/aliados.png'); ?>" alt="Aliados" class="card-img-banner mb-3">
                <div class="card-body d-flex flex-column align-items-center text-center">
                    <h4 class="card-title fw-bold mb-3">Aliados y Rivales</h4>
                    <p class="text-secondary small mb-4">
                        Interactuá con personajes únicos que influirán directamente en tu camino al éxito profesional.
                    </p>
                    <a href="<?= base_url('index.php/paginas/personajes'); ?>" class="btn btn-outline-info btn-sm fw-bold mt-auto px-4">Ver personajes</a>
                </div>
            </div>
        </div>

        <!-- TARJETA 3 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 p-3">
                <img src="<?= base_url('assets/img/comunidad-1.jpg'); ?>" alt="Comunidad" class="card-img-banner mb-3">
                <div class="card-body d-flex flex-column align-items-center text-center">
                    <h4 class="card-title fw-bold mb-3">Unete a la comunidad</h4>
                    <p class="text-secondary small mb-4">
                        ¿Tenés dudas, sugerencias o querés saber más sobre el desarrollo del juego? Ponete en contacto con el estudio.
                    </p>
                    <a href="<?= base_url('index.php/paginas/contacto'); ?>" class="btn btn-outline-info btn-sm fw-bold mt-auto px-4">Contacto</a>
                </div>
            </div>
        </div>
    </div>

</div>
</div>