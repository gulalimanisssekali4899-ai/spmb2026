<?php
include("config.php");
include("header.php");

// Kalau tidak ada ID di query string, kembali ke list-siswa
if( !isset($_GET['id']) ) {
    header('Location: listsiswa.php');
}



$id = $_GET['id'];

// Ambil data siswa berdasarkan ID
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// Jika data yang diedit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("Data tidak ditemukan...");
}
?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card p-4">
            <h3 class="mb-4">Edit Data Pendaftar</h3>
            <form action="prosesedit.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $siswa['nama'] ?>" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3" required><?php echo $siswa['alamat'] ?></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <?php $jk = $siswa['jenis_kelamin']; ?>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked": "" ?>>
                                <label class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?>>
                                <label class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Agama</label>
                        <?php $agama = $siswa['agama']; ?>
                        <select name="agama" class="form-select">
                            <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                            <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                            <option <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Katolik</option>
                            <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                            <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                        </select>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Sekolah Asal</label>
                    <input type="text" name="sekolah_asal" class="form-control" value="<?php echo $siswa['sekolah_asal'] ?>" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" name="simpan" class="btn btn-warning btn-lg">Simpan Perubahan</button>
                    <a href="listsiswa.php" class="btn btn-light">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- <?php include("footer.php"); ?> -->
