<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4><?= $title; ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('product/elevator'); ?>">Product</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('product/escalator'); ?>">Escalator</a></li>
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
            <?= form_open_multipart('product/add-escalator'); ?>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" id="name" name="name" value="<?= set_value('name'); ?>" placeholder="Name Escalator">
                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Kategori</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select2 form-control" name="kategori_id" style="width: 100%; height: 38px;">
                        <optgroup label="Category Escalator">
                            <?php foreach ($getKategoriElevator as $dm) : ?>
                                <option value="<?= $dm['id']; ?>"><?= $dm['title']; ?></option>
                            <?php endforeach; ?>
                        </optgroup>
                    </select>
                    <?= form_error('kategori_id', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Travel Height</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" id="travel_height" name="travel_height" value="<?= set_value('travel_height'); ?>" placeholder="3000 - 6000">
                    <?= form_error('travel_height', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Power</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" id="power" name="power" value="<?= set_value('power'); ?>" placeholder="Power">
                    <?= form_error('power', '<small class="text-danger">', '</small>'); ?>
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
                <label class="col-sm-12 col-md-2 col-form-label">Parameter List</label>
                <div class="col-sm-12 col-md-10">
                    <input type="file" name="userfile[]" multiple="multiple" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Ringkasan Product</label>
                <div class="col-sm-12 col-md-10">
                    <textarea name="keterangan" id="keterangan" class="textarea_editor form-control border-radius-0"><?= set_value('keterangan'); ?></textarea>
                    <?= form_error('keterangan', '<small class="text-danger">', '</small>'); ?>
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