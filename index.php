<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="https://grinta-academy.nl/wp-content/uploads/2023/12/Asselogo-gritna-2.png" alt="">
        </div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul class="nav-bar-list">
                <li class="nav-bar-list-item">
                    <a href="" class="nav-bar-list-item-a active">
                        Home
                    </a>
                </li>
                <li class="nav-bar-list-item">
                    <a href="" class="nav-bar-list-item-a">
                        Home
                    </a>
                </li>
                <li class="nav-bar-list-item">
                    <a href="" class="nav-bar-list-item-a">
                        Home
                    </a>
                </li>
                <li class="nav-bar-list-item">
                    <a href="" class="nav-bar-list-item-a">
                        Home
                    </a>
                </li>
            </ul>
        </nav>
    </header>
</body>
<style>
    * {
        margin: 0;
        padding: 0;
        list-style: none;
        text-decoration: none;
        box-sizing: border-box;
    }

    header {
        width: 100%;
        height: 80px;
        background: #11101b;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 100px;
        font-family: sans-serif;
    }

    .logo>img {
        width: 5%;
    }

    .hamburger {
        display: none;
    }

    .nav-bar ul {
        display: flex;
    }

    .nav-bar ul li a {
        display: block;
        color: #fff;
        font-size: 1rem;
        padding: 10px 25px;
        border-radius: 50px;
        transition: 0.2s;
        margin: 0 5px;
    }

    .nav-bar ul li a:hover {
        color: #11101b;
        background: #fff;
    }

    .nav-bar ul li a.active {
        color: #11101b;
        background: #fff;
    }

    @media only screen and (max-width: 1320px) {
        header {
            padding: 0 50px;
        }
    }

    @media only screen and (max-width: 1100px) {
        header {
            padding: 0 30px;
        }
    }

    @media only screen and (max-width: 900px) {
        .hamburger {
            display: block;
            cursor: pointer;
        }

        .hamburger .line {
            width: 30px;
            height: 3px;
            background: #fff;
            margin: 6px 0;
        }

        .nav-bar {
            height: 0;
            position: absolute;
            top: 80px;
            left: 0;
            right: 0;
            width: 100vw;
            background: #11101b;
            transition: 0.2s;
            overflow: hidden;
        }

        .nav-bar.active {
            height: 450px;
        }

        .nav-bar ul {
            display: block;
            width: fit-content;
            margin: 80px auto 0 auto;
            text-align: center;
            transition: 0.5s;
            opacity: 0;
        }

        .nav-bar.active ul {
            opacity: 1;
        }

        .nav-bar ul li a {
            margin-bottom: 12px;
        }
    }
</style>
<script>
    hamburger = document.querySelector(".hamburger");
    hamburger.onclick = function() {
        navBar = document.querySelector(".nav-bar");
        navBar.classList.toggle("active");

    }
</script>

</html>


<header>
    <div class="logo">
        <img src="https://grinta-academy.nl/wp-content/uploads/2023/12/logo-gritna-1.png" alt="">
    </div>
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <nav class="nav-bar">
        <ul class="nav-bar-list">
            <?php
            $menu_name = 'Main Menu';
            $menu_items = wp_get_nav_menu_items($menu_name) ?: [];

            var_dump($menu_items); // Use this for debugging

            // Loop through each menu item
            foreach ($menu_items as $menu_item) {
                // Check if the current menu item is the active page
                $active_class = (is_page($menu_item->object_id)) ? 'active' : '';

                // Output the menu item
                echo '<li class="nav-bar-list-item">';
                echo '<a href="' . esc_url($menu_item->url) . '" class="nav-bar-list-item-a ' . $active_class . '">';
                echo esc_html($menu_item->title);
                echo '</a>';
                echo '</li>';
            }
            ?>


        </ul>
    </nav>
</header>
<script>
    hamburger = document.querySelector(".hamburger");
    hamburger.onclick = function() {
        navBar = document.querySelector(".nav-bar");
        navBar.classList.toggle("active");

    }
</script>