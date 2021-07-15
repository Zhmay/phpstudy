<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home page</title>
    <meta content="" name="author">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/foundation.css?rel=38970">
    <link rel="stylesheet" href="assets/css/app.css?rel=38970"><!--[if lt IE 10]>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    <style>@font-face
{
    font-family: 'Lato';
    font-weight: 400;
    font-style: normal;

    font-display: swap;
    src: url('assets/fonts/lato/regular/Lato-Regular.eot');
    src: url('assets/fonts/lato/regular/Lato-Regular.eot?#iefix') format('embedded-opentype'), url('assets/fonts/lato/regular/Lato-Regular.woff') format('woff'), url('assets/fonts/lato/regular/Lato-Regular.ttf') format('truetype'), url('assets/fonts/lato/regular/Lato-Regular.svg#Lato') format('svg');
}

@font-face
{
    font-family: 'Lato';
    font-weight: 700;
    font-style: normal;

    font-display: swap;
    src: url('assets/fonts/lato/bold/Lato-Bold.eot');
    src: url('assets/fonts/lato/bold/Lato-Bold.eot?#iefix') format('embedded-opentype'), url('assets/fonts/lato/bold/Lato-Bold.woff') format('woff'), url('assets/fonts/lato/bold/Lato-Bold.ttf') format('truetype'), url('assets/fonts/lato/bold/Lato-Bold.svg#Lato') format('svg');
}

@font-face
{
    font-family: 'Lato';
    font-weight: 900;
    font-style: normal;

    font-display: swap;
    src: url('assets/fonts/lato/black/Lato-Black.eot');
    src: url('assets/fonts/lato/black/Lato-Black.eot?#iefix') format('embedded-opentype'), url('assets/fonts/lato/black/Lato-Black.woff') format('woff'), url('assets/fonts/lato/black/Lato-Black.ttf') format('truetype'), url('assets/fonts/lato/black/Lato-Black.svg#Lato') format('svg');
}

    </style>
  </head>
  <body>
    <div id="preloader" data-controller="preloader">
      <div class="preloader-wrapper">
        <div class="preloader-center">
          <div class="tcon-loader--spinner360" aria-label="loading">
            <div class="tcon-visuallyhidden"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="wrapper">
      <header class="header" data-controller="header">
        <div class="header__holder"><a class="header__logo" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="47" height="50" viewBox="0 0 47 50"><g><g><g><path fill="#ffb900" d="M10.86 0c.142-.008.284 0 .424.021l31.17 4.745a2.143 2.143 0 0 1 1.784 2.442l-6.106 40.965a2.127 2.127 0 0 1-2.416 1.803L4.546 45.23a2.143 2.143 0 0 1-1.783-2.441L8.869 1.824A2.131 2.131 0 0 1 10.86 0zm4.2 2.585c-.378.01-.722.223-.903.559l-3.929 7.304a.538.538 0 0 0 .386.786l.734.114a.529.529 0 0 0 .545-.276l.839-1.56 2.903.444.35 1.74c.044.22.219.39.439.424l.733.11a.537.537 0 0 0 .6-.637l-1.625-8.15a1.064 1.064 0 0 0-1.072-.858zM29.738 37.76a.536.536 0 0 0-.494.642l1.627 8.15c.063.312.259.58.536.732.515.282 1.16.089 1.439-.432l3.929-7.302a.54.54 0 0 0-.386-.788l-.734-.111a.53.53 0 0 0-.545.273l-.839 1.56-2.903-.441-.35-1.74a.534.534 0 0 0-.44-.425l-.734-.113a.533.533 0 0 0-.106-.004zm2.759 6.023a.213.213 0 0 1-.146.109.213.213 0 0 1-.25-.169l-.412-2.06 1.8.274-.995 1.846zM14.504 6.214a.214.214 0 0 1 .146-.11.213.213 0 0 1 .25.17l.412 2.06-1.8-.274.994-1.846zm12.714 24.001l-2.296-.418 1.18-6.449-4.762-.866-1.18 6.449-2.297-.419c-.684-.124-.982.27-.662.878l1.107 2.109 1.161 2.208 1.108 2.11c.319.607 1 .731 1.515.275l1.783-1.583 1.867-1.657 1.784-1.583c.515-.455.376-.93-.308-1.054zm3.983-9.241c-.162-.03-.325-.048-.486-.065-.557-3.11-3.022-5.71-6.37-6.32-4.288-.78-8.388 1.997-9.156 6.199-.002.007-.001.013-.002.02-2.664-.282-5.128 1.489-5.61 4.116-.503 2.755 1.367 5.405 4.178 5.917l3.1.564-.765-1.457c-.38-.724-.358-1.456.06-2.008.416-.552 1.122-.785 1.935-.637l1.064.194 1.18-6.447 7.225 1.315-1.18 6.449 1.064.193c.813.149 1.391.614 1.586 1.278.194.666-.044 1.356-.655 1.898l-1.233 1.095 1.754.319c3.555.647 6.954-1.654 7.592-5.14.638-3.486-1.727-6.836-5.281-7.483z"/></g><g><path fill="#fff" d="M5.024 3.677L7.6 3.355 4.99 20.87 3.177 6.07a2.141 2.141 0 0 1 1.847-2.393zM39.4 46.643l2.61-17.515 1.813 14.8a2.141 2.141 0 0 1-1.847 2.393z"/></g><g><path fill="#ffb900" d="M.105 10.715a2.147 2.147 0 0 1 1.362-2.699l.878-.287 1.97 16.092-4.21-13.106zm46.79 28.568a2.147 2.147 0 0 1-1.362 2.699l-.877.287-1.97-16.092z"/></g></g></g></svg>
            <div class="header__logo-txt"><span>ace</span><span>downloader</span></div></a>
          <div class="header__btn js-header-btn">
            <div class="line"></div>
          </div>
          <div class="header__menu js-header-menu">
            <div class="header__social">
              <div class="social  social--header">
                <div class="social__item"><a href="#">
                    <svg class="icon-svg  icon-twitter">
                      <use xlink:href="assets/img/sprite.svg#twitter"></use>
                    </svg></a></div>
                <div class="social__item"><a href="#">
                    <svg class="icon-svg  icon-fb">
                      <use xlink:href="assets/img/sprite.svg#fb"></use>
                    </svg></a></div>
                <div class="social__item"><a href="#">
                    <svg class="icon-svg  icon-insta">
                      <use xlink:href="assets/img/sprite.svg#insta"></use>
                    </svg></a></div>
                <div class="social__item"><a href="#">
                    <svg class="icon-svg  icon-youtube">
                      <use xlink:href="assets/img/sprite.svg#youtube"></use>
                    </svg></a></div>
              </div>
            </div>
            <ul class="header__nav">
              <li class="header__nav-item"><a class="active" href="#"> <span>Home</span></a></li>
              <li class="header__nav-item"><a href="#"> <span>Blog</span></a></li>
              <li class="header__nav-item"><a href="#"> <span>Tos</span></a></li>
              <li class="header__nav-item"><a href="#"> <span>Contact</span></a></li>
            </ul>
            <div class="header__lang js-lang">
              <div class="header__lang-btn js-lang-btn"><img src="assets/img/flag/flag-01.png" alt="flag"/></div>
              <div class="header__lang-drop js-lang-drop"><a class="header__lang-item" href="#"><img src="assets/img/flag/flag-02.png" alt="flag"/></a><a class="header__lang-item" href="#"><img src="assets/img/flag/flag-03.png" alt="flag"/></a></div>
            </div>
          </div>
        </div>
      </header>
      <main class="main">