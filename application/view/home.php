<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-
    to-fit=no" />
  <link rel="stylesheet" href="/~ka530/3dapp/assignment/css/styles.css">
  <link rel="stylesheet" href="/~ka530/3dapp/assignment/css/bootstrap.css" />
  <title>My Coca Cola Brand</title>
  <script type='text/javascript' src='https://www.x3dom.org/release/x3dom.js'></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Navbar -->

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
            <a class="nav-link active" href="/~ka530/3dapp/assignment/index.php/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/~ka530/3dapp/assignment/index.php/about">About</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/~ka530/3dapp/assignment/index.php/drinks">
              Drinks
            </a>
        </ul>
      </div>
    </div>
  </nav>
  <!-- carousel-->

  <!-- Carousel -->
  <div class="d-flex justify-content-center" id="carou">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 75%; margin: 20 auto; border-radius: 20px;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/~ka530/3dapp/assignment/assets/images/carousel1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="/~ka530/3dapp/assignment/assets/images/carousel2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="/~ka530/3dapp/assignment/assets/images/carousel3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>



  <div class="p-4 d-flex justify-content-center">
    <div class="typing-demo mb-4">
      Summer With Coca Cola.
    </div>
  </div>
  <div class="wrapper">
    <img src="/~ka530/3dapp/assignment/assets/images/cola.gif" width="400" height="400" />
  </div>

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4">
        <div class="card" style="background-color:#f4decb">
          <img src="/~ka530/3dapp/assignment/assets/images/Cola.jpg" class="card-img-top" alt="Coca-Cola Model" data-original="/~ka530/3dapp/assignment/assets/images/Cola.jpg">
          <div class="card-body">
            <h5 class="card-title"><?php echo $data[0]['modelTitle'] ?></h5>
            <p class="card-text"><?php echo $data[0]['modelDescription'] ?></p>
            <button class="btn btn-primary see-model" data-img="/~ka530/3dapp/assignment/assets/images/cokemodel.jpg">See Model</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="background-color:#f4decb">
          <img src="/~ka530/3dapp/assignment/assets/images/Fanta.jpg" class="card-img-top" alt="Fanta Model">
          <div class="card-body">
            <h5 class="card-title"><?php echo $data[2]['modelTitle'] ?></h5>
            <p class="card-text"><?php echo $data[2]['modelDescription'] ?></p>
            <button class="btn btn-primary see-model" data-img="/~ka530/3dapp/assignment/assets/images/fantamodel.jpg">See model</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="background-color:#f4decb">
          <img src=" /~ka530/3dapp/assignment/assets/images/pepper.jpg" class="card-img-top" alt="Dr. Pepper Model">
          <div class="card-body">
            <h5 class="card-title"><?php echo $data[1]['modelTitle'] ?></h5>
            <p class="card-text"><?php echo $data[1]['modelDescription'] ?></p>
            <button class="btn btn-primary see-model" data-img="/~ka530/3dapp/assignment/assets/images/peppermodel.jpg">See Model</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal structure -->
  <div id="modelModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
  </div>



  <!--footer -->
  <div class="container">
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
    document.addEventListener("DOMContentLoaded", function() {
      const buttons = document.querySelectorAll(".see-model");

      buttons.forEach((button) => {
        button.addEventListener('click', function() {
          const card = this.closest(".card");
          const img = card.querySelector(".card-img-top");
          const originalSrc = img.getAttribute('data-original'); // Retrieve original image source
          const modelSrc = this.getAttribute("data-img"); // Model image source

          img.src = (img.src.includes(modelSrc)) ? originalSrc : modelSrc; // Toggle between original and model image
        });
      });
    });
  </script>
  </script>



  <script src="/~ka530/3dapp/assignment/js/bootstrap.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>





<style>
  @font-face {
    font-family: cocaColaFont;
    src: url(/~ka530/3dapp/assignment/assets/fonts/loki_cola/LOKICOLA.TTF);
  }

  .play-regular {
    font-family: "Play", sans-serif;
    font-weight: 400;
    font-style: normal;
  }

  .play-bold {
    font-family: "Play", sans-serif;
    font-weight: 700;
    font-style: normal;
  }


  body {
    background-color: #eee;
    background-image: url("/~ka530/3dapp/assignment/assets/images/vintage.jpg");
  }

  nav {
    width: 100%;
  }

  nav.navbar {
    background-color: #e3f2fd;

    color: #800000;

  }

  .navbar-brand,
  .navbar-nav .nav-link {
    color: #800000 !important;

  }

  .navbar-brand,
  a {
    font-family: Play;
  }

  .carousel-item {
    height: 700px;
    padding-top: 10px !important;

    background: #000 center center;

    background-size: cover;

  }

  #carou {
    padding-top: 20px !important;
    border-radius: 20px !important;
  }

  .carousel-item img {
    height: 100%;
    object-fit: cover;
    /* Ensures the image covers the item without distorting */
    width: 100%;
  }

  #carouselExampleIndicators {
    margin-bottom: 50px;
    /* Increase space under the carousel */
  }

  @media (max-width: 768px) {
    #carouselExampleIndicators {
      width: 100%;
      margin-bottom: 30px;
      /* Adjusted for smaller screens */
    }
  }


  .carousel-indicators [data-bs-target] {
    border-radius: 100%;
    height: 30px;
  }

  .wrapper {
    height: 50vh;

    display: grid;
    place-items: center;
  }

  .typing-demo {
    width: 22ch;
    animation: typing 2s steps(22), blink .5s step-end infinite alternate;
    white-space: nowrap;
    overflow: hidden;
    border-right: 3px solid;
    font-family: monospace;
    font-size: 2em;
  }

  @keyframes typing {
    from {
      width: 0
    }
  }

  @keyframes blink {
    50% {
      border-color: transparent
    }
  }

  /* Style the modal (background) */

  .card-img-top {
    transition: transform 0.5s ease;
    background-color: #f4decb;
    /* Smooth transform */
  }

  .card:hover .card-img-top {
    transform: scale(1.1);
    /* Slight zoom on hover */
  }

  logo {
    margin-top: 3px;
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
</style>

</html>