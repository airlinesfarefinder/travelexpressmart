    <style>
        .callStringNew.footerNumShow {
            display: flex;
            padding: 5px 5px 5px 10px;
        }

        .callStringNew {
            justify-content: flex-start;
            align-items: center;
            position: fixed;
            background-color: #fff4f1 !important;
            bottom: 0px;
            left: 1px;
            width: 99%;
            z-index: 9999;
            margin: 0 auto;
            border: 1px solid #ed1a22;
            border-radius: 9px;
            border-right-width: 7px;
            top: auto;
        }

        .callStringNew a {
            color: #000;
            padding-right: 12px;
            font-size: 12px;
            font-weight: 600;
            text-align: center;
            display: block;
            padding-bottom: 1px;
            line-height: 25px;
            position: relative;
            top: -1px;
            z-index: 10;
        }

        .callStringNew .callIcon {
            position: relative;
            right: 12px;
        }

        .callImgGirl {
            width: 50px;
            display: block;
            border: solid 2px #008a04;
            border-radius: 50%;
            height: 50px;
        }

        @keyframes zoom-in-zoom-out {
            0% {
                transform: scale(1, 1);
            }

            50% {
                transform: scale(1.3, 1.3);
            }

            100% {
                transform: scale(1, 1);
            }
        }

        .wifi-symbol {
            display: block;
            position: absolute;
            top: 6px;
            left: 12px;
            display: inline-block;
            height: 36px;
        }

        .wifi-symbol .wifi-circle {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            display: block;
            width: 100%;
            height: 100%;
            font-size: 21.4285714286px;
            position: absolute;
            bottom: 0;
            left: 0;
            border-color: #fff;
            border-style: solid;
            border-width: 2px 2px 0 0;
            -webkit-border-radius: 0 100% 0 0;
            border-radius: 0 100% 0 0;
            opacity: 0;
            -o-animation: wifianimation 2.5s infinite;
            -moz-animation: wifianimation 2.5s infinite;
            -webkit-animation: wifianimation 2.5s infinite;
            animation: wifianimation 2.5s infinite;
        }

        .wifi-symbol .wifi-circle.first {
            -o-animation-delay: 800ms;
            -moz-animation-delay: 800ms;
            -webkit-animation-delay: 800ms;
            animation-delay: 800ms;
            width: 15px;
            height: 15px;
            left: 16px;
            top: 0px;
        }

        .wifi-symbol .wifi-circle.second {
            width: 12px;
            height: 12px;
            -o-animation-delay: 400ms;
            -moz-animation-delay: 400ms;
            -webkit-animation-delay: 400ms;
            animation-delay: 400ms;
            left: 14px;
            top: 5px;
        }

        .wifi-symbol .wifi-circle.third {
            width: 8px;
            height: 8px;
            left: 12px;
            top: 10px;
        }

        .wifi-symbol .fourth {
            width: 30px;
            height: 36px;
             background: url(images/cal2.gif) center center no-repeat;
            background-size: 20px;
            display: inline-block;
        }

        @keyframes wifianimation {
            0% {
                opacity: 1;
            }

            5% {
                opactiy: 1;
            }

            6% {
                opactiy: .8;
            }

            100% {
                opactiy: .8;
            }
        }

        .callStringNew .rightCall {
            display: flex;
            width: 100%;
            text-align: center;
            justify-content: center;
            padding-right: 0px;
            padding-left: 11px;
        }

       

        .callStringNew a span._speak {
            font-size: 14px;
            font-weight: 500;
            font-family: 'Montserrat';
            letter-spacing: normal;
        }

        .callStringNew.showTop img {
            display: inline-block;
        }

        .callStringNew.showTop {
            -webkit-animation-name: slideInDown;
            animation-name: slideInDown;
            -webkit-animation-duration: 0.5s;
            animation-duration: 0.5s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            top: 0;
            bottom: auto;
            padding: 5px;
            padding-bottom: 2px;
        }

        .callStringNew.showTop .rightCall {
            justify-content: flex-start;
        }

        .callStringNew.showTop a {
            line-height: 24px;
            padding-bottom: 2px;
            top: -1px;
        }

        .callStringNew .fulclk {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
        }

        .fulclk ._call-num {
            font-size: 0 !important;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .callStringNew a span._callphone {
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
        }

        .callStringNew a small {
            color: #fff;
            background-color: #106e00;
            border-radius: 5px;
            padding: 3px;
            font-weight: 400;
            letter-spacing: 1px;
        }

        .callStringNew a span._numcall {
            font-size: 28px;
            display: block;
            padding-top: 0;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
            color: #000;
        }

        .callIcon1 {
            position: relative;
            left: 0;
            top: 1px;
        }

        .callStringNew a._phonebox {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background-color: #c60001;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #106e00;
              /* background: #0d0e0d; */
            animation: zoom-in-zoom-out 2s ease-out infinite;
        }

        .footerNumShow {
            display: none !important;
        }

        .footerNumShow .phone-call {
            background: transparent !important;
            height: auto;
            width: auto;
            border-radius: 50%;
            left: 0;
        }


        .headers {}


        @media (min-width:320px) and (max-width:767px) {
            .footerNumShow {
                display: flex !important;
            }
        }
    </style>



<header class="headers _headers callStringNew footerNumShow">
        <a href="tel:(844) 915-7447" class="fulclk">
            <span class="_call-num">(844) 915-7447</span>
        </a>
        <div class="callIcon1 ">
            <a href="tel:(844) 915-7447" class="_phonebox pulse">
                <span class="wifi-symbol">
                    <span class="wifi-circle first"></span>
                    <span class="wifi-circle second"></span>
                    <span class="wifi-circle third"></span>
                    <span class="fourth"></span>
                </span>
            </a>
        </div>
        <div class="rightCall">
            <a href="tel:(844) 915-7447">
                <span class="_callphone">Get <small> Car Hire</small> Assistance by Phone</span>
                <span class="_numcall">(844) 915-7447</span>
            </a>
            <img class="callImgGirl" src="images/callImgGirl_cruise2.jpg" alt="calling girl icon">
        </div>



    </header>


    