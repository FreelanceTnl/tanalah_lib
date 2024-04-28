<!DOCTYPE html>
<html class="h-100" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{env('APP_NAME')}} | @yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('favicon.png')}}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('front/css/styles.css') }}" rel="stylesheet" />        
        <script src="https://use.fontawesome.com/releases/v6.5.2/js/all.js" crossorigin="anonymous"></script>

    </head>
    <body class="d-flex flex-column h-100">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('favicon.png')}}" width="30" height="30" alt="">
                    {{env('APP_NAME')}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/"><i class="fa fa-house"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('books.index')}}">La Bibliothèque</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">A Propos</a></li>
                    </ul>
                    <div class="d-flex">
                        @guest
                        <a href="{{route('login')}}" class="btn btn-outline-light">
                            <i class="fas fa-arrow-right-to-bracket"></i> Se Connecter
                        </a>
                        @endguest
                        @auth
                        <a href="{{route('admin.index')}}" class="btn btn-outline-light">
                            <i class="fas fa-user-tie"></i>
                        </a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
        
        <!-- Footer-->
        <footer class="footer mt-auto py-2 bg-dark">
            <div class="d-md-flex align-items-center justify-content-between small px-5">
                <div class="text-muted">&copy; {{env('APP_NAME')}} 2024</div>
                <div class="text-light">
                    +261 33 29 545 51 | ramamonjisoa.toavina@gmail.com
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('front/js/scripts.js')}}"></script>
    </body>
</html>
