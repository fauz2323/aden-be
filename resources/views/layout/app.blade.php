<!doctype html>
<html lang="en" dir="ltr" data-nav="side">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Geex Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- endinject -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicon.svg')}}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
    @livewireStyles()
    @stack('css')
</head>

<body class="geex-dashboard">


    <header class="geex-header">
        <div class="geex-header__wrapper">
            <div class="geex-header__logo-wrapper">
                <a href="index.html" class="geex-header__logo">
                    <img class="logo-lite" src="assets/img/logo-dark.svg" alt="Header logo" />
                    <img class="logo-dark" src="assets/img/logo-lite.svg" alt="Header logo" />
                </a>
            </div>
            <nav class="geex-header__menu-wrapper">
                <ul class="geex-header__menu">
                    <li class="geex-header__menu__item has-children">
                        <a href="#" class="geex-header__menu__link">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1139_9707)">
                                    <path
                                        d="M21.1943 8.31319L14.2413 1.35936C13.3808 0.501345 12.2152 0.0195312 11 0.0195312C9.78482 0.0195312 8.61921 0.501345 7.75868 1.35936L0.805761 8.31319C0.549484 8.56782 0.3463 8.8708 0.207987 9.20454C0.0696733 9.53829 -0.00101787 9.89617 1.10729e-05 10.2574V19.2564C1.10729e-05 19.9857 0.289742 20.6852 0.805467 21.2009C1.32119 21.7166 2.02067 22.0064 2.75001 22.0064H19.25C19.9794 22.0064 20.6788 21.7166 21.1946 21.2009C21.7103 20.6852 22 19.9857 22 19.2564V10.2574C22.001 9.89617 21.9303 9.53829 21.792 9.20454C21.6537 8.8708 21.4505 8.56782 21.1943 8.31319ZM13.75 20.173H8.25001V16.5669C8.25001 15.8375 8.53974 15.138 9.05547 14.6223C9.57119 14.1066 10.2707 13.8169 11 13.8169C11.7294 13.8169 12.4288 14.1066 12.9446 14.6223C13.4603 15.138 13.75 15.8375 13.75 16.5669V20.173ZM20.1667 19.2564C20.1667 19.4995 20.0701 19.7326 19.8982 19.9045C19.7263 20.0764 19.4931 20.173 19.25 20.173H15.5833V16.5669C15.5833 15.3513 15.1005 14.1855 14.2409 13.3259C13.3814 12.4664 12.2156 11.9835 11 11.9835C9.78444 11.9835 8.61865 12.4664 7.75911 13.3259C6.89956 14.1855 6.41668 15.3513 6.41668 16.5669V20.173H2.75001C2.5069 20.173 2.27374 20.0764 2.10183 19.9045C1.92992 19.7326 1.83334 19.4995 1.83334 19.2564V10.2574C1.83419 10.0145 1.93068 9.78168 2.10193 9.60935L9.05485 2.65827C9.57157 2.14396 10.271 1.85522 11 1.85522C11.7291 1.85522 12.4285 2.14396 12.9452 2.65827L19.8981 9.61211C20.0687 9.78375 20.1651 10.0155 20.1667 10.2574V19.2564Z"
                                        fill="#B9BBBD" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1139_9707">
                                        <rect width="22" height="22" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>Home</span>
                        </a>
                        <ul class="geex-header__submenu">
                            <li class="geex-header__menu__item">
                                <a href="{{route('home')}}" class="geex-header__menu__link">Home</a>
                            </li>
                        </ul>
                    </li>

                    <li class="geex-header__menu__item has-children">
                        <a href="#" class="geex-header__menu__link">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1139_9709)">
                                    <path
                                        d="M1.83333 10.0833H11.9167C12.4029 10.0833 12.8692 9.89018 13.213 9.54636C13.5568 9.20255 13.75 8.73623 13.75 8.25V1.83333C13.75 1.3471 13.5568 0.880788 13.213 0.536971C12.8692 0.193154 12.4029 0 11.9167 0L1.83333 0C1.3471 0 0.880788 0.193154 0.536971 0.536971C0.193154 0.880788 0 1.3471 0 1.83333L0 8.25C0 8.73623 0.193154 9.20255 0.536971 9.54636C0.880788 9.89018 1.3471 10.0833 1.83333 10.0833ZM1.83333 1.83333H11.9167V8.25H1.83333V1.83333Z"
                                        fill="#B9BBBD" />
                                    <path
                                        d="M20.1673 0H17.4173C16.9311 0 16.4648 0.193154 16.121 0.536971C15.7771 0.880788 15.584 1.3471 15.584 1.83333V8.25C15.584 8.73623 15.7771 9.20255 16.121 9.54636C16.4648 9.89018 16.9311 10.0833 17.4173 10.0833H20.1673C20.6535 10.0833 21.1199 9.89018 21.4637 9.54636C21.8075 9.20255 22.0007 8.73623 22.0007 8.25V1.83333C22.0007 1.3471 21.8075 0.880788 21.4637 0.536971C21.1199 0.193154 20.6535 0 20.1673 0V0ZM20.1673 8.25H17.4173V1.83333H20.1673V8.25Z"
                                        fill="#B9BBBD" />
                                    <path
                                        d="M4.58333 11.917H1.83333C1.3471 11.917 0.880788 12.1101 0.536971 12.454C0.193154 12.7978 0 13.2641 0 13.7503L0 20.167C0 20.6532 0.193154 21.1195 0.536971 21.4633C0.880788 21.8072 1.3471 22.0003 1.83333 22.0003H4.58333C5.06956 22.0003 5.53588 21.8072 5.8797 21.4633C6.22351 21.1195 6.41667 20.6532 6.41667 20.167V13.7503C6.41667 13.2641 6.22351 12.7978 5.8797 12.454C5.53588 12.1101 5.06956 11.917 4.58333 11.917ZM4.58333 20.167H1.83333V13.7503H4.58333V20.167Z"
                                        fill="#B9BBBD" />
                                    <path
                                        d="M20.1667 11.917H10.0833C9.5971 11.917 9.13079 12.1101 8.78697 12.454C8.44315 12.7978 8.25 13.2641 8.25 13.7503V20.167C8.25 20.6532 8.44315 21.1195 8.78697 21.4633C9.13079 21.8072 9.5971 22.0003 10.0833 22.0003H20.1667C20.6529 22.0003 21.1192 21.8072 21.463 21.4633C21.8068 21.1195 22 20.6532 22 20.167V13.7503C22 13.2641 21.8068 12.7978 21.463 12.454C21.1192 12.1101 20.6529 11.917 20.1667 11.917ZM20.1667 20.167H10.0833V13.7503H20.1667V20.167Z"
                                        fill="#B9BBBD" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1139_9709">
                                        <rect width="22" height="22" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>Menu</span>
                        </a>
                        <ul class="geex-header__submenu">
                            <li class="geex-header__menu__item">
                                <a href="{{ route('category') }}"
                                    class="geex-header__menu__link geex-customizer__btn--side">Category</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="{{ route('food') }}"
                                    class="geex-header__menu__link geex-customizer__btn--side">Foods</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <div class="geex-header__action">
                <div class="geex-header__action__item">
                    <button class="geex-btn geex-btn__customizer">
                        <i class="uil uil-pen"></i>
                        <span>Customizer</span>
                    </button>
                </div>
            </div>
        </div>
    </header>



    <main class="geex-main-content">


        <div class="geex-sidebar">
            <a href="#" class="geex-sidebar__close">
                <i class="uil uil-times"></i>
            </a>
            <div class="geex-sidebar__wrapper">
                <div class="geex-sidebar__header">
                    <a href="index.html" class="geex-sidebar__logo">
                        <img class="logo-lite" src="assets/img/logo-dark.svg" alt="logo" />
                        <img class="logo-dark" src="assets/img/logo-lite.svg" alt="logo" />
                    </a>
                </div>
                <nav class="geex-sidebar__menu-wrapper">
                    <ul class="geex-sidebar__menu">
                        <li class="geex-sidebar__menu__item has-children">
                            <a href="#" class="geex-sidebar__menu__link">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1139_9707)">
                                        <path
                                            d="M21.1943 8.31319L14.2413 1.35936C13.3808 0.501345 12.2152 0.0195312 11 0.0195312C9.78482 0.0195312 8.61921 0.501345 7.75868 1.35936L0.805761 8.31319C0.549484 8.56782 0.3463 8.8708 0.207987 9.20454C0.0696733 9.53829 -0.00101787 9.89617 1.10729e-05 10.2574V19.2564C1.10729e-05 19.9857 0.289742 20.6852 0.805467 21.2009C1.32119 21.7166 2.02067 22.0064 2.75001 22.0064H19.25C19.9794 22.0064 20.6788 21.7166 21.1946 21.2009C21.7103 20.6852 22 19.9857 22 19.2564V10.2574C22.001 9.89617 21.9303 9.53829 21.792 9.20454C21.6537 8.8708 21.4505 8.56782 21.1943 8.31319ZM13.75 20.173H8.25001V16.5669C8.25001 15.8375 8.53974 15.138 9.05547 14.6223C9.57119 14.1066 10.2707 13.8169 11 13.8169C11.7294 13.8169 12.4288 14.1066 12.9446 14.6223C13.4603 15.138 13.75 15.8375 13.75 16.5669V20.173ZM20.1667 19.2564C20.1667 19.4995 20.0701 19.7326 19.8982 19.9045C19.7263 20.0764 19.4931 20.173 19.25 20.173H15.5833V16.5669C15.5833 15.3513 15.1005 14.1855 14.2409 13.3259C13.3814 12.4664 12.2156 11.9835 11 11.9835C9.78444 11.9835 8.61865 12.4664 7.75911 13.3259C6.89956 14.1855 6.41668 15.3513 6.41668 16.5669V20.173H2.75001C2.5069 20.173 2.27374 20.0764 2.10183 19.9045C1.92992 19.7326 1.83334 19.4995 1.83334 19.2564V10.2574C1.83419 10.0145 1.93068 9.78168 2.10193 9.60935L9.05485 2.65827C9.57157 2.14396 10.271 1.85522 11 1.85522C11.7291 1.85522 12.4285 2.14396 12.9452 2.65827L19.8981 9.61211C20.0687 9.78375 20.1651 10.0155 20.1667 10.2574V19.2564Z"
                                            fill="#B9BBBD" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1139_9707">
                                            <rect width="22" height="22" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Home</span>
                            </a>
                            <ul class="geex-sidebar__submenu">
                                <li class="geex-sidebar__menu__item">
                                    <a href="{{route('home')}}" class="geex-header__menu__link">Home</a>
                                </li>
                            </ul>
                        </li>

                        <li class="geex-sidebar__menu__item has-children">
                            <a href="#" class="geex-sidebar__menu__link">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1139_9709)">
                                        <path
                                            d="M1.83333 10.0833H11.9167C12.4029 10.0833 12.8692 9.89018 13.213 9.54636C13.5568 9.20255 13.75 8.73623 13.75 8.25V1.83333C13.75 1.3471 13.5568 0.880788 13.213 0.536971C12.8692 0.193154 12.4029 0 11.9167 0L1.83333 0C1.3471 0 0.880788 0.193154 0.536971 0.536971C0.193154 0.880788 0 1.3471 0 1.83333L0 8.25C0 8.73623 0.193154 9.20255 0.536971 9.54636C0.880788 9.89018 1.3471 10.0833 1.83333 10.0833ZM1.83333 1.83333H11.9167V8.25H1.83333V1.83333Z"
                                            fill="#B9BBBD" />
                                        <path
                                            d="M20.1673 0H17.4173C16.9311 0 16.4648 0.193154 16.121 0.536971C15.7771 0.880788 15.584 1.3471 15.584 1.83333V8.25C15.584 8.73623 15.7771 9.20255 16.121 9.54636C16.4648 9.89018 16.9311 10.0833 17.4173 10.0833H20.1673C20.6535 10.0833 21.1199 9.89018 21.4637 9.54636C21.8075 9.20255 22.0007 8.73623 22.0007 8.25V1.83333C22.0007 1.3471 21.8075 0.880788 21.4637 0.536971C21.1199 0.193154 20.6535 0 20.1673 0V0ZM20.1673 8.25H17.4173V1.83333H20.1673V8.25Z"
                                            fill="#B9BBBD" />
                                        <path
                                            d="M4.58333 11.917H1.83333C1.3471 11.917 0.880788 12.1101 0.536971 12.454C0.193154 12.7978 0 13.2641 0 13.7503L0 20.167C0 20.6532 0.193154 21.1195 0.536971 21.4633C0.880788 21.8072 1.3471 22.0003 1.83333 22.0003H4.58333C5.06956 22.0003 5.53588 21.8072 5.8797 21.4633C6.22351 21.1195 6.41667 20.6532 6.41667 20.167V13.7503C6.41667 13.2641 6.22351 12.7978 5.8797 12.454C5.53588 12.1101 5.06956 11.917 4.58333 11.917ZM4.58333 20.167H1.83333V13.7503H4.58333V20.167Z"
                                            fill="#B9BBBD" />
                                        <path
                                            d="M20.1667 11.917H10.0833C9.5971 11.917 9.13079 12.1101 8.78697 12.454C8.44315 12.7978 8.25 13.2641 8.25 13.7503V20.167C8.25 20.6532 8.44315 21.1195 8.78697 21.4633C9.13079 21.8072 9.5971 22.0003 10.0833 22.0003H20.1667C20.6529 22.0003 21.1192 21.8072 21.463 21.4633C21.8068 21.1195 22 20.6532 22 20.167V13.7503C22 13.2641 21.8068 12.7978 21.463 12.454C21.1192 12.1101 20.6529 11.917 20.1667 11.917ZM20.1667 20.167H10.0833V13.7503H20.1667V20.167Z"
                                            fill="#B9BBBD" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1139_9709">
                                            <rect width="22" height="22" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Menu</span>
                            </a>
                            <ul class="geex-sidebar__submenu">
                                <li class="geex-sidebar__menu__item">
                                    <a href="{{ route('category') }}"
                                        class="geex-sidebar__menu__link geex-customizer__btn--side">Category</a>
                                </li>
                                <li class="geex-sidebar__menu__item">
                                    <a href="{{ route('food') }}"
                                        class="geex-sidebar__menu__link geex-customizer__btn--side">Foods</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="geex-sidebar__footer">
                    <span class="geex-sidebar__footer__title">Geex Modern Dashboard</span>
                    <p class="geex-sidebar__footer__copyright">© 2024 All Rights Reserved</p>
                    <p class="geex-sidebar__footer__author">Made with <span class="heart-icon">♥</span> by <a
                            href="#">ThemeWant</a></p>
                </div>
            </div>
        </div>




        <div class="geex-customizer">
            <div class="geex-customizer__header">
                <h4 class="geex-customizer__title">Customizer</h4>
                <button class="geex-btn geex-btn__customizer-close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18 7.05L16.95 6L12 10.95L7.05 6L6 7.05L10.95 12L6 16.95L7.05 18L12 13.05L16.95 18L18 16.95L13.05 12L18 7.05Z"
                            fill="#BCBFDB" />
                        <path
                            d="M18 7.05L16.95 6L12 10.95L7.05 6L6 7.05L10.95 12L6 16.95L7.05 18L12 13.05L16.95 18L18 16.95L13.05 12L18 7.05Z"
                            fill="black" fill-opacity="0.8" />
                    </svg>
                </button>
            </div>
            <div class="geex-customizer__body">
                <div class="geex-customizer__single">
                    <h5 class="geex-customizer__single__title">Layout Types</h5>
                    <ul class="geex-customizer__list geex-customizer__list--layout">
                        <li class="geex-customizer__list__item">
                            <button class="geex-btn geex-customizer__btn geex-customizer__btn--ltr active">
                                <svg width="24" height="20" viewBox="0 0 24 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4.5" y="2.5" width="13" height="5" rx="1.5"
                                        stroke="white" />
                                    <rect x="4.5" y="12.5" width="19" height="5" rx="1.5"
                                        stroke="white" />
                                    <rect width="1" height="20" fill="white" />
                                </svg>
                                LTR
                            </button>
                        </li>
                        <li class="geex-customizer__list__item">
                            <button class="geex-btn geex-customizer__btn geex-customizer__btn--rtl">
                                RTL
                                <svg width="24" height="20" viewBox="0 0 24 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="-0.5" y="0.5" width="13" height="5" rx="1.5"
                                        transform="matrix(-1 0 0 1 19 2)" stroke="#AB54DB" />
                                    <rect x="-0.5" y="0.5" width="19" height="5" rx="1.5"
                                        transform="matrix(-1 0 0 1 19 12)" stroke="#AB54DB" />
                                    <rect width="1" height="20" transform="matrix(-1 0 0 1 24 0)"
                                        fill="#AB54DB" />
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="geex-customizer__single">
                    <h4 class="geex-customizer__single__title">Mode Type</h4>
                    <ul class="geex-customizer__list geex-customizer__list--sidebar">
                        <li class="geex-customizer__list__item">
                            <button class="geex-btn geex-customizer__btn geex-customizer__btn--light active">
                                <svg width="144" height="86" viewBox="0 0 144 86" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="144" height="86" rx="10" fill="white" />
                                    <circle cx="27" cy="22" r="4" fill="#FF5653" />
                                    <circle cx="38" cy="22" r="4" fill="#FDB23A" />
                                    <circle cx="49" cy="22" r="4" fill="#2CBF44" />
                                    <rect x="22" y="36" width="110" height="1" fill="#E7E7E7" />
                                    <path
                                        d="M31.94 58.34H26.38L25.46 61H22.52L27.54 47.02H30.8L35.82 61H32.86L31.94 58.34ZM31.18 56.1L29.16 50.26L27.14 56.1H31.18ZM36.9764 55.42C36.9764 54.3 37.1964 53.3067 37.6364 52.44C38.0897 51.5733 38.6964 50.9067 39.4564 50.44C40.2297 49.9733 41.0897 49.74 42.0364 49.74C42.8631 49.74 43.5831 49.9067 44.1964 50.24C44.8231 50.5733 45.3231 50.9933 45.6964 51.5V49.92H48.5164V61H45.6964V59.38C45.3364 59.9 44.8364 60.3333 44.1964 60.68C43.5697 61.0133 42.8431 61.18 42.0164 61.18C41.0831 61.18 40.2297 60.94 39.4564 60.46C38.6964 59.98 38.0897 59.3067 37.6364 58.44C37.1964 57.56 36.9764 56.5533 36.9764 55.42ZM45.6964 55.46C45.6964 54.78 45.5631 54.2 45.2964 53.72C45.0297 53.2267 44.6697 52.8533 44.2164 52.6C43.7631 52.3333 43.2764 52.2 42.7564 52.2C42.2364 52.2 41.7564 52.3267 41.3164 52.58C40.8764 52.8333 40.5164 53.2067 40.2364 53.7C39.9697 54.18 39.8364 54.7533 39.8364 55.42C39.8364 56.0867 39.9697 56.6733 40.2364 57.18C40.5164 57.6733 40.8764 58.0533 41.3164 58.32C41.7697 58.5867 42.2497 58.72 42.7564 58.72C43.2764 58.72 43.7631 58.5933 44.2164 58.34C44.6697 58.0733 45.0297 57.7 45.2964 57.22C45.5631 56.7267 45.6964 56.14 45.6964 55.46Z"
                                        fill="#464255" />
                                </svg>
                            </button>
                        </li>
                        <li class="geex-customizer__list__item">
                            <button class="geex-btn geex-customizer__btn geex-customizer__btn--dark">
                                <svg width="144" height="86" viewBox="0 0 144 86" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="144" height="86" rx="10" fill="#2F2A36" />
                                    <circle cx="27" cy="22" r="4" fill="#FF5653" />
                                    <circle cx="38" cy="22" r="4" fill="#FDB23A" />
                                    <circle cx="49" cy="22" r="4" fill="#2CBF44" />
                                    <rect x="22" y="36" width="110" height="1" fill="#D0D6DE" />
                                    <path
                                        d="M31.94 58.34H26.38L25.46 61H22.52L27.54 47.02H30.8L35.82 61H32.86L31.94 58.34ZM31.18 56.1L29.16 50.26L27.14 56.1H31.18ZM36.9764 55.42C36.9764 54.3 37.1964 53.3067 37.6364 52.44C38.0897 51.5733 38.6964 50.9067 39.4564 50.44C40.2297 49.9733 41.0897 49.74 42.0364 49.74C42.8631 49.74 43.5831 49.9067 44.1964 50.24C44.8231 50.5733 45.3231 50.9933 45.6964 51.5V49.92H48.5164V61H45.6964V59.38C45.3364 59.9 44.8364 60.3333 44.1964 60.68C43.5697 61.0133 42.8431 61.18 42.0164 61.18C41.0831 61.18 40.2297 60.94 39.4564 60.46C38.6964 59.98 38.0897 59.3067 37.6364 58.44C37.1964 57.56 36.9764 56.5533 36.9764 55.42ZM45.6964 55.46C45.6964 54.78 45.5631 54.2 45.2964 53.72C45.0297 53.2267 44.6697 52.8533 44.2164 52.6C43.7631 52.3333 43.2764 52.2 42.7564 52.2C42.2364 52.2 41.7564 52.3267 41.3164 52.58C40.8764 52.8333 40.5164 53.2067 40.2364 53.7C39.9697 54.18 39.8364 54.7533 39.8364 55.42C39.8364 56.0867 39.9697 56.6733 40.2364 57.18C40.5164 57.6733 40.8764 58.0533 41.3164 58.32C41.7697 58.5867 42.2497 58.72 42.7564 58.72C43.2764 58.72 43.7631 58.5933 44.2164 58.34C44.6697 58.0733 45.0297 57.7 45.2964 57.22C45.5631 56.7267 45.6964 56.14 45.6964 55.46Z"
                                        fill="#D0D6DE" />
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="geex-customizer__single">
                    <h4 class="geex-customizer__single__title">Navbar Type</h4>
                    <ul class="geex-customizer__list geex-customizer__list--navbar">
                        <li class="geex-customizer__list__item">
                            <button class="geex-btn geex-customizer__btn geex-customizer__btn--side active">
                                <svg width="149" height="92" viewBox="0 0 149 92" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="46" width="103" height="92" rx="10" fill="white" />
                                    <rect width="40" height="92" rx="10" fill="white" />
                                </svg>
                            </button>
                        </li>
                        <li class="geex-customizer__list__item">
                            <button class="geex-btn geex-customizer__btn geex-customizer__btn--top">
                                <svg width="149" height="92" viewBox="0 0 149 92" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="13" width="149" height="79" rx="10" fill="white" />
                                    <rect width="149" height="8" rx="4" fill="white" />
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="geex-customizer-overlay"></div>
        </div>

        <div class="geex-content">
            <div class="geex-content__header">
                <div class="geex-content__header__content">
                    <h2 class="geex-content__header__title">Dashboard</h2>
                    <p class="geex-content__header__subtitle">Welcome to Geex Modern Admin Dashboard</p>
                </div>

                <div class="geex-content__header__action">
                    <div class="geex-content__header__customizer">
                        <button class="geex-btn geex-btn__toggle-sidebar">
                            <i class="uil uil-align-center-alt"></i>
                        </button>
                        <button class="geex-btn geex-btn__customizer">
                            <i class="uil uil-pen"></i>
                            <span>Customizer</span>
                        </button>
                    </div>
                    <div class="geex-content__header__action__wrap">
                        <ul class="geex-content__header__quickaction">
                            <li class="geex-content__header__quickaction__item">
                                <a href="#" class="geex-content__header__quickaction__link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18C11.7767 18.0022 13.5025 17.407 14.9 16.31L19.29 20.71C19.383 20.8037 19.4936 20.8781 19.6154 20.9289C19.7373 20.9797 19.868 21.0058 20 21.0058C20.132 21.0058 20.2627 20.9797 20.3846 20.9289C20.5064 20.8781 20.617 20.8037 20.71 20.71C20.8037 20.617 20.8781 20.5064 20.9289 20.3846C20.9797 20.2627 21.0058 20.132 21.0058 20C21.0058 19.868 20.9797 19.7373 20.9289 19.6154C20.8781 19.4936 20.8037 19.383 20.71 19.29L16.31 14.9C17.407 13.5025 18.0022 11.7767 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10ZM10 4C11.1867 4 12.3467 4.35189 13.3334 5.01118C14.3201 5.67047 15.0891 6.60754 15.5433 7.7039C15.9974 8.80026 16.1162 10.0067 15.8847 11.1705C15.6532 12.3344 15.0818 13.4035 14.2426 14.2426C13.4035 15.0818 12.3344 15.6532 11.1705 15.8847C10.0067 16.1162 8.80026 15.9974 7.7039 15.5433C6.60754 15.0891 5.67047 14.3201 5.01118 13.3334C4.35189 12.3467 4 11.1867 4 10C4 8.4087 4.63214 6.88258 5.75736 5.75736C6.88258 4.63214 8.4087 4 10 4Z"
                                            fill="#464255" />
                                    </svg>
                                </a>
                                <div class="geex-content__header__searchform geex-content__header__popup">
                                    <input type="text" placeholder="Search" class="geex-content__header__btn" />
                                    <i class="uil uil-search"></i>
                                </div>
                            </li>
                            <li class="geex-content__header__quickaction__item">
                                <a href="#" class="geex-content__header__quickaction__link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 11.9998C12.5523 11.9998 13 11.552 13 10.9998C13 10.4475 12.5523 9.99976 12 9.99976C11.4477 9.99976 11 10.4475 11 10.9998C11 11.552 11.4477 11.9998 12 11.9998Z"
                                            fill="#464255" />
                                        <path
                                            d="M8 11.9998C8.55229 11.9998 9 11.552 9 10.9998C9 10.4475 8.55229 9.99976 8 9.99976C7.44772 9.99976 7 10.4475 7 10.9998C7 11.552 7.44772 11.9998 8 11.9998Z"
                                            fill="#464255" />
                                        <path
                                            d="M16 11.9998C16.5523 11.9998 17 11.552 17 10.9998C17 10.4475 16.5523 9.99976 16 9.99976C15.4477 9.99976 15 10.4475 15 10.9998C15 11.552 15.4477 11.9998 16 11.9998Z"
                                            fill="#464255" />
                                        <path
                                            d="M3.05007 21.87C3.25937 21.9564 3.48366 22.0005 3.71007 22C3.93336 22.0011 4.15461 21.9574 4.36072 21.8716C4.56684 21.7857 4.75364 21.6593 4.91007 21.5L7.41007 19H17.0001C18.3262 19 19.5979 18.4732 20.5356 17.5355C21.4733 16.5979 22.0001 15.3261 22.0001 14V8C22.0001 6.67392 21.4733 5.40215 20.5356 4.46447C19.5979 3.52678 18.3262 3 17.0001 3H7.00007C5.67399 3 4.40222 3.52678 3.46454 4.46447C2.52686 5.40215 2.00007 6.67392 2.00007 8V20.29C1.9969 20.6282 2.09528 20.9596 2.28247 21.2412C2.46966 21.5229 2.73705 21.7419 3.05007 21.87V21.87ZM4.00007 8C4.00007 7.20435 4.31614 6.44129 4.87875 5.87868C5.44136 5.31607 6.20442 5 7.00007 5H17.0001C17.7957 5 18.5588 5.31607 19.1214 5.87868C19.684 6.44129 20.0001 7.20435 20.0001 8V14C20.0001 14.7957 19.684 15.5587 19.1214 16.1213C18.5588 16.6839 17.7957 17 17.0001 17H7.00007C6.86847 16.9992 6.738 17.0245 6.61617 17.0742C6.49433 17.124 6.38351 17.1973 6.29007 17.29L4.00007 19.59V8Z"
                                            fill="#464255" />
                                    </svg>
                                    <span class="geex-content__header__badge">84</span>
                                </a>
                                <div class="geex-content__header__popup geex-content__header__popup--message">
                                    <h3 class="geex-content__header__popup__title">
                                        Messages<span class="content__header__popup__title__count">7</span>
                                    </h3>
                                    <div class="geex-content__header__popup__content">
                                        <ul class="geex-content__header__popup__items">
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <div class="geex-content__header__popup__item__img">
                                                        <img src="assets/img/avatar/user.svg" alt="Popup Img"
                                                            class="" />
                                                    </div>
                                                    <div class="geex-content__header__popup__item__content">
                                                        <h5 class="geex-content__header__popup__item__title">
                                                            Mahabub Alam
                                                            <span class="geex-content__header__popup__item__time">1.2
                                                                hrs ago</span>
                                                        </h5>
                                                        <div class="geex-content__header__popup__item__desc">
                                                            Lorem ipsum dolor amet cosec...
                                                            <span
                                                                class="geex-content__header__popup__item__count">3</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <div class="geex-content__header__popup__item__img">
                                                        <img src="assets/img/avatar/user.svg" alt="Popup Img"
                                                            class="" />
                                                    </div>
                                                    <div class="geex-content__header__popup__item__content">
                                                        <h5 class="geex-content__header__popup__item__title">
                                                            David Warner
                                                            <span class="geex-content__header__popup__item__time">1.7
                                                                hrs ago</span>
                                                        </h5>
                                                        <div class="geex-content__header__popup__item__desc">
                                                            Lorem ipsum dolor amet cosec...
                                                            <span
                                                                class="geex-content__header__popup__item__count">3</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <div class="geex-content__header__popup__item__img">
                                                        <img src="assets/img/avatar/user.svg" alt="Popup Img"
                                                            class="" />
                                                    </div>
                                                    <div class="geex-content__header__popup__item__content">
                                                        <h5 class="geex-content__header__popup__item__title">
                                                            Mitchel Marsh
                                                            <span class="geex-content__header__popup__item__time">2.2
                                                                hrs ago</span>
                                                        </h5>
                                                        <div class="geex-content__header__popup__item__desc">
                                                            Lorem ipsum dolor amet cosec...
                                                            <span
                                                                class="geex-content__header__popup__item__count">3</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <div class="geex-content__header__popup__item__img">
                                                        <img src="assets/img/avatar/user.svg" alt="Popup Img"
                                                            class="" />
                                                    </div>
                                                    <div class="geex-content__header__popup__item__content">
                                                        <h5 class="geex-content__header__popup__item__title">
                                                            Mike Hesson
                                                            <span class="geex-content__header__popup__item__time">2.6
                                                                hrs ago</span>
                                                        </h5>
                                                        <div class="geex-content__header__popup__item__desc">
                                                            Lorem ipsum dolor amet cosec...
                                                            <span
                                                                class="geex-content__header__popup__item__count">3</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="geex-content__header__quickaction__item">
                                <a href="#" class="geex-content__header__quickaction__link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4 20H10C10 20.5304 10.2107 21.0391 10.5858 21.4142C10.9609 21.7893 11.4696 22 12 22C12.5304 22 13.0391 21.7893 13.4142 21.4142C13.7893 21.0391 14 20.5304 14 20H20C20.2652 20 20.5196 19.8946 20.7071 19.7071C20.8946 19.5196 21 19.2652 21 19C21 18.7348 20.8946 18.4804 20.7071 18.2929C20.5196 18.1054 20.2652 18 20 18V11C20 8.87827 19.1571 6.84344 17.6569 5.34315C16.1566 3.84285 14.1217 3 12 3C9.87827 3 7.84344 3.84285 6.34315 5.34315C4.84285 6.84344 4 8.87827 4 11V18C3.73478 18 3.48043 18.1054 3.29289 18.2929C3.10536 18.4804 3 18.7348 3 19C3 19.2652 3.10536 19.5196 3.29289 19.7071C3.48043 19.8946 3.73478 20 4 20V20ZM6 11C6 9.4087 6.63214 7.88258 7.75736 6.75736C8.88258 5.63214 10.4087 5 12 5C13.5913 5 15.1174 5.63214 16.2426 6.75736C17.3679 7.88258 18 9.4087 18 11V18H6V11Z"
                                            fill="#464255" />
                                    </svg>
                                    <span class="geex-content__header__badge bg-info">2</span>
                                </a>
                                <div class="geex-content__header__popup geex-content__header__popup--notification">
                                    <h3 class="geex-content__header__popup__title">
                                        Notification<span class="content__header__popup__title__count">5</span>
                                    </h3>
                                    <div class="geex-content__header__popup__content">
                                        <ul class="geex-content__header__popup__items">
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <div class="geex-content__header__popup__item__img">
                                                        <img src="assets/img/avatar/user.svg" alt="Popup Img"
                                                            class="" />
                                                    </div>
                                                    <div class="geex-content__header__popup__item__content">
                                                        <h5 class="geex-content__header__popup__item__title">
                                                            Mahabub Alam
                                                            <span class="geex-content__header__popup__item__time">1.3
                                                                hrs ago</span>
                                                        </h5>
                                                        <div class="geex-content__header__popup__item__desc">
                                                            Lorem ipsum dolor amet cosec...
                                                            <span
                                                                class="geex-content__header__popup__item__count"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <div class="geex-content__header__popup__item__img">
                                                        <img src="assets/img/avatar/user.svg" alt="Popup Img"
                                                            class="" />
                                                    </div>
                                                    <div class="geex-content__header__popup__item__content">
                                                        <h5 class="geex-content__header__popup__item__title">
                                                            Adam Smith
                                                            <span class="geex-content__header__popup__item__time">1.7
                                                                hrs ago</span>
                                                        </h5>
                                                        <div class="geex-content__header__popup__item__desc">
                                                            Lorem ipsum dolor amet cosec...
                                                            <span
                                                                class="geex-content__header__popup__item__count"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <div class="geex-content__header__popup__item__img">
                                                        <img src="assets/img/avatar/user.svg" alt="Popup Img"
                                                            class="" />
                                                    </div>
                                                    <div class="geex-content__header__popup__item__content">
                                                        <h5 class="geex-content__header__popup__item__title">
                                                            John Doe
                                                            <span class="geex-content__header__popup__item__time">2.1
                                                                hrs ago</span>
                                                        </h5>
                                                        <div class="geex-content__header__popup__item__desc">
                                                            Lorem ipsum dolor amet cosec...
                                                            <span
                                                                class="geex-content__header__popup__item__count"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <div class="geex-content__header__popup__item__img">
                                                        <img src="assets/img/avatar/user.svg" alt="Popup Img"
                                                            class="" />
                                                    </div>
                                                    <div class="geex-content__header__popup__item__content">
                                                        <h5 class="geex-content__header__popup__item__title">
                                                            Bruce Wayne
                                                            <span class="geex-content__header__popup__item__time">2.4
                                                                hrs ago</span>
                                                        </h5>
                                                        <div class="geex-content__header__popup__item__desc">
                                                            Lorem ipsum dolor amet cosec...
                                                            <span
                                                                class="geex-content__header__popup__item__count"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="geex-content__header__quickaction__item">
                                <a href="#" class="geex-content__header__quickaction__link">
                                    <img class="user-img" src="assets/img/avatar/user.svg" alt="user" />
                                </a>
                                <div class="geex-content__header__popup geex-content__header__popup--author">
                                    <div class="geex-content__header__popup__header">
                                        <div class="geex-content__header__popup__header__img">
                                            <img src="assets/img/avatar/user.svg" alt="user" />
                                        </div>
                                        <div class="geex-content__header__popup__header__content">
                                            <h3 class="geex-content__header__popup__header__title">Mahabub Alam</h3>
                                            <span class="geex-content__header__popup__header__subtitle">CEO,
                                                ThemeWant</span>
                                        </div>
                                    </div>
                                    <div class="geex-content__header__popup__content">
                                        <ul class="geex-content__header__popup__items">
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <i class="uil uil-user"></i>
                                                    Profile
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <i class="uil uil-cog"></i>
                                                    Settings
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <i class="uil uil-dollar-alt"></i>
                                                    Billing
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <i class="uil uil-users-alt"></i>
                                                    Activity
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <i class="uil uil-bell"></i>
                                                    Help
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="geex-content__header__popup__footer">
                                        <a href="#" class="geex-content__header__popup__footer__link">
                                            <i class="uil uil-arrow-up-left"></i>Logout
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="geex-content">
                @yield('content')
            </div>
        </div>
    </main>

    <!-- inject:js-->
    <script src="{{asset('assets/vendor/js/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('ssets/vendor/js/jquery/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.6.6/dragula.min.js" referrerpolicy="origin"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    @livewireScripts()
    @stack('script')
    <!-- endinject-->
</body>

</html>
