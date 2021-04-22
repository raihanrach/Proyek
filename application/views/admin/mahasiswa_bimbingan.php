<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $title; ?> </h1>

    <div class="alert alert-success" role="alert">
        <i class="fas fa-list"> </i> Data Mahasiswa Bimbingan
    </div>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Id mahasiswa</th>
            <th>Kode mahasiswa</th>
            <th>Nama mahasiswa</th>
            <th>Nim</th>
            <th>Foto</th>
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
            </tr>
        <?php endforeach; ?>
    </table>
</div>