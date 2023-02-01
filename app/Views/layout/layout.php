<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Css -->
    <link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet" />
    <!-- Title -->
    <title>RT</title>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="navbar">
            <div class="logo">SIDUBI</div>
            <nav>
                <ul class="nav__links">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Data Warga</a></li>
                    <li><a href="#">Tentang</a></li>
                    <li><a href="<?= base_url('login') ?>">Login</a></li>
                </ul>
            </nav>
            <div class="search-box">
                <button class="btn-search"><i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></i></button>
                <input type="text" class="input-search" placeholder="Cari...">
            </div>
        </div>
        <hr />
    </header>
</body>

</html>

<?= $this->renderSection('content') ?>

<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
    <div class="container text-center">Copyright &copy <?= Date('Y') ?> LPUG</div>
</footer>

<!-- Jquery dan Bootsrap JS -->
<script src="<?= base_url('js/jquery.min.js') ?>"></script>
<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>