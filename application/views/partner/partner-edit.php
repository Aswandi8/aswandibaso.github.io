<?php foreach ($editPartner as $em3) : ?>
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4><?= $title; ?></h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('partner'); ?>">Partner</a></li>
                            <li class="breadcrumb-item active text-success" aria-current="page"><?= $title; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-success h4">Edit Data - <?= $em3['name']; ?></h4>
            </div>
            <div class="pd-20">
                <?= form_open_multipart('partner/edit-partner/' . $em3['slug_partner']); ?>
                <div class="row">
                    <input type="hidden" name="id" id="id" value="<?= $em3['id']; ?>">
                    <input type="hidden" name="old_image" id="old_image" value="<?= $em3['image']; ?>">
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="<?= base_url('assets/img/partner/' . $em3['image']); ?>" alt="" style="max-height: 200px;">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Partner</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" id="name" name="name" value="<?= $em3['name']; ?>">
                                <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
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
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>