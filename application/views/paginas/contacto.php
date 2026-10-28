<div class="container my-5">
    
    <div class="text-center mt-4 mb-5">
        <h1 class="fw-bold text-white display-5">Contacto y Comunidad</h1>
        <p class="text-secondary lead">¿Tienes dudas, sugerencias o quieres formar parte de la comunidad de Padel Pro? Escríbenos.</p>
    </div>

    <div class="row g-4 mb-5">
        
        <!-- TARJETA FORMULARIO -->
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0 p-4" style="background-color: #1b2430; color: #fff;">
                <div class="card-body">
                    <h3 class="fw-bold text-info mb-4">Envíanos un mensaje</h3>
                    
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label text-light fw-semibold">Nombre</label>
                            <input type="text" class="form-control border-secondary text-white placeholder-glow" id="nombre" name="nombre" placeholder="Tu nombre completo" style="background-color: #151b22; border-color: rgba(255,255,255,0.15) !important;" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label text-light fw-semibold">Correo Electrónico</label>
                            <input type="email" class="form-control border-secondary text-white" id="email" name="email" placeholder="nombre@ejemplo.com" style="background-color: #151b22; border-color: rgba(255,255,255,0.15) !important;" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="mensaje" class="form-label text-light fw-semibold">Mensaje</label>
                            <textarea class="form-control border-secondary text-white" id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu consulta o comentario aquí..." style="background-color: #151b22; border-color: rgba(255,255,255,0.15) !important;" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-warning fw-bold text-dark px-4 py-2 shadow-sm" style="background-color: #fd7e14; border: none;">
                            Enviar Mensaje
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- TARJETA COMUNIDAD Y REDES -->
        <div class="col-lg-6">
    <div class="card h-100 shadow-sm border-0 p-4 d-flex flex-column justify-content-between" style="background-color: #1b2430; color: #fff;">
        <div class="card-body">
            <h3 class="fw-bold text-info mb-4">Únete a la Comunidad</h3>
            <p class="text-secondary mb-4">
                Mantente al tanto de las últimas novedades, actualizaciones del desarrollo y torneos exclusivos de la comunidad.
            </p>
            
            <ul class="list-unstyled text-secondary fs-6 mb-4">
                <li class="mb-3 d-flex align-items-center gap-2">
                    <span class="text-info"><i class="fa-brands fa-discord"></i></span> 
                    <div><strong class="text-light">Discord oficial:</strong> Comunidad activa de jugadores y betas.</div>
                </li>
                <li class="mb-3 d-flex align-items-center gap-2">
                    <span class="text-info"><i class="fa-brands fa-twitter"></i></span> 
                    <div><strong class="text-light">X (Twitter):</strong> Anuncios oficiales y notas de parche.</div>
                </li>
                <li class="mb-3 d-flex align-items-center gap-2">
                    <span class="text-info"><i class="fa-brands fa-youtube"></i></span> 
                    <div><strong class="text-light">YouTube:</strong> Trailers, gameplay y dev diaries.</div>
                </li>
            </ul>

            <!-- PLATAFORMAS STEAM/EPIC -->
            <div>
                <span class="d-block text-secondary small fw-bold mb-2">CONSEGUILO EN:</span>
                <div class="d-flex gap-2">      
                    <a href="#" class="btn btn-sm text-white fw-semibold flex-fill d-flex align-items-center justify-content-center gap-2 py-2" style="background-color: #171a21; border: 1px solid rgba(255,255,255,0.15);">
                        <i class="fa-brands fa-steam fs-5"></i> Steam
                    </a>
                    <a href="#" class="btn btn-sm text-white fw-semibold flex-fill d-flex align-items-center justify-content-center gap-2 py-2" style="background-color: #2a2a2a; border: 1px solid rgba(255,255,255,0.15);">
                        <i class="fa-solid fa-gamepad fs-5 text-info"></i> Epic Games
                    </a>
                </div>
            </div>

        </div>

        <!-- UBICACION Y DATOS DEL ESTUDIO -->
        <div class="px-3 pb-3">
            <hr class="border-secondary opacity-25 my-4">
            <div class="p-3 text-center rounded border border-secondary border-opacity-25" style="background-color: #151b22;">
                <small class="text-secondary fw-semibold">Estudio Point Break • San Luis, Argentina</small>
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

</div>