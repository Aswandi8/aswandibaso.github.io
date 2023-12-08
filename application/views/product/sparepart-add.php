<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4><?= $title; ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('product/spare-part'); ?>">Product</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('product/spare-part'); ?>">Spare Part</a></li>
                        <li class="breadcrumb-item active text-success" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <div class="card-box mb-30">
        <div class="pd-20">
            <h4 class="text-success h4"><?= $title; ?></h4>
        </div>
        <div class="pd-20">
            <?= form_open_multipart('product/add-spare-part'); ?>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" id="name" name="name" value="<?= set_value('name'); ?>">
                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Merk</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" id="merk" name="merk" value="<?= set_value('merk'); ?>">
                    <?= form_error('merk', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tipe</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" id="tipe" name="tipe" value="<?= set_value('tipe'); ?>">
                    <?= form_error('tipe', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Material</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" id="material" name="material" value="<?= set_value('material'); ?>">
                    <?= form_error('material', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Ukuran</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" id="ukuran" name="ukuran" value="<?= set_value('ukuran'); ?>">
                    <?= form_error('ukuran', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Image</label>
                <div class="col-sm-12 col-md-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Ringkasan Produk</label>
                <div class="col-sm-12 col-md-10">
                    <textarea name="ringkasan_produk" id="ringkasan_produk" class="textarea_editor form-control border-radius-0"><?= set_value('ringkasan_produk'); ?></textarea>
                    <?= form_error('ringkasan_produk', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>