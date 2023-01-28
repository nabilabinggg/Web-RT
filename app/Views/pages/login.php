<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css -->
    <link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet" />
    <!-- FontAwesome icon -->
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
    <!-- Title -->
    <title><?= $title ?></title>
</head>

<body>
    <section class="login">
        <!-- Header -->
        <div class="container">
            <div style="display: flex;">
                <img src="<?php echo base_url('img/homepage.png') ?>" width="50%" height="100%"
                    style="position: absolute; left: 0;">
                <div
                    style="display: flex; flex-direction:column; padding: 50px; width: 50%; position: absolute; right:0; justify-content:space-between;">
                    <?php if (session()->getFlashdata('Pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('Pesan'); ?>
                    </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('MssgWo')) : ?>
                    <div class="alert alert-danger" role="alert"> <?= session()->getFlashdata('MssgWo'); ?>
                    </div>
                    <?php endif; ?>
                    <div>
                        <h1 style="text-align: center; font-size: 40px; font-family:'Inika'; font-weight: 400;">Nama Web
                        </h1>
                    </div>
                    <form action="/logon" method="post" style="display: flex; flex-direction:column; margin-top: 20%">
                        <div style="margin-bottom: 40px; height: 81px;">
                            <i class="far fa-user-circle" style="font-size: 50px; margin-right:20px;"></i>
                            <input
                                style="border: 3px solid #020000; border-radius: 30px; padding: 20px; font-size: large; width:90%; float:right;"
                                name="username" placeholder="Username" required>
                        </div>
                        <div style="margin-bottom: 30px; height: 81px;">
                            <i class="fas fa-lock" style="font-size: 50px; margin-right:20px;"></i>
                            <input
                                style="border: 3px solid #020000; border-radius: 30px; padding: 20px; font-size: large; width:90%; float:right;"
                                name="password" placeholder="password" required>
                        </div>
                        <a style="margin:0 0 30px auto; font-size:20px;">Forgot Password?</a>
                        <button
                            style="height: 64px; width:auto; background: #84D9BB; border: 3px solid #000000; border-radius: 20px;"
                            type="submit">Login</button>

                </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>