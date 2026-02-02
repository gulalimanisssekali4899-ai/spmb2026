<?php include("header.php"); ?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card p-4">
            <h3 class="mb-4">Formulir Pendaftaran</h3>
            <form action="prosespendaftaran.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama sesuai ijazah" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3" required></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" checked>
                                <label class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                                <label class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Agama</label>
                        <select name="agama" class="form-select">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Katolik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                        </select>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Sekolah Asal</label>
                    <input type="text" name="sekolah_asal" class="form-control" placeholder="Nama SMP/MTs asal" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" name="daftar" class="btn btn-primary btn-lg">Kirim Pendaftaran</button>
                    <a href="index.php" class="btn btn-light text-muted">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>

