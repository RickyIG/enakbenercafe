<?php
require_once '../data.php';
require_once '../staff.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">
    <link rel="stylesheet" type="text/css" href="../css/about_stylesheet.css">
    <link rel="stylesheet" type="text/css" href="../css/fontawesome.min.css">
    <link rel="icon" type="image/png" href="../images/favicon.png" />
    <title>About Us</title>
</head>


<body id="page-top">
<header>
    <div id="top-header" style="background-color: #001C40">
        <h2>EnakBenerCafe</h2>
        <div id="menu" onclick="showMenu();">
            <img src="../images/icon_menu.svg">
        </div>
        <nav id="drop_menu">
            <ul>
                <li><a href="../index.php" onclick="showMenu();">Home</a></li>
                <li><a href="#" onclick="showMenu();">About</a></li>
                <li><a href="../order/order.php" onclick="showMenu();">Order</a></li>
                <li><a href="../products/products.php" onclick="showMenu();">Products</a></li>
                <li><a href="../contact.php" onclick="showMenu();">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<main style="margin-top: 90px">
    <div class="about-section">
        <h1>About Us</h1>
        <p>Enak Bener Cafe merupakan cafe yang didirikan pada tanggal 1 September 2020.</p>
        <p>Didirikan di Tasikmalaya, Jawa Barat, Indonesia.</p>
    </div>
    <h2 style="text-align:center; margin-top: 25px">Staff List</h2>
    <?php $staff1->cetakStaff();?>

</main>
<!--<main style="margin-top: 90px">-->
<!--    <div class="about-section">-->
<!--        <h1>About Us</h1>-->
<!--        <p>Enak Bener Cafe merupakan cafe yang didirikan pada tanggal 1 September 2020.</p>-->
<!--        <p>Didirikan di Tasikmalaya, Jawa Barat, Indonesia.</p>-->
<!--    </div>-->
<!---->
<!--    <h2 style="text-align:center; margin-top: 25px">Founder</h2>-->
<!--    <div class="row">-->
<!--        <div class="column">-->
<!--            <div class="card d-flex justify-content-center">-->
<!--                <img src="../images/camera.png" alt="Ricky" style="width:100%">-->
<!--                <div class="container">-->
<!--                    <h2>Ricky</h2>-->
<!--                    <p class="title">CEO & Founder</p>-->
<!--                    <p>"All you need is a notepad and the world become your canvas"</p>-->
<!--                    <p>197006029@student.unsil.ac.id</p>-->
<!--                    <p><a href="../contact.php"><button class="button">Contact</button></a></p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</main>-->


<footer>
    <div class="container">
        <img class="logo" src="../images/logo.png">
        <p>EnakBenerCafe &#169; 2020</p>
        <p>Good Food, Good Mood</p>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../js/all-function.js"></script>
<script src="../OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
<script src="../OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
<script>
    $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        nav: false,
        dots: true,
        autoplayTimeout: 3500, //4000ms = 4s;
        autoplayHoverPause: true,
        margin: 100,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });</script>
</body>
</html>