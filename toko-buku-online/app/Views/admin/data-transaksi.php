<?= $this->extend('admin/layout');?>

<?= $this->section('mainadmin') ?> 

    <div class="container">
        <div class="row">
            <!-- Start Tabel -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tanggal Transaksi</th>
                        <th scope="col">Buku</th>
                        <th scope="col">Pelanggan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kamis, 5 Desember 2024</td>
                        <td>Bumi Manusia</td>
                        <td>Eka Purnama</td>
                        <td>Sukses</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#editModal" type="button" class="btn btn-primary">Edit</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#hapusModal" type="button" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jumat, 6 Desember 2024</td>
                        <td>Laskar Pelangi</td>
                        <td>Indo Masse</td>
                        <td>Sukses</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#editModal" type="button" class="btn btn-primary">Edit</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#hapusModal" type="button" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Sabtu, 7 Desember 2024</td>
                        <td>The Coldest Boyfriend</td>
                        <td>Aisyipa Arum</td>
                        <td>Sukses</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#editModal" type="button" class="btn btn-primary">Edit</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#hapusModal" type="button" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Minggu, 8 Desember 2024</td>
                        <td>Tentang Kamu</td>
                        <td>Julia Herwanda</td>
                        <td>Sukses</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#editModal" type="button" class="btn btn-primary">Edit</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#hapusModal" type="button" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Senin, 9 Desember 2024</td>
                        <td>Pulang Pergi</td>
                        <td>Mamat Tatang</td>
                        <td>Sukses</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#editModal" type="button" class="btn btn-primary">Edit</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#hapusModal" type="button" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Selasa, 10 Desember 2024</td>
                        <td>The Start and I</td>
                        <td>Supratman</td>
                        <td>Sukses</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#editModal" type="button" class="btn btn-primary">Edit</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#hapusModal" type="button" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- End Tabel -->

            <!-- Modal Edit -->
            <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="tgl-transaksi" class="col-form-label">Tanggal Transaksi</label>
                                    <input type="text" class="form-control" id="tgl-transaksi">
                                </div>
                                <div class="mb-3">
                                    <label for="buku" class="col-form-label">Buku</label>
                                    <input type="text" class="form-control" id="buku">
                                </div>
                                <div class="mb-3">
                                    <label for="pelanggan" class="col-form-label">Pelanggan</label>
                                    <input type="text" class="form-control" id="pelanggan">
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="col-form-label">Status</label>
                                    <select class="form-select form-select-sm" aria-label="Small select example">
                                        <option selected>Pilih Salah Satu</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Sukses</option>
                                        <option value="3">Error</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-success">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal Edit -->

            <!-- Modal Hapus -->
            <div class="modal fade" id="hapusModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah anda yakin menghapus data ini?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal Hapus -->
        </div>
    </div>

    <?= $this->endSection() ?>