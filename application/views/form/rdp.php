<main id="main" class="main">

    <div class="pagetitle">
        <h1>Pengisian RDP Siap Jual</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Elements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                        echo "<div class='alert alert-danger'>Kesalahan Data</div><meta http-equiv=refresh content=0.5;url=form_rdp>";
                    } else if ($_GET['pesan'] == "success") {
                        echo "<div class='alert alert-success'>Berhasil Tambah Data</div><meta http-equiv=refresh content=0.5;url=form_rdp";
                    } else if ($_GET['pesan'] == "edit") {
                        echo "<div class='alert alert-warning'>Berhasil Edit Data</div><meta http-equiv=refresh content=0.5;url=form_rdp>";
                    } else if ($_GET['pesan'] == "hapus") {
                        echo "<div class='alert alert-secondary'>Berhasil Hapus Data</div><meta http-equiv=refresh content=0.5;url=form_rdp>";
                    } else if ($_GET['pesan'] == "sold") {
                        echo "<div class='alert alert-success'>Berhasil Jual Data</div><meta http-equiv=refresh content=0.5;url=form_rdp>";
                    }
                }
                ?>
                    <div class="card-body">
                        <h5 class="card-title">Silahkan isi Form</h5>

                        <!-- General Form Elements -->
                        <form action="<?php echo base_url() . 'admin/rdp_add_act' ?>" method="post">
                            <div class="row mb-3">
                                <label for="cpanel" class="col-sm-2 col-form-label">Panel ke - </label>
                                <div class="col-sm-10">
                                    <input type="text" name="panel" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cip" class="col-sm-2 col-form-label">IP RDP</label>
                                <div class="col-sm-10">
                                    <input type="text" name="ip" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cspec" class="col-sm-2 col-form-label">Core</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="core" aria-label="Default select example">
                                        <option selected>Pilih Core</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="4">4</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cspec" class="col-sm-2 col-form-label">RAM</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="ram" aria-label="Default select example">
                                        <option selected>Pilih RAM</option>
                                        <option value="2">2</option>
                                        <option value="3.5">3.5</option>
                                        <option value="4">4</option>
                                        <option value="8">8</option>
                                        <option value="16">16</option>
                                        <option value="32">32</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cusername" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="username" aria-label="Default select example">
                                        <option selected>Pilih Username</option>
                                        <option value="tulstore1">tulstore1</option>
                                        <option value="tulstore2">tulstore2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cpass1" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pass" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cpass2" class="col-sm-2 col-form-label">Note</label>
                                <div class="col-sm-10">
                                    <input type="text" id="cpass2" name="note" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cdate" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="date" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cstatus" class="col-sm-2 col-form-label">Ready/Sold</label>
                                <div class="col-sm-10">
                                    <input type="text" name="status" class="form-control" readonly value="Ready">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Submit Button</label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->