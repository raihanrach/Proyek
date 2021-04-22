<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-user-edit"></i> Form input dosen
    </div>

    <form method="post" enctype="multipart/form-data" action="<?= base_url('daftar_dosen/input_aksi'); ?>">
        <div class="form-group">
            <label> Kode Dosen </label>
            <input type="text" name="kode dosen" placeholder="Masukan Kode Dosen" class="form-control">
            <?= form_error('kode_dosen', '<div class = "text-danger small ml-3"> '); ?>
        </div>

        <div class="form-group">
            <label> Nama Dosen </label>
            <input type="text" name="nama_dosen" placeholder="Masukan Nama Dosen" class="form-control">
            <?= form_error('nama_dosen', '<div class = "text-danger small ml-3"> '); ?>
        </div>

        <div class="form-kelas">
            <label> NIP </label>
            <input type="text" name="nip" placeholder="Masukan NIP Dosen" class="form-control">
            <?= form_error('nip', '<div class = "text-danger small ml-3"> '); ?>
        </div>

        <div class="form-kelas">
            <label> Bidang Keahlian </label>
            <input type="text" name="bidang_keahlian" placeholder="Masukan Bidang Keahlian" class="form-control">
            <?= form_error('bidang_keahlian', '<div class = "text-danger small ml-3"> '); ?>
        </div>

        <div class="form-kelas">
            <label> No Hp </label>
            <input type="text" name="no_hp" placeholder="Masukan No Hp" class="form-control">
            <?= form_error('no_hp', '<div class = "text-danger small ml-3"> '); ?>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Pilih Foto</label>
            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-success mb-3">Simpan</button>
    </form>
</div>