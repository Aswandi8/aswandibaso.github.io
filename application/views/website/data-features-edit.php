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
                        <li class="breadcrumb-item"><a href="<?= base_url('website/features'); ?>">Data Features</a></li>
                        <li class="breadcrumb-item active text-success" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <?php foreach ($editDataFeatures as $dm) : ?>
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-success h4"><?= $title; ?></h4>
            </div>
            <div class="text-center">
                <img src="<?= base_url('assets/img/landingpage/' . $dm['image']); ?>" alt="" style="max-height: 200px;">
            </div>
            <div class="pd-20">
                <?= form_open_multipart('website/edit-features/' . $dm['slug_title']); ?>
                <input type="hidden" id="id" name="id" value="<?= $dm['id']; ?>">
                <input type="hidden" id="old_image" name="old_image" value="<?= $dm['image']; ?>">
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Title</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" id="title" name="title" value="<?= $dm['title']; ?>">
                        <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Tombol</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" id="tombol" name="tombol" value="<?= $dm['tombol']; ?>">
                        <?= form_error('tombol', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Image</label>
                    <div class="col-sm-12 col-md-10">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-12 col-md-10">
                        <textarea class="textarea_editor form-control border-radius-0" name="keterangan" id="keterangan"><?= $dm['keterangan']; ?></textarea>
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