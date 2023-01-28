<h1>tambah akun atau edit profile</h1>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Akun</title>
</head>

<body>
    <form action="/tambah_akun" method="post">
        <table style="text-align: left; justify-content: center;">
            <tr>
                <th> USERNAME </th>
                <td> : <input type="input" name="username" required></td>
            </tr>
            <tr>
                <th> PASSWORD </th>
                <td> : <input type="text" name="password" required></td>
            </tr>
            <tr>
                <th>
                    ROLE ID
                </th>
                <td>
                    :
                    <select name="role_id" id="" required>
                        <option value="role_id"> </option>
                        <option value="2"> RT </option>
                        <option value="3"> RW </option>
                        <option value="4"> DKM </option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>
                    STATUS
                </th>
                <td>
                    :
                    <select name="status" id="" required>
                        <option value="0"> NON-AKTIF </option>
                        <option value="1"> AKTIF </option>
                    </select>
                </td>
            </tr>
            <button type="submit" style="text-align:justify">Save</button>
        </table>