<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4><?= $title ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('website'); ?>">Website</a></li>
                        <li class="breadcrumb-item active text-success" aria-current="page"><?= $title ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-6">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-success h4">Favicon</h4>
                </div>
                <?php foreach ($getFavicon as $jh) : ?>
                    <div class="pb-20 text-center">
                        <img src="<?= base_url('assets/img/' . $jh['image']); ?>" alt="" class="img mb-3" style="max-height: 100px;">
                    </div>
                    <div class="pd-20">
                        <?= form_open_multipart('website/updateImage'); ?>
                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $jh['id']; ?>">
                        <input type="hidden" class="form-control" id="old_image" name="old_image" value="<?= $jh['image']; ?>">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success">Edit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-success h4">Logo</h4>
                </div>
                <?php foreach ($getLogo as $jh) : ?>
                    <div class="pb-20 text-center">
                        <img src="<?= base_url('assets/img/' . $jh['image']); ?>" alt="" class="img mb-3" style="max-height: 100px;">
                    </div>
                    <div class="pd-20">
                        <?= form_open_multipart('website/updateImage'); ?>
                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $jh['id']; ?>">
                        <input type="hidden" class="form-control" id="old_image" name="old_image" value="<?= $jh['image']; ?>">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success">Edit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-success h4">Jumbotron</h4>
                </div>
                <?php foreach ($getJumbotron as $jh) : ?>
                    <div class="pb-20 text-center">
                        <img src="<?= base_url('assets/img/' . $jh['image']); ?>" alt="" class="img mb-3" style="max-height: 100px;">
                    </div>
                    <div class="pd-20">
                        <?= form_open_multipart('website/updateImage'); ?>
                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $jh['id']; ?>">
                        <input type="hidden" class="form-control" id="old_image" name="old_image" value="<?= $jh['image']; ?>">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success">Edit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-success h4">Visi</h4>
                </div>
                <?php foreach ($getVisi as $jh) : ?>
                    <div class="pb-20 text-center">
                        <img src="<?= base_url('assets/img/' . $jh['image']); ?>" alt="" class="img mb-3" style="max-height: 100px;">
                    </div>
                    <div class="pd-20">
                        <?= form_open_multipart('website/updateImage'); ?>
                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $jh['id']; ?>">
                        <input type="hidden" class="form-control" id="old_image" name="old_image" value="<?= $jh['image']; ?>">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success">Edit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-success h4">Misi</h4>
                </div>
                <?php foreach ($getMisi as $jh) : ?>
                    <div class="pb-20 text-center">
                        <img src="<?= base_url('assets/img/' . $jh['image']); ?>" alt="" class="img mb-3" style="max-height: 100px;">
                    </div>
                    <div class="pd-20">
                        <?= form_open_multipart('website/updateImage'); ?>
                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $jh['id']; ?>">
                        <input type="hidden" class="form-control" id="old_image" name="old_image" value="<?= $jh['image']; ?>">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success">Edit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>