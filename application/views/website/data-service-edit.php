<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4><?= $title; ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('website'); ?>">Website</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('website/service'); ?>">Data Service</a></li>
                        <li class="breadcrumb-item active text-success" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <?= $this->session->flashdata('message'); ?>
    <div class="card-box mb-30">
        <div class="pd-20">
            <h4 class="text-success h4"><?= $title; ?></h4>
        </div>
        <div class="pd-20">
            <?php foreach ($editDataService as $dm) : ?>
                <?= form_open_multipart('website/edit-service/' . $dm['slug_title']); ?>
                <input type="hidden" id="id" name="id" value="<?= $dm['id']; ?>">
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Title</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" id="title" name="title" value="<?= $dm['title']; ?>">
                        <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Icon</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" id="icon" name="icon" value="<?= $dm['icon']; ?>">
                        <?= form_error('icon', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-12 col-md-10">
                        <textarea name="keterangan" id="keterangan" class="form-control"><?= $dm['keterangan']; ?></textarea>
                        <?= form_error('keterangan', '<small class="text-danger">', '</small>'); ?>
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