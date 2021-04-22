<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-list"> </i> List daftar mahasiswa
    </div>

    <?= $this->session->flashdata('message'); ?>

    <?= anchor('daftar_mahasiswa/input', '<button class="btn btn-success mb-3">Tambah daftar mahasiswa</button>') ?>


    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Id mahasiswa</th>
            <th>Kode mahasiswa</th>
            <th>Nama mahasiswa</th>
            <th>Nim</th>
            <th>Foto</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($daftar_mahasiswa as $dm) : ?>
            <tr>
                <td width="20"><?= $no++; ?></td>
                <td><?= $dm['id_mahasiswa']; ?></td>
                <td><?= $dm['kode_mahasiswa']; ?></td>
                <td><?= $dm['nama_mahasiswa']; ?></td>
                <td width="20"><?= $dm['nim_mahasiswa']; ?></td>
                <td width="20"><img width="140px" src="<?= base_url(); ?>assets/img/mahasiswa/<?= $dm['image']; ?>"></td>
                <td>
                    <a width="30" href="<?= base_url('daftar_mahasiswa/update/' . $dm['id_mahasiswa']); ?>" class="btn btn-sm btn-success mb-3">Update</a>
                    <a width="20" href="<?= base_url('daftar_mahasiswa/delete/' . $dm['id_mahasiswa']); ?>" class="btn btn-sm btn-danger mb-3">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>