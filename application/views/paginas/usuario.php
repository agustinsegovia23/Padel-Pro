<div class="container my-5">
    
    <!-- TITULO DE LA SECCION -->
    <div class="text-center mt-4 mb-5">
        <h1 class="fw-bold text-white display-5">Área de Usuario</h1>
        <p class="text-secondary lead">Accede a tu cuenta para guardar tu progreso, estadísticas y torneos.</p>
    </div>

    <div class="row g-4 mb-5">
        
        <!-- TARJETA INICIAR SESION -->
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0 p-4" style="background-color: #1b2430; color: #fff;">
                <div class="card-body">
                    <h3 class="fw-bold text-info mb-4">Iniciar Sesión</h3>
                    
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="login-email" class="form-label text-light fw-semibold">Correo Electrónico</label>
                            <input type="email" class="form-control text-white" id="login-email" name="email" placeholder="nombre@ejemplo.com" style="background-color: #151b22; border-color: rgba(255,255,255,0.15) !important;" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="login-password" class="form-label text-light fw-semibold">Contraseña</label>
                            <input type="password" class="form-control text-white" id="login-password" name="password" placeholder="********" style="background-color: #151b22; border-color: rgba(255,255,255,0.15) !important;" required>
                        </div>
                        
                        <button type="submit" class="btn btn-warning fw-bold text-dark px-4 py-2 shadow-sm w-100" style="background-color: #fd7e14; border: none;">
                            Ingresar
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- TARJETA CREAR CUENTA -->
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0 p-4" style="background-color: #1b2430; color: #fff;">
                <div class="card-body">
                    <h3 class="fw-bold text-info mb-4">Crear Cuenta Nueva</h3>
                    
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="register-user" class="form-label text-light fw-semibold">Nombre de Usuario</label>
                            <input type="text" class="form-control text-white" id="register-user" name="usuario" placeholder="Tu alias en la cancha" style="background-color: #151b22; border-color: rgba(255,255,255,0.15) !important;" required>
                        </div>

                        <div class="mb-3">
                            <label for="register-email" class="form-label text-light fw-semibold">Correo Electrónico</label>
                            <input type="email" class="form-control text-white" id="register-email" name="email" placeholder="nombre@ejemplo.com" style="background-color: #151b22; border-color: rgba(255,255,255,0.15) !important;" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="register-password" class="form-label text-light fw-semibold">Contraseña</label>
                            <input type="password" class="form-control text-white" id="register-password" name="password" placeholder="Mínimo 8 caracteres" style="background-color: #151b22; border-color: rgba(255,255,255,0.15) !important;" required>
                        </div>
                        
                        <button type="submit" class="btn btn-info fw-bold text-dark px-4 py-2 shadow-sm w-100" style="border: none;">
                            Registrarse
                        </button>
                    </form>
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

</div>