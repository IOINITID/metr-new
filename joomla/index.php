<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>МЕТР - Главная</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">


</head>

<body>
<header>
    <div class="container-fluid header-wrapper">
        <div class="container">
            <div class="row header-row">
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 header-social-buttons-wrapper">
                    <a href="#"><img src="../img/header-facebook-icon.png" alt="Мы на Facebook"></a>
                    <a href="#"><img src="../img/header-instagram-icon.png" alt="Мы в Instagram"></a>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 header-main-logo-wrapper">
                    <a href="#"><img src="../img/header-main-logo.png" alt="Олеся Зотина - дизайнер интерьеров"></a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 header-mail-wrapper">
                    <a href="mailto:info@artgroup-msk.ru">info@artgroup-msk.ru</a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 header-tel-wrapper">
                    <a href="tel:+74957929637">+7 495 792 96 37</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid shadow bg-white rounded">
        <div class="container">
            <div class="header-menu-list">
                <ul>
                    <li><a href="../index.html">О НАС</a></li>
                    <li><a href="../projects.html">ПРОЕКТЫ</a></li>
                    <li><a href="../services.html">УСЛУГИ</a></li>
                    <li><a href="../contacts.html">КОНТАКТЫ</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
    <jdoc:include type="modules" name="slider-wrapper" />
<main>
    <jdoc:include type="component" />  <!-- Область контента -->
</main>
<footer>
    <div class="footer-wrapper">
        <div class="container-fluid footer-background">
            <div class="container">
                <div class="row footer-row">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 footer-logo">
                        <img src="../img/footer-main-logo.png" alt="">
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 footer-copyright">
                        <p><b>#profmetr</b><br>МЕТР<br>Все права защищены (с) 2018</p>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 footer-order-design">
                        <a class="footer-order-link" href="#" data-toggle="modal" data-target="#modalForm">Заказать дизайн</a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 footer-social-links-wrapper">
                        <img src="../img/footer-facebook-icon.png" alt="Мы в Facebook">
                        <img src="../img/footer-instagram-icon.png" alt="Мы в Instagram">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- modal-form -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content form-modal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 16 16"
                   version="1.1" width="16px" height="16px">
                <g id="surface1">
                  <path
                      d="M 2.75 2.042969 L 2.042969 2.75 L 2.398438 3.101563 L 7.292969 8 L 2.042969 13.25 L 2.75 13.957031 L 8 8.707031 L 12.894531 13.605469 L 13.25 13.957031 L 13.957031 13.25 L 13.605469 12.894531 L 8.707031 8 L 13.957031 2.75 L 13.25 2.042969 L 8 7.292969 L 3.101563 2.398438 Z " />
                </g>
              </svg>
            </span>
                </button>
            </div>
            <div class="modal-body">
                <h3>Оставьте свою заявку<br> и мы вам обязательно перезвоним</h3>
                <form>
                    <input type="text" placeholder="Введите вашем имя">
                    <input type="tel" placeholder="Номер телефона">
                    <input type="email" placeholder="E-mail адрес">
                    <div class="agreement">
                        <label>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat.
                            <input type="checkbox">
                        </label>
                    </div>
                    <input class="send-button" type="button" value="Отправить">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal-form -->

</body>

</html>
