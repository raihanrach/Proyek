<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="far fa-edit"></i> Form Update TA
    </div>

    <?php foreach ($tugas_akhir as $ta) : ?>

        <form method="post" enctype="multipart/form-data" action="<?= base_url(); ?>tugas_akhir/update_aksi">
            <div class="form-group">
                <label>Id</label>
                <input type="hidden" name="id" value="<?= $ta['id']; ?>">
                <input class="form-control" type="text" name="id" value="<?= $ta['id']; ?>">
            </div>

            <div class="form-group">
                <label>Judul</label>
                <input class="form-control" type="text" name="judul" value="<?= $ta['judul']; ?>">
            </div>

            <div class="form-group">
                <label>File</label>
                <input class="form-control" type="text" name="file" value="<?= $ta['file']; ?>">
            </div>

            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input class="form-control" type="text" name="nama_mahasiswa" value="<?= $ta['nama_mahasiswa']; ?>">
            </div>

            <div class="form-group">
                <label>Nama Pembimbing 1</label>
                <input class="form-control" type="text" name="nama_pembimbing1" value="<?= $ta['nama_pembimbing1']; ?>">
            </div>

            <div class="form-group">
                <label>Nama Pembimbing 2</label>
                <input class="form-control" type="text" name="nama_pembimbing2" value="<?= $ta['nama_pembimbing2'];; ?>">
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>