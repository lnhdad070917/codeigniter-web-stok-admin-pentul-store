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
                    <div class="card-body">
                        <h5 class="card-title">Silahkan isi Form</h5>
                        <?php foreach($rdp as $r) { ?>
                        <!-- General Form Elements -->
                        <form action="<?php echo base_url() . 'admin/rdp_update' ?>" method="post">
                            <div class="row mb-3">
                                <label for="cpanel" class="col-sm-2 col-form-label">Panel ke - </label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="id" value="<?php echo $r->id_rdp ?>">
                                    <input type="text" name="panel" class="form-control" value="<?php echo $r->panel ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cip" class="col-sm-2 col-form-label">IP RDP</label>
                                <div class="col-sm-10">
                                    <input type="text" name="ip" class="form-control" value="<?php echo $r->ip ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cspec" class="col-sm-2 col-form-label">Core</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="core" aria-label="Default select example">
                                        <option selected value="<?php echo $r->core ?>"><?php echo $r->core ?></option>
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
                                        <option selected value="<?php echo $r->ram ?>"><?php echo $r->ram ?></option>
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
                                        <option selected value="<?php echo $r->username ?>"><?php echo $r->username ?></option>
                                        <option value="tulstore1">tulstore1</option>
                                        <option value="tulstore2">tulstore2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cpass1" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pass" class="form-control" value="<?php echo $r->pass ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cpass2" class="col-sm-2 col-form-label">Note</label>
                                <div class="col-sm-10">
                                    <input type="text" id="cpass2" name="note" class="form-control" value="<?php echo $r->note ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cdate" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="date" class="form-control" value="<?php echo $r->tgl_buat ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cstatus" class="col-sm-2 col-form-label">Ready/Sold</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="status" aria-label="Default select example">
                                        <option selected value="<?php echo $r->status ?>"><?php echo $r->status ?></option>
                                        <option value="ready">ready</option>
                                        <option value="sold">sold</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Submit Button</label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->
                            <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->