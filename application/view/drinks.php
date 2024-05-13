<!DOCTYPE html>
<html>

<head>
    <title>3D Model Viewer</title>
    <script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'></script>
    <link rel='stylesheet' type='text/css' href='https://www.x3dom.org/download/x3dom.css'>
    </link>
    <link rel="stylesheet" href="/~ka530/3dapp/assignment/css/bootstrap.css" />
    <style>
        @font-face {
            font-family: cocaColaFont;
            src: url(/~ka530/3dapp/assignment/assets/fonts/loki_cola/LOKICOLA.TTF);
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

        body,
        html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background-color: #f0f0f0;

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
            /* Maroon red text */
        }

        .container-fluid {
            flex-wrap: nowrap;

        }

        .flex-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .model-container,
        .control-panel {
            flex: 1;
            padding: 20px;
            background-color: #ffffff;

            border: 1px solid #ccc;

            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }

        .model-selection button {
            padding: 10px;
            margin: 0 5px;
            background-color: #f0f0f0;
            border: none;
            cursor: pointer;
        }

        .model-selection button.active {
            background-color: #007BFF;
            color: white;
        }

        .card {
            margin: 10px;
            border: 1px solid #ccc;
            padding: 15px;
            background-color: #ffffff;

        }

        .btn {
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            margin: 5px;
            border-radius: 5px;
        }

        .Wire {
            max-width: 100%;
            height: auto;
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
            <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown"> <!-- Added justify-content-between -->
                <div></div> <!-- Empty div for flex alignment -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/~ka530/3dapp/assignment/index.php/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/~ka530/3dapp/assignment/index.php/about">About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="/~ka530/3dapp/assignment/index.php/drinks">
                            Drinks
                        </a>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row">
            <div class="model-container col">
                <div class="model-selection">
                    <button onclick="switchModel(0)" class="active">Coke</button>
                    <button onclick="switchModel(1)">Pepper</button>
                    <button onclick="switchModel(2)">Fanta</button>
                    <button onclick="switchModel(3)">Fanta Blue</button>
                </div>
                <x3d id="x3dModelCoke" width='500px' height='400px' class="Wire">
                    <scene>
                        <transform>
                            <inline nameSpaceName="x3dModelCoke" mapDEFToID="true" url="../assets/models/coke.x3d"></inline>
                        </transform>
                    </scene>
                </x3d>

                <x3d id="x3dModelPepper" width='500px' height='400px' class="Wire" style="display:none;">
                    <scene>
                        <transform>
                            <inline nameSpaceName="x3dModelPepper" mapDEFToID="true" url="../assets/models/pepper.x3d"></inline>
                        </transform>
                    </scene>
                </x3d>

                <x3d id="x3dModelFanta" width='500px' height='400px' class="Wire" style="display:none;">
                    <scene>
                        <transform>
                            <inline nameSpaceName="x3dModelFanta" mapDEFToID="true" url="../assets/models/fanta.x3d"></inline>
                        </transform>
                    </scene>
                </x3d>

                <x3d id="x3dModelFantaBlue" width='500px' height='400px' class="Wire" style="display:none;">
                    <scene>
                        <transform>
                            <inline nameSpaceName="x3dModelFantaBlue" mapDEFToID="true" url="../assets/models/fantablue.x3d"></inline>
                        </transform>
                    </scene>
                </x3d>
            </div>
            <div class="control-panel col mr-4">
                <div class="card">
                    <div class="card-header">Camera Views</div>
                    <div class="card-body">
                        <a href="#" class="btn" onclick="cameraFront()">Front</a>
                        <a href="#" class="btn" onclick="cameraBack()">Left</a>
                        <a href="#" class="btn" onclick="cameraTop()">Top</a>
                    </div>
                </div>
                <!-- Additional buttons for animation and light controls -->
                <div class="card">
                    <div class="card-header">Lighting & Wireframe</div>
                    <div class="card-body">
                        <a href="#" class="btn" onclick="toggleWireFrame()">Wireframe</a>
                        <a href="#" class="btn" onclick="light1()">Light 1</a>
                        <a href="#" class="btn" onclick="light2()">Light 2</a>
                        <a href="#" class="btn" onclick="light3()">Light 3</a>
                        <a href="#" class="btn" onclick="turnOffAllLights()">Turn off all lights</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Animate</div>
                    <div class="card-body">
                        <a href="#" class="btn" onclick="spin()">Animate</a>
                        <a href="#" class="btn" onclick="stopAnimation()">Stop</a>
                    </div>
                </div>
                <audio controls autoplay muted>

                    <source src="/~ka530/3dapp/assignment/assets/images/canopning.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row control-panel">
            <div class="col">
                <img id="drinkImage" src="/~ka530/3dapp/assignment/assets/images/Cola.jpg" />
            </div>
            <div class="col d-flex justify-content-center align-items-center" style="display: flex; justify-content: center; align-items:center;">
                <?php for ($i = 0; $i < count($data); $i++) { ?>
                    <div id="details<?php echo $i + 1; ?>" style="display:none">
                        <h2><?php echo $data[$i]['x3dModelTitle'] ?></h2>
                        <p><?php echo $data[$i]['modelDescription'] ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="container mt-4">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2 text-body-secondary">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2 text-body-secondary">About</a>
                    </li>
                </ul>
                <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
            </footer>
        </div>



        <script>
            // Update image source based on the model selected
            const drinkImages = {
                0: '/~ka530/3dapp/assignment/assets/images/Cola.jpg',
                1: '/~ka530/3dapp/assignment/assets/images/pepper.jpg',
                2: '/~ka530/3dapp/assignment/assets/images/Fanta.jpg',
                3: '/~ka530/3dapp/assignment/assets/images/Fanta.jpg'
            };
            const buttons = document.querySelectorAll('.model-selection button');
            buttons.forEach((btn, index) => {
                btn.addEventListener('click', function() {
                    document.getElementById('drinkImage').src = drinkImages[index];
                    buttons.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        </script>
        <script src="/~ka530/3dapp/assignment/js/modelinteractions.js"></script>
</body>

</html>