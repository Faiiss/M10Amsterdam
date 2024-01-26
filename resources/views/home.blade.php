<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Ontdek de bruisende stad Amsterdam via de officiële website van Gemeente Amsterdam. Leer over stadsontwikkeling, maatschappelijke voorzieningen en actuele projecten. Samen bouwen we aan een duurzame en levendige toekomst voor Amsterdam.">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="{{ asset('hamburgers-master/dist/hamburgers.css') }}">


  @vite('resources/css/app.css')

  <link rel="icon" href="/images/gemeente-amsterdam-favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-IwbVTUk26pbuFRiO8jFVTSRYlCqV+Lr9RtvzMof9fJz2jsMfh6MtJy6mE6S5b/y3eUw8Ji5R9Ksx5R6/47tjtg==" crossorigin="anonymous" />
  <title>Gemeente Amsterdam</title>
</head>

<body>
  <header>
    <div class="menu">
      <button class="hamburger hamburger--spin" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
      <ul class="menu-items">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('project') }}">Projecten</a></li>
        <li><a href="{{ route('over-ons') }}">Over ons</a></li>
      </ul>
    </div>
    <div class="logo">
      <img src="/images/Logo_of_Gemeente_Amsterdam.svg" alt="Gemeente Amsterdam Logo">
    </div>

    <div class="search">
      <button class="search-icon">
        <i class="fa-solid fa-magnifying-glass"></i>
      </button>
      <input type="text" placeholder="Search">
      <div class="contact-button">Contact</div>
    </div>

  </header>
  <ul class="menu-items-mobile">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('project') }}">Projecten</a></li>
    <li><a href="{{ route('over-ons') }}">Over ons</a></li>
  </ul>
  <section class="slideshow-container">
    <div class="slider">
      <div class="slide">
        <img src="/images/Beeldmateriaal/Amsterdam Museum/Foto 1.jpg" alt="Foto van Amsterdam Museum">
        <div class="text"><a href="{{ route('project') }}">Amsterdam Museum</a></div>
      </div>
      <div class="slide">
        <img src="/images/Beeldmateriaal/Basisschool de Wereldburger/Foto 1.jpg" alt="Foto van Basisschool de Wereldburger ">
        <div class="text"><a href="{{ route('project') }}">Basisschool de Wereldburger</a></div>
      </div>
      <div class="slide">
        <img src="/images/Beeldmateriaal/Sportpark Goed Genoeg & AFC/Foto 1.jpg" alt="Foto van Sportpark Goed Genoeg & AFC">
        <div class="text"><a href="{{ route('project') }}">Sportpark Goed Genoeg & AFC</a></div>
      </div>
    </div>
  </section>
  <section class="info_amsterdam-2">
    <div class="info_text-2">
      <h2>Gemotiveerd door technologie bouwen wij vooraanstaande constructies. <br> Samen met en voor mensen.</h2>
      <p>Bij BMV Amsterdam streven we naar gezamenlijke successen door middel van innovatieve, toonaangevende projecten. Onze kernwaarden – deskundigheid, creativiteit en betrouwbaarheid – vormen de basis van ons werk.

        Heddes geeft ruimte aan individuen. Met een integrale aanpak benutten we onze expertise en creativiteit vanaf de prille beginfase van projecten. Jouw kennis en ervaring zijn welkom in ons team; bij Heddes krijg je de vrijheid om bij te dragen. Onze strak georganiseerde aanpak met korte communicatielijnen en dynamiek biedt ruimte voor persoonlijke ontwikkeling. Innovatieve ideeën worden gestimuleerd en samen brengen we ze tot bloei. Werken bij Heddes is als een ontdekkingsreis met waardevolle inzichten over jezelf, het bedrijf en de wereld om ons heen.</p>

    </div>
  </section>
  <section class="info_amsterdam">
    <div class="info_text">
      <h2>Over ons</h2>
      <p>BMV, binnen de gemeente Amsterdam, leidt de ontwikkeling van maatschappelijke voorzieningen. Met een integrale
        aanpak en diverse disciplines, waaronder bouw- en projectmanagement, faciliteert BMV de groei van de stad. Het
        beleid, verankerd in 'Referentienormen', focust op maatschappelijk vastgoed en ruimte voor sport, spel, kunst en
        cultuur. Het team van BMV, innovatief en dynamisch, beheert en realiseert projecten met betrokkenheid en
        expertise, waardoor Amsterdam blijft evolueren. Bezoek de 'Projecten' pagina voor recente bijdragen en
        betrokkenheid van BMV.</p>
      <button class="info-button">
        <a href="{{ route('over-ons') }}">Meer...</a>
      </button>
    </div>
    <div class="info_img">
      <img src="/images/Beeldmateriaal/AICS/Nieuwbouw Amsterdam International Community School Buitenveldert.jpg" alt="">
    </div>
  </section>

  <script>
    // Look for .hamburger
    var hamburger = document.querySelector(".hamburger");
    // Look for .menu-items
    var menuItems = document.querySelector(".menu-items-mobile");

    // On click
    hamburger.addEventListener("click", function() {
      // Toggle class "is-active" on hamburger
      hamburger.classList.toggle("is-active");
      // Toggle class "show-menu" on menu items
      menuItems.classList.toggle("show-menu");
    });
  </script>
  @vite('resources/js/app.js')

  </script>
  <footer>
    <img src="/images/Logo_of_Gemeente_Amsterdam.svg" alt="Logo van Gemeente Amsterdam" class="footer-logo">
    <p>&copy; 2024 Gemeente Amsterdam.</p>
    <p>Designed by <a href="https://yourwebsite.com" target="_blank"> Faiss Designs</a></p>

    <!-- Social Media Icons -->
    <div class="social-icons">
      <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
      <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
      <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
  </footer>


  <!-- Scroll-to-top button -->
  <button id="scroll-to-top" onclick="scrollToTop()">↑</button>

  <script>
    // Function to scroll to the top of the page
    function scrollToTop() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
    }

    // Show/hide scroll-to-top button based on scroll position
    window.onscroll = function() {
      var scrollButton = document.getElementById('scroll-to-top');
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollButton.style.display = 'block';
      } else {
        scrollButton.style.display = 'none';
      }
    };
  </script>
</body>

</html>