<h1>Tambah Data Penduduk</h1>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penduduk</title>
</head>

<body>
    <form action="/save_data" method="post">
        <table style="text-align: left; justify-content: center;">
            <tr>
                <th> NO KK</th>
                <td> : <select name="id_kk" id="" required>
                        <?php foreach ($data as $kk) : ?>
                        <option value="<?= $kk['nomor_kk'] ?>"><?= $kk['nomor_kk'] ?></option>
                        <?php endforeach ?>
                    </select>
            </tr>
            <tr>
                <th>
                    NAMA LENGKAP
                </th>
                <td> : <input type="text" name="nama_lengkap" required></td>
            </tr>
            <tr>
                <th>
                    NIK
                </th>
                <td> : <input type="input" name="NIK" required></td>
            </tr>
            <tr>
                <th> E-KTP </th>
                <td> :
                    <input type="image" src="img_submit.gif" alt="Submit" width="48" height="48" name="scan_ktp">
                </td>
            </tr>
            <tr>
                <th>
                    JENIS KELAMIN
                </th>
                <td> :
                    <select name="j_kelamin" id="" required>
                        <option></option>
                        <option> Perempuan </option>
                        <option> Laki-laki </option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>
                    TEMPAT LAHIR
                </th>
                <td> : <input type="input" name="tempat_lahir" required></td>
            </tr>
            <tr>
                <th>
                    TANGGAL LAHIR
                </th>
                <td> : <input type="date" name="tgl_lahir" id="" required></td>
            </tr>
            <tr>
                <th>
                    AGAMA
                </th>
                <td> :
                    <select name="agama" id="">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Budha</option>
                        <option>Hindu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>
                    PENDIDIKAN
                </th>
                <td> : <input type="input" name="pendidikan" required></td>
            </tr>
            <tr>
                <th>
                    JENIS PEKERJAAN
                </th>
                <td> : <input type="input" name="jenis_pekerjaan" required></td>
            </tr>
            <tr>
                <th>
                    STATUS PERNIKAHAN
                </th>
                <td> :
                    <select name="status_pernikahan" id="" required>
                        <option></option>
                        <option>Sudah Menikah</option>
                        <option>Belum menikah</option>
                        <option>Bercerai</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>
                    STATUS HUBUNGAN KELUARGA
                </th>
                <td> :
                    <select name="status_hubungan_keluarga" id="" required>
                        <option> </option>
                        <option>AYAH</option>
                        <option>IBU</option>
                        <option>ANAK KANDUNG</option>
                        <option>ANAK ANGKAT</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>
                    KEWARGANEGARAAN
                </th>
                <td> : <input type="text" name="kewarganegaraan" required></td>
            </tr>
            <tr>
                <th>
                    NO PASPORT
                </th>
                <td> : <input type="input" name="no_passport" required></td>
            </tr>
            <tr>
                <th>
                    KITAS KITAB
                </th>
                <td> : <input type="text" name="kitas_kitap" required></td>
            </tr>
            <tr>
                <th>
                    NAMA AYAH
                </th>
                <td> : <input type="input" name="ayah" required></td>
            </tr>
            <tr>
                <th>
                    NAMA IBU
                </th>
                <td> : <input type="input" name="ibu" required></td>
            </tr>
            <tr>
                <th>
                    STATUS WARGA
                </th>
                <td> :
                    <select name="status_warga" id="" required>
                        <option></option>
                        <option>WARGA LAMA</option>
                        <option>WARGA PINDAHAN</option>
                        <option>WARGA TETAP</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>KETERANGAN</th>
                <td> : <input type="text" name="keterangan" id="" required></td>
            </tr>
        </table>
        <div>
            <button type="submit" style="text-align:justify">Save</button>
        </div>
    </form>
</body>

</html>