<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GHN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/gird.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./fonts/fontawesome-free-5.12.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese" rel="stylesheet">
</head>

<body>
    <div class="app">
        <header class="header">
            <div class="grid wide">
                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-link header__navbar-item--boid">GHN</a>
                        </li>
                    </ul>
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-link">Trang chủ</a>
                        </li>
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-link">Tạo đơn</a>
                        </li>
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-link">Tra cứu vận đơn</a>
                        </li>
                        @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                            <li class="header__navbar-item">
                                <a class="header__navbar-link" href="{{ url('/home') }}">Home</a>
                            </li>
                            @else
                            <li class="header__navbar-item">
                                <a class="header__navbar-link" href="{{ route('login') }}">Đăng nhập</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="header__navbar-item">
                                <a class="header__navbar-link" href="{{ route('register') }}">Đăng ký</a>
                            </li>
                            @endif
                            @endauth
                        </div>
                        @endif
                    </ul>
                </nav>
            </div>
        </header>

        <div class="feature-layout">
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="feature-icon-all fas fa-car"></i>
                </div>
                <span class="feature-item-text">Top công ty hàng đầu</span>
                <span class="feature-item-text">VN</span>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="feature-icon-all fas fa-key"></i>
                </div>
                <span class="feature-item-text">Mạng lưới phủ sóng 100% 63</span>
                <span class="feature-item-text">tỉnh thành</span>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="feature-icon-all fas fa-glass-whiskey"></i>
                </div>
                <span class="feature-item-text">Giao hàng nhanh Tỷ lệ hoàn hàng</span>
                <span class="feature-item-text">thấp</span>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="feature-icon-all fas fa-car-side"></i>
                </div>
                <span class="feature-item-text">Hệ thống quản lý trực tuyến 24/7</span>
            </div>
        </div>

        <!-- Title -->
        <div class="grid wide title">
            <h2>Giao nhanh hơn 6 tiếng</h2>
            <p>GHN giúp bạn giao hàng đến người nhận nhanh hơn 6 tiếng so với các đơn vị vận chuyển khác.</p>
        </div>

        <div class="grid wide container-time">
            <video playsinline="" autoplay="" loop="" muted="" preload="auto" class="hidden-sm hidden-xs" width="100%">
                <source type="video/mp4" src="https://file.hstatic.net/1000376681/file/1920x900_d8d881b358674809a162eb6b6069ff10.mp4">
            </video>
        </div>

        <!-- Wrap layout -->
        <div class="wrap-layout">
            <div class="wrap-item">
                <span class="wrap-item-text-ht">Hệ thông của </span>
                <span class="wrap-item-text-ghn">GHN</span>
            </div>
            <div class="wrap-item">
                <span class="wrap-number">500</span>
                <span class="wrap-item-text">Bưu cục GHN trên toàn quốc</span>
            </div>
            <div class="wrap-item">
                <span class="wrap-number">1,500</span>
                <span class="wrap-item-text">Điểm gửi hàng Vinmart+, Circle K</span>
            </div>
            <div class="wrap-item">
                <span class="wrap-number">08:00 - 21:00</span>
                <span class="wrap-item-text">Hệ thống quản lý trực tuyến 24/7</span>
            </div>
        </div>

        <!-- Image ghn -->
        <div class="img-ghn">
            <img src="./images/img_ghn.jpg" alt="" width="100%">
        </div>

        <footer class="footer">
            <div class="grid wide footer__content">
                <div class="row">
                    <div class="col l-3 m-4 c-6">
                        <h3 class="footer__heading">CÔNG TY CPDV GIAO HÀNG NHANH</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Công ty giao nhận đầu tiên tại Việt Nam được thành lập với sứ mệnh phục vụ nhu cầu vận chuyển chuyên nghiệp của các đối tác Thương mại điện tử trên toàn quốc.</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <h3 class="footer__heading">INFO</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Huỳnh Hữu Phúc</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Trụ sở chính: Tam Kỳ, Quảng Nam</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <h3 class="footer__heading">EMAIL</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Email: huynhhuuphuc@ghn.vn</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <h3 class="footer__heading">ĐIỆN THOẠI</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Hotline: 1234 5678</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>