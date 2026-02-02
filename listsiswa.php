<?php 
session_start();
if(!isset($_SESSION['admin_logged_in'])) { header("Location: login.php"); exit; }
include("config.php"); 
include("header.php"); // Memanggil header Bootstrap
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="h3">Daftar Calon Siswa</h2>
    <div>
        <a href="exportexcel.php" class="btn btn-outline-success me-2">
            <i class="bi bi-file-earmark-excel"></i> Export ke Excel
        </a>
        <a href="formdaftar.php" class="btn btn-success">+ Tambah Siswa</a>
    </div>
</div>
________________________________________


<div class="card p-4">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>Agama</th>
                    <th>Asal Sekolah</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);
                $no = 1;
                while($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$no++."</td>";
                    echo "<td><strong>".$siswa['nama']."</strong></td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td><span class='badge bg-info text-dark'>".$siswa['jenis_kelamin']."</span></td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>".$siswa['sekolah_asal']."</td>";
                    echo "<td class='text-center'>
                            <a href='hapus.php?id=".$siswa['id']."' class='btn btn-outline-danger btn-sm' onclick='return confirm(\"Hapus data ini?\")'>Hapus</a>
                          </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="mt-3 text-muted">Total Pendaftar: <?php echo mysqli_num_rows($query) ?></div>
</div>

<?php include("footer.php"); ?>
