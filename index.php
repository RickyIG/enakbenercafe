<?php
require('data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <title>EnakBenerCafe</title>
</head>
<!--    <header>-->
<!--        <div id="top-header">-->
<!--            <h2>EnakBenerCafe.</h2>-->
<!--            <div id="menu" onclick="showMenu();">-->
<!--                <img src="icon_menu.svg">-->
<!--            </div>-->
<!--            <nav id="drop_menu">-->
<!--                <ul>-->
<!--                    <li><a href="#bottom-header" onclick="showMenu();">Home</a></li>-->
<!--                    <li><a href="#about" onclick="showMenu();">About</a></li>-->
<!--                    <li><a href="#service" onclick="showMenu();">Service</a></li>-->
<!--                    <li><a href="#works" onclick="showMenu();">Works</a></li>-->
<!--                    <li><a href="#contact" onclick="showMenu();">Contact</a></li>-->
<!--                </ul>-->
<!--            </nav>-->
<!--        </div>-->
<!--    </header>-->

<body id="page-top">
<header>
    <div id="top-header">
        <h2>EnakBenerCafe</h2>
        <div id="menu" onclick="showMenu();">
            <img src="images/icon_menu.svg">
        </div>
        <nav id="drop_menu">
            <ul>
                <li><a href="#bottom-header" onclick="showMenu();">Home</a></li>
                <li><a href="about/about.php" onclick="showMenu();">About</a></li>
                <li><a href="order/order.php" onclick="showMenu();">Order</a></li>
                <li><a href="products/products.php" onclick="showMenu();">Products</a></li>
                <li><a href="contact.php" onclick="showMenu();">Contact</a></li>
            </ul>
        </nav>
    </div>

    <div id="bottom-header">
        <h1>Enak Bener Cafe</h1>
        <p>"Jika kamu hanya ingin sekedar singgah,
            beri aku kopi, jangan beri aku hati"</p>
        <div id="btn-contact">
            <a href="contact.php">Contact Us</a>
        </div>
    </div>
</header>

<main>
    <header>
        <h2 class="homepage-2-title">Special Products</h2>
    </header>

    <div class="row col-12">
        <div class="col-3">
            <div class="list-group">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?= $food1->getImage() ?>" alt="Card image cap">
                    <div class="content">
                        <div class="title">
                            <?= $food1->getNamaMenu() ?></div>
                        <div class="sub-title">
                            <?= $food1->getPrice() ?></div>
                        <p>
                            <?= $food1->getDesc() ?></p>
                        <div class="btn">
                            <a href="order/order.php"><button class="container-fluid">Order Now!</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/promo.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
<!--                                <h5>Belanja</h5>-->
<!--                                <p>Ayo Belanja!</p>-->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/promo2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
<!--                                <h5>Diskon</h5>-->
<!--                                <p>Ada diskon juga, lho!</p>-->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/promo3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
<!--                                <h5 style="color:black">Promo</h5>-->
<!--                                <p style="color:black">Ayo belanja hadiah!</p>-->
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <a href="products/products.php"><button class="btn-list-products">List of Products</button></a>
            </div>
        </div>

        <div class="col-3">
            <div class="list-group">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?= $drink1->getImage() ?>" alt="Card image cap">
                    <div class="content">
                        <div class="title">
                            <?= $drink1->getNamaMenu() ?></div>
                        <div class="sub-title">
                            <?= $drink1->getPrice() ?></div>
                        <p>
                            <?= $drink1->getDesc() ?></p>
                        <div class="btn">
                            <a href="order/order.php"><button class="container-fluid">Order Now!</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery-title">
        <h2 style="text-align: center; margin-top: 100px">Gallery</h2>
    </div>
    <div class="slider owl-carousel owl-theme carousel-modif">
        <div class="item">
            <img src="images/gallery1.jpg">
        </div>
        <div class="item">
            <img src="images/gallery2.jpg">
        </div>
        <div class="item">
            <img src="images/gallery3.jpg">
        </div>
        <div class="item">
            <img src="images/gallery4.jpg">
        </div>
        <div class="item">
            <img src="images/gallery5.jpg">
        </div>
    </div>


    <article id="service">
        <header>
            <h2>Kenapa</h2>

            <div class="text-line">
                <h2>kami?</h2>
                <div class="line-yellow"></div>
            </div>
        </header>

        <article>
            <section>
                <figure>
                    <img src="images/medal.png">
                </figure>

                <div class="detail-service">
                    <h3>Top Class Service</h3>
                    <p>Kami menyediakan pelayanan cafe
                        yang sangat berkelas serta profesional.</p>
                </div>
            </section>

            <section>
                <figure>
                    <img src="images/bestfood.png">
                </figure>

                <div class="detail-service">
                    <h3>Delicious Food & Drink</h3>
                    <p>Kami memiliki menu makanan dan
                        minuman yang sangat enak.</p>
                </div>
            </section>

            <section>
                <figure>
                    <img src="images/party.png">
                </figure>

                <div class="detail-service">
                    <h3>Cool Events</h3>
                    <p>Kami juga menyelenggarakan berbagai
                        event yang menarik.</p>
                </div>
            </section>

            <section>
                <figure>
                    <img src="images/camera.png">
                </figure>

                <div class="detail-service">
                    <h3>Instagram-able!</h3>
                    <p>Kami juga menyediakan tempat yang
                        sangat indah untuk mengukir kenangan indah.</p>
                </div>
            </section>

        </article>
    </article>

        <!-- <ul id="faq-list">
            <li class="faq-list-item">
              <h3 class="question">Does Progate have a mascot?</h3>
              <span>+</span>
              <div class="answer">
                <p>Yes. His name is Ken, and he is a ninja! He is a dog, not a cat.</p>
              </div>
            </li>
            <li class="faq-list-item">
              <h3 class="question">Is Ken a boy or a girl?</h3>
              <span>+</span>
              <div class="answer">
                <p>He's a boy!</p>
              </div>
            </li>
            <li class="faq-list-item">
              <h3 class="question">How old is Ken?</h3>
              <span>+</span>
              <div class="answer">
                <p>He's 14 years old.</p>
              </div>
            </li>
            <li class="faq-list-item">
              <h3 class="question">Does Progate have a mascot?</h3>
              <span>+</span>
              <div class="answer">
                <p>Yes. His name is Ken, and he is a ninja! He is a dog, not a cat.</p>
              </div>
            </li>
          </ul> -->
    </div>
    </div>


</main>


<footer>
    <div class="container">
        <img class="logo" src="images/logo.png">
        <p>EnakBenerCafe &#169; 2020</p>
        <p>Good Food, Good Mood</p>
    </div>
</footer>
<!--    <div class="top-wrapper bg" id="bottom-header">-->
<!--        <div class="container">-->
<!--            <h1> Enak Bener Cafe </h1>-->
<!--            <h1> <span class="quotes"> Jika kamu hanya ingin sekedar singgah, </span> </h1>-->
<!--            <h1> <span class="quotes"> beri aku kopi, jangan beri aku hati. </span> </h1>-->
<!--            <div class="btn-wrapper">-->
<!--                <a href="#" class="btn order"><span>Order Now </span></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


<!--    <div class="row col-12">-->
<!--        <div class="col-2">-->
<!--            <div class="list-group">-->
<!--                <a href="#" class="list-group-item list-group-item-action active" style="text-align: center;">-->
<!--                  Kategori-->
<!--                </a>-->
<!--                <a href="#" class="list-group-item list-group-item-action">Aksesories</a>-->
<!--                <a href="#" class="list-group-item list-group-item-action">Peralatan Elektronik</a>-->
<!--                <a href="#" class="list-group-item list-group-item-action">Gamestore</a>-->
<!--                <a href="#" class="list-group-item list-group-item-action">Furniture</a>-->
<!--                <a href="#" class="list-group-item list-group-item-action">Peralatan Bayi</a>-->
<!--                <a href="#" class="list-group-item list-group-item-action">Fashion Pria</a>-->
<!--                <a href="#" class="list-group-item list-group-item-action">Fashion Wanita</a>-->
<!--                <a href="#" class="list-group-item list-group-item-action">Gift Shop</a>-->
<!--                <a href="#" class="list-group-item list-group-item-action">Fotografi</a>-->
<!--                <a href="#" class="list-group-item list-group-item-action">Olahraga</a>-->
<!--                <a href="#" class="list-group-item list-group-item-action">Komputer</a>-->
<!--                <a href="#" class="list-group-item list-group-item-action">Handphone</a>-->
<!--                <a href="#" class="list-group-item list-group-item-action">Perawatan dan Kecantikan</a>-->
<!--                <a href="#" class="list-group-item list-group-item-action">Kesehatan</a>-->
<!--                <a href="#" class="list-group-item list-group-item-action">Peralatan Rumah</a>-->
<!--                <a href="#" class="list-group-item list-group-item-action">Serba Serbi</a>-->
<!--              </div>-->
<!--            -->
<!--        </div>-->
<!--        <div class="col-8">-->
<!--            -->
<!--            <div class="col-12">-->

<!--                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">-->
<!--                        <ol class="carousel-indicators">-->
<!--                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
<!--                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
<!--                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
<!--                        </ol>-->
<!--                        <div class="carousel-inner">-->
<!--                          <div class="carousel-item active">-->
<!--                            <img src="img/wp1.jpg" class="d-block w-100" alt="...">-->
<!--                            <div class="carousel-caption d-none d-md-block">-->
<!--                                <h5>Belanja</h5>-->
<!--                                <p>Ayo Belanja!</p>-->
<!--                            </div>-->
<!--                          </div>-->
<!--                          <div class="carousel-item">-->
<!--                            <img src="img/wp2.jpg" class="d-block w-100" alt="...">-->
<!--                            <div class="carousel-caption d-none d-md-block">-->
<!--                                <h5>Fashion Style</h5>-->
<!--                                <p>Ada fashion juga, lho!</p>-->
<!--                            </div>-->
<!--                          </div>-->
<!--                          <div class="carousel-item">-->
<!--                            <img src="img/wp3.jpg" class="d-block w-100" alt="...">-->
<!--                            <div class="carousel-caption d-none d-md-block">-->
<!--                                <h5 style="color:black">Holiday Gifts</h5>-->
<!--                                <p style="color:black">Ayo belanja hadiah untuk liburan!</p>-->
<!--                            </div>-->
<!--                          </div>-->
<!--                        </div>-->
<!--                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">-->
<!--                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--                          <span class="sr-only">Previous</span>-->
<!--                        </a>-->
<!--                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
<!--                          <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--                          <span class="sr-only">Next</span>-->
<!--                        </a>-->
<!--                      </div>-->
<!--                    -->
<!--               -->
<!--            </div>-->
<!--             <br>-->
<!--            <div class="col-12">-->
<!--                -->
<!--                    <div class="card-deck">-->
<!--                        <div class="card">-->
<!--                          <img src="img/mug.jpg" class="card-img-top" alt="...">-->
<!--                          <div class="card-body">-->
<!--                            <h5 class="card-title">Mug Biru</h5>-->
<!--                            <p class="card-text">Mug berwarna biru dengan satu gagang, bisa untuk segala jenis cairan, termasuk kopi.</p>-->
<!--                          </div>-->
<!--                          <div class="card-footer">-->
<!--                            <small class="text-muted" style="font-size: 16px;">Rp 15.000,-</small>-->
<!--                            <button type="button" class="btn btn-success">Tambahkan ke Keranjang</button>-->
<!--                          </div>-->
<!--                        </div>-->
<!--                        <div class="card">-->
<!--                          <img src="img/jam.png" class="card-img-top" alt="...">-->
<!--                          <div class="card-body">-->
<!--                            <h5 class="card-title">Jam Keren</h5>-->
<!--                            <p class="card-text">Jam tangan kekinian! Cocok untuk dipakai sehari-hari.</p>-->
<!--                          </div>-->
<!--                          <div class="card-footer">-->
<!--                            <small class="text-muted" style="font-size: 16px;">Rp 100.000,-</small>-->
<!--                            <button type="button" class="btn btn-success">Tambahkan ke Keranjang</button>-->
<!--                          </div>-->
<!--                        </div>-->
<!--                        <div class="card">-->
<!--                          <img src="img/mangkok.jpg" class="card-img-top" alt="...">-->
<!--                          <div class="card-body">-->
<!--                            <h5 class="card-title">Mangkuk</h5>-->
<!--                            <p class="card-text">Mangkuk lucu, keren dan berwarna-warni.</p>-->
<!--                          </div>-->
<!--                          <div class="card-footer">-->
<!--                            <small class="text-muted" style="font-size: 16px;">Rp 20.000,-</small>-->
<!--                            <button type="button" class="btn btn-success">Tambahkan ke Keranjang</button>-->
<!--                          </div>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                -->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="col-2">-->
<!--            <div class="col-12" style="padding: 0px 0px 50px 0px; margin-bottom: 20px;">-->
<!--                <div class="list-group">-->
<!--                    <a href="#" class="list-group-item list-group-item-action active" style="text-align: center;">-->
<!--                      Layanan-->
<!--                    </a>-->
<!--                    <a href="#" class="list-group-item list-group-item-action">BPJS</a>-->
<!--                    <a href="#" class="list-group-item list-group-item-action">Voucher Game</a>-->
<!--                    <a href="#" class="list-group-item list-group-item-action">Investasi</a>-->
<!--                    <a href="#" class="list-group-item list-group-item-action">Tiket</a>-->
<!--                    <a href="#" class="list-group-item list-group-item-action">Pulsa</a>-->
<!--                    <a href="#" class="list-group-item list-group-item-action">PLN</a>-->
<!--                    <a href="#" class="list-group-item list-group-item-action">PDAM</a>-->
<!--                  </div>-->
<!--            </div>-->
<!--            <div class="col-12 border">-->
<!--                <div class="pos-f-t">-->
<!--                    <div class="collapse" id="navbarToggleExternalContent">-->
<!--                      <div class="bg-dark p-4">-->
<!--                        <p style="color:aliceblue;">External Links</p>-->
<!--                        <p style="color:aliceblue;">Lapak Iklan</p>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <nav class="navbar navbar-dark bg-dark">-->
<!--                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                        <span class="navbar-toggler-icon"></span>-->
<!--                      </button>-->
<!--                    </nav>-->
<!--                  </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="faq" id="faq">-->
<!--            <ul id="faq-list">-->
<!--                <li class="faq-list-item">-->
<!--                  <h3 class="question">Does Progate have a mascot?</h3>-->
<!--                  <span>+</span>-->
<!--                  <div class="answer">-->
<!--                    <p>Yes. His name is Ken, and he is a ninja! He is a dog, not a cat.</p>-->
<!--                  </div>-->
<!--                </li>-->
<!--                <li class="faq-list-item">-->
<!--                  <h3 class="question">Is Ken a boy or a girl?</h3>-->
<!--                  <span>+</span>-->
<!--                  <div class="answer">-->
<!--                    <p>He's a boy!</p>-->
<!--                  </div>-->
<!--                </li>-->
<!--                <li class="faq-list-item">-->
<!--                  <h3 class="question">How old is Ken?</h3>-->
<!--                  <span>+</span>-->
<!--                  <div class="answer">-->
<!--                    <p>He's 14 years old.</p>-->
<!--                  </div>-->
<!--                </li>-->
<!--                <li class="faq-list-item">-->
<!--                  <h3 class="question">Does Progate have a mascot?</h3>-->
<!--                  <span>+</span>-->
<!--                  <div class="answer">-->
<!--                    <p>Yes. His name is Ken, and he is a ninja! He is a dog, not a cat.</p>-->
<!--                  </div>-->
<!--                </li>-->
<!--              </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--      -->



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/all-function.js"></script>
<script src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
<script src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
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