<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h2>Halaman user</h2>
	<!-- Modal Tambah -->
 <div class="modal fade" id="modal-tambah-riwayat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" arialabelledby="modal-tambah-riwayatLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-tambah-riwayatLabel">isi form absensi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url ?>/database/pekerjaan/create-riwayat-pekerjaan.php" method="post">
                <div class="modal-body">
                    <label>Nama Cabang</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-fw fa-user-tie"></i></span>
                        <input type="text" class="form-control">
                    </div>

                    <label>Nama Karyawan</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-fw fa-building"></i></span>
                        <input type="text" name="nama_sekolah" class="form-control" >
                    </div>

                    <label>Masuk/Pulang</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-fw fa-map-marked-alt"></i></span>
                        <input type="text" name="sekolah_alamat" class="form-control" >
                    </div>

                    <label>Status Absen</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-fw fa-sign-in-alt"></i></span>
                        
                    </div>

                    <label>foto</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-fw fa-sign-out-alt"></i></span>
                        <input type="date" name="tahun_keluar" class="form-control" placeholder=" >
                    </div>

                    <label>Jurusan</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-fw fa-info"></i></span>
                        <input type="text" name="sekolah_jurusan" class="form-control" >
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-save me-2"></i>Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>