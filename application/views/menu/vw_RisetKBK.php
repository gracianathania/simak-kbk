<div class="container-fluid py-4">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h4 class="font-weight-bolder text-dark mb-0"><?php echo $judul; ?></h4>
            <p class="text-sm text-secondary mb-0">Pendataan riset, publikasi ilmiah, dan proyek penelitian KBK</p>
        </div>
    </div>

    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 shadow-sm border-0">
                <div class="card-header pb-0 d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h6 class="font-weight-bolder text-dark mb-0"><i class="fas fa-microscope text-primary me-2"></i>Daftar Riset & Publikasi KBK</h6>
                        <p class="text-xs text-secondary mb-0">Seluruh proposal dan hasil penelitian dosen</p>
                    </div>
                    <button type="button" class="btn bg-gradient-primary btn-sm mb-0 shadow-sm" data-bs-toggle="modal" data-bs-target="#tambahRisetModal">
                        <i class="fas fa-plus me-1"></i> Tambah Riset
                    </button>
                </div>
                <div class="card-body px-0 pt-2 pb-3">
                    <div class="table-responsive p-3" style="overflow-x: auto;">
                        <table class="table align-items-center mb-0 w-100" id="datatables" style="min-width: 1100px;">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 cell-nowrap" style="width: 50px;">#</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" style="min-width: 250px; width: 280px;">Judul Riset</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" style="min-width: 180px; width: 200px;">Peneliti</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 cell-nowrap" style="min-width: 170px; width: 170px;">Periode Penelitian</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" style="min-width: 400px;">Deskripsi</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 cell-nowrap" style="min-width: 140px; width: 140px;">Berkas Riset</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 cell-nowrap" style="min-width: 100px; width: 100px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($RisetKBK as $us) : ?>
                                    <tr>
                                        <td class="align-middle text-center cell-nowrap">
                                            <span class="text-secondary text-xs font-weight-bold"><?= $i; ?></span>
                                        </td>
                                        <td class="align-middle" style="min-width: 250px;">
                                            <span class="text-dark font-weight-bold text-xs text-wrap d-inline-block" style="line-height: 1.4;"><?= $us['judul_riset']; ?></span>
                                        </td>
                                        <td class="align-middle" style="min-width: 180px;">
                                            <span class="badge bg-light text-dark text-xxs font-weight-bold border text-wrap text-start d-inline-block" style="line-height: 1.4;">
                                                <i class="fas fa-user-graduate text-primary me-1"></i>
                                                <?= $us['peneliti']; ?>
                                            </span>
                                        </td>
                                        <td class="align-middle cell-nowrap" style="min-width: 170px;">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                <i class="far fa-calendar-alt text-info me-1"></i>
                                                <?= !empty($us['tanggal_mulai']) ? date('d M Y', strtotime($us['tanggal_mulai'])) : '-'; ?> s/d <?= !empty($us['tanggal_selesai']) ? date('d M Y', strtotime($us['tanggal_selesai'])) : '-'; ?>
                                            </span>
                                        </td>
                                        <td class="align-middle" style="min-width: 400px;">
                                            <p class="text-xs text-secondary mb-0 text-wrap" style="line-height: 1.5;"><?= $us['deskripsi_riset']; ?></p>
                                        </td>
                                        <td class="align-middle text-center cell-nowrap" style="min-width: 140px;">
                                            <?php if (!empty($us['file_riset'])) : ?>
                                                <a href="<?= base_url('assets/uploads/') . $us['file_riset']; ?>" target="_blank" class="btn btn-outline-info btn-xs mb-0 px-2 py-1" data-bs-toggle="tooltip" title="<?= $us['file_riset']; ?>">
                                                    <i class="fas fa-file-download me-1"></i> Unduh File
                                                </a>
                                            <?php else : ?>
                                                <span class="badge bg-light text-secondary text-xxs">Tidak ada file</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-middle text-center cell-nowrap" style="min-width: 100px;">
                                            <div class="d-flex justify-content-center gap-1">
                                                <button type="button" class="btn btn-outline-warning btn-xs mb-0 px-2 py-1" onclick="btnEditRiset('<?= $us['id_riset']; ?>, <?= htmlspecialchars($us['judul_riset']); ?>, <?= htmlspecialchars($us['peneliti']); ?>, <?= $us['tanggal_mulai']; ?>, <?= $us['tanggal_selesai']; ?>, <?= htmlspecialchars($us['deskripsi_riset']); ?>, <?= $us['file_riset']; ?>, <?= $us['id_kbk']; ?>')" title="Ubah Riset">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <a href="<?= base_url('RisetKBK/delete/') . $us['id_riset']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus riset ini?')" class="btn btn-outline-danger btn-xs mb-0 px-2 py-1" title="Hapus Riset">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Riset -->
<div class="modal fade" id="ModalEditRiset" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-gradient-primary text-white">
                <h5 class="modal-title text-white" id="modalEditLabel"><i class="fas fa-edit me-2"></i>Ubah Riset KBK</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('RisetKBK/update/'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_riset" id="id_riset">
                <div class="modal-body p-4">
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="judul_riset">Judul Riset / Penelitian:</label>
                        <input type="text" class="form-control" id="judul_riset" name="judul_riset" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="peneliti">Nama Peneliti / Dosen:</label>
                        <input type="text" class="form-control" id="peneliti" name="peneliti" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label class="form-control-label" for="tanggal_mulai">Tanggal Mulai:</label>
                            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label class="form-control-label" for="tanggal_selesai">Tanggal Selesai:</label>
                            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="deskripsi_riset">Deskripsi Riset:</label>
                        <textarea class="form-control" id="deskripsi_riset" name="deskripsi_riset" rows="3" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="file_sebelumnya">File Terlampir:</label>
                        <div>
                            <a id="link_file" target="_blank" class="btn btn-outline-secondary btn-xs mb-1">
                                <i class="fas fa-file me-1"></i> <span id="name_file"></span>
                            </a>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="file_riset">Upload File Baru (Opsional):</label>
                        <input type="file" class="form-control" id="file_riset" name="file_riset">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="id_kbk">Kelompok Bidang Keahlian (KBK):</label>
                        <select name="id_kbk" id="id_kbk" class="form-control" required>
                            <option value="">-- Pilih KBK --</option>
                            <?php foreach ($kbk as $k) : ?>
                                <option value="<?= $k['id_kbk']; ?>"><?= $k['nama_kbk']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn bg-gradient-primary btn-sm">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Tambah Riset -->
<div class="modal fade" id="tambahRisetModal" tabindex="-1" role="dialog" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-gradient-primary text-white">
                <h5 class="modal-title text-white" id="modalTambahLabel"><i class="fas fa-plus-circle me-2"></i>Tambah Riset KBK</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('RisetKBK/create'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="judul_riset">Judul Riset / Penelitian:</label>
                        <input type="text" class="form-control" id="judul_riset" name="judul_riset" placeholder="Contoh: Klasifikasi Citra Medis dengan CNN" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="peneliti">Nama Peneliti / Dosen:</label>
                        <input type="text" class="form-control" id="peneliti" name="peneliti" placeholder="Contoh: Dr. Ir. Ahmad, M.Kom" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label class="form-control-label" for="tanggal_mulai">Tanggal Mulai:</label>
                            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label class="form-control-label" for="tanggal_selesai">Tanggal Selesai:</label>
                            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="deskripsi_riset">Deskripsi Riset:</label>
                        <textarea class="form-control" id="deskripsi_riset" name="deskripsi_riset" rows="3" placeholder="Rangkuman latar belakang dan target luaran..." required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="file_riset">Lampiran Berkas (PDF/DOCX):</label>
                        <input type="file" class="form-control" id="file_riset" name="file_riset">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="id_kbk">Kelompok Bidang Keahlian (KBK):</label>
                        <select name="id_kbk" class="form-control" required>
                            <option value="">-- Pilih KBK --</option>
                            <?php foreach ($kbk as $k) : ?>
                                <option value="<?= $k['id_kbk']; ?>"><?= $k['nama_kbk']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn bg-gradient-primary btn-sm">Simpan Riset</button>
                </div>
            </form>
        </div>
    </div>
</div>