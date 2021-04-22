<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="far fa-edit"></i> Form Update mahasiswa
    </div>

    <?php foreach ($daftar_mahasiswa as $dm) : ?>

        <form method="post" enctype="multipart/form-data" action="<?= base_url(); ?>daftar_mahasiswa/update_aksi">

            <div class="form-group">
                <label>Kode mahasiswa</label>
                <input type="hidden" name="id_mahasiswa" value="<?= $dm->id_mahasiswa; ?>">
                <input class="form-control" type="text" name="kode_mahasiswa" value="<?= $dm->kode_mahasiswa; ?>">
            </div>

            <div class="form-group">
                <label>Nama mahasiswa</label>
                <input class="form-control" type="text" name="nama_mahasiswa" value="<?= $dm->nama_mahasiswa; ?>">
            </div>

            <div class="form-group">
                <label>NIM mahasiswa</label>
                <input class="form-control" type="text" name="nim_mahasiswa" value="<?= $dm->nim_mahasiswa; ?>">
            </div>

            <div class="form-group" style="max-width: 540px">
                <label for="exampleFormControlFile1">Pilih Foto</label>
                <input type="file" name="image" style="max-width: 540px" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>


    <?php endforeach; ?>
</div>