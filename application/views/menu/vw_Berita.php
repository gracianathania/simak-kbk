<div class="container-fluid py-4">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-12">
            <?php
            if ($user['role'] == 'Admin') { ?>
                <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#tambahBeritaModal">
                    Tambah Berita
                </button>
                <div class="modal fade" id="tambahBeritaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
                                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="judul_berita">Nama Berita:</label>
                                        <input type="text" class="form-control" id="judul_berita">
                                    </div>
                                    <div class="form-group">
                                        <label for="isi_berita">Isi Berita:</label>
                                        <input type="date" class="form-control" id="isi_berita">
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_posting">Tanggal Posting:</label>
                                        <input type="date" class="form-control" id="tanggal_posting">
                                    </div>
                                    <div class="form-group">
                                        <label for="sumber_data">Sumber Data:</label>
                                        <input class="form-control" id="sumber_data"></input>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn bg-gradient-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
            <?php } ?>
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary font-weight-bolder">#</th>
                                    <th class="text-center text-uppercase text-secondary font-weight-bolder">Nama Berita</th>
                                    <th class="text-center text-uppercase text-secondary font-weight-bolder">Tanggal Berita</th>
                                    <th class="text-center text-uppercase text-secondary font-weight-bolder">Tempat Berita</th>
                                    <th class="text-center text-uppercase text-secondary font-weight-bolder">Deskripsi Berita</th>
                                    <th class="text-center text-uppercase text-secondary font-weight-bolder">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle text-center">
                                        <span class="text-center text-secondary text-s">1</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-s">Kasus Penculikan</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-s">15 November 2023</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-s">Rumbay</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ut nulla illo excepturi? Excepturi, debitis ullam assumenda hic amet dolorum delectus perspiciatis vitae cum velit.</span>
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <a href="javascript:;" class="text-secondary text-warning" data-bs-toggle="modal" data-bs-target="#editBerita">
                                            Ubah
                                        </a> |
                                        <!-- Modal -->
                                        <div class="modal fade" id="editBerita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Event</h5>
                                                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="judul_berita">Nama Berita:</label>
                                                                <input type="text" class="form-control" id="judul_berita">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="isi_berita">Isi Berita:</label>
                                                                <input type="date" class="form-control" id="isi_berita">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tanggal_posting">Tanggal Posting:</label>
                                                                <input type="date" class="form-control" id="tanggal_posting">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="sumber_data">Sumber Data:</label>
                                                                <input class="form-control" id="sumber_data"></input>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
                                                        <button type="button" class="btn bg-gradient-primary">Ubah</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="javascript:;" class="text-secondary text-danger" data-toggle="tooltip" data-original-title="Hapus Berita">
                                            Hapus
                                        </a> |
                                        <a href="javascript:;" class="text-secondary text-info" data-toggle="tooltip" data-original-title="Detail Berita">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>