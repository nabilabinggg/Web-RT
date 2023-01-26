<?= $this->extend('layout/layout'); ?>
<?= $this->section('content'); ?>

<!-- Css -->
<link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet" />

<section class="homepage">
    <!-- Header -->
    <div class="container">
        <div class="banner">
            <div class="banner-text">
                <h1>Judul Web</h1>
                <button>Explore More</button>
            </div>
        </div>

        <div class="cards">
            <div class="card">
                <div class="content">
                    <div>
                        <img src="<?php echo base_url('img/Vector.svg') ?>" alt="vector" style="height:60px; width:50px; object-fit:contain;">
                        <h2>Administrasi warga</h2>
                    </div>
                    <ul>
                        <li>Tentang</li>
                        <li>Kontak</li>
                        <li>Beranda</li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="content">
                    <div>
                        <img src="<?php echo base_url('img/Vector.svg') ?>" alt="vector" style="height:60px; width:50px; object-fit:contain;">
                        <h2>Administrasi warga</h2>
                    </div>
                    <ul>
                        <li>Tentang</li>
                        <li>Kontak</li>
                        <li>Beranda</li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="content">
                    <div>
                        <img src="<?php echo base_url('img/Vector.svg') ?>" alt="vector" style="height:60px; width:50px; object-fit:contain;">
                        <h2>Administrasi warga</h2>
                    </div>
                    <ul>
                        <li>Tentang</li>
                        <li>Kontak</li>
                        <li>Beranda</li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="content">
                    <div>
                        <img src="<?php echo base_url('img/Vector.svg') ?>" alt="vector" style="height:60px; width:50px; object-fit:contain;">
                        <h2>Administrasi warga</h2>
                    </div>
                    <ul>
                        <li>Tentang</li>
                        <li>Kontak</li>
                        <li>Beranda</li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="about">
            <div class="about-content">
                <img src="<?php echo base_url('img/homepage.png') ?>" alt="about" style="width:30%; object-fit:contain; background-color:transparent; margin:60px;">
                <div class="about-content-text">
                    <h2>Tentang Kami</h2>
                    <p>ini adalah tentang kami........</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>