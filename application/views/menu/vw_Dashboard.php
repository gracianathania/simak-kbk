<div class="container-fluid py-4">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h4 class="font-weight-bolder text-dark mb-0">Dashboard Sistem KBK</h4>
            <p class="text-sm text-secondary mb-0">Ringkasan aktivitas, pendanaan, dan penelitian Kelompok Bidang Keahlian</p>
        </div>
        <div class="col-md-6 text-md-end mt-2 mt-md-0">
            <span class="badge bg-gradient-primary px-3 py-2 text-white">
                <i class="fas fa-check-circle me-1"></i> Mode Portofolio Demo Aktif
            </span>
        </div>
    </div>

    <!-- Stat Cards -->
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body p-3">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-xs mb-0 text-uppercase font-weight-bold text-secondary">Total Dana KBK</p>
                                <h5 class="font-weight-bolder mb-0 text-dark">
                                    Rp 27.000.000
                                </h5>
                                <span class="text-success text-xxs font-weight-bolder"><i class="fas fa-arrow-up me-1"></i>Realisasi 100%</span>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md d-flex align-items-center justify-content-center">
                                <i class="fas fa-wallet text-white" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body p-3">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-xs mb-0 text-uppercase font-weight-bold text-secondary">Agenda Event</p>
                                <h5 class="font-weight-bolder mb-0 text-dark">
                                    5 Agenda
                                </h5>
                                <span class="text-info text-xxs font-weight-bolder"><i class="fas fa-calendar-alt me-1"></i>Jadwal Aktif</span>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md d-flex align-items-center justify-content-center">
                                <i class="fas fa-calendar-check text-white" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body p-3">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-xs mb-0 text-uppercase font-weight-bold text-secondary">Riset & Penelitian</p>
                                <h5 class="font-weight-bolder mb-0 text-dark">
                                    5 Riset Aktif
                                </h5>
                                <span class="text-warning text-xxs font-weight-bolder"><i class="fas fa-book-open me-1"></i>Proyek Dosen</span>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md d-flex align-items-center justify-content-center">
                                <i class="fas fa-microscope text-white" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card shadow-sm border-0">
                <div class="card-body p-3">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-xs mb-0 text-uppercase font-weight-bold text-secondary">Bidang Keahlian</p>
                                <h5 class="font-weight-bolder mb-0 text-dark">
                                    4 Bidang KBK
                                </h5>
                                <span class="text-success text-xxs font-weight-bolder"><i class="fas fa-layer-group me-1"></i>Teknik Informatika</span>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md d-flex align-items-center justify-content-center">
                                <i class="fas fa-university text-white" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card shadow-sm border-0 z-index-2">
                <div class="card-header pb-0">
                    <h6 class="font-weight-bolder text-dark mb-0"><i class="fas fa-chart-bar text-primary me-2"></i>Statistik Realisasi Dana & Riset Per Bulan</h6>
                    <p class="text-xs text-secondary mb-0">Tren pengajuan anggaran dan publikasi ilmiah</p>
                </div>
                <div class="card-body p-4">
                    <div class="chart">
                        <div id="ColumnChart" class="chart-canvas"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 mb-lg-0 mb-4">
            <div class="card shadow-sm border-0 z-index-2">
                <div class="card-header pb-0">
                    <h6 class="font-weight-bolder text-dark mb-0"><i class="fas fa-chart-pie text-primary me-2"></i>Distribusi Aktivitas KBK</h6>
                    <p class="text-xs text-secondary mb-0">Persentase kontribusi per bidang keahlian</p>
                </div>
                <div class="card-body p-4">
                    <div class="chart">
                        <div id="PieChart" class="chart-canvas"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>