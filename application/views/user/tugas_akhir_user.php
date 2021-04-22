<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $title; ?> </h1>

    <div class="alert alert-success" role="alert">
        <i class="fas fa-list"> </i> Data Tugas Akhir
    </div>

    <table class="table table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Judul</th>
            <th>File</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Pembimbing 1</th>
            <th>Nama Pembimbing 2</th>
            <th colspan="1">action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($tugas_akhir as $ta) : ?>
            <tr>
                <td width="20"><?= $no++; ?></td>
                <td><?= $ta['id']; ?></td>
                <td><?= $ta['judul']; ?></td>
                <td><?= $ta['file']; ?></td>
                <td><?= $ta['nama_mahasiswa']; ?></td>
                <td><?= $ta['nama_pembimbing1']; ?></td>
                <td><?= $ta['nama_pembimbing2']; ?></td>
                <td>
                    <a href="<?= base_url(); ?>user/laporan_pdf" class="btn btn-sm btn-primary mb-3">Cetak</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- FORMULA UNTUK BUTTON CETAK -->
    <div class="container">
        <div class="col-sm-2">
            <div class="container">
                <div class="col-md-14">
                </div>
            </div>
        </div>
    </div>
</div>