<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css -->
    <link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet" />
    <!-- FontAwesome icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
    <!-- Title -->
    <title><?= $title ?></title>
</head>

<body>
    <form action="login" method="post"></form>
    <section class="login">
        <!-- Header -->
        <div class="container">
            <div style="display: flex;">
                <img src="<?php echo base_url('img/homepage.png') ?>" width="50%" height="100%" style="position: absolute; left: 0; transform:rotate()">
                <div style="display: flex; flex-direction:column; padding: 50px; width: 50%; position: absolute; right:0; justify-content:space-between;">
                    <div>
                        <h1 style="text-align: center; font-size: 40px; font-family:'Arial'; font-weight: 400;"><b>SIDUBI

                            </b></h1>
                    </div>
                    <form style="display: flex; flex-direction:column; margin-top: 20%">
                        <div style="margin-bottom: 40px; height: 81px;">
                            <i class="far fa-user-circle" style="font-size: 50px; margin-right:20px;"></i>
                            <input style="border: 3px solid #020000; border-radius: 20px; padding: 20px; font-size: large; width:90%; float:right;" name="username" placeholder="Username">
                        </div>
                        <div style="margin-bottom: 30px; height: 81px;">
                            <!-- <i class="fa-regular fa-circle style= font-size: 50px; margin-right:20px;"></i> -->
                            <i class="fas fa-lock" style="font-size: 50px; margin-right:20px;"></i>
                            <input style="border: 3px solid #020000; border-radius: 20px; padding: 20px; font-size: large; width:90%; float:right;" name="password" placeholder="Password">
                        </div>
                        <br>
                        <br>
                        <br>
                        <!-- <a href="#" style="margin:0 0 30px auto; font-size:20px; color:blue;"><u>Forgot Password?</u></a> -->
                        <button style="margin-left:75px; height: 64px; width:auto; background: #84D9BB;  border-radius: 20px; <?php echo ("pages/homepage.php") ?>">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>