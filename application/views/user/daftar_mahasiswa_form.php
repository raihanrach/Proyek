<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-user-edit"></i> Form input mahasiswa
    </div>

    <form method="post" enctype="multipart/form-data" action="<?= base_url('daftar_mahasiswa/input_aksi'); ?>">
        <div class="form-group">
            <label> Kode mahasiswa </label>
            <input type="text" name="kode mahasiswa" placeholder="Masukan Kode mahasiswa" class="form-control">
            <?= form_error('kode_mahasiswa', '<div class = "text-danger small ml-3"> '); ?>
        </div>

        <div class="form-group">
            <label> Nama mahasiswa </label>
            <input type="text" name="nama_mahasiswa" placeholder="Masukan Nama mahasiswa" class="form-control">
            <?= form_error('nama_mahasiswa', '<div class = "text-danger small ml-3"> '); ?>
        </div>

        <div class="form-kelas">
            <label> NIM </label>
            <input type="text" name="nim" placeholder="Masukan NIM mahasiswa" class="form-control">
            <?= form_error('nip', '<div class = "text-danger small ml-3"> '); ?>
        </div>


        <div class="form-group">
            <label for="exampleFormControlFile1">Pilih Foto</label>
            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <button type="submit" class="btn btn-success mb-3">Simpan</button>
    </form>
</div>