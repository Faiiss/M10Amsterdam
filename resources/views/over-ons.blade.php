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
@include('header')
    <section class="overons_amsterdam">
        <div class="overons_text">
            <h2>Over ons</h2>
            <p>Stap binnen in onze wereld van projecten die de kloppende hartslag van Amsterdam weerspiegelen. Elk
                project is een symfonie van innovatie en doordachte ontwikkeling, waarbij we streven naar een blijvende
                impact op de stad. Van eigentijdse architectuur tot levendige ontmoetingsplekken; onze projecten ademen
                leven in de stedelijke dynamiek. Verken met ons de horizon van mogelijkheden en ontdek hoe wij bijdragen
                aan de voortdurende transformatie van Amsterdam.</p>
        </div>
        <div class="overons_img">
            <img src="/images/Beeldmateriaal/Verhalenhuis Nieuw-West Osdorpplein/MRP_Osdorpplein_LR-0005.jpg" alt="">
        </div>
    </section>
    <section class="info_amsterdam-2">
        <div class="info_text-2">
            <p>

                Welkom in onze wereld van projecten, waar het kloppende hart van Amsterdam tot leven komt. Elk project is een meesterwerk van innovatie en doordachte ontwikkeling, doordrenkt met de ambitie om een blijvende impact op de stad te creëren. Van eigentijdse architecturale hoogstandjes tot levendige ontmoetingsplekken; onze projecten ademen leven in de stedelijke dynamiek.
                <br><br>
                Bij ons gaat het niet alleen om het bouwen van structuren, maar om het vormgeven van de toekomst van Amsterdam. We streven ernaar om meer te zijn dan alleen bouwers; we zijn de makers van verandering, de visionairs van stedelijke transformatie. Onze projecten vormen de horizon van mogelijkheden, en wij nodigen je uit om met ons mee te gaan op deze ontdekkingsreis.
                <br><br>
                Ontdek hoe wij bijdragen aan de voortdurende transformatie van Amsterdam, het weefsel van de stad versterken en een erfenis van duurzame ontwikkeling achterlaten. Stap binnen en leer ons kennen, want bij Heddes gaat het niet alleen om gebouwen, maar om het creëren van een betere, levendigere toekomst voor onze geliefde stad.
            </p>

        </div>
    </section>
    @include('footer')
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

</body>

</html>