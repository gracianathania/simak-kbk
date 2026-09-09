<div class="container-fluid py-4">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h4 class="font-weight-bolder text-dark mb-0"><?php echo $judul; ?></h4>
            <p class="text-sm text-secondary mb-0">Kelola dan rekapitulasi pengajuan pendanaan kegiatan KBK</p>
        </div>
    </div>

    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 shadow-sm border-0">
                <div class="card-header pb-0 d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h6 class="font-weight-bolder text-dark mb-0"><i class="fas fa-wallet text-primary me-2"></i>Daftar Pengajuan Dana KBK</h6>
                        <p class="text-xs text-secondary mb-0">Data pencatatan dana operasional dan kegiatan KBK</p>
                    </div>
                    <?php if ($user['role'] == 'Admin' || $user['role'] == 'Staff' || true) { ?>
                        <button type="button" class="btn bg-gradient-primary btn-sm mb-0 shadow-sm" data-bs-toggle="modal" data-bs-target="#tambahDanaModal">
                            <i class="fas fa-plus me-1"></i> Tambah Dana
                        </button>
                    <?php } ?>
                </div>
                <div class="card-body px-0 pt-2 pb-3">
                    <div class="table-responsive p-3" style="overflow-x: auto;">
                        <table class="table align-items-center mb-0 w-100" id="datatables" style="min-width: 950px;">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 cell-nowrap" style="width: 50px;">#</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 cell-nowrap" style="min-width: 150px; width: 150px;">Jumlah Dana</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 cell-nowrap" style="min-width: 160px; width: 160px;">Tanggal Pengajuan</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" style="min-width: 400px;">Keterangan</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 cell-nowrap" style="min-width: 140px; width: 140px;">Berkas Lampiran</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 cell-nowrap" style="min-width: 100px; width: 100px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($DanaKBK as $us) : ?>
                                    <tr>
                                        <td class="align-middle text-center cell-nowrap">
                                            <span class="text-secondary text-xs font-weight-bold"><?= $i; ?></span>
                                        </td>
                                        <td class="align-middle cell-nowrap" style="min-width: 150px;">
                                            <span class="badge bg-gradient-success text-white font-weight-bold text-xs px-2 py-1">
                                                Rp <?= number_format((int)$us['jumlah_dana'], 0, ',', '.'); ?>
                                            </span>
                                        </td>
                                        <td class="align-middle cell-nowrap" style="min-width: 160px;">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                <i class="far fa-calendar-alt text-primary me-1"></i>
                                                <?= !empty($us['tanggal_pengajuan']) ? date('d M Y', strtotime($us['tanggal_pengajuan'])) : '-'; ?>
                                            </span>
                                        </td>
                                        <td class="align-middle" style="min-width: 400px;">
                                            <p class="text-xs font-weight-bold mb-0 text-wrap" style="line-height: 1.5;"><?= $us['keterangan']; ?></p>
                                        </td>
                                        <td class="align-middle text-center cell-nowrap" style="min-width: 140px;">
                                            <?php if (!empty($us['file_dana'])) : ?>
                                                <a href="<?= base_url('assets/uploads/') . $us['file_dana']; ?>" target="_blank" class="btn btn-outline-info btn-xs mb-0 px-2 py-1" data-bs-toggle="tooltip" title="<?= $us['file_dana']; ?>">
                                                    <i class="fas fa-file-download me-1"></i> Unduh File
                                                </a>
                                            <?php else : ?>
                                                <span class="badge bg-light text-secondary text-xxs">Tidak ada file</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-middle text-center cell-nowrap" style="min-width: 100px;">
                                            <div class="d-flex justify-content-center gap-1">
                                                <button type="button" class="btn btn-outline-warning btn-xs mb-0 px-2 py-1" onclick="btnEditDana('<?= $us['id_dana']; ?>, <?= $us['jumlah_dana']; ?>, <?= $us['tanggal_pengajuan']; ?>, <?= htmlspecialchars($us['keterangan']); ?>, <?= $us['file_dana']; ?>, <?= $us['id_kbk']; ?>')" title="Ubah Data">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <a href="<?= base_url('DanaKBK/delete/') . $us['id_dana']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data dana ini?')" class="btn btn-outline-danger btn-xs mb-0 px-2 py-1" title="Hapus Data">
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

<!-- Modal Edit Dana -->
<div class="modal fade" id="ModalEditDana" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-gradient-primary text-white">
                <h5 class="modal-title text-white" id="modalEditLabel"><i class="fas fa-edit me-2"></i>Ubah Data Dana</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('DanaKBK/update'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_dana" id="id_dana">
                <div class="modal-body p-4">
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="jumlah_dana">Jumlah Dana (Rp):</label>
                        <input type="number" class="form-control" id="jumlah_dana" name="jumlah_dana" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="tanggal_pengajuan">Tanggal Pengajuan:</label>
                        <input type="date" class="form-control" id="tanggal_pengajuan" name="tanggal_pengajuan" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="keterangan">Keterangan / Keperluan:</label>
                        <textarea class="form-control" id="keterangan" rows="3" name="keterangan" required></textarea>
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
                        <label class="form-control-label" for="file_dana">Upload File Baru (Opsional):</label>
                        <input type="file" class="form-control" id="file_dana" name="file_dana">
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

<!-- Modal Tambah Dana -->
<div class="modal fade" id="tambahDanaModal" tabindex="-1" role="dialog" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-gradient-primary text-white">
                <h5 class="modal-title text-white" id="modalTambahLabel"><i class="fas fa-plus-circle me-2"></i>Tambah Pengajuan Dana</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('DanaKBK/create'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="jumlah_dana">Jumlah Dana (Rp):</label>
                        <input type="number" class="form-control" id="jumlah_dana" name="jumlah_dana" placeholder="Contoh: 5000000" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="tanggal_pengajuan">Tanggal Pengajuan:</label>
                        <input type="date" class="form-control" id="tanggal_pengajuan" name="tanggal_pengajuan" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="keterangan">Keterangan / Keperluan:</label>
                        <textarea class="form-control" id="keterangan" rows="3" name="keterangan" placeholder="Jelaskan kebutuhan pengajuan dana..." required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="file_dana">Lampiran Berkas (PDF/DOCX):</label>
                        <input type="file" class="form-control" id="file_dana" name="file_dana">
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
                    <button type="submit" class="btn bg-gradient-primary btn-sm">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>