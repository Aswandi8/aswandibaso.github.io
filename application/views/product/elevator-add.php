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
                        <li class="breadcrumb-item"><a href="<?= base_url('product/elevator'); ?>">Elevator</a></li>
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
            <?= form_open_multipart('product/add-elevator'); ?>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" id="name" name="name" value="<?= set_value('name'); ?>" placeholder="Name Elevator">
                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Category</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select2 form-control" name="kategori_id" style="width: 100%; height: 28px;">
                        <optgroup label="Category Elevator">
                            <?php foreach ($getKategoriElevator as $dm) : ?>
                                <option value="<?= $dm['id']; ?>"><?= $dm['title']; ?></option>
                            <?php endforeach; ?>
                        </optgroup>
                    </select>
                    <?= form_error('kategori_id', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Capacity</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" id="capacity" name="capacity" value="<?= set_value('capacity'); ?>" placeholder="450 - 1600 Kg">
                    <?= form_error('capacity', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Person</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" id="person" name="person" value="<?= set_value('person'); ?>" placeholder="6 - 21 Orang">
                    <?= form_error('person', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Speed</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" id="speed" name="speed" value="<?= set_value('speed'); ?>" placeholder="0.15 m/sec (10m/min)">
                    <?= form_error('speed', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Landings</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" id="landing" name="landing" value="<?= set_value('landing'); ?>" placeholder="Up to 2 Floors">
                    <?= form_error('landing', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Motor</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" id="motor" name="motor" value="<?= set_value('motor'); ?>" placeholder="2.2 kW">
                    <?= form_error('motor', '<small class="text-danger">', '</small>'); ?>
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
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="parameter_list" name="parameter_list">
                        <label class="custom-file-label" for="parameter_list">Choose file</label>
                    </div>
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