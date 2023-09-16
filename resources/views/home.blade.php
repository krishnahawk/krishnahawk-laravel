<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KRISHNAHAWK</title>

        <style>
            body {
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                background: #11112A;
                color: #fff;
                margin: 0;
                padding: 0;
            }
            p {
                font-size: 1.2rem;
                line-height: 1.5;
            }
            h1, h2, h3, h4, h5, h6 {
                font-weight: 600;
                margin: 0 0 1rem 0;
            }
            a {
                color: #1066FF;
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
            .container {
                /* max-width: 800px; */
                margin: 0 auto;
                display:flex;
                flex-direction:column;
                /* padding: 0 1rem; */
            }
            div.header {
                /* padding: 1rem 0; */
                display: flex;
                justify-content: flex-start;
                align-items: flex-start;
                background-image:url('images/header.svg');
                background-repeat: no-repeat;
                background-size: 100%;
                width: 100%;
                height:200px;
                position:relative;
                font-family: 'Open Sans', sans-serif;
                /* background:red; */
            }

            .links .links-icon img {
                width:100%;
                height:100%;
            }

            div.header_inner {
                max-width:1300px;
                position: relative;
                margin:0 auto;
                width:100%;
                height: 100%;
                display:flex;
                justify-content: center;
                align-items:center;
                /* background:blue; */

            }

            div.links .links-icon {
                display:none;
            }

            @media (max-width: 1300px) {
                div.header nav a {
                    font-size: 1rem;
                    margin-top:-1rem;
                }
            }
            @media (max-width: 1000px) {
                /* Replace the menu item text with svg icons */
                div.header nav a.links-text {
                    display: none;
                }
                div.header nav a.links-icon {
                    display: block;
                }
            }


            .header nav a {
                color: #fff;
                text-decoration: none;
                font-size: 1.2rem;
                font-weight: 200;
                transition: all 0.2s ease-in-out;
            }

            .header nav a:hover {
                text-decoration: underline;
            }


            .header .logo {
                font-size: 1.5rem;
                font-weight: 700;
            }
            .header .links {
                position:absolute;
                top: 10%;
                left: 50%;
                transform: translateX(-50%);
                display:flex;
                justify-content: space-around;
                align-items:flex-start;
                width: 100%;
            }
           

            .header .links .left-links, .header .links .right-links {
                display: flex;
                align-items: center;
                flex-basis:30%;
                text-align:center;
                justify-content: space-between;
                height:50px;
                /* background:blue; */
            }

            .header .links .left-links {
                transform: rotate(3deg);
            }

            .header .links .right-links {
                transform: rotate(-3deg);
            }


            .header .links .center-logo {
                width: 200px;
                height: 200px;
                background-image: url('https://static.krishnahawk.com/images/logo.png');
                background-repeat: no-repeat;
                background-size: 100%;
                margin: 0 1rem;
            }
        </style>

            <!-- import the laravel stylesheet -->
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>

    <body>

        <div class="container">
            <div class="header">
                <div class="header_inner">
                    <!-- <div class="logo">KRISHNAHAWK</div> -->
                    <nav>
                        <div class="links">
                            <div class="left-links">
                                <a href="/" class="links-icon"><img src="images/home.svg"></a>
                                <a href="/" class="links-text">Home</a>
                                <a href="/" class="links-icon"><img src="images/home.svg"></a>
                                <a href="/about" class="links-text">About</a>
                                <a href="/web-development">Web Development</a>
                            </div>
                            <div class="center-logo"></div>
                            <div class="right-links">
                                <a href="/blog">Blog</a>
                                <a href="/tools">Tools</a>
                                <a href="/contact">Contact</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="content">
                <h1>Home</h1>
                <p>Welcome to my website.</p>x
            </div>
        </div>

        <!-- import the laravel app.js -->
        <script src="{{ asset('js/app.js') }}"></script>



    </body>
