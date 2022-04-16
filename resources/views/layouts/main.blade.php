<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    @yield("head")
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Gulnur Clinic</a>
            @auth
                <a class="btn btn-primary" href="{{ route('dashboard') }}">{{ auth()->user()->name }}</a>
            @endauth
            @guest
                <a class="btn btn-primary" href="{{ route('login') }}">Кіру</a>
            @endguest
        </div>
    </nav>
    <!-- Masthead-->
    @yield("content")
    <!-- Footer-->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><a href="{{ route('dashboard') }}">Кезекке тұру</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="{{ route('register') }}">Тіркелу</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="{{ route('login') }}">Кіру</a></li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; Gulnur Clinic 2022. Барлық деректер қорғалған.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-4">
                            <a href="{{ route('dashboard') }}"><i class="bi-facebook fs-3"></i></a>
                        </li>
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-whatsapp fs-3"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="bi-instagram fs-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
