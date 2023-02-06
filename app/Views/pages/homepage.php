<?= $this->extend('layout/layout'); ?>
<?= $this->section('content'); ?>

<!-- Css -->
<link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>


<section class="homepage">
    <!-- Header -->
    <div class="container">
        <div class="banner">
            <div class="banner-text">
                <h1>SIDUBI</h1>
                <button>Lebih Lanjut</button>
                <p>SIDUBI merupakan website khusus RT 001 - 009 Desa LPUG Kecamatan LPUG Kota Depok Provinsi Jawa Barat</p>
            </div>
        </div><br>


        <!-- DATA WARGA SECTION -->
            <div class="tabel">
                <h1 style="font-family: sans-serif;"><center>Data Warga</center></h1>
                <table class="table">
                    <thead>
                        <th><i class="fa-solid fa-house"></i><br>RT</th>
                        <th><i class="fa-solid fa-user-clock"></i></i><br>Penyewa</th>
                        <th><i class="fa-solid fa-house-user"></i><br>Tetap</th>
                        <th><i class="fa-solid fa-baby"></i><br>Balita</th>
                        <th><i class="fa-solid fa-person"></i><br>Remaja</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>10</td>
                            <td>14</td>
                            <td>5</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>5</td>
                            <td>3</td>
                            <td>0</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>14</td>
                            <td>2</td>
                            <td>4</td>
                            <td>11</td>
                        </tr>
                        <tr>
                            <td>004</td>
                            <td>8</td>
                            <td>12</td>
                            <td>3</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>005</td>
                            <td>23</td>
                            <td>1</td>
                            <td>4</td>
                            <td>7</td>
                        </tr>
                    </tbody>
                </table><br>
            </div>
            <div class="button">
                <a href="#" class="btn btn-left">< Sebelumnya</a>
                <a href="#" class="btn btn-right">Selanjutnya ></a>
            </div>


        <!-- BERITA SECTION -->
        <div class="topHeadlines">
            <div class="left">
                <div class="title">
                    <h2>Breaking News</h2>
                </div>
                <div class="img" id="breakingImg">
                    <img src="img/siska.jpeg">
                </div>
                <div class="text" id="breakingNews">
                    <div class="title">
                        <button>Sosial</button>
                        <a href="#" style="font-family: sans-serif; font-size:15px;">05 Februari 2023</a>
                        <h2 style="font-family: sans-serif; padding-top:5px;">Siskamling yang dilakukan setiap malam minggu guna mencegah<br>kejahatan</h2>
                    </div>
                    <div class="description">
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="title">
                    <h2 style="font-family: sans-serif;">Top Headlines</h2>
                </div>
                <div class="topNews">
                    <!-- 1 -->
                    <p style="color:#AFB7C9;"><img src="img/masjid.jpg" style="float:left; padding-right:5px; border-radius:5px;">06 Februari 2023<br>
                    <span style="font-family:sans-serif; color:#000; font-weight:600;">Pembangunan Masjid Al-Hikmah di desa LPUG</span></p>

                    <!-- 2 -->
                    <p style="color:#AFB7C9;"><img src="img/kerja.jpg" style="float:left; padding-right:5px; border-radius:5px;">07 Februari 2023<br>
                    <span style="font-family:sans-serif; color:#000; font-weight:600;">Masyarakat LPUG melakukan kerja bakti agar lingkungan bersih</span></p>

                    <!-- 3 -->
                    <p style="color:#AFB7C9;"><img src="img/tarkam.jpeg" style="float:left; padding-right:5px; border-radius:5px;">08 Februari 2023<br>
                    <span style="font-family:sans-serif; color:#000; font-weight:600;">Turnamen antar kampung yang diselenggarakan di desa LPUG berakhir ricuh</span></p>
                </div>
            </div>
        </div>

        <!-- TENTANG SECTION -->
        <div class="tentang">
            <h3 style="text-align: center; font-family: sans-serif; font-size: 30px; padding-bottom: 20px;">Tentang</h3>
                <div class="owl-carousel">
                    <div class="item"><img src="img/homepage.png"></div>
                    <div class="item"><img src="img/homepage.png"></div>
                    <div class="item"><img src="img/homepage.png"></div>
                    <div class="item"><img src="img/homepage.png"></div>
                    <div class="item"><img src="img/homepage.png"></div>
                    <div class="item"><img src="img/homepage.png"></div>
                    <div class="item"><img src="img/homepage.png"></div>
                    <div class="item"><img src="img/homepage.png"></div>
                    <div class="item"><img src="img/homepage.png"></div>
                    <div class="item"><img src="img/homepage.png"></div>
                    <div class="item"><img src="img/homepage.png"></div>
                    <div class="item"><img src="img/homepage.png"></div>
                </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="js/app.js"></script>

        <!-- TENTANG SECTION
        <div class="about">
            <div class="about-content">
                <img src="<?php echo base_url('img/homepage.png') ?>" alt="about" style="width:30%; object-fit:contain; background-color:transparent; margin:60px;">
                <div class="about-content-text">
                    <h2>Tentang Kami</h2>
                    <p>SIDUBI merupakan website khusus RT 001 - 009 Desa LPUG Kecamatan LPUG Kota Depok Jawa Barat</p>
                </div>
            </div>
        </div> -->
    </div>
</section>

<?= $this->endSection(); ?>