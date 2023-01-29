<?= $this->extend('layout/layout'); ?>
<?= $this->section('content'); ?>

<!-- Css -->
<link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<section class="homepage">
    <!-- Header -->
    <div class="container">
        <div class="banner">
            <div class="banner-text">
                <h1 style="text-align: center;">SIDUBI</h1>
                <p>SIDUBI merupakan website khusus RT 001 - 009 Desa LPUG Kecamatan LPUG Kota Depok Provinsi Jawa Barat</p>
                <button style="display:relative; justify-content: center;">Lebih Lanjut</button>
            </div>
        </div><br>

        <!-- DATA WARGA SECTION -->
            <div class="tabel">
                <h1><center>Data Warga</center></h1><br>
                <table class="table">
                    <thead>
                        <th style="border-radius: 10px 0px 0px 10px;">RT</th>
                        <th>Penyewa</th>
                        <th>Tetap</th>
                        <th>Balita</th>
                        <th>Remaja</th>
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
                <a href="#" class="btn btn-left"> < Sebelumnya</a>
                <a href="#" class="btn btn-right">Selanjutnya ></a>
            </div>

        <!-- TENTANG SECTION -->
        <div class="about">
            <div class="about-content">
                <img src="<?php echo base_url('img/homepage.png') ?>" alt="about" style="width:30%; object-fit:contain; background-color:transparent; margin:60px;">
                <div class="about-content-text">
                    <h2>Tentang Kami</h2>
                    <p>SIDUBI merupakan website khusus RT 001 - 009 Desa LPUG Kecamatan LPUG Kota Depok Jawa Barat</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>