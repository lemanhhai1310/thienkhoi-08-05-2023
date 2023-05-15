<?php $projectName = "Thienkhoi"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.17/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.17/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.17/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="">
<!--app-->
<div id="app" class="app uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<?php require "template-parts/layouts/jointeam.php"; ?>
<div class="uk-position-top" style="z-index: 981">
    <nav class="header uk-navbar-container uk-navbar-transparent" uk-sticky>
        <div class="uk-container">
            <div uk-navbar>

                <div class="uk-navbar-left">
                    <a href="." class="uk-navbar-item uk-logo header__logo"><img src="images/logo_h.png" alt=""></a>
                </div>

                <div class="uk-navbar-center">
                    <ul class="uk-navbar-nav header__navbarNav uk-visible@m">
                        <li class="uk-active"><a href="#">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="">Sự kiện</a></li>
                        <li><a href="">Đào tạo</a></li>
                        <li><a href="">Ký gửi nhà đất</a></li>
                        <li><a href="">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item">
                        <a href="" class="header__btn uk-button uk-button-danger">Tuyển dụng</a>
                    </div>
                    <a class="uk-navbar-toggle uk-navbar-toggle-animate uk-hidden@m" uk-navbar-toggle-icon href="#"></a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="#">Trang chủ</a></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="">Sự kiện</a></li>
                            <li><a href="">Đào tạo</a></li>
                            <li><a href="">Ký gửi nhà đất</a></li>
                            <li><a href="">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</div>
