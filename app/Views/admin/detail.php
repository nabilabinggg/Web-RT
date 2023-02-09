<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman kk</title>
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">NOMOR KK</th>
                            <th scope="col">KEPALA KELUARGA</th>
                            <th scope="col">ALAMAT</th>
                            <th scope="col">KELURAHAN</th>
                            <th scope="col">KECAMATANN</th>
                            <th scope="col">RW</th>
                            <th scope="col">RT</th>
                            <th scope="col">KODE POS</th>
                            <th scope="col">PROVINSI</th>
                            <th scope="col">FOTO KK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kk as $data) {
                            echo ("<tr><td>" . $data['id'] . "</td>
                    <td>" . $data['nomor_kk'] . "</td>
                    <td>" . $data['kepala_keluarga'] . "</td>
                    <td>" . $data['alamat'] . "</td>
                    <td>" . $data['id_kelurahan'] . "</td>
                    <td>" . $data['id_kecamatan'] . "</td>
                    <td>" . $data['id_rw'] . "</td>
                    <td>" . $data['id_rt'] . "</td>
                    <td>" . $data['kode_pos'] . "</td>
                    <td>" . $data['id_provinsi'] . "</td>
                    <td>" . $data['foto_kk'] . "</td>
                    <td><a href=/update_kk/" . $data['id'] . ">update</a></td>
                    </tr>");
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>