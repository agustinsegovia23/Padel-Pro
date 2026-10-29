<div class="container my-5">
    <!-- TITULO DE LA PAGINA-->
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold text-info">Centro Multimedia</h1>
        <p class="text-secondary">Explora capturas oficiales, videos y bocetos exclusivos de Padel Pro.</p>
    </div>

    <!-- SECCION VIDEO -->
    <div class="row mb-5 justify-content-center">
        <div class="col-md-6 col-12">
            <div class="card bg-dark text-white border-secondary shadow">
                <div class="card-header bg-secondary text-white fw-bold">
                    <i class="fas fa-video me-2"></i> Tráiler Oficial
                </div>
                <div class="card-body p-0">
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/gFl3ADnFRtc?si=mIKHCcIzD8FWkWk3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 1ERA FILA TARJETAS -->
    <h3 class="text-info mb-4"><i class="fas fa-images me-2"></i> Capturas del Gameplay y Arte</h3>
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card bg-dark text-white border-secondary h-100 shadow-sm">
                <img src="<?= base_url('assets/img/cancha-principal.jpg') ?>" class="card-img-top" alt="Cancha Principal" style="height: 240px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title text-info">Cancha Principal</h5>
                    <p class="card-text small text-secondary">Torneos estelares con iluminación y efectos atmosféricos.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-dark text-white border-secondary h-100 shadow-sm">
                <img src="<?= base_url('assets/img/personalizacion.jpg') ?>" class="card-img-top" alt="Personalización" style="height: 240px; object-fit: cover; object-position: center top;">
                <div class="card-body text-center">
                    <h5 class="card-title text-info">Personalización</h5>
                    <p class="card-text small text-secondary">Interfaz para equipamiento y estadísticas de los atletas.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-dark text-white border-secondary h-100 shadow-sm">
                <img src="<?= base_url('assets/img/conceptual.jpg') ?>" class="card-img-top" alt="Arte Conceptual" style="height: 240px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title text-info">Arte Conceptual</h5>
                    <p class="card-text small text-secondary">Bocetos iniciales del entorno urbano y los circuitos.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 2DA FILA TARJETAS -->
    <h3 class="text-info mb-4 mt-4"><i class="fas fa-pencil-alt me-2"></i> Bocetos del Videojuego</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card bg-dark text-white border-secondary h-100 shadow-sm">
                <img src="<?= base_url('assets/img/paleta-padel.jpg') ?>" class="card-img-top" alt="Diseño de Raqueta" style="height: 240px; object-fit: cover; object-position: center 15%;">
                <div class="card-body text-center">
                    <h5 class="card-title text-info">Diseño de Raqueta</h5>
                    <p class="card-text small text-secondary">Primeros conceptos para la raqueta principal de Alex.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-dark text-white border-secondary h-100 shadow-sm">
                <img src="<?= base_url('assets/img/menu-principal.jpg') ?>" class="card-img-top" alt="Concepto de Menú" style="height: 240px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title text-info">Concepto de Menú</h5>
                    <p class="card-text small text-secondary">Exploración de la interfaz de selección de equipo.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-dark text-white border-secondary h-100 shadow-sm">
                <img src="<?= base_url('assets/img/alex-completo.jpg') ?>" class="card-img-top" alt="Postura de Personaje" style="height: 240px; object-fit: cover; object-position: center top;">
                <div class="card-body text-center">
                    <h5 class="card-title text-info">Postura de Personaje</h5>
                    <p class="card-text small text-secondary">Pruebas de animación para el golpe de revés.</p>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- BOTÓN VOLVER AL INICIO -->
    <div class="text-center mb-4">
        <a href="<?= base_url(); ?>" class="btn btn-outline-info px-4 py-2 fw-semibold text-light shadow-sm">
            ← Volver al Inicio
        </a>
    </div>