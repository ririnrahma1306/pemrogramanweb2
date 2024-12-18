<?= $this->extend('admin/layout'); ?>

<?= $this->section('mainadmin'); ?>

<div class="">
  <br>
  <h1>Data Buku</h1>
  <!-- Topbar -->

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <!-- Topbar Search -->
  <form
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
        aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button">
          <i class="fas fa-search fa-sm"></i>
        </button>
      </div>
    </div>
  </form>

  <hr>
  <div class="my-3">
    <button data-bs-toggle="modal" data-bs-target="#tambahModal" class="btn btn-dark"><i class="bi bi-plus-lg"></i>+ Tambah Data</button>
  </div>

  <table class="table table-striped mt-3">
    <thead>
      <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Tahun</th>
        <th>Thumbnail URL</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>

      <!-- Data Dummy -->
      <tr>
        <td>1</td>
        <td>Menjadi Mastering Mewing</td>
        <td>Sigma</td>
        <td>Gramedia</td>
        <td>2023</td>
        <td>https://google.com/1.jpg</td>
        <td>
          <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-id="1"><i class="bi bi-pencil-square"></i> Edit</button>
          <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-id="1"><i class="bi bi-trash"></i> Hapus</button>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Aku Dan Dia</td>
        <td>Asep</td>
        <td>Gramedia</td>
        <td>2020</td>
        <td>https://google.com/2.jpg</td>
        <td>
          <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-id="2"><i class="bi bi-pencil-square"></i> Edit</button>
          <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-id="2"><i class="bi bi-trash"></i> Hapus</button>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Cinta Itu Luka</td>
        <td>Eka Kurniawan</td>
        <td>Gramedia</td>
        <td>2018</td>
        <td>https://google.com/3.jpg</td>
        <td>
          <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-id="2"><i class="bi bi-pencil-square"></i> Edit</button>
          <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-id="2"><i class="bi bi-trash"></i> Hapus</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</div>

<!-- Modal Tambah Buku -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Buku</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/databuku.php/simpan" method="POST" id="formTambah">
          <div class="mb-3">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control">
          </div>
          <div class="mb-3">
            <label for="pengarang">Pengarang</label>
            <input type="text" name="pengarang" id="pengarang" class="form-control">
          </div>
          <div class="mb-3">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" class="form-control">
          </div>
          <div class="mb-3">
            <label for="tahun">Tahun</label>
            <input type="text" name="tahun" id="tahun" class="form-control">
          </div>
          <div class="mb-3">
            <label for="tahun">Thumbnail URL</label>
            <input type="url" name="thumbnail_url" id="thumbnail_url" class="form-control" placeholder="https:/example.com/image.jpg">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formTambah" class="btn btn-primary"><i class="bi bi-floppy"></i>Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal hapus-->
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/index.php/hapus" method="POST" id="formHapus">
          <input type="hidden" name="id" id="idHapus" value="">
        </form>
        <p class="">Apakah Anda yakin menghapus data dengan id <span id="textId"></span> ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formHapus" class="btn btn-danger"><i class="bi-trash"></i>Hapus</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Buku  -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Form Edit Buku</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/index.php/edit" method="POST" id="formEdit">
          <input type="hidden" name="id" id="idEdit">
          <div class="mb-3">
            <label for="judulEdit">Judul</label>
            <input type="text" name="judul" id="judulEdit" class="form-control">
          </div>
          <div class="mb-3">
            <label for="pengarangEdit">Pengarang</label>
            <input type="text" name="pengarang" id="pengarangEdit" class="form-control">
          </div>
          <div class="mb-3">
            <label for="penerbitEdit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbitEdit" class="form-control">
          </div>
          <div class="mb-3">
            <label for="tahunEdit">Tahun</label>
            <input type="text" name="tahun" id="tahunEdit" class="form-control">
          </div>
          <div class="mb-3">
            <label for="tahunEdit">Thumbnail URL</label>
            <input type="url" name="thumbnail" id="thumbnailEdit" class="form-control" placeholder="https:/example.com/image.jpg">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formEdit" class="btn btn-primary"><i class="bi bi-save"></i> Simpan</button>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>