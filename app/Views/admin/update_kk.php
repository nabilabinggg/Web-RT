<h1>Edit Data KK</h1>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <form action="/update_data_kk" method="post">
        <div>
            <table style="text-align: left; justify-content: center;">
                <tr>
                    <th> NOMOR KK </th>
                    <td> :
                        <input type="text" name="nomor_kk" value="<?= $kk[0]['nomor_kk'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <th> KEPALA KELUARGA </th>
                    <td> : <input type="text" name="kepala_keluarga" value="<?= $kk[0]['kepala_keluarga'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <th> ALAMAT</th>
                    <td> : <input type="input" name="alamat" value="<?= $kk[0]['alamat'] ?>" required></td>
                </tr>
                <tr>
                    <th> KECAMATAN </th>
                    <td> :
                        <select name="id_kecamatan" id="" required>
                            <?php foreach ($kecamatan as $kecamatan) : ?>
                                <option value="<?= $kecamatan['nama'] ?>"><?= $kecamatan['nama'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </td>
                    <!-- <input type="text" name="id_kecamatan" required>
                    </td> -->
                </tr>
                <tr>
                    <th> KELURAHAN </th>
                    <td> : <select name="id_kelurahan" id="" required>
                            <?php foreach ($kelurahan as $kelurahan) : ?>
                                <option value="<?= $kelurahan['nama'] ?>"><?= $kelurahan['nama'] ?></option>
                            <?php endforeach ?>
                            <!-- <input type="text" name="id_kelurahan" required> -->
                    </td>
                </tr>
                <tr>
                    <th> RW </th>
                    <td> :
                        <select name="id_rw" id="" required>
                            <?php foreach ($rw as $rw) : ?>
                                <option value="<?= $rw['nama'] ?>"><?= $rw['nama'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <!-- <input type="text" name="id_rw" required> -->
                    </td>
                </tr>
                <tr>
                    <th> RT </th>
                    <td> :
                        <select name="id_rt" id="" required>
                            <?php foreach ($rt as $rt) : ?>
                                <option value="<?= $rt['nama'] ?>"><?= $rt['nama'] ?></option>
                            <?php endforeach ?>
                            <!-- <input type="text" name="id_rt" required> -->
                    </td>
                </tr>
                <tr>
                    <th> KODE POS </th>
                    <td> : <input type="number" name="kode_pos" value="<?= $kk[0]['kode_pos'] ?>" required></td>
                </tr>
                <tr>
                    <th> PROVINSI </th>
                    <td> :
                        <select name="id_provinsi" id="" required>
                            <?php foreach ($provinsi as $provinsi) : ?>
                                <option value="<?= $provinsi['nama'] ?>"><?= $provinsi['nama'] ?></option>
                            <?php endforeach ?>
                        </select>

                </tr>
                <tr>
                    <th> FOTO KK </th>
                    <td> :
                        <input type="image" src="img_submit.gif" alt="Submit" width="48" height="48" name="scan_foto_kk" required>
                    </td>
                </tr>
                <button type="submit" style="text-align:justify">Update</button>
            </table>
        </div>