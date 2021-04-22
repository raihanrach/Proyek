<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-list"> </i> List daftar Dosen
    </div>

    <?= $this->session->flashdata('message'); ?>

    <?= anchor('daftar_dosen/input', '<button class="btn btn-success mb-3">Tambah daftar dosen</button>') ?>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Id Dosen</th>
            <th>Kode Dosen</th>
            <th>Nama Dosen</th>
            <th>Nip</th>
            <th>Foto</th>
            <th>Bidang Keahlian</th>
            <th>No Hp</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($daftar_dosen as $dd) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $dd['id_dosen']; ?></td>
                <td width="20"><?= $dd['kode_dosen']; ?></td>
                <td><?= $dd['nama_dosen']; ?></td>
                <td width="20"><?= $dd['nip_dosen']; ?></td>
                <td width="20"><img width="200px" src="<?= base_url(); ?>assets/img/dosen/<?= $dd['image']; ?>"></td>
                <td width="20"><?= $dd['bidang_keahlian']; ?></td>
                <td><?= $dd['no_hp']; ?></td>
                <td>
                    <a href="<?= base_url('daftar_dosen/update/' . $dd['id_dosen']); ?>" class="btn btn-sm btn-success mb-3">Update</a>
                    <a href="<?= base_url('daftar_dosen/delete/' . $dd['id_dosen']); ?>" class="btn btn-sm btn-danger mb-3">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>