<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thú Cưng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
</head>
<body>
<div>
    <a href="{{route(config('shin.route.INDEX_ADMIN'))}}">Admin</a>
</div>
<header class="container header">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="logo" href="#"><img src="{{asset('assets/images/shin_meo.png')}}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Chó Cảnh
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Mèo Cảnh
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Blog
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr>
</header>
@yield('content')
<footer class="footer">
    <div class="container ">
        <div class="row">
            <div class="col-lg-4 footer-text img ">
                <a class="logo-footer" href="#">
                    <img src="{{asset('assets/images/shin_meo.png')}}"></a>
            </div>
            <div class="col-lg-4 footer-text">
                <p>
                    Shin Meo
                </p>
                <hr>
                <p>là đơn vị đầu tiên tại Việt Nam xây dựng thành công hệ sinh thái khép kín gồm trang trại chó mèo
                    cảnh, cửa hàng thức ăn và phụ kiện thú cưng, phòng khám thú y, spa chó mèo...</p>
            </div>
            <div class="col-lg-4 footer-text">
                <p>
                    Trang chủ | Liên Hệ | Giới Thiệu
                </p>
                <hr>
                <p>- Địa chỉ:  171 Quang Trung, Phường 10, quận Gò Vấp, thành phố Hồ Chí Minh.</p>
                <div class="icon">
                    <img src="{{asset('assets/images/facebook.png')}}">
                    <img src="{{asset('assets/images/instagram.png')}}">
                    <img src="{{asset('assets/images/youtube.png')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="text-me">
        Bản quyền 2023 © Shin Meo Pet<br/>
        Thiết kế bởi Trang Nhím
    </div>
</footer>
</body>
</html>
