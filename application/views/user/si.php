<div class="container-fluid">

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Id Dosen</th>
            <th>Kode Dosen</th>
            <th>Nama Dosen</th>
            <th>Nip</th>
            <th>Foto</th>
            <th>Bidang Keahlian</th>
        </tr>

        <?php
        $no = 1;
        foreach ($si as $s) : ?>
            <tr>
                <td width="20"><?= $no++; ?></td>
                <td><?= $s['id_dosen']; ?></td>
                <td><?= $s['kode_dosen']; ?></td>
                <td><?= $s['nama_dosen']; ?></td>
                <td width="20"><?= $s['nip_dosen']; ?></td>
                <td width="20"><img width="200px" src="<?= base_url(); ?>assets/img/dosen/<?= $s['image']; ?>"></td>
                <td><?= $s['bidang_keahlian']; ?></td>

            </tr>
        <?php endforeach; ?>
    </table>
    <td>
        <a href="<?= base_url('daftar_dosen_user/data_dosen'); ?>" class="btn btn-danger mb-3">Kembali</a>
    </td>
</div>