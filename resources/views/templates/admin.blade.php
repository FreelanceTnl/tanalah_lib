<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="R.Toavina" />
        <title>{{ env('APP_NAME') }} - Administration</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('css/styles.min.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        @yield('header-script')
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/">{{ env('APP_NAME') }}</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm " id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@yield('title')</h1>
                        <hr>
                        @include('components.flash')
                        @yield('content')
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">&copy; Tanalah Lib</div>
                            <div class="text-primary">
                                +261 33 29 545 51 | ramamonjisoa.toavina@gmail.com
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Livres</div>
                            <a class="nav-link" href="{{ route('admin.books.create') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                                Ajouter un Livre
                            </a>
                            <a class="nav-link" href="{{ route('admin.books.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                                Liste des Livres
                            </a>
                            <div class="sb-sidenav-menu-heading">Auteur</div>
                            <a class="nav-link" href="{{ route('admin.publishers.create') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                                Ajouter un Auteur
                            </a>
                            <a class="nav-link" href="{{ route('admin.publishers.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Liste des Auteurs
                            </a>
                            <div class="sb-sidenav-menu-heading">Tag</div>
                            <a class="nav-link" href="{{ route('admin.tags.create') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                                Ajouter un Tag
                            </a>
                            <a class="nav-link" href="{{ route('admin.tags.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Liste des Tags
                            </a>
                            <hr>
                            <a class="nav-link" href="/">
                                <div class="sb-nav-link-icon"><i class="fas fa-arrow-right-from-bracket"></i></div>
                                Se Deconnecter
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/datatables-simple-demo.js')}}"></script>
        @yield('footer-script')
    </body>
</html>
