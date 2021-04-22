<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-user-edit"></i> Form input TA
    </div>

    <form method="post" enctype="multipart/form-data" action="<?= base_url('tugas_akhir/input_aksi'); ?>">
        <div class="form-group">
            <label> Judul </label>
            <input type="text" name="judul" placeholder="Masukan Judul" class="form-control">
            <?= form_error('judul', '<div class = "text-danger small ml-3"> '); ?>
        </div>

        <div class="form-group">
            <label> File </label>
            <input type="text" name="file" placeholder="Masukan File" class="form-control">
            <?= form_error('file', '<div class = "text-danger small ml-3"> '); ?>
        </div>

        <div class="custom-file">
            <label class="custom-file-label" for="file">Pilih File</label>
            <input type="file" class="custom-file-input" id="file" name="file">
        </div>

        <div class="form-kelas">
            <label> Nama Mahasiswa </label>
            <input type="text" name="nama_mahasiswa" placeholder="Masukan Nama Mahasiswa" class="form-control">
            <?= form_error('nama_mahasiswa', '<div class = "text-danger small ml-3"> '); ?>
        </div>

        <div class="form-kelas">
            <label> Nama Pembimbing 1 </label>
            <input type="text" name="nama_pembimbing1" placeholder="Masukan Nama Dosen Pembimbing 1" class="form-control">
            <?= form_error('nama_pembimbing1', '<div class = "text-danger small ml-3"> '); ?>
        </div>

        <div class="form-kelas">
            <label> Nama Pembimbing 2 </label>
            <input type="text" name="nama_pembimbing2" placeholder="Masukan Nama Dosen Pembimbing 2" class="form-control">
            <?= form_error('nama_pembimbing2', '<div class = "text-danger small ml-3"> '); ?>
        </div>

        <button type="submit" class="btn btn-success mb-3">Simpan</button>
    </form>



</div>