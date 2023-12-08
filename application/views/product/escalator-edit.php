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
    <?php foreach ($editEscalator as $dm) : ?>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                <div class="pd-20 card-box height-100-p text-center">
                    <img src="<?= base_url('assets/img/product/' . $dm['image']); ?>" alt="" class="img-fluid w-75">
                    <h5 class="text-center h5 mb-5 mt-2"><?= ucwords($dm['name']) ?></h5>
                    <div class="profile-info">
                        <h5 class="mb-20 h5 text-success">Parameter List</h5>
                        <img src="<?= base_url('assets/img/product/' . $dm['parameter_list']); ?>" alt="" class="img-fluid w-75">
                    </div>
                    <div class="profile-info">
                        <img src="<?= base_url('assets/img/product/' . $dm['parameter_list1']); ?>" alt="" class="img-fluid w-75">
                    </div>
                    <div class="profile-info">
                        <img src="<?= base_url('assets/img/product/' . $dm['parameter_list2']); ?>" alt="" class="img-fluid w-75">
                    </div>
                    <div class="profile-info">
                        <img src="<?= base_url('assets/img/product/' . $dm['parameter_list3']); ?>" alt="" class="img-fluid w-75">
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                <div class="card-box height-100-p overflow-hidden">
                    <div class="pd-20">
                        <h4 class="text-success h4"><?= $title; ?></h4>
                    </div>
                    <div class="pd-20">
                        <?= form_open_multipart('product/edit-escalator/' . $dm['slug_name']); ?>
                        <input type="hidden" id="id" name="id" value="<?= $dm['id']; ?>">
                        <input type="hidden" id="old_image" name="old_image" value="<?= $dm['image']; ?>">
                        <div class="form-group">
                            <label class="">Name</label>
                            <input class="form-control form-control-lg" type="text" id="name" name="name" value="<?= $dm['name']; ?>" placeholder="Name Escalator">
                            <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="">Kategori</label>
                            <select class="custom-select2 form-control form-control-lg" name="kategori_id" style="width: 100%; height: 38px;">
                                <optgroup label="Category Escalator">
                                    <option value="<?= $dm['kategori_id']; ?>"><?= $dm['title']; ?></option>
                                    <option value="" disabled>============================</option>
                                    <?php foreach ($getKategoriElevator as $sm) : ?>
                                        <option value="<?= $sm['id']; ?>"><?= $sm['title']; ?></option>
                                    <?php endforeach; ?>
                                </optgroup>
                            </select>
                            <?= form_error('kategori_id', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="">Travel Height</label>
                            <input class="form-control form-control-lg" type="text" id="travel_height" name="travel_height" value="<?= $dm['travel_height']; ?>" placeholder="Height">
                            <?= form_error('travel_height', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group ">
                            <label class="">Power</label>
                            <input class="form-control form-control-lg" type="text" id="power" name="power" value="<?= $dm['motor']; ?>" placeholder="Power">
                            <?= form_error('power', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group ">
                            <label class="">Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="">Parameter List 1</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="new_parameter_1" name="new_parameter_1">
                                        <input type="hidden" id="old_parameter_1" name="old_parameter_1" value="<?= $dm['parameter_list']; ?>">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="">Parameter List 2</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="new_parameter_2" name="new_parameter_2">
                                        <input type="hidden" id="old_parameter_2" name="old_parameter_2" value="<?= $dm['parameter_list1']; ?>">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="">Parameter List 3</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="new_parameter_3" name="new_parameter_3">
                                        <input type="hidden" id="old_parameter_3" name="old_parameter_3" value="<?= $dm['parameter_list2']; ?>">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="">Parameter List 4</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="new_parameter_4" name="new_parameter_4">
                                        <input type="hidden" id="old_parameter_4" name="old_parameter_4" value="<?= $dm['parameter_list3']; ?>">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="">Ringkasan Product</label>
                            <textarea name="keterangan" id="keterangan" class="textarea_editor form-control form-control-lg border-radius-0"><?= $dm['keterangan']; ?></textarea>
                            <?= form_error('keterangan', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group  justify-content-end">
                            <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>