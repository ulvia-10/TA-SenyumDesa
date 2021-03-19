<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Master Cabang</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Data Tables</li>
                    <li class="breadcrumb-item active">Master Cabang</li>
                    <li class="breadcrumb-item active">Edit Master Cabang</li>
                </ol>
            </div>
        </div>
    </div>
</div>



<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Master Cabang</h5><span>Isi Data Master Cabang Dengan <code
                            class="text-danger">Teliti</code></span>
                </div>
                <div class="card-body">
                    <form class="needs-validation" novalidate="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="validationCustom03">Nama Cabang</label>
                                <input class="form-control" id="validationCustom03" type="text"
                                    placeholder="nama Cabang" required="">
                                <div class="invalid-feedback"> Nama Cabang.</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="validationCustom04">Status cabang</label>
                                <select class="form-select" id="validationCustom04" required="">
                                    <option selected="" disabled="" value="">pilih...</option>
                                    <option>...</option>
                                </select>
                                <div class="invalid-feedback">Pilih status cabang.</div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label" for="validationCustom05">Tanggal</label>
                                <input class="form-control" id="validationCustom05" type="text" placeholder="Tanggal"
                                    required="">
                                <div class="invalid-feedback">Tanggal </div>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Submit form</button>
                        <a href="<?= base_url('master'); ?>" class="btn btn-light" type="submit">Cancel</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<!-- Container-fluid Ends-->