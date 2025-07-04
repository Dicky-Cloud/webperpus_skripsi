<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Dashboard admin perpustakaan" />
        <meta name="author" content="Admin Perpustakaan" />
        <title>Dashboard - Admin Perpustakaan</title>
        <!-- CDN for Datatables and Font Awesome -->
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="<?= base_url('css/styles.css'); ?>" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <!-- Top Navigation Bar -->
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand ps-3" href="<?= base_url('dashboard'); ?>">Admin Perpustakaan</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
     
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?= base_url('home'); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="<?= base_url('Rekomendasi'); ?>">
                                <div class="sb-nav-link-icon"><i class="fa-brands fa-gratipay"></i></div>
                                Rekomendasi
                            </a>

                            <div class="sb-sidenav-menu-heading">Master Data</div>
                            <!-- Data Anggota Section -->
                            <a class="nav-link" href="<?= base_url('anggota'); ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                                Data Anggota
                            </a>
                            <!-- Data Buku Section -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBuku" aria-expanded="false" aria-controls="collapseBuku">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-book"></i></div>
                                Data Buku
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseBuku" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('buku'); ?>">Buku</a>
                                    <a class="nav-link" href="<?= base_url('buku/tambah'); ?>">Tambah Buku</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Data Laporan</div>
                            <!-- Data Anggota Section -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsetransaksi" aria-expanded="false" aria-controls="collapsetransaksi">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-book-open"></i></div>
                                Data Laporan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsetransaksi" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('Laporan_p'); ?>">Laporan</a>
                                    <a class="nav-link" href="<?= base_url('peminjaman'); ?>">Data Peminjaman</a>
                                       </nav>
                            </div>
                            <!-- Laporan Section -->
                        
                            <!-- Data Anggota Section -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsemetode" aria-expanded="false" aria-controls="collapsetransaksi">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-book-open"></i></div>
                                Metode SPK SAW
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsemetode" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= base_url('penilaian'); ?>">Data Kriteria</a>
                                <a class="nav-link" href="<?= base_url('kriteria'); ?>">Data Alternatif</a>
                                 <a class="nav-link" href="<?= base_url('hasil'); ?>">Nilai /proses spk</a>
                                       </nav>
                            </div>

                            <!-- Pages Section -->
                           
                              <!-- Backup Data Section -->
                            <a class="nav-link" href="<?= base_url('backup'); ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-database"></i></div>
                                Backup Data
                            </a>

                        </div>
                    </div>
                </nav>
            </div>

            <!-- Content -->
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4 mt-5">
    <h1 class="mt-4" style="font-size: 30px;">Data Buku</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Buku + Penilaian
        </div>
        <div class="card-body">
            <!-- Daftar Buku -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>C1 (Rating)</th>
                            <th>C2 (Jumlah Peminjaman)</th>
                            <th>C3 (Tahun Terbit)</th>
                            <th>C4 (Jumlah Halaman)</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php if(!empty($penilaian)): ?>
                    <?php foreach ($penilaian as $index => $penilaian_item): ?>
                    <tr>
                        <td><?= $index + 1; ?></td>
                        <td><?= $penilaian_item->judul; ?></td>
                        <td><?= $penilaian_item->pilihan_rating; ?>  <!-- Menampilkan pilihan rating dan bobotnya -->
                        <td><?= $penilaian_item->pilihan_peminjaman; ?> <!-- Menampilkan pilihan peminjaman dan bobotnya -->
                        <td><?= $penilaian_item->pilihan_terbit; ?>  <!-- Menampilkan pilihan terbit dan bobotnya -->
                        <td><?= $penilaian_item->pilihan_halaman; ?>  <!-- Menampilkan pilihan halaman dan bobotnya -->
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Data penilaian belum tersedia.</td>
                    </tr>
                <?php endif; ?>

                </tbody>

                </table>
            </div>
</div>
</main><div class="container-fluid px-4 mt-5">
    <h1 class="mt-4" style="font-size: 30px;">Data Buku dan Penilaian</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Buku + Penilaian
        </div>
        <div class="card-body">
            <!-- Daftar Buku dengan Bobot -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>C1 (Rating)</th>
                            <th>C2 (Jumlah Peminjaman)</th>
                            <th>C3 (Tahun Terbit)</th>
                            <th>C4 (Jumlah Halaman)</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php 
    // Inisialisasi variabel untuk menjumlahkan bobot
    $total_bobot_rating = 0;
    $total_bobot_peminjaman = 0;
    $total_bobot_terbit = 0;
    $total_bobot_halaman = 0;

    if (!empty($penilaian)): ?>
    <?php foreach ($penilaian as $index => $penilaian_item): 
        // Pastikan setiap item penilaian memiliki data yang diinginkan
        $bobot_rating = isset($penilaian_item->bobot_rating) ? $penilaian_item->bobot_rating : 0;
        $bobot_peminjaman = isset($penilaian_item->bobot_peminjaman) ? $penilaian_item->bobot_peminjaman : 0;
        $bobot_terbit = isset($penilaian_item->bobot_terbit) ? $penilaian_item->bobot_terbit : 0;
        $bobot_halaman = isset($penilaian_item->bobot_halaman) ? $penilaian_item->bobot_halaman : 0;

        // Menambah bobot masing-masing kolom
        $total_bobot_rating += $bobot_rating;
        $total_bobot_peminjaman += $bobot_peminjaman;
        $total_bobot_terbit += $bobot_terbit;
        $total_bobot_halaman += $bobot_halaman;
    ?>
    <tr>
        <td><?= $index + 1; ?></td>
        <td><?= $penilaian_item->judul; ?></td>
        <td>
            <?= isset($penilaian_item->rating) ? $penilaian_item->rating : (isset($penilaian_item->pilihan_rating) ? $penilaian_item->pilihan_rating : 'Tidak ada'); ?>
            (Bobot: <?= $bobot_rating; ?>)
        </td>
        <td>
            <?= isset($penilaian_item->jumlah_peminjaman) ? $penilaian_item->jumlah_peminjaman : (isset($penilaian_item->pilihan_peminjaman) ? $penilaian_item->pilihan_peminjaman : 'Tidak ada'); ?>
            (Bobot: <?= $bobot_peminjaman; ?>)
        </td>
        <td>
            <?= isset($penilaian_item->tahun_terbit) ? $penilaian_item->tahun_terbit : (isset($penilaian_item->pilihan_terbit) ? $penilaian_item->pilihan_terbit : 'Tidak ada'); ?>
            (Bobot: <?= $bobot_terbit; ?>)
        </td>
        <td>
            <?= isset($penilaian_item->jumlah_halaman) ? $penilaian_item->jumlah_halaman : (isset($penilaian_item->pilihan_halaman) ? $penilaian_item->pilihan_halaman : 'Tidak ada'); ?>
            (Bobot: <?= $bobot_halaman; ?>)
        </td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
        <td colspan="6" class="text-center">Data penilaian belum tersedia.</td>
    </tr>
    <?php endif; ?>
</tbody>



                    <tfoot>
                        <tr>
                            <th colspan="2">Total Bobot</th>
                            <th><?= $total_bobot_rating; ?></th>
                            <th><?= $total_bobot_peminjaman; ?></th>
                            <th><?= $total_bobot_terbit; ?></th>
                            <th><?= $total_bobot_halaman; ?></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <h1 class="mt-4" style="font-size: 30px;">Hasil Perhitungan Normalisasi</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Tabel Normalisasi
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Normalisasi C1 (Rating)</th>
                            <th>Normalisasi C2 (Jumlah Peminjaman)</th>
                            <th>Normalisasi C3 (Tahun Terbit)</th>
                            <th>Normalisasi C4 (Jumlah Halaman)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($penilaian)): ?>
                            <?php foreach ($penilaian as $index => $item): ?>
                                <tr>
                                    <td><?= $index + 1; ?></td>
                                    <td><?= htmlspecialchars($item->judul); ?></td>
                                    <td><?= number_format($item->normalisasi_rating, 3); ?></td>
                                    <td><?= number_format($item->normalisasi_peminjaman, 3); ?></td>
                                    <td><?= number_format($item->normalisasi_terbit, 3); ?></td>
                                    <td><?= number_format($item->normalisasi_halaman, 3); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center">Data normalisasi belum tersedia.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><div class="container mt-5">
    <h1 class="mt-4" style="font-size: 30px;">Hasil Nilai Rangking</h1>
    <div class="row">
        <!-- Bagian Tabel -->
        <div class="col-md-6"> <!-- Menggunakan setengah lebar layar pada medium ke atas -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Nilai Rangking
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><strong>No</strong></th>
                                    <th><strong>Judul Buku</strong></th>
                                    <th><strong>Nilai Akhir</strong></th>
                                    <th><strong>Ranking</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($penilaian as $index => $item): ?>
                                    <tr>
                                        <td><strong><?= $index + 1; ?></strong></td>
                                        <td><?= htmlspecialchars($item->judul); ?></td>
                                        <td><strong><?= number_format($item->nilai_akhir, 3); ?></strong></td>
                                        <td><strong><?= $index + 1; ?></strong></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Lain yang Bersebelahan -->
        <div class="col-md-6"> <!-- Menggunakan setengah lebar layar pada medium ke atas -->
            <div class="card mb-4">
                <div class="card-header">
                    Kesimpulan
                </div>
                <div class="card-body">
                    <p><strong>Berdasarkan hasil perhitungan nilai rangking.</strong></p>
                    <p>Buku yang memiliki nilai akhir tertinggi menunjukkan kualitas yang lebih baik dibandingkan buku lainnya.</p>
                </div>
            </div>
        </div>
    </div>
</div>


                <!-- Footer -->
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy;  Dicky Arfiansyah 2025</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('js/scripts.js'); ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('js/datatables-simple-demo.js'); ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
        <script src="<?= base_url('js/chart-area-demo.js'); ?>"></script>
        <script src="<?= base_url('js/chart-bar-demo.js'); ?>"></script> <!-- Script for Area Chart -->
       

    </body>
</html>
