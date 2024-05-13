<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'></script>
    <link rel='stylesheet' type='text/css' href='https://www.x3dom.org/download/x3dom.css'>
    </link>
    <link rel="stylesheet" href="/~ka530/3dapp/assignment/css/bootstrap.css" />

    <style>
        @font-face {
            font-family: cocaColaFont;
            src: url(/~ka530/3dapp/assignment/assets/fonts/loki_cola/LOKICOLA.TTF);
        }

        @font-face {
            font-family: aboutheader;
            src: url(/~ka530/3dapp/assignment/assets/fonts/Lilita_One/Play/Play-Bold.ttf);
        }

        .header {
            font-family: aboutheader;
        }

        nav {
            width: 100%;
            height: 80px;
        }

        nav.navbar {
            background-color: #e3f2fd;

            color: #800000;

        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #800000 !important;

        }

        .logo h1 {
            font-family: cocaColaFont;

            font-size: 60px;
            margin: 0;
            margin-top: -10px;
            margin-bottom: -15px;
            float: left;
            padding-top: 0px;
            padding-left: 0px;
            padding-right: 2px;
        }

        .logo h2 {
            font-family: cocaColaFont;
            font-size: 40px;
            margin-top: -6px;
            margin-bottom: -15px;
            padding-top: 0px;
            padding-left: 0px;
            padding-right: 3px;
            float: left;
        }

        .logo h3 {
            font-size: 20px;
            margin-top: 0px;
            margin-bottom: -5px;
            padding-top: 10px;
            padding-left: 0px;
            float: left;
        }

        .logo p {
            font-size: 14px;

            margin-top: 22px;

            margin-bottom: 0px;
            padding-top: 0px;
            padding-left: 7px;
        }

        #aboutpage {
            padding-top: 50px !important;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="logo">
                <a class="navbar-brand" href="#">
                    <h1 class="logo-h1">C</h1>
                    <h1 class="logo-h2">oca</h1>
                    <h1 class="logo-h1">C</h1>
                    <h2 class="logo-h2">ola</h2>
                    <h3>Journey</h3>
                    <p>Refreshing the world, one story at a time</p>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                <div></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/~ka530/3dapp/assignment/index.php/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/~ka530/3dapp/assignment/index.php/about">About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/~ka530/3dapp/assignment/index.php/drinks">
                            Drinks
                        </a>
                </ul>
            </div>
        </div>
    </nav>
</body>
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <h1>About Us</h1>
            <p>Welcome to our website. We are excited to share our journey with you. Find out more about our mission, our team, and what drives us.</p>
            <p>On May 8, 1886, Dr. John Pemberton served the world’s first Coca‑Cola at Jacobs' Pharmacy in Atlanta, Ga. From that one iconic drink, we’ve evolved into a total beverage company.

                More than 2.1 billion servings of our drinks are enjoyed in more than 200 countries and territories each day. And it’s the 700,000 individuals employed by The Coca‑Cola Company and 225+ bottling partners that help to deliver refreshment across the globe.</p>
            <p>For more than 135 years, the Coca‑Cola Company has been a part of people’s lives at holidays, special events, and everyday occasions. From our iconic brands and advertising to our sustainability initiatives around the world, the Coca‑Cola company aims to refresh the world while making a difference.</p>
        </div>
        <div class="col-md-6">
            <img src="/~ka530/3dapp/assignment/assets/images/about2.jpg" alt="About Us" class="img-fluid">
        </div>
    </div>
</div>

</html>