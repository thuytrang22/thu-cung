<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thú Cưng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/admin/index.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/admin/specie.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/admin/animal.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/admin/product.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/admin/create.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/admin/show.css')}}">
</head>
<body>
<div class="container">
    <header class=" header">
        <div class="col-3">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div>
                        <a class="logo" href="#"><img src="{{asset('assets/images/shin_meo.png')}}"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown"
                                aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="{{route(config('shin.route.ADMIN'))}}" role="button"
                                       data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        Dashboard
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="{{route(config('shin.route.SPECIE'))}}" role="button"
                                       data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        Species
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="{{route(config('shin.route.ANIMAL'))}}" role="button"
                                       data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        Animals
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="{{route(config('shin.route.PRODUCT'))}}" role="button" data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        Product
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{route(config('shin.route.BLOG'))}}" role="button" data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        Blog
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="{{route(config('shin.route.IMG'))}}" role="button"
                                       data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        Images
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        Admin
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="{{route(config('shin.route.HOME'))}}" role="button" data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        Back Home
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="col-9">
            @yield('content')
        </div>


    </header>
</div>
<footer class="footer">
    <div class="text-me">
        Bản quyền 2023 © Shin Meo Pet<br/>
        Thiết kế bởi Trang Nhím
    </div>
</footer>
</body>
</html>
