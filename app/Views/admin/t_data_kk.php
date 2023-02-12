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
    <form action="/admin/data_kk" method="post" enctype="multipart/form-data">
        <div>
            <table style="text-align: left; justify-content: center;">
                <tr>
                    <th> NOMOR KK </th>
                    <td> :
                        <input type="text" name="nomor_kk" >
                    </td>
                </tr>
                <tr>
                    <th> KEPALA KELUARGA </th>
                    <td> : <input type="text" name="kepala_keluarga" ></td>
                </tr>
                <tr>
                    <th> ALAMAT</th>
                    <td> : <input type="input" name="alamat" ></td>
                </tr>
                <tr>
                    <th> KECAMATAN </th>
                    <td> :
                        <select name="id_kecamatan" id="" >
                            <?php foreach ($kecamatan as $kecamatan) : ?>
                                <option value="<?= $kecamatan['nama'] ?>"><?= $kecamatan['nama'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </td>
                    <!-- <input type="text" name="id_kecamatan" >
                    </td> -->
                </tr>
                <tr>
                    <th> KELURAHAN </th>
                    <td> : <select name="id_kelurahan" id="" >
                            <?php foreach ($kelurahan as $kelurahan) : ?>
                                <option value="<?= $kelurahan['nama'] ?>"><?= $kelurahan['nama'] ?></option>
                            <?php endforeach ?>
                            <!-- <input type="text" name="id_kelurahan" > -->
                    </td>
                </tr>
                <tr>
                    <th> RW </th>
                    <td> :
                        <select name="id_rw" id="" >
                            <?php foreach ($rw as $rw) : ?>
                                <option value="<?= $rw['nama'] ?>"><?= $rw['nama'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <!-- <input type="text" name="id_rw" > -->
                    </td>
                </tr>
                <tr>
                    <th> RT </th>
                    <td> :
                        <select name="id_rt" id="" >
                            <?php foreach ($rt as $rt) : ?>
                                <option value="<?= $rt['nama'] ?>"><?= $rt['nama'] ?></option>
                            <?php endforeach ?>
                            <!-- <input type="text" name="id_rt" > -->
                    </td>
                </tr>
                <tr>
                    <th> KODE POS </th>
                    <td> : <input type="number" name="kode_pos" ></td>
                </tr>
                <tr>
                    <th> PROVINSI </th>
                    <td> :
                        <select name="id_provinsi" id="" >
                            <?php foreach ($provinsi as $provinsi) : ?>
                                <option value="<?= $provinsi['nama'] ?>"><?= $provinsi['nama'] ?></option>
                            <?php endforeach ?>
                        </select>

                </tr>
                <tr>
                    <td>Foto KK
                        <div>
                            <label for="formFileMultiple" class="form-label">Masukkan Foto KK</label>
                            <input type="file" class="form-control" id="formFileMultiple" name="foto_kk" multiple>
                        </div>
                    </td>
                </tr>
                <button type="submit" style="text-align:justify">Tambah</button>
            </table>
        </div>