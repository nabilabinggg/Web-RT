<h1>Tambah Data KK</h1>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <form action="/data_kk" method="post">
        <div>
            <table style="text-align: left; justify-content: center;">
                <tr>
                    <th> NOMOR KK </th>
                    <td> : <input type="text" name="nomor_kk" required></td>
                </tr>
                <tr>
                    <th> KEPALA KELUARGA </th>
                    <td> : <input type="text" name="kepala_keluarga" required></td>
                </tr>
                <tr>
                    <th> ALAMAT</th>
                    <td> : <input type="input" name="alamat" required></td>
                </tr>
                <tr>
                    <th> ID KECAMATAN </th>
                    <td> :
                        <select name="id_kecamatan" id="" required>
                            <option value="0"></option>
                            <option value="1">000</option>
                            <option value="2">111</option>
                            <option value="3">222</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th> ID KELURAHAN </th>
                    <td> :
                        <select name="id_kelurahan" id="" required>
                            <option value="0"></option>
                            <option value="1">123</option>
                            <option value="2">456</option>
                            <option value="3">789</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th> ID RW </th>
                    <td> :
                        <select name="id_rw" id="" required>
                            <option value="0"></option>
                            <option value="1">112</option>
                            <option value="2">113</option>
                            <option value="3">114</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th> ID RT </th>
                    <td> :
                        <select name="id_rt" id="" required>
                            <?php foreach ($data as $rt) : ?>
                            <option value="<?= $rt['id'] ?>">
                                <?= $rt['id'] ?>
                            </option>
                            <?php endforeach ?>
                            <!-- <option value="1">333</option>
                            <option value="2">444</option>
                            <option value="3">555</option> -->
                        </select>
                    </td>
                </tr>
                <tr>
                    <th> KODE POS </th>
                    <td> : <input type="number" name="kode_pos" required></td>
                </tr>
                <tr>
                    <th> PROVINSI </th>
                    <td> : <input type="text" name="provinsi" required></td>
                </tr>
                <tr>
                    <th> FOTO KK </th>
                    <td> :
                        <input type="image" src="img_submit.gif" alt="Submit" width="48" height="48" name="scan_foto_kk"
                            required>
                    </td>
                </tr>
                <button type="submit" style="text-align:justify">Tambah</button>
            </table>
        </div>