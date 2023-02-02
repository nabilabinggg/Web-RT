<h1>HALAMAN RW</h1>

<?php if (session()->get('role') == 3) : ?>
<button> <a href="/rete"> RT </button></a>
<?php endif; ?>

<a href="<?= base_url('logout') ?>">Logout</a>