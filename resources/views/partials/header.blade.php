<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/e503322fad.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@200;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <title>Test Front</title>

</head>

<header class="header">
    <div class="container">
        <a href="/" class="logo" title="logo">
            <img src="{{ asset('img/logo.svg') }}" alt="logo" />
        </a>

        <div class="content">
            <nav class="nav">
                <ul class="menu">
                    <li><a href="" title="menu 1">menu 1</a></li>
                    <li><a href="" title="menu 2">menu 2</a></li>
                    <li><a href="" title="menu 3">menu 3</a></li>
                </ul>
            </nav>

            <div class="actions">
                <button type="button" class="btn-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>

                <button type="button" class="btn-burger">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <button type="button" class="btn-close">
                    <i class="fa-solid fa-xmark"></i>
                </button>

                <ul class="social">
                    <li>
                        <a href="" title="" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="" title="" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="" title="" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="" title="" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                    </li>
                    <li>
                        <a href="" title="" target="_blank"><i class="fa-solid fa-microphone"></i></a>
                    </li>
                    <li>
                        <a href="" title="" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
