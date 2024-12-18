<?= $this->extend('layout');?>

<?= $this->section('main')?>

<div class="container">
    <h3>Review dan Submit Order</h3>
    <hr />
    <table>
        <tr>
            <td>SELAMAT TINGGAL</td>
            <td>@1</td>
            <td>Rp95,000</td>
        </tr>
    </table>
    <h3 class="mt-3">Total</h3>
    <hr />
    <span>Rp95,000</span>
    <h3 class="mt-3">Alamat Pengiriman</h3>
    <hr />
    <p>Jl. Simp. Sungai Duren, Mr. Jambi</p>
    <h3 class="mt-3">Metode Bayar</h3>
    <hr />
    <p>Transfer Bank</p>
    <p>No Rekening : Ilham Khoirul, MANDIRI, 701230031</p>
    <div class="mt-5">
        <form action="<?= base_url('submit')?>" method="POST">
            <button type="submit" class="btn btn-success">Submit Order</button>
        </form>
    </div>
</div>

<?= $this->endSection()?>