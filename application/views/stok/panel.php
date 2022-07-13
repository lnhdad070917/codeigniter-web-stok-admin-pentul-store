<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                        echo "<div class='alert alert-danger'>Kesalahan Data</div><meta http-equiv=refresh content=0.5;url=tables-ready-panel.php>";
                    } else if ($_GET['pesan'] == "success") {
                        echo "<div class='alert alert-success'>Berhasil Tambah Data</div><meta http-equiv=refresh content=0.5;url=tables-ready-panel.php>";
                    } else if ($_GET['pesan'] == "edit") {
                        echo "<div class='alert alert-warning'>Berhasil Edit Data</div><meta http-equiv=refresh content=0.5;url=tables-ready-panel.php>";
                    } else if ($_GET['pesan'] == "hapus") {
                        echo "<div class='alert alert-secondary'>Berhasil Hapus Data</div><meta http-equiv=refresh content=0.5;url=tables-ready-panel.php>";
                    } else if ($_GET['pesan'] == "sold") {
                        echo "<div class='alert alert-success'>Berhasil Jual Data</div><meta http-equiv=refresh content=0.5;url=tables-ready-panel.php>";
                    }
                }
                ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">DATA Akun Provider SIAP JUAL</h5>
                        <p>Akun Provider yang ada disini adalah Akun Provider siap dijual, menggunakan Database sederhana</p>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Provider </th>
                                    <th scope="col">email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Note</th>
                                    <th scope="col">date</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($ready as $r) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $r->provider ?></td>
                                        <td><?php echo $r->email ?></td>
                                        <td><?php echo $r->pass ?></td>
                                        <td><?php echo $r->note ?></td>
                                        <td><?php echo $r->tgl_buat ?></td>
                                        <td>
                                            <a href="<?php echo base_url() . 'admin/panel_terjual/' . $r->id_panel ?>" class="btn btn-danger">Terual</a>
                                            <a href="<?php echo base_url() . 'admin/panel_edit/' . $r->id_panel ?>" class="btn btn-warning">edit</a>
                                            <a href="<?php echo base_url() . 'admin/panel_hapus/' . $r->id_panel ?>" class="btn btn-secondary">hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                        <div class="container-fluid">
                            <form action="<?php echo base_url() . 'admin/panel_excel' ?>" method="post">
                                <div class="row mb-3">
                                    <div class="col-sm-1">
                                        <label for="cusername" class="col-form-label">Laporan dari</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <Input type="date" class="form-control" name="dari"></Input>
                                    </div>
                                    <div class="col-sm-1">
                                        <label for="cusername" class="col-form-label">sampai</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <Input type="date" class="form-control" name="sampai"></Input>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-outline-success">Download</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">DATA Akun Provider TERJUAL</h5>
                        <p>Akun Provider yang ada disini adalah Akun Provider sudah dijual, menggunakan Database sederhana</p>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Provider </th>
                                    <th scope="col">email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Note</th>
                                    <th scope="col">date</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($sold as $s) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $s->provider ?></td>
                                        <td><?php echo $s->email ?></td>
                                        <td><?php echo $s->pass ?></td>
                                        <td><?php echo $s->note ?></td>
                                        <td><?php echo $s->tgl_buat ?></td>
                                        <td>
                                            <a href="<?php echo base_url() . 'admin/panel_edit/' . $s->id_panel ?>" class="btn btn-warning">edit</a>
                                            <a href="<?php echo base_url() . 'admin/panel_hapus/' . $s->id_panel ?>" class="btn btn-secondary">hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->