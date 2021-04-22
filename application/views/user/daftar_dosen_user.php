<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <b><i class="fas fa-list"> </i> List Data Dosen JTI </b>
    </div>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Id Dosen</th>
            <th>Kode Dosen</th>
            <th>Nama Dosen</th>
            <th>Nip</th>
            <th>Foto</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($daftar_dosen as $dd) : ?>
            <tr>
                <td width="20"><?= $no++; ?></td>
                <td><?= $dd['id_dosen']; ?></td>
                <td><?= $dd['kode_dosen']; ?></td>
                <td><?= $dd['nama_dosen']; ?></td>
                <td width="20"><?= $dd['nip_dosen']; ?></td>
                <td width="20"><img src="<?= base_url(); ?>assets/img/dosen/<?= $dd['image']; ?>"></td>
                <td>
                    <a href="<?= base_url('daftar_dosen_user/detail/' . $dd['id_dosen']); ?>" class="btn btn-sm btn-info mb-3">Info Dosen</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>