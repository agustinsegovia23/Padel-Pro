<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padel Pro: Camino a la gloria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/css/styles.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- NAVBAR -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-info" href="<?= base_url(); ?>">
                <img src="<?= base_url('assets/img/logo.png'); ?>" alt="Logo" height="45" class="me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center gap-2">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/paginas/historia'); ?>">Historia</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/paginas/gameplay'); ?>">Gameplay</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/paginas/multimedia'); ?>">Multimedia</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/paginas/personajes'); ?>">Personajes</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/paginas/contacto'); ?>">Contacto</a></li>
                    <li class="nav-item ms-2"><a class="btn btn-warning text-dark fw-bold px-3" href="<?= base_url('index.php/paginas/usuario'); ?>">Iniciar Sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENEDOR PRINCIPAL -->
    <div class="main-content container mt-2 mb-5">