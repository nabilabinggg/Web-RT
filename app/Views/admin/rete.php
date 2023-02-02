<h1>HALAMAN RETE</h1>


<?php if (session()->get('role') == 1) : ?>
<button><a href="admin">Back</button></a>
<?php endif; ?>
<a href="<?= 'rete/tambah_data_warga' ?>">Test</a>
<a href="<?= base_url('logout') ?>">Logout</a>