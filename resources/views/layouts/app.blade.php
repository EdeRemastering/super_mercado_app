<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>MerkaKing</title>
    
    <!-- Fonts and icons -->
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900') }}" />
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    
    <!-- Font Awesome Icons -->
    <script src="{{ asset('https://kit.fontawesome.com/42d5adcbca.js') }}" crossorigin="anonymous"></script>
    
    <!-- Material Icons -->
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0') }}" />
    
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css?v=3.2.0') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-4 py-3 m-0" href="{{ url('/dashboard') }}">
            <img src="{{ asset('assets/img/logo-ct-dark.png') }}" class="navbar-brand-img" width="26" height="26" alt="main_logo">
            <span class="ms-1 text-sm text-dark">MerkaKing</span>
        </a>
    </div>
    
    <hr class="horizontal dark mt-0 mb-2">
    
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/dashboard') }}"><i class="material-symbols-rounded opacity-5">dashboard</i><span class="nav-link-text ms-1">Dashboard</span></a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/usuarios') }}"><i class="material-symbols-rounded opacity-5">group</i><span class="nav-link-text ms-1">Empleados</span></a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/productos') }}"><i class="material-symbols-rounded opacity-5">shopping_cart</i><span class="nav-link-text ms-1">Productos</span></a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/categorias') }}"><i class="material-symbols-rounded opacity-5">category</i><span class="nav-link-text ms-1">Categorías</span></a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/ventas') }}"><i class="material-symbols-rounded opacity-5">receipt_long</i><span class="nav-link-text ms-1">Ventas</span></a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/compras') }}"><i class="material-symbols-rounded opacity-5">shopping_basket</i><span class="nav-link-text ms-1">Compras</span></a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/proveedores') }}"><i class="material-symbols-rounded opacity-5">business</i><span class="nav-link-text ms-1">Proveedores</span></a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/clientes') }}"><i class="material-symbols-rounded opacity-5">people</i><span class="nav-link-text ms-1">Clientes</span></a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/movimientos-inventario') }}"><i class="material-symbols-rounded opacity-5">inventory</i><span class="nav-link-text ms-1">Movimientos de Inventario</span></a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/notifications') }}"><i class="material-symbols-rounded opacity-5">notifications</i><span class="nav-link-text ms-1">Notificaciones</span></a></li>
            <li class="nav-item mt-3"><h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Mi cuenta</h6></li>
            <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/profile') }}"><i class="material-symbols-rounded opacity-5">person</i><span class="nav-link-text ms-1">Mi perfil</span></a></li>
        </ul>
    </div>
</aside>


    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Páginas</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">@yield('title')</li>
                    </ol>
                </nav>

                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline"></div>
                    </div>
                    
                    <ul class="navbar-nav d-flex align-items-center justify-content-end">
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="material-symbols-rounded fixed-plugin-button-nav">settings</i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="material-symbols-rounded">notifications</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('assets/img/team-2.jpg') }}" class="avatar avatar-sm me-3">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">Mensaje</span> de: Eder
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                                    hace 2 días
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown pe-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="material-symbols-rounded">person</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="userDropdown">
                                <li>
                                    <a class="dropdown-item border-radius-md" href="../pages/profile.html">Perfil</a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="../pages/logout.html">Cerrar sesión</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            @yield('content') <!-- Aquí se inyectará el contenido específico de la vista -->
        </div>
    </main>

    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.2.0') }}"></script>
</body>

</html>
