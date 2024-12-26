<?= $this->extend('admin/layout')?>

<?= $this->section('content')?>

<h2 class="mb-3">Form Edit Buku</h2>

<div class="mb-3">
<form action="<?= base_url('admin/data-buku/' . $buku['id'] . '/update') ?>" method="POST"enctype="multipart/form-data" id="formTambah">
          <div class="mb-3">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" velue="<?=$buku['judul']?>">
          </div>
          <div class="mb-3">
            <label for="pengarang">Pengarang</label>
            <input type="text" name="pengarang" id="pengarang" class="form-control" velue="<?=$buku['pengarang']?>">
          </div>
          <div class="mb-3">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" class="form-control" velue="<?=$buku['penerbit']?>">
          </div>
          <div class="mb-3">
            <label for="tahun">Tahun</label>
            <input type="text" name="tahun" id="tahun" class="form-control" velue="<?=$buku['tahun']?>">
          </div>
          <div class="mb-3">
            <label for="tahun">Cover</label>
            <input type="file" accept="image/*" name="thumbnail_url" id="thumbnail_url" 
            class="form-control">
            <img src="<?= base_url($buku['thumbnail_url']) ?>" alt="" class="img-thumbnail" style="width: 150px; height auto;">
          </div>
          <div class="mb-3">
          <a href="<?= base_url('admin/data-buku')?>" class="btn btn-secondary">Kembali</a>
          <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>



