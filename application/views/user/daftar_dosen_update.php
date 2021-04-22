<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="far fa-edit"></i> Form Update Dosen
    </div>

    <?php foreach ($daftar_dosen as $dd) : ?>

        <form method="post" enctype="multipart/form-data" action="<?= base_url(); ?>daftar_dosen/update_aksi">

            <div class="form-group">
                <label>Kode Dosen</label>
                <input type="hidden" name="id_dosen" value="<?= $dd->id_dosen; ?>">
                <input class="form-control" type="text" name="kode_dosen" value="<?= $dd->kode_dosen; ?>">
            </div>

            <div class="form-group">
                <label>Nama Dosen</label>
                <input class="form-control" type="text" name="nama_dosen" value="<?= $dd->nama_dosen; ?>">
            </div>

            <div class="form-group">
                <label>NIP Dosen</label>
                <input class="form-control" type="text" name="nip_dosen" value="<?= $dd->nip_dosen; ?>">
            </div>



            <div class="form-group">
                <label>Bidang Keahlian</label>
                <input class="form-control" type="text" name="bidang_keahlian" value="<?= $dd->bidang_keahlian; ?>">
            </div>

            <div class="form-group">
                <label>NO Hp</label>
                <input class="form-control" type="text" name="no_hp" value="<?= $dd->no_hp; ?>">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Pilih Foto</label>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>