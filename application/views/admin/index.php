                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"> <?= $title; ?> </h1>

                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Selamat datang <strong><i><?= $user['name']; ?>!</i></strong></h4>
                        <p> Selamat datang <strong><i><?= $user['name']; ?></i></strong> di Sistem Informasi Pemilihan Dosen Pembimbing JTI Polinema. Anda login sebagai <strong><i><?= $user['role_id']; ?></i></strong> </p>
                        <hr>
                    </div>
                    <div class="card mb-3" style="max-width: 780px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $user['name']; ?></h5>
                                    <p class="card-text"><?= $user['email']; ?></p>
                                    <p class="card-text"><small class="text-muted">Diperbarui sejak <?= date('d F Y', $user['date_created']); ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->