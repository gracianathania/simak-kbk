<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Template Main CSS File -->
    <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="stylesIndex.css" /> -->
    <style>
        /*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Open Sans", sans-serif;
            color: #444444;
        }

        a {
            color: #47b2e4;
            text-decoration: none;
        }

        a:hover {
            color: #73c5eb;
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Jost", sans-serif;
        }

        /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
        #header {
            transition: all 0.5s;
            z-index: 997;
            padding: 15px 0;
            background-color: #212A3E;
            position: sticky;
        }

        #header.header-scrolled,
        #header.header-inner-pages {
            background: rgba(40, 58, 90, 0.9);
        }

        #header .logo {
            font-size: 30px;
            margin: 0;
            padding: 0;
            line-height: 1;
            font-weight: 500;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        #header .logo a {
            color: #fff;
        }

        #header .logo img {
            max-height: 40px;
        }

        /*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
        /**
* Desktop Navigation 
*/
        .navbar {
            padding: 0;
        }

        .navbar ul {
            margin: 0;
            padding: 0;
            display: flex;
            list-style: none;
            align-items: center;
        }

        .navbar li {
            position: relative;
        }

        .navbar a,
        .navbar a:focus {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0 10px 30px;
            font-size: 15px;
            font-weight: 500;
            color: #fff;
            white-space: nowrap;
            transition: 0.3s;
        }

        .navbar a i,
        .navbar a:focus i {
            font-size: 12px;
            line-height: 0;
            margin-left: 5px;
        }

        .navbar a:hover,
        .navbar .active,
        .navbar .active:focus,
        .navbar li:hover>a {
            color: #47b2e4;
        }

        .navbar .getstarted,
        .navbar .getstarted:focus {
            padding: 8px 20px;
            margin-left: 30px;
            border-radius: 50px;
            color: #fff;
            font-size: 14px;
            border: 2px solid #47b2e4;
            font-weight: 600;
        }

        .navbar .getstarted:hover,
        .navbar .getstarted:focus:hover {
            color: #fff;
            background: #31a9e1;
        }

        .navbar .dropdown ul {
            display: block;
            position: absolute;
            left: 14px;
            top: calc(100% + 30px);
            margin: 0;
            padding: 10px 0;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            background: #fff;
            box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
            transition: 0.3s;
            border-radius: 4px;
        }

        .navbar .dropdown ul li {
            min-width: 200px;
        }

        .navbar .dropdown ul a {
            padding: 10px 20px;
            font-size: 14px;
            text-transform: none;
            font-weight: 500;
            color: #0c3c53;
        }

        .navbar .dropdown ul a i {
            font-size: 12px;
        }

        .navbar .dropdown ul a:hover,
        .navbar .dropdown ul .active:hover,
        .navbar .dropdown ul li:hover>a {
            color: #47b2e4;
        }

        .navbar .dropdown:hover>ul {
            opacity: 1;
            top: 100%;
            visibility: visible;
        }

        .navbar .dropdown .dropdown ul {
            top: 0;
            left: calc(100% - 30px);
            visibility: hidden;
        }

        .navbar .dropdown .dropdown:hover>ul {
            opacity: 1;
            top: 0;
            left: 100%;
            visibility: visible;
        }

        @media (max-width: 1366px) {
            .navbar .dropdown .dropdown ul {
                left: -90%;
            }

            .navbar .dropdown .dropdown:hover>ul {
                left: -100%;
            }
        }

        /**
* Mobile Navigation 
*/
        .mobile-nav-toggle {
            color: #fff;
            font-size: 28px;
            cursor: pointer;
            display: none;
            line-height: 0;
            transition: 0.5s;
        }

        .mobile-nav-toggle.bi-x {
            color: #fff;
        }

        @media (max-width: 991px) {
            .mobile-nav-toggle {
                display: block;
            }

            .navbar ul {
                display: none;
            }
        }

        .navbar-mobile {
            position: fixed;
            overflow: hidden;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background: rgba(40, 58, 90, 0.9);
            transition: 0.3s;
            z-index: 999;
        }

        .navbar-mobile .mobile-nav-toggle {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .navbar-mobile ul {
            display: block;
            position: absolute;
            top: 55px;
            right: 15px;
            bottom: 15px;
            left: 15px;
            padding: 10px 0;
            border-radius: 10px;
            background-color: #fff;
            overflow-y: auto;
            transition: 0.3s;
        }

        .navbar-mobile a,
        .navbar-mobile a:focus {
            padding: 10px 20px;
            font-size: 15px;
            color: #37517e;
        }

        .navbar-mobile a:hover,
        .navbar-mobile .active,
        .navbar-mobile li:hover>a {
            color: #47b2e4;
        }

        .navbar-mobile .getstarted,
        .navbar-mobile .getstarted:focus {
            margin: 15px;
            color: #37517e;
        }

        .navbar-mobile .dropdown ul {
            position: static;
            display: none;
            margin: 10px 20px;
            padding: 10px 0;
            z-index: 99;
            opacity: 1;
            visibility: visible;
            background: #fff;
            box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
        }

        .navbar-mobile .dropdown ul li {
            min-width: 200px;
        }

        .navbar-mobile .dropdown ul a {
            padding: 10px 20px;
        }

        .navbar-mobile .dropdown ul a i {
            font-size: 12px;
        }

        .navbar-mobile .dropdown ul a:hover,
        .navbar-mobile .dropdown ul .active:hover,
        .navbar-mobile .dropdown ul li:hover>a {
            color: #47b2e4;
        }

        .navbar-mobile .dropdown>.dropdown-active {
            display: block;
        }

        /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
        #hero {
            width: 100%;
            height: 80vh;
            background: #212A3E;
        }

        #hero .container {
            padding-top: 72px;
        }

        #hero h1 {
            margin: 0 0 10px 0;
            font-size: 48px;
            font-weight: 700;
            line-height: 56px;
            color: #fff;
        }

        #hero h2 {
            color: rgba(255, 255, 255, 0.6);
            margin-bottom: 50px;
            font-size: 24px;
        }

        #hero .btn-get-started {
            font-family: "Jost", sans-serif;
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 10px 28px 11px 28px;
            border-radius: 50px;
            transition: 0.5s;
            margin: 10px 0 0 0;
            color: #fff;
            text-decoration: none;
        }

        #hero .btn-get-started:hover {
            background: #209dd8;
        }

        #hero .btn-watch-video {
            font-size: 16px;
            display: flex;
            align-items: center;
            transition: 0.5s;
            margin: 10px 0 0 25px;
            color: #fff;
            line-height: 1;
            text-decoration: none;
        }

        #hero .btn-watch-video i {
            line-height: 0;
            color: #fff;
            font-size: 32px;
            transition: 0.3s;
            margin-right: 8px;
        }

        #hero .btn-watch-video:hover i {
            color: black;
        }

        #hero .animated {
            animation: up-down 2s ease-in-out infinite alternate-reverse both;
        }

        @media (max-width: 991px) {
            #hero {
                height: 100vh;
                text-align: center;
            }

            #hero .animated {
                animation: none;
            }

            #hero .hero-img {
                text-align: center;
            }

            #hero .hero-img img {
                width: 50%;
            }
        }

        @media (max-width: 768px) {
            #hero h1 {
                font-size: 28px;
                line-height: 36px;
            }

            #hero h2 {
                font-size: 18px;
                line-height: 24px;
                margin-bottom: 30px;
            }

            #hero .hero-img img {
                width: 70%;
            }
        }

        @media (max-width: 575px) {
            #hero .hero-img img {
                width: 80%;
            }

            #hero .btn-get-started {
                font-size: 16px;
                padding: 10px 24px 11px 24px;
            }
        }

        @keyframes up-down {
            0% {
                transform: translateY(10px);
            }

            100% {
                transform: translateY(-10px);
            }
        }

        /* Card */
        /* .container-card {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  grid-column-gap: 25px;
  justify-content: center;
}

.card {
  border-radius: 10px;
  transition: 0.5s;
}

.card .btn {
  display: flex;
  width: 94px;
  max-width: 100%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
  transform: scale(1.1);
}

.card a {
  background: #212A3E;
}

.card a:hover {
  background: #777777;
} */
        .container-card {
            position: relative;
            display: flex;
            justify-content: center;
            gap: 50px;
            flex-wrap: wrap;
        }

        .container-card .card {
            position: relative;
            border: 0px;
        }

        .container-card .card .face {
            width: 300px;
            height: 200px;
            transition: 0.4s;
            border-radius: 10px;
        }

        .container-card .card .face.front {
            position: relative;
            background: #333;
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
            z-index: 1;
            transform: translateY(100px);
        }

        /* .container-card .card:hover .face.front {
  transform: translateY(0);
  box-shadow: inset 0 0 60px whitesmoke, inset 20px 0 80px #f0f,
    inset -20px 0 80px #0ff, inset 20px 0 300px #f0f, inset -20px 0 300px #0ff,
    0 0 50px #fff, -10px 0 80px #f0f, 10px 0 80px #0ff;
}
.container-card .card:nth-child(2):hover .face.front {
  box-shadow: inset 0 0 60px whitesmoke, inset 20px 0 80px rgb(255, 208, 0),
    inset -20px 0 80px rgb(255, 196, 0), inset 20px 0 300px rgb(255, 182, 46),
    inset -20px 0 300px rgb(255, 153, 0), 0 0 50px #0098be,
    -10px 0 80px rgb(255, 174, 0), 10px 0 80px rgb(0, 162, 255);
}
.container-card .card:nth-child(3):hover .face.front {
  box-shadow: inset 0 0 60px whitesmoke, inset 20px 0 80px rgb(63, 41, 16),
    inset -20px 0 80px rgb(26, 11, 2), inset 20px 0 300px rgb(24, 19, 5),
    inset -20px 0 300px rgb(53, 27, 13), 0 0 50px #ffca7f,
    -10px 0 80px rgb(70, 45, 8), 10px 0 80px rgb(51, 40, 32);
} */
        .container-card .card:hover .face.front {
            transform: translateY(0);
            box-shadow: inset 0 0 30px whitesmoke, inset 10px 0 40px #f0f,
                inset -10px 0 40px #0ff, inset 10px 0 150px #f0f, inset -10px 0 150px #0ff,
                0 0 50px #fff, -10px 0 40px #f0f, 10px 0 40px #0ff;
            border-radius: 10px;
        }

        .container-card .card:nth-child(2):hover .face.front {
            box-shadow: inset 0 0 30px whitesmoke, inset 10px 0 40px rgb(255, 208, 0),
                inset -10px 0 40px rgb(255, 196, 0), inset 10px 0 150px rgb(255, 182, 46),
                inset -10px 0 150px rgb(255, 153, 0), 0 0 50px #0098be,
                -10px 0 40px rgb(255, 174, 0), 10px 0 40px rgb(0, 162, 255);
            border-radius: 10px;
        }

        .container-card .card:nth-child(3):hover .face.front {
            box-shadow: inset 0 0 30px whitesmoke, inset 10px 0 40px rgb(63, 41, 16),
                inset -10px 0 40px rgb(26, 11, 2), inset 10px 0 150px rgb(24, 19, 5),
                inset -10px 0 150px rgb(53, 27, 13), 0 0 50px #ffca7f,
                -10px 0 40px rgb(70, 45, 8), 10px 0 40px rgb(51, 40, 32);
            border-radius: 10px;
        }

        .container-card .card .face.front .content {
            width: 100%;
            height: 100%;
            opacity: 0.2;
            transition: 0.5s;
            text-align: center;
        }

        .container-card .card:hover .face.front .content {
            opacity: 1;
        }

        .container-card .card .face.front .content img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            background-size: cover;
            border-radius: 10px;
        }

        .container-card .card .face.front .content i {
            font-size: 3em;
            color: white;
            display: inline-block;
        }

        .container-card .card .face.front .content h3 {
            font-size: 1em;
            color: white;
            text-align: center;
        }

        .container-card .card .face.front .content a {
            transition: 0.5s;
        }

        .container-card .card .face.back {
            position: relative;
            background-color: #ffffff;
            background-image: linear-gradient(160deg, #ffffff 0%, #ffdeff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            box-sizing: border-box;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
                rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
            transform: translateY(-100px);
        }

        .container-card .card:hover .face.back {
            transform: translateY(0);
        }

        .container-card .card .face.back .content p,
        button {
            font-size: 13px;
            margin: 0px 0px 0px 3px;
            padding: 0;
            color: #333;
        }

        .container-card .card .face.back .content button {
            color: #fff;
            border: 1px solid #fff;
            padding: 10px;
            margin: 15px 0 0;
            transition: all 0.3s;
            cursor: pointer;
            font-weight: bold;
            background-color: #333;
            border-radius: 6px;
        }

        .container-card .card .face.back .content button:hover {
            letter-spacing: 1px;
        }

        /*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
        /* section {
  padding: 60px 0px 0px 60px;
  overflow: hidden;
} */

        .contact .info {
            border-top: 3px solid #212A3E;
            border-bottom: 3px solid #212A3E;
            padding: 30px;
            background: #fff;
            width: 100%;
            box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.10);
        }

        .contact .info i {
            font-size: 20px;
            color: #212A3E;
            float: left;
            width: 44px;
            height: 44px;
            background: #e7f5fb;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
        }

        .contact .info h4 {
            padding: 0 0 0 60px;
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 5px;
            color: rgb(33, 37, 41);
            font-weight: bold;
        }

        .contact .info p {
            padding: 0 0 10px 60px;
            margin-bottom: 20px;
            font-size: 14px;
            color: rgb(33, 37, 41);
        }

        .contact .info .social-links {
            padding-left: 60px;
        }

        .contact .info .social-links a {
            font-size: 18px;
            display: inline-block;
            background: #333;
            color: #fff;
            line-height: 1;
            padding: 8px 0;
            border-radius: 50%;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
            margin-right: 10px;
        }

        .contact .info .social-links a:hover {
            background: #212A3E;
            color: #fff;
        }

        .contact .info .email:hover i,
        .contact .info .address:hover i,
        .contact .info .phone:hover i {
            background: #212A3E;
            color: #fff;
        }

        .contact .php-email-form {
            width: 100%;
            border-top: 3px solid #212A3E;
            border-bottom: 3px solid #212A3E;
            padding: 30px;
            background: #fff;
            box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.10);
        }

        .contact .php-email-form .form-group {
            padding-bottom: 8px;
        }

        .contact .php-email-form .validate {
            display: none;
            color: red;
            margin: 0 0 15px 0;
            font-weight: 400;
            font-size: 13px;
        }

        .contact .php-email-form .error-message {
            display: none;
            color: #fff;
            background: #ed3c0d;
            text-align: left;
            padding: 15px;
            font-weight: 600;
        }

        .contact .php-email-form .error-message br+br {
            margin-top: 25px;
        }

        .contact .php-email-form .sent-message {
            display: none;
            color: #fff;
            background: #18d26e;
            text-align: center;
            padding: 15px;
            font-weight: 600;
        }

        .contact .php-email-form .loading {
            display: none;
            background: #fff;
            text-align: center;
            padding: 15px;
        }

        .contact .php-email-form .loading:before {
            content: "";
            display: inline-block;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            margin: 0 10px -6px 0;
            border: 3px solid #18d26e;
            border-top-color: #eee;
            animation: animate-loading 1s linear infinite;
        }

        .contact .php-email-form .form-group {
            margin-bottom: 20px;
        }

        .contact .php-email-form label {
            padding-bottom: 8px;
        }

        .contact .php-email-form input,
        .contact .php-email-form textarea {
            border-radius: 0;
            box-shadow: none;
            font-size: 14px;
            border-radius: 4px;
        }

        .contact .php-email-form input:focus,
        .contact .php-email-form textarea:focus {
            border-color: #212A3E;
        }

        .contact .php-email-form input {
            height: 44px;
        }

        .contact .php-email-form textarea {
            padding: 10px 12px;
        }

        .contact .php-email-form button[type=submit] {
            background: #212A3E;
            border: 0;
            padding: 12px 34px;
            color: #fff;
            transition: 0.4s;
            border-radius: 50px;
        }

        .contact .php-email-form button[type=submit]:hover {
            background: #777777;
            ;
        }

        @keyframes animate-loading {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
        #footer {
            font-size: 14px;
            background: #212A3E;
        }

        #footer .footer-newsletter {
            padding: 50px 0;
            background: #f3f5fa;
            text-align: center;
            font-size: 15px;
            color: #444444;
        }

        #footer .footer-newsletter h4 {
            font-size: 24px;
            margin: 0 0 20px 0;
            padding: 0;
            line-height: 1;
            font-weight: 600;
            color: #212A3E;
        }

        #footer .footer-newsletter form {
            margin-top: 30px;
            background: #fff;
            padding: 6px 10px;
            position: relative;
            border-radius: 50px;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.06);
            text-align: left;
        }

        #footer .footer-newsletter form input[type=email] {
            border: 0;
            padding: 4px 8px;
            width: calc(100% - 100px);
        }

        #footer .footer-newsletter form input[type=submit] {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            border: 0;
            background: none;
            font-size: 16px;
            padding: 0 20px;
            background: #212A3E;
            color: #fff;
            transition: 0.3s;
            border-radius: 50px;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        }

        #footer .footer-newsletter form input[type=submit]:hover {
            background: #209dd8;
        }

        #footer .footer-top {
            padding: 60px 0 30px 0;
            background: #F1F6F9;
        }

        #footer .footer-top .footer-contact {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-contact h3 {
            font-size: 28px;
            margin: 0 0 10px 0;
            line-height: 1;
            /* text-transform: uppercase; */
            font-weight: 600;
            color: #212A3E;
        }

        #footer .footer-top .footer-contact p {
            font-size: 14px;
            line-height: 24px;
            margin-bottom: 0;
            font-family: "Jost", sans-serif;
            color: #5e5e5e;
        }

        #footer .footer-top h4 {
            font-size: 16px;
            font-weight: bold;
            color: #212A3E;
            position: relative;
            padding-bottom: 12px;
        }

        #footer .footer-top .footer-links {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #footer .footer-top .footer-links ul i {
            padding-right: 2px;
            color: #212A3E;
            font-size: 18px;
            line-height: 1;
        }

        #footer .footer-top .footer-links ul li {
            padding: 10px 0;
            display: flex;
            align-items: center;
        }

        #footer .footer-top .footer-links ul li:first-child {
            padding-top: 0;
        }

        #footer .footer-top .footer-links ul a {
            color: #777777;
            transition: 0.3s;
            display: inline-block;
            line-height: 1;
            text-decoration: none;
            line-height: 5px;
        }

        #footer .footer-top .footer-links ul a:hover {
            text-decoration: none;
            color: #212A3E;
        }

        /* #footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #212A3E;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
} */

        #footer .footer-top .social-links a {
            display: inline-block;
            margin-right: 4px;
            transition: 0.3s;
        }

        .social-links img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }


        #footer .footer-bottom {
            padding-top: 30px;
            padding-bottom: 30px;
            color: #fff;
        }

        #footer .copyright {
            float: left;
        }

        #footer .credits {
            float: right;
            font-size: 13px;
        }

        #footer .credits a {
            transition: 0.3s;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            #footer .footer-bottom {
                padding-top: 20px;
                padding-bottom: 20px;
            }

            #footer .copyright,
            #footer .credits {
                text-align: center;
                float: none;
            }

            #footer .credits {
                padding-top: 4px;
            }
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html">SysForce</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#beranda">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#event">Event</a></li>
                    <li><a class="nav-link scrollto" href="#dana">Dana</a></li>
                    <li><a class="nav-link scrollto" href="#riset">Riset</a></li>
                    <li><a class="nav-link scrollto" href="#berita">Berita</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> -->
                    <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
                    <?php
                    if ($this->session->userdata('email')) {
                        if ($user['role'] == 'Admin') {
                            echo '<li><a class="getstarted scrollto" href="' . base_url('Dashboard/') . '">Panel</a></li>';
                        } elseif ($user['role'] == 'Kaprodi') {
                            echo '<li><a class="getstarted scrollto" href="' . base_url('Auth/logout') . '">Logout</a></li>';
                        } else {
                            echo '<li><a class="getstarted scrollto" href="' . base_url('Dashboard/') . '">Panel</a></li>';
                        }
                    } else { ?>
                        <li><a class="getstarted scrollto" href="<?= base_url('Auth/') ?>">Login</a></li>
                    <?php } ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- Slide Shows -->
    <section id="beranda" class="d-flex align-items-center">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="https://cdn.rri.co.id/berita/36/images/1679023085262-WhatsApp_Image_2023-03-16_at_13.53.22/1679023085262-WhatsApp_Image_2023-03-16_at_13.53.22.jpeg" class="d-block w-100" alt="Slide 1" />
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <h1>Sistem Manajemen KBK</h1>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/Foto_Gedung.jpg" class="d-block w-100 img-fluid" alt="Slide 2" />
                    <!-- <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <h1>Sistem Manajemen KBK</h1>
                    </div> -->
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/Foto_Gedung.jpg" class="d-block w-100 img-fluid" alt="Slide 3" />
                    <!-- <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <h1>Sistem Manajemen KBK</h1>
                    </div> -->
                </div>
            </div>
            <!-- Navigation buttons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Akhir Slideshows -->

    <!-- Content -->
    <!-- Hero -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Apasih KBK itu?</h1>
                    <h2>
                        Kurikulum Berbasis Kompetensi adalah suatu pendekatan dalam perancangan kurikulum yang menekankan pengembangan kompetensi atau keterampilan peserta didik sebagai tujuan utama.
                    </h2>
                    <!-- <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div> -->
                </div>
                <!-- <div class="col-xl-5 mt-n5 order-xl-2 pb-3 pt-3" data-aos="zoom-in" data-aos-delay="200">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://app.lottiefiles.com/share/b2044f00-9e35-4dd7-af28-323910d3dc5c" background="transparent" speed="1" loop autoplay></lottie-player>
                </div> -->
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Card -->
    <section id="event" class="game section-bg" style="padding: 60px 0;">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2 style="font-weight: bold;">Event</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est cumque dicta a excepturi, ipsam eligendi aperiam
                    quam necessitatibus suscipit ipsum dolores consectetur facilis accusamus iusto provident odit ducimus, ipsa
                    minus praesentium eius, sapiente molestiae. Ea, tenetur ratione laudantium eveniet maiores et hic excepturi?
                    Minima, culpa. Cum maiores optio quod eos!</p>
            </div>
            <div class="container-card" style="display: flex;">
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-14-at-11.58.46_ac2ac193-480x320.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Kompetensi Expo</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <!-- Tautan "Read More" yang menampilkan modal -->
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModalEvent">Read More</a>

                        <!-- Modal -->
                        <div class="modal fade" id="myModalEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Kompetensi Expo</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Event</th>
                                                    <th scope="col">Tanggal Event</th>
                                                    <th scope="col">Tempat Event</th>
                                                    <th scope="col">Deskripsi Event</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Kompetensi Expo</td>
                                                    <td>15 November 2023</td>
                                                    <td>Rumbay</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ut nulla illo excepturi? Excepturi, debitis ullam assumenda hic amet dolorum delectus perspiciatis vitae cum velit.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-14-at-11.58.03_0f479db0-480x320.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Inovasi KBK Fair</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-12-at-13.36.07-480x320.jpeg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Pameran Prestasi Berbasis Kompetensi</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-10-at-19.53.47-480x320.jpeg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">KBK Talks: Dialog Kompetensi Pendidikan</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-10-at-10.23.22-480x320.jpeg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">KBK Championship: Kejuaraan Keterampilan dan Kompetensi</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-09-at-20.50.32-1-480x320.jpeg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Karnaval KBK: Menciptakan Generasi Unggul</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="dana" class="game section-bg" style="padding: 60px 0;">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2 style="font-weight: bold;">Dana</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est cumque dicta a excepturi, ipsam eligendi aperiam
                    quam necessitatibus suscipit ipsum dolores consectetur facilis accusamus iusto provident odit ducimus, ipsa
                    minus praesentium eius, sapiente molestiae. Ea, tenetur ratione laudantium eveniet maiores et hic excepturi?
                    Minima, culpa. Cum maiores optio quod eos!</p>
            </div>
            <div class="container-card" style="display: flex;">
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-14-at-11.58.46_ac2ac193-480x320.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Dana Inovasi Kompetensi Pendidikan</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <!-- Tautan "Read More" yang menampilkan modal -->
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Read More</a>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Dana Inovasi Kompetensi Pendidikan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Tanggal Dana</th>
                                                    <th scope="col">Deskripsi Dana</th>
                                                    <th scope="col">File Dana</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>15 November 2023</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ut nulla illo excepturi? Excepturi, debitis ullam assumenda hic amet dolorum delectus perspiciatis vitae cum velit.</td>
                                                    <td>File.pdf</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-14-at-11.58.03_0f479db0-480x320.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Dana Pembelajaran Berbasis Kompetensi</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-12-at-13.36.07-480x320.jpeg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Dana Unggulan KBK: Mendukung Pendidikan Berkualitas</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-10-at-19.53.47-480x320.jpeg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Dana Pengembangan Keterampilan dan Kompetensi</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-10-at-10.23.22-480x320.jpeg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Dana KBK Sejahtera: Investasi dalam Pendidikan Unggul</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-09-at-20.50.32-1-480x320.jpeg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Dana Transformasi Kurikulum Berbasis Kompetensi</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="riset" class="game section-bg" style="padding: 60px 0;">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2 style="font-weight: bold;">Riset</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est cumque dicta a excepturi, ipsam eligendi aperiam
                    quam necessitatibus suscipit ipsum dolores consectetur facilis accusamus iusto provident odit ducimus, ipsa
                    minus praesentium eius, sapiente molestiae. Ea, tenetur ratione laudantium eveniet maiores et hic excepturi?
                    Minima, culpa. Cum maiores optio quod eos!</p>
            </div>
            <div class="container-card" style="display: flex;">
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-14-at-11.58.46_ac2ac193-480x320.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Studi Mendalam: Evaluasi Implementasi KBK</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <!-- Tautan "Read More" yang menampilkan modal -->
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModalRiset">Read More</a>

                        <!-- Modal -->
                        <div class="modal fade" id="myModalRiset" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Studi Mendalam: Evaluasi Implementasi KBK</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Tanggal Riset</th>
                                                    <th scope="col">Tempat Riset</th>
                                                    <th scope="col">Deskripsi Riset</th>
                                                    <th scope="col">File Riset</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>15 November 2023</td>
                                                    <td>Rumbay</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ut nulla illo excepturi? Excepturi, debitis ullam assumenda hic amet dolorum delectus perspiciatis vitae cum velit.</td>
                                                    <td>File.pdf</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-14-at-11.58.03_0f479db0-480x320.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Analisis Efektivitas Kurikulum Berbasis Kompetensi</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-12-at-13.36.07-480x320.jpeg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Inovasi Pendidikan: Riset KBK dalam Praktik</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-10-at-19.53.47-480x320.jpeg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Tantangan dan Peluang: Penelitian KBK Terkini</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-10-at-10.23.22-480x320.jpeg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Transformasi Kurikulum: Tinjauan Riset Berbasis Kompetens</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-09-at-20.50.32-1-480x320.jpeg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Peningkatan Kualitas Pendidikan melalui Riset KBK</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="berita" class="game section-bg" style="padding: 60px 0;">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2 style="font-weight: bold;">Berita</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est cumque dicta a excepturi, ipsam eligendi aperiam
                    quam necessitatibus suscipit ipsum dolores consectetur facilis accusamus iusto provident odit ducimus, ipsa
                    minus praesentium eius, sapiente molestiae. Ea, tenetur ratione laudantium eveniet maiores et hic excepturi?
                    Minima, culpa. Cum maiores optio quod eos!</p>
            </div>
            <div class="container-card" style="display: flex;">
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/10/3-1-150x150.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">KBK Insight: Melacak Perkembangan Kurikulum Berbasis Kompetensi</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <!-- Tautan "Read More" yang menampilkan modal -->
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModalBerita">Read More</a>

                        <!-- Modal -->
                        <div class="modal fade" id="myModalBerita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">KBK Insight: Melacak Perkembangan Kurikulum Berbasis Kompetensi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Berita</th>
                                                    <th scope="col">Tanggal Berita</th>
                                                    <th scope="col">Tempat Berita</th>
                                                    <th scope="col">Deskripsi Berita</th>
                                                    <th scope="col">File Berita</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>KBK Insight: Melacak Perkembangan Kurikulum Berbasis Kompetensi</td>
                                                    <td>15 November 2023</td>
                                                    <td>Rumbay</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ut nulla illo excepturi? Excepturi, debitis ullam assumenda hic amet dolorum delectus perspiciatis vitae cum velit.</td>
                                                    <td>File.pdf</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/Untitled-design-2-150x150.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Berita Pendidikan: Terobosan Terbaru dalam Dunia KBK</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-07-at-22.26.45-1-150x150.jpeg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">KBK Update: Transformasi Kurikulum untuk Masa Depan Pendidikan</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/10/WhatsApp-Image-2023-10-30-at-21.46.58-150x150.webp" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Focus Edu: Liputan Khusus tentang Implementasi KBK</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="https://itjen.kemdikbud.go.id/web/wp-content/uploads/2023/10/WhatsApp-Image-2023-10-26-at-09.17.54-150x150.webp" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">KBK Today: Berita Pendidikan Terkini dalam Paradigma Kompetensi</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Card -->

    <!-- Contact -->
    <!-- <section id="contact" class="contact" style="padding: 0px 0px 60px 0px;">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2 style="font-weight: bold;">Contact</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto veritatis praesentium sint necessitatibus,
                    voluptate dolor culpa doloremque quidem corrupti repellendus saepe harum hic exercitationem blanditiis sequi
                    quia maxime, totam modi quae architecto, sunt est consequuntur? Quos quia quisquam totam porro, culpa nisi
                    rem, voluptate architecto vel consectetur laboriosam cumque aspernatur?</p>
            </div>
            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Intisari Street No.6A, Umban Sari Kec. Rumbai, Kota Pekanbaru, Riau 28266</p>
                        </div>
                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>smileyteam@gmail.com</p>
                        </div>
                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>0822-XXXX-XXXX</p>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.622414317215!2d101.4241052746138!3d0.5677886994266675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ab669644b5ed%3A0xe5afad31c4783dfa!2sKost%20Merah!5e0!3m2!1sid!2sid!4v1683562069038!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px; border-radius: 10px;" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Contact Section -->
    <!-- Akhir Content -->

    <!-- Footer -->
    <footer id="footer">
        <!-- <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Smiley Team</h3>
                        <p>
                            Intisari Street No.6A, Umban Sari<br />
                            Kec. Rumbai, Kota Pekanbaru<br />
                            Riau 28266<br /><br />
                            <strong>Phone:</strong>
                            082268038080<br />
                            <strong>Email:</strong>
                            impnadtynnda03@gmail.com
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links" style="justify-content: flex-end;">
                        <h4>Our Social Networks</h4>
                        <p>
                            Cras fermentum odio eu feugiat lide par naso tierra videa magna
                            derita valies
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://www.facebook.com/impnadtynnda03" target="_blank"><img src="image/facebook.png" alt="facebook"></a>
                            <a href="https://instagram.com/impian.an" target="_blank"><img src="image/instagram.png" alt="instagram"></a>
                            <a href="#" target="_blank"><img src="image/telegram.png" alt="telegram"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright
                <strong><span>Smiley Team</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by
                <a href="iPortfolio/index.html" target="_blank">Smiley Team</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>