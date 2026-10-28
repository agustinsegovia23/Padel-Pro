<div class="container my-5">
    
    <!-- TITULO DE LA SECCION -->
    <div class="text-center mt-4 mb-5">
        <h1 class="fw-bold text-white display-5">Personajes del Circuito</h1>
        <p class="text-secondary lead">Conoce a quienes acompañan o desafían a Alex en su camino a la gloria.</p>
    </div>

    <!-- FILA DE PERSONAJES -->
    <div class="row g-4 mb-4 justify-content-center">

        <!-- Personaje 1: ALEX -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm border-0 overflow-hidden" style="background-color: #1b2430; color: #fff;">
               <div style="height: 300px; overflow: hidden;" class="border-bottom border-secondary">
                    <img src="<?= base_url('assets/img/alex-personaje.jpg'); ?>" alt="Retrato de Alex" class="w-100" style="height: 300px; object-fit: cover; object-position: center;">
                </div>
                <div class="card-body p-4 text-center">
                    <span class="badge bg-info text-dark mb-2 fw-bold">Protagonista</span>
                    <h3 class="fw-bold text-info h4 mb-3">Alex</h3>
                    <p class="text-secondary small mb-4">
                        Joven promesa del pádel profesional que busca su redención tras una dura lesión que lo alejó de las canchas.
                    </p>
                    <div class="px-3 py-2 rounded d-inline-block border border-info border-opacity-25" style="background-color: rgba(13, 202, 240, 0.08);">
                        <span class="text-info small fw-bold">🎯 CONTROL Y TÁCTICA</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Personaje 2: SOFIA -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm border-0 overflow-hidden" style="background-color: #1b2430; color: #fff;">
                <div style="height: 300px; overflow: hidden;" class="border-bottom border-secondary">
                    <img src="<?= base_url('assets/img/sofia-personaje.jpg'); ?>" alt="Retrato de Sofía" class="w-100" style="height: 300px; object-fit: cover; object-position: center;">
                </div>
                <div class="card-body p-4 text-center">
                    <span class="badge bg-secondary mb-2 fw-bold">Entrenadora</span>
                    <h3 class="fw-bold text-info h4 mb-3">Sofía</h3>
                    <p class="text-secondary small mb-4">
                        Especialista en preparación física y análisis táctico. Pieza fundamental para guiar la rehabilitación y rendimiento de Alex.
                    </p>
                    <div class="px-3 py-2 rounded d-inline-block border border-secondary border-opacity-50" style="background-color: rgba(255, 255, 255, 0.03);">
                        <span class="text-light small fw-bold">⚡ PREPARACIÓN FÍSICA</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Personaje 3: ALEJANDRO -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm border-0 overflow-hidden" style="background-color: #1b2430; color: #fff;">
                <div style="height: 300px; overflow: hidden;" class="border-bottom border-secondary">
                    <img src="<?= base_url('assets/img/alejandro-personaje.jpg'); ?>" alt="Retrato de Alejandro" class="w-100" style="height: 300px; object-fit: cover; object-position: center;">
                </div>
                <div class="card-body p-4 text-center">
                    <span class="badge bg-secondary mb-2 fw-bold">Preparador</span>
                    <h3 class="fw-bold text-info h4 mb-3">Alejandro</h3>
                    <p class="text-secondary small mb-4">
                        Veterano del circuito con amplia experiencia en gestión deportiva, relaciones comerciales y vinculación con patrocinadores.
                    </p>
                    <div class="px-3 py-2 rounded d-inline-block border border-secondary border-opacity-50" style="background-color: rgba(255, 255, 255, 0.03);">
                        <span class="text-light small fw-bold">🤝 GESTIÓN Y NEGOCIOS</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- SEGUNDA FILA DE PERSONAJES -->
    <div class="row g-4 mb-5 justify-content-center">
        
        <!-- Personaje 4: MATEO -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm border-0 overflow-hidden" style="background-color: #1b2430; color: #fff;">
                <div style="height: 300px; overflow: hidden;" class="border-bottom border-secondary">
                    <img src="<?= base_url('assets/img/mateo-personaje.jpg'); ?>" alt="Retrato de Mateo" class="w-100" style="height: 300px; object-fit: cover; object-position: center;">
                </div>
                <div class="card-body p-4 text-center">
                    <span class="badge bg-danger mb-2 fw-bold">Rival Principal</span>
                    <h3 class="fw-bold text-info h4 mb-3">Marcos "El Muro"</h3>
                    <p class="text-secondary small mb-4">
                        Ex compañero de Alex y actual número uno del circuito. Lidera el equipo rival y pondrá a prueba tus decisiones dentro y fuera de la pista.
                    </p>
                    <div class="px-3 py-2 rounded d-inline-block border border-danger border-opacity-25" style="background-color: rgba(220, 53, 69, 0.08);">
                        <span class="text-danger small fw-bold">⚡ POTENCIA Y PRESIÓN</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Personaje 5: CLARA -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm border-0 overflow-hidden" style="background-color: #1b2430; color: #fff;">
                <div style="height: 300px; overflow: hidden;" class="border-bottom border-secondary">
                    <img src="<?= base_url('assets/img/clara-personaje.jpg'); ?>" alt="Retrato de Clara" class="w-100" style="height: 300px; object-fit: cover; object-position: center;">
                </div>
                <div class="card-body p-4 text-center">
                    <span class="badge bg-warning text-dark mb-2 fw-bold">Patrocinador</span>
                    <h3 class="fw-bold text-info h4 mb-3">Clara Méndez</h3>
                    <p class="text-secondary small mb-4">
                        Inversora clave dispuesta a apostar por el regreso de Alex, aunque sus exigencias comerciales chocarán con la visión del equipo.
                    </p>
                    <div class="px-3 py-2 rounded d-inline-block border border-warning border-opacity-25" style="background-color: rgba(255, 193, 7, 0.08);">
                        <span class="text-warning small fw-bold">💼 PATROCINIO CLAVE</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- BLOQUE INFERIOR -->
    <div class="row justify-content-center mb-4">
        <div class="col-12">
            <div class="card shadow-sm border-0 p-4 text-center" style="background-color: #151b22; border: 1px solid rgba(255,255,255,0.1) !important;">
                <div class="card-body">
                    <h4 class="fw-bold text-light mb-2">Red de Relaciones y Consecuencias</h4>
                    <p class="text-secondary mb-3 small">
                        Cada diálogo y elección cambiará la lealtad de tus aliados y la intensidad de tus rivales en el circuito profesional.
                    </p>
                    <div class="d-flex justify-content-center gap-2">
                        <span class="badge rounded-pill bg-secondary bg-opacity-25 px-3 py-2">● Confianza</span>
                        <span class="badge rounded-pill bg-secondary bg-opacity-25 px-3 py-2">● Tensión</span>
                        <span class="badge rounded-pill bg-secondary bg-opacity-25 px-3 py-2">● Rivalidad</span>
                        <span class="badge rounded-pill bg-secondary bg-opacity-25 px-3 py-2">● Alianzas</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

 <!-- BOTÓN VOLVER AL INICIO -->
    <div class="text-center mb-4">
        <a href="<?= base_url(); ?>" class="btn btn-outline-info px-4 py-2 fw-semibold text-light shadow-sm" >
            ← Volver al Inicio
        </a>
    </div>