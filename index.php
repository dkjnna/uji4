<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <div class="container">
        <!-- Navbar -->
        <?php require('includes/navbar.php') ?>
        <!-- Home -->
        <div class="home" id="home">
            <img src="assets/images/bg.jfif" alt="" class="bg-home">
            <div class="foto-home">
                <div class="foto-bruno">
                    <img src="assets/images/bruno.png" alt="" srcset="">
                </div>
            </div>
            <div class="content">
                <h2 class="subtitle">Comming Soon</h2>
                <h1 class="title">Bruno On Stage</h1>
                <h5 class="location">Jakarta International Stadium</h5>
                <div class="informasi">
                    <p>Tour For The latest Album – ‘24kmagic’. </p>
                    <p>Sunday, September 13th-14th, 2024</p>
                </div>
            </div>
        </div>
        <div class="c" style="background-color: white; padding-top: 20px;">
            <div class="sub-home">
                <div class="content1">
                    <div class="deskripsi">
                        <div class="">
                            <h1>The Bruno’s Concert</h1>
                            <p>Get ready for an unforgettable night as the sensational
                                Bruno Mars takes the stage on his highly anticipated world
                                tour! Known for his electrifying performances and
                                chart-topping hits, Bruno Mars promises an evening filled
                                with energy, emotion, and extraordinary music. Join us for
                                an exhilarating journey through his greatest hits and
                                experience the magic of live music like never before.
                                This is a concert event you won’t want to miss!
                            </p>
                        </div>
                        <a class="button" href="">Get Ticket</a>
                    </div>
                    <div class="album">
                        <div class="judul">
                            <span>A</span>
                            <span>L</span>
                            <span>B</span>
                            <span>U</span>
                            <span>M</span>
                        </div>
                        <div class="foto-album">
                            <img src="assets/images/24k.jpg" alt="" class="satu">
                            <img src="assets/images/monyet.jpg" alt="" class="dua">
                            <img src="assets/images/sonic.jpg" alt="" class="tiga">
                            <img src="assets/images/roket.jpg" alt="" class="empat">
                        </div>
                    </div>
                </div>
                <div class="content2">
                    <div class="foto-bruno">
                        <img src="assets/images/bruno-gitar.jpg" alt="" sizes="" srcset="">
                    </div>
                    <div class="deskripsi">
                        <h2>Bruno Mars</h2>
                        <p style="line-height: 0.0;">is now back to entertain us with his beautiful songs on tour</p>
                        <h1>Get Your Own Ticket Now</h1>
                    </div>
                </div>
            </div>
            <hr>
            <!-- About -->
            <?php require ('includes/about.php')?>
            <!-- Ticket -->

            <!-- Layout -->
            <hr>
            <!-- Gallery -->
            <?php require ('includes/gallery.php')?>
            <!-- Footer -->
        </div>
    </div>
</body>

</html>