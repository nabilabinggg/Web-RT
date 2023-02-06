<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('css/dashboardstyle.css') ?>" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>SIDUBI</h1>
        </div>

        <div class="hr">
            <hr color="white" size="8" width="250" style="border-radius: 30px; margin-top: -13px;">
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;

        <ul>
            <li><i class="fa-solid fa-table-columns" style="transform: rotate(270deg);"></i>&nbsp;Dashboard</li>
            <li><i class="fa-solid fa-square-poll-vertical"></i>&nbsp;Update Data</li>
            <li><i class="fa-solid fa-user-pen"></i>&nbsp;Edit Profile</li>
        </ul>
    </div>

    <div class="container">
        <!-- <h2>hjkjds</h2> -->
        <div class="header">
            <div class="nav">
                <div class="user">
                    <i style="margin-top: 11px;" class="fa-regular fa-circle-user fa-4x"></i>
                </div>
                <ul>
                    <li>
                        <a href="#" style="margin-left: 20px;">Superadmin <i class="fa-solid fa-caret-down"></i><a>
                                <div class="dropdown">
                                    <ul>
                                        <li><a href="#">Log Out</a></li>
                                    </ul>
                                </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="content">
            <!-- <h2>iauyfcs</h2> -->
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h2>192</h2>
                        <h3>Total Users</h3>
                    </div>
                    <div class="icon-case">
                        <i class="fa-solid fa-users"></i>
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="data">
                    <table>
                        <tr style="background-color: #25316D; color:white;">
                            <th>Username</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>Budi Solasi</td>
                            <td>RT</td>
                            <td><a href="#" class="btn-edit">Edit</a></td>
                        </tr>
                        <tr>
                            <td>Sukidi</td>
                            <td>RW</td>
                            <td><a href="#" class="btn-edit">Edit</a></td>
                        </tr>
                        <tr>
                            <td>Parto</td>
                            <td>Superadmin</td>
                            <td><a href="#" class="btn-edit">Edit</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>


</html>