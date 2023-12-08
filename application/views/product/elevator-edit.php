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
    <?php foreach ($editElevator as $dm) : ?>
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-success h4"><?= $title; ?></h4>
            </div>
            <div class="pd-20">
                <?= form_open_multipart('product/edit-elevator/' . $dm['slug_name']); ?>
                <input type="hidden" id="id" name="id" value="<?= $dm['id']; ?>">
                <input type="hidden" id="old_image" name="old_image" value="<?= $dm['image']; ?>">
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" id="name" name="name" value="<?= $dm['name']; ?>" placeholder="Name Elevator">
                        <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Category</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="custom-select2 form-control" name="kategori_id" style="width: 100%; height: 28px;">
                            <optgroup label="Category Elevator">
                                <option value="<?= $dm['kategori_id']; ?>"><?= $dm['title']; ?></option>
                                <option value="" disabled>============================</option>
                                <?php foreach ($getKategoriElevator as $sm) : ?>
                                    <option value="<?= $sm['id']; ?>"><?= $sm['title']; ?></option>
                                <?php endforeach; ?>
                            </optgroup>
                        </select>
                        <?= form_error('kategori_id', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Capacity</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" id="capacity" name="capacity" value="<?= $dm['capacity']; ?>" placeholder="400 kg / 5 persons">
                        <?= form_error('capacity', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Person</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" id="person" name="person" value="<?= $dm['person']; ?>" placeholder="20 metres">
                        <?= form_error('person', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Speed</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" id="speed" name="speed" value="<?= $dm['speed']; ?>" placeholder="0.15 m/sec (10m/min)">
                        <?= form_error('speed', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Landings</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" id="landing" name="landing" value="<?= $dm['landing']; ?>" placeholder="6 Floors">
                        <?= form_error('landing', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Motor</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" id="motor" name="motor" value="<?= $dm['motor']; ?>" placeholder="2.2 kW">
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
                        <textarea name="keterangan" id="keterangan" class="textarea_editor form-control border-radius-0"><?= $dm['keterangan']; ?></textarea>
                        <?= form_error('keterangan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>