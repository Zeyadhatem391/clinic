<head>
    <style>
        .preloader {
            position: fixed;
            left: 0;
            width: 0;
            height: 100%;
            width: 100%;
            text-align: center;
            z-index: 9999999;
            -webkit-transition: .9s;
            transition: .9s;
        }

        .preloader .loader {
            position: absolute;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: inline-block;
            left: 0;
            right: 0;
            margin: 0 auto;
            top: 45%;
            -webkit-transform: translateY(-45%);
            transform: translateY(-45%);
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        .preloader .loader .loader-outter {
            position: absolute;
            border: 4px solid #ffffff;
            border-left-color: transparent;
            border-bottom: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            -webkit-animation: loader-outter 1s cubic-bezier(0.42, 0.61, 0.58, 0.41) infinite;
            animation: loader-outter 1s cubic-bezier(0.42, 0.61, 0.58, 0.41) infinite;
        }

        .preloader .loader .loader-inner {
            position: absolute;
            border: 4px solid #ffffff;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            left: calc(40% - 21px);
            top: calc(40% - 21px);
            border-right: 0;
            border-top-color: transparent;
            -webkit-animation: loader-inner 1s cubic-bezier(0.42, 0.61, 0.58, 0.41) infinite;
            animation: loader-inner 1s cubic-bezier(0.42, 0.61, 0.58, 0.41) infinite;
        }

        .preloader .loader .indicator {
            position: absolute;
            right: 0;
            left: 0;
            top: 50%;
            -webkit-transform: translateY(-50%) scale(1.5);
            transform: translateY(-50%) scale(1.5);
        }

        .preloader .loader .indicator svg polyline {
            fill: none;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .preloader .loader .indicator svg polyline#back {
            stroke: #ffffff;
        }

        .preloader .loader .indicator svg polyline#front {
            stroke: #1A76D1;
            stroke-dasharray: 12, 36;
            stroke-dashoffset: 48;
            -webkit-animation: dash 1s linear infinite;
            animation: dash 1s linear infinite;
        }

        .preloader::before,
        .preloader::after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 60%;
            z-index: -1;
            background: #1A76D1;
            -webkit-transition: .9s;
            transition: .9s;
        }

        .preloader::after {
            left: auto;
            right: 0;
        }

        .preloader.preloader-deactivate {
            visibility: hidden;
        }

        .preloader.preloader-deactivate::after,
        .preloader.preloader-deactivate::before {
            width: 0;
        }

        .preloader.preloader-deactivate .loader {
            opacity: 0;
            visibility: hidden;
        }

        @-webkit-keyframes loader-outter {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes loader-outter {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-webkit-keyframes loader-inner {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(-360deg);
                transform: rotate(-360deg);
            }
        }

        @keyframes loader-inner {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(-360deg);
                transform: rotate(-360deg);
            }
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(window).on('load', function () {
            $('.preloader').addClass('preloader-deactivate');
        });
    </script>
</body>