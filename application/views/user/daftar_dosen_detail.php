<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <b> <i class="fas fa-eye"> </i> Info Dosen </b>
    </div>

    <table class="table table-hover table-bordered table-striped">
        <?php
        $no = 1;
        foreach ($detail as $dt) : ?>
            <tr>
                <td>Bidang Keahlian</td>
                <td><?= $dt['bidang_keahlian']; ?></td>
            </tr>

            <tr>
                <td>No Hp Dosen</td>
                <td><?= $dt['no_hp']; ?></td>
            </tr>

        <?php endforeach; ?>
    </table>
    <td>
        <a href="<?= base_url('daftar_dosen_user/'); ?>" class="btn btn-danger mb-3">Kembali</a>
    </td>

</div>