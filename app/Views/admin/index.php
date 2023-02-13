<html>
<?php if (session()->get('role') == 1) : ?>
    <button> <a href="<?= session()->get('role') ? "admin" : ""; ?>/buat_akun">Tambah Akun</button></a>
    <button> <a href="<?= session()->get('role') ? "admin" : ""; ?>/data_penduduk">Tambah Data Penduduk</a></button>
    <button> <a href="<?= session()->get('role') ? "admin" : ""; ?>/tambah_data_rt">Tambah RT</a></button>
    <button> <a href="<?= session()->get('role') ? "admin" : ""; ?>/tambah_data_rw">Tambah RW</a></button>
    <button> <a href="<?= session()->get('role') ? "admin" : ""; ?>/tambah_data_kecamatan">Tambah Kecamatan</a></button>
    <button> <a href="<?= session()->get('role') ? "admin" : ""; ?>/tambah_data_kelurahan">Tambah Kelurahan</a></button>
    <button> <a href="<?= session()->get('role') ? "admin" : ""; ?>/tambah_data_provinsi">Tambah Provinsi</a></button>
    <button> <a href="<?= session()->get('role') ? "admin" : ""; ?>/tambah_data_kk">Tambah KK</a></button>
    <button> <a href="<?= session()->get('role') ? "admin" : ""; ?>/data_penduduk">Update Data Warga</a></button>
    <h2>halamannya keseluruhan yaa</h2>
<?php endif; ?>

<?php if (session()->get('role') == 2) : ?>
    <button><a href="t_d_penduduk">Tambah Data Penduduk</a></button>
    <h2>bagian rt aja</h2>
<?php endif; ?>

<?php if (session()->get('role') == 3) : ?>
    <button> Tambah data Rw dan Rt</button>
    <h2>Tampilin laman rt dan rw aja</h2>
<?php endif; ?>

<?php if (session()->get('role') == 4) : ?>
    <button>Data Majelis</button>
    <h2>Ini khusus halaman majelis aja</h2>
<?php endif ?>


<select name="" id="">
    <option value="2">Role Admin Rt</option>
    <option value="3">Role Masjid</option>
    <option value="4">Role Admin Sampah</option>
    <option value="">Role Admin</option>
</select>


<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NAMA LENGKAP</th>
                        <th scope="col">NO.KK</th>
                        <th scope="col">AGAMA</th>
                        <th scope="col">KETERANGAN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data_warga as $data) {
                        echo ("<tr>
                        <td>" . $data['id'] . "</td>
                        <td>" . $data['nama_lengkap'] . "</td>
                        <td>" . $data['id_kk'] . "</td>
                        <td>" . $data['agama'] . "</td>
                        <td>" . $data['keterangan'] . "</td>
                        <td><a href=/admin/data_penduduk/" . $data['id'] . ">update</a></td>
                        </tr>");
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<button>
    <a href="<?= base_url('logout') ?>">logout</a></button>
<button><a href="<?= base_url('rete') ?>">RT</a></button>
<button><a href="<?= base_url('rewe') ?>">RW</a></button>
<button><a href="<?= base_url('dkm') ?>">DKM</a></button>

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
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kk as $data) {
                            echo ("<tr><td>" . $data['id'] . "</td>
                    <td>" . $data['nomor_kk'] . "</td>
                    <td>" . $data['kepala_keluarga'] . "</td>
                    <td><a href=admin/update_kk/" . $data['id'] . ">update</a></td>
                    <td><a href=admin/delete_kk/" . $data['id'] . ">delete</a></td>
                    </tr>");
                        } ?>
                        <td><button> <a href="<?= session()->get('role') ? "admin" : ""; ?>/detail">detail
                                    kk</a></button>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>