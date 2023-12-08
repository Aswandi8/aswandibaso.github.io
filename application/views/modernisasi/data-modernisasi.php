<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4><?= $title; ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('modernisasi'); ?>">modernisasi</a></li>
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
            <?php foreach ($dataModernisasi as $dm) : ?>
                <?= form_open_multipart('modernisasi/data-modernisasi/'); ?>
                <input type="hidden" id="id" name="id" value="<?= $dm['id']; ?>">
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Section 1</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" id="section_1" name="section_1" value="<?= $dm['section_1']; ?>">
                        <?= form_error('section_1', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Section 2</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" id="section_2" name="section_2" value="<?= $dm['section_2']; ?>">
                        <?= form_error('section_2', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Section 3</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" id="section_3" name="section_3" value="<?= $dm['section_3']; ?>">
                        <?= form_error('section_3', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Section 4</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" id="section_4" name="section_4" value="<?= $dm['section_4']; ?>">
                        <?= form_error('section_4', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Section 5</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" id="section_5" name="section_5" value="<?= $dm['section_5']; ?>">
                        <?= form_error('section_53', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                </div>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>