<?= $this->extend('layout');?>

<?= $this->section('main');?>

<div class="container">
    <h3>Review dan Submit Order</h3>
    <hr />
    <table>
        <tr>
            <td>Ayahku Bukan Pembohong</td>
            <td>@1</td>
            <td>Rp85.000</td>
        </tr>
</table>
<h3 class="mt-3">Total</h3>
<hr />
<span>Rp85.000</span>
<h3 class="mt-3">Alamat Pengiriman</h3>
<hr />
<p>Jl Simp. Sungai Duren, Mr. Jambi</p>
<h3 class="mt-3">Metode Bayar</h3>
<hr />
<p>Transfer Bank</p>
<p>No Rekening: Icha Maretha, BRI, 229201004228538</P>
<div class="mt-5">
    <form action="<?= base_url('submit')?>" method="POST">
    <button type="submit" class="btn btn-success">Submit Order</button>
</div>
</div>

