<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hotel Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400;500;600;700;800;900&display=swap');

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

html,
body {
  font-family: 'Roboto Slab', serif;
  scroll-behavior: smooth;
}

li {
  list-style: none;
}

a {
  text-decoration: none;
}

.container {
  max-width: 80%;
  margin: auto;
}

.head_container {
  max-width: 90%;
  margin: auto;
}

/*--------------header--------*/
header {
  height: 8vh;
}

.logo img {
  width: 120px;
}

header nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 20px;
}

.hambuger {
  display: none;
}

.bar {
  display: block;
  width: 25px;
  height: 3px;
  margin: 5px auto;
  transition: all 0.3s ease-in-out;
  background-color: #fff;
}

header ul {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

header ul li {
  margin-left: 3rem;
}

header ul li a {
  font-size: 1.2rem;
  font-weight: 400;
  color: white;
  transition: 0.5s;
}

header ul li a:hover {
  color: #C1B086;
}

@media only screen and (max-width: 768px) {
  header ul {
    display: block;
    position: fixed;
    left: -100%;
    top: 5rem;
    flex-direction: column;
    background-color: #fff;
    width: 100%;
    border-radius: 10px;
    text-align: center;
    transition: 0.5s;
    box-shadow: 0 10px 27px rgba(0, 0, 0, 0.05);
    z-index: 20;
  }

  header ul.active {
    left: 0%;
  }

  header ul li {
    margin: 2.5rem 0;
  }

  header ul li a {
    color: black;
  }

  .hambuger {
    display: block;
    cursor: pointer;
  }

  .hambuger.active .bar:nth-child(2) {
    opacity: 0;
  }

  .hambuger.active .bar:nth-child(1) {
    transform: translateY(8px) rotate(45deg);
  }

  .hambuger.active .bar:nth-child(3) {
    transform: translateY(-8px) rotate(-45deg);
  }
}

/*--------------header--------*/
/*--------------home--------*/
.home .image img {
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  width: 100%;
  height: 100%;
}

.home .text {
  max-width: 50%;
  color: white;
  margin: 20% 0 0 10%;
}

.home h1 {
  font-size: 80px;
  font-weight: 400;
}

.home p {
  font-weight: 400;
  line-height: 25px;
  font-family: sans-serif;
  font-size: 17px;
  margin: 50px 0 0 50px;
}



.home .image_item {
  position: absolute;
  top: 20%;
  right: 20%;
  display: flex;
  flex-direction: column;
  cursor: pointer;
}

.home .image_item img {
  width: 140px;
  height: 94px;
  margin: 10px;
  transition: 0.5s;
}

.home .image_item img.active {
  border: 2px solid white;
}

.home .box .text {
  position: relative;
}

.home .box .text::after {
  position: absolute;
  font-size: 500px;
  top: -120%;
  font-weight: bold;
  opacity: 0.1;
}

  </style>
</head>

<body>
  <header class="header" id="navigation-menu">
    <div class="container">
      <nav>
        <a href="#" class="logo"> <img src="" alt=""> </a>

        <ul class="nav-menu">
          <li> <a href="{{route('register')}}" class="nav-link">Registro</a> </li>
          <li> <a href="{{route('login')}}" class="nav-link">Login</a> </li>
        </ul>

        <div class="hambuger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <nav>
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="login">Login</a></li>
                <li><a href="rooms">Rooms</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
                <li><a href="register">Register</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="content">
                <!-- Galeria de Imagens -->
                <section class="py-16">
            <div class="container mx-auto">
                <h2 class="text-3xl font-semibold text-center text-secondary mb-8">Nossas Instalações</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Adicione imagens da galeria aqui -->
                    <div class="bg-cover bg-center h-96 rounded-lg"
                        style="background-image: url('{{ asset('img/classic.jpg') }}');"></div>
                    <div class="bg-cover bg-center h-96 rounded-lg"
                        style="background-image: url('{{ asset('img/double.png') }}');"></div>
                    <div class="bg-cover bg-center h-96 rounded-lg"
                        style="background-image: url('{{ asset('img/superior.jpg') }}');"></div>
                </div>
            </div>
        </section>    </section>
    
    <footer class="sticky-footer bg-green">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © ESC - Hotel</span>
            </div>
        </div>
    </footer>
</body>

</html>
