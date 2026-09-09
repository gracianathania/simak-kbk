<div class="container-fluid py-4">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h4 class="font-weight-bolder text-dark mb-0"><?php echo $judul; ?></h4>
            <p class="text-sm text-secondary mb-0">Kelola agenda, workshop, dan kegiatan Kelompok Bidang Keahlian</p>
        </div>
    </div>

    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 shadow-sm border-0">
                <div class="card-header pb-0 d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h6 class="font-weight-bolder text-dark mb-0"><i class="fas fa-calendar-check text-primary me-2"></i>Daftar Agenda & Event KBK</h6>
                        <p class="text-xs text-secondary mb-0">Seluruh jadwal kegiatan dan seminar akademik</p>
                    </div>
                    <button type="button" class="btn bg-gradient-primary btn-sm mb-0 shadow-sm" data-bs-toggle="modal" data-bs-target="#tambahEventModal">
                        <i class="fas fa-plus me-1"></i> Tambah Event
                    </button>
                </div>
                <div class="card-body px-0 pt-2 pb-3">
                    <div class="table-responsive p-3" style="overflow-x: auto;">
                        <table class="table align-items-center mb-0 w-100" id="datatables" style="min-width: 1050px;">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 cell-nowrap" style="width: 50px;">#</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" style="min-width: 250px; width: 280px;">Nama Event</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 cell-nowrap" style="min-width: 140px; width: 140px;">Tanggal</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" style="min-width: 180px; width: 190px;">Lokasi</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" style="min-width: 400px;">Deskripsi</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 cell-nowrap" style="min-width: 140px; width: 140px;">Berkas Lampiran</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 cell-nowrap" style="min-width: 100px; width: 100px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($EventKBK as $us) : ?>
                                    <tr>
                                        <td class="align-middle text-center cell-nowrap">
                                            <span class="text-secondary text-xs font-weight-bold"><?= $i; ?></span>
                                        </td>
                                        <td class="align-middle" style="min-width: 250px;">
                                            <span class="text-dark font-weight-bold text-xs text-wrap d-inline-block" style="line-height: 1.4;"><?= $us['nama_event']; ?></span>
                                        </td>
                                        <td class="align-middle cell-nowrap" style="min-width: 140px;">
                                            <span class="badge bg-light text-dark font-weight-bold text-xxs border">
                                                <i class="far fa-calendar-alt text-primary me-1"></i>
                                                <?= !empty($us['tanggal_event']) ? date('d M Y', strtotime($us['tanggal_event'])) : '-'; ?>
                                            </span>
                                        </td>
                                        <td class="align-middle" style="min-width: 180px;">
                                            <span class="text-secondary text-xs text-wrap d-inline-block" style="line-height: 1.4;">
                                                <i class="fas fa-map-marker-alt text-danger me-1"></i>
                                                <?= $us['lokasi_event']; ?>
                                            </span>
                                        </td>
                                        <td class="align-middle" style="min-width: 400px;">
                                            <p class="text-xs text-secondary mb-0 text-wrap" style="line-height: 1.5;"><?= $us['deskripsi_event']; ?></p>
                                        </td>
                                        <td class="align-middle text-center cell-nowrap" style="min-width: 140px;">
                                            <?php if (!empty($us['file_event'])) : ?>
                                                <a href="<?= base_url('assets/uploads/') . $us['file_event']; ?>" target="_blank" class="btn btn-outline-info btn-xs mb-0 px-2 py-1" data-bs-toggle="tooltip" title="<?= $us['file_event']; ?>">
                                                    <i class="fas fa-file-download me-1"></i> Unduh File
                                                </a>
                                            <?php else : ?>
                                                <span class="badge bg-light text-secondary text-xxs">Tidak ada file</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-middle text-center cell-nowrap" style="min-width: 100px;">
                                            <div class="d-flex justify-content-center gap-1">
                                                <button type="button" class="btn btn-outline-warning btn-xs mb-0 px-2 py-1" onclick="btnEditEvent('<?= $us['id_event']; ?>, <?= htmlspecialchars($us['nama_event']); ?>, <?= $us['tanggal_event']; ?>, <?= htmlspecialchars($us['lokasi_event']); ?>, <?= htmlspecialchars($us['deskripsi_event']); ?>, <?= $us['file_event']; ?>')" title="Ubah Event">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <a href="<?= base_url('EventKBK/delete/') . $us['id_event']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus event ini?')" class="btn btn-outline-danger btn-xs mb-0 px-2 py-1" title="Hapus Event">
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

<!-- Modal Edit Event -->
<div class="modal fade" id="ModalEditEvent" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-gradient-primary text-white">
                <h5 class="modal-title text-white" id="modalEditLabel"><i class="fas fa-edit me-2"></i>Ubah Event KBK</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('EventKBK/update'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_event" id="id_event">
                <div class="modal-body p-4">
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="nama_event">Nama Event / Acara:</label>
                        <input type="text" class="form-control" id="nama_event" name="nama_event" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="tanggal_event">Tanggal Pelaksanaan:</label>
                        <input type="date" class="form-control" id="tanggal_event" name="tanggal_event" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="lokasi_event">Lokasi / Tempat:</label>
                        <input type="text" class="form-control" id="lokasi_event" name="lokasi_event" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="deskripsi_event">Deskripsi Event:</label>
                        <textarea class="form-control" id="deskripsi_event" name="deskripsi_event" rows="3" required></textarea>
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
                        <label class="form-control-label" for="file_event">Upload File Baru (Opsional):</label>
                        <input type="file" class="form-control" name="file_event">
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

<!-- Modal Tambah Event -->
<div class="modal fade" id="tambahEventModal" tabindex="-1" role="dialog" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-gradient-primary text-white">
                <h5 class="modal-title text-white" id="modalTambahLabel"><i class="fas fa-plus-circle me-2"></i>Tambah Agenda Event KBK</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('EventKBK/create'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="nama_event">Nama Event / Acara:</label>
                        <input type="text" class="form-control" id="nama_event" name="nama_event" placeholder="Contoh: Workshop Cloud Computing" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="tanggal_event">Tanggal Pelaksanaan:</label>
                        <input type="date" class="form-control" id="tanggal_event" name="tanggal_event" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="lokasi_event">Lokasi / Ruangan:</label>
                        <input type="text" class="form-control" id="lokasi_event" name="lokasi_event" placeholder="Contoh: Lab Komputer 301 / Zoom Meeting" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="deskripsi_event">Deskripsi Kegiatan:</label>
                        <textarea class="form-control" id="deskripsi_event" name="deskripsi_event" rows="3" placeholder="Rincian agenda kegiatan..." required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="file_event">Lampiran Berkas (PDF/DOCX):</label>
                        <input type="file" class="form-control" name="file_event">
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
                    <button type="submit" class="btn bg-gradient-primary btn-sm">Simpan Event</button>
                </div>
            </form>
        </div>
    </div>
</div>