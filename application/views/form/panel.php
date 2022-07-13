<main id="main" class="main">

    <div class="pagetitle">
        <h1>Pengisian Panel Siap Jual</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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

                        <!-- General Form Elements -->
                        <form action="<?php echo base_url() . 'admin/panel_add_act' ?>" method="post">
                            <div class="row mb-3">
                                <label for="cprovider" class="col-sm-2 col-form-label">Provider</label>
                                <div class="col-sm-10">
                                    <select name="provider" class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Provider</option>
                                        <option value="Azure Ft">Azure FT</option>
                                        <option value="Azure Pay As">Azure Pay AS</option>
                                        <option value="Linode">Linode</option>
                                        <option value="Digital Ocean">Digital Ocean</option>
                                        <option value="Vultr">Vultr</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cmail" class="col-sm-2 col-form-label">email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control">
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
                                    <input type="text" name="note" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cdate" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="date" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="crs" class="col-sm-2 col-form-label">Ready/Sold</label>
                                <div class="col-sm-10">
                                    <input readonly value="Ready" name="status" class="form-control">
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