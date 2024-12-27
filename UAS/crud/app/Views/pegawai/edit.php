<?= $this->extends('layouts/main');?>

<?= $this->section('content');?>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between border-bottom py-2">
        <h3 class="pd-2 mb-0">Edit Data Pegawai</h3>
        <a href="/pegawai/create" class="btn btn-dark">Kembali</a>
        <div class="pt-3">
            <form action="/pegawai/update/<?=$pegawai->id;?>" method="post">
                <?= csrf_field();?>
                <div class="mb-3">
                    <label for="" class="form-label">Nama Pegawai:</label>
                    <input type="text" class="form-control" name="nama_pegawai" value="<?= $pegawai->nama_pegawai; ?>" >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Alamat:</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $pegawai->alamat; ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">No. Telepon:</label>
                    <input type="text" class="form-control" name="telepon" value="<?= $pegawai->telepon; ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jabatan:</label>
                    <select name="jabatan_id" id="" class="form-control" >
                        <?php foreach ($jabatan as $j){
                            <option value="<?= $j->id;?>"<?= ($j->id == $pegawai->jabatan_id)? 'selected' : '';>><?$j->nama_jabatan;?></option>
                        <?php }?>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark">Update</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection();?>