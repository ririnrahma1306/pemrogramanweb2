<?php $this->extend('layout/app'); ?>

<?php $this->section('username') ?><?php echo $username; ?><?php $this->endSection() ?>

<?php $this->section('content') ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Selamat Datang <?php echo $user->status; ?></h6>

        <!-- Click on Modal Button -->
        <button type="button" class="btn btn-success  d-block mt-3" data-bs-toggle="modal" data-bs-target="#modalForm">
            Tambah Mahasiswa
        </button>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Fakultas</th>
                        <th>Program Studi</th>
                        <th>Angkatan</th>
                        <th>Aksi</th>

                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($produk as $p) : ?>
                        <tr>
                            <td><?= $p['nim'] ?></td>
                            <td><?= $p['nama'] ?></td>
                            <td><?= $p['fakultas'] ?></td>
                            <td><?= $p['prodi'] ?></td>
                            <td><?= $p['angkatan'] ?></td>
                            <?php if ( $user->inGroup('admin')) : ?>
                                <td><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalFormEdit<?php echo $p['id']; ?>">Edit</button> | <a class="btn btn-danger" href="/hapus/<?= $p['id'] ?>">Hapus</a></td>
                            <?php endif; ?>


                        </tr>
                        <!-- modal edit -->
                        <div class="modal fade" id="modalFormEdit<?php echo $p['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabelEdit" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabelEdit"> Edit Produk </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="/edit">
                                            <input type="hidden" name="id" value="<?= $p['id'] ?>">
                                            <div class="mb-3">
                                                <label class="form-label">Nim</label>
                                                <input type="text" class="form-control" id="username" name="nim" placeholder="nim" value="<?= $p['nim'] ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="username" name="nama" placeholder="Nama" value="<?= $p['nama'] ?>" />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Fakultas</label>
                                                <input type="text" class="form-control" id="username" name="fakultas" placeholder="Fakultas" value="<?= $p['fakultas'] ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Program Studi</label>
                                                <input type="text" class="form-control" id="username" name="prodi" placeholder="Program Studi" value="<?= $p['prodi'] ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Angkatan</label>
                                                <input type="text" class="form-control" id="username" name="angkatan" placeholder="Angkatan" value="<?= $p['angkatan'] ?>" />
                                            </div>


                                            <div class="modal-footer d-block">

                                                <button type="submit" class="btn btn-success float-end">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- modal edit -->
<div class="modal fade" id="modalFormEdit" tabindex="-1" aria-labelledby="exampleModalLabelEdit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelEdit"> Edit Mahasiswa </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="/tambah">
                    <div class="mb-3">
                        <label class="form-label">Nim</label>
                        <input type="text" class="form-control" id="username" name="nim" placeholder="Nim" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" id="username" name="nama" placeholder="Nama" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fakultas</label>
                        <input type="text" class="form-control" id="username" name="fakultas" placeholder="Fakultas" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Program Studi</label>
                        <input type="text" class="form-control" id="username" name="prodi" placeholder="Program Studi" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Angkatan</label>
                        <input type="text" class="form-control" id="username" name="angkatan" placeholder="Angkatan" />
                    </div>

                    <div class="modal-footer d-block">

                        <button type="submit" class="btn btn-success float-end">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="/tambah">
                    <div class="mb-3">
                        <label class="form-label">Nim</label>
                        <input type="text" class="form-control" id="username" name="nim" placeholder="Nim" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" id="username" name="nama" placeholder="Nama" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fakultas</label>
                        <input type="text" class="form-control" id="username" name="fakultas" placeholder="Fakultas" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Program Studi</label>
                        <input type="text" class="form-control" id="username" name="prodi" placeholder="Program Studi" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Angkatan</label>
                        <input type="text" class="form-control" id="username" name="angkatan" placeholder="Angkatan" />
                    </div>


                    <div class="modal-footer d-block">

                        <button type="submit" class="btn btn-success float-end">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php $this->endSection(); ?>