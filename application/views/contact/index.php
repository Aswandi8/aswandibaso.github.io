<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4><?= $title ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">User</a></li>
                        <li class="breadcrumb-item active text-success" aria-current="page"><?= $title ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <?php foreach ($dataContact as $dc) : ?>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                <div class="pd-20 card-box height-100-p">
                    <div class="profile-photo">
                        <img src="<?= base_url('assets/img/company/' . $dc['image']); ?>" alt="" class="avatar-photo">
                    </div>
                    <h5 class="text-center h5 mb-0"><?= ucwords($dc['name']) ?></h5>
                    <div class="profile-info">
                        <h5 class="mb-20 h5 text-success">Contact Information</h5>
                        <ul>
                            <li>
                                <span class="text-success">Email 1:</span>
                                <?= $dc['email'] ?>
                            </li>
                            <li>
                                <span class="text-success">Email 2:</span>
                                <?= $dc['email1'] ?>
                            </li>
                            <li>
                                <span class="text-success">Telp 1:</span>
                                <?= $dc['telp'] ?>
                            </li>
                            <li>
                                <span class="text-success">Telp 2:</span>
                                <?= $dc['telp1'] ?>
                            </li>
                            <li>
                                <span class="text-success">Alamat:</span>
                                <?= $dc['alamat'] ?>
                            </li>
                        </ul>
                    </div>
                    <div class="profile-social">
                        <h5 class="mb-20 h5 text-success">Social Links</h5>
                        <ul class="clearfix">
                            <li><a href="<?= $dc['facebook'] ?>" class="btn" data-bgcolor="#3b5998" data-color="#ffffff" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?= $dc['twitter'] ?>" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?= $dc['instagram'] ?>" class="btn" data-bgcolor="#f46f30" data-color="#ffffff" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                <div class="card-box height-100-p overflow-hidden">
                    <div class="profile-tab height-100-p">
                        <div class="tab height-100-p">
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">My Profile</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <!-- Timeline Tab start -->
                                <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                                    <div class="profile-setting">
                                        <?= form_open_multipart('contact'); ?>
                                        <input type="hidden" id="id" name="id" value="<?= $dc['id']; ?>">
                                        <input type="hidden" id="old_image" name="old_image" value="<?= $dc['image']; ?>">
                                        <ul class="profile-edit-list row">
                                            <li class="weight-500 col-md-6">
                                                <h4 class="text-success h5 mb-20">Company Setting</h4>
                                                <div class="form-group">
                                                    <label>Name:</label>
                                                    <input class="form-control form-control-lg" type="text" name="name" id="name" value="<?= $dc['name'] ?>">
                                                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email 1:</label>
                                                    <input class="form-control form-control-lg" type="text" value="<?= $dc['email'] ?>" id="email" name="email">
                                                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email 2:</label>
                                                    <input class="form-control form-control-lg" type="text" value="<?= $dc['email1'] ?>" id="email1" name="email1">
                                                    <?= form_error('email1', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Telp 1:</label>
                                                    <input class="form-control form-control-lg" type="text" value="<?= $dc['telp'] ?>" id="telp" name="telp">
                                                    <?= form_error('telp', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Telp 2:</label>
                                                    <input class="form-control form-control-lg" type="text" value="<?= $dc['telp1'] ?>" id="telp1" name="telp1">
                                                    <?= form_error('telp1', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </li>
                                            <li class="weight-500 col-md-6">
                                                <div class="form-group">
                                                    <label>Image:</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="image" name="image">
                                                        <label class="custom-file-label" for="image">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat:</label>
                                                    <input class="form-control form-control-lg" type="text" value="<?= $dc['alamat'] ?>" id="alamat" name="alamat">
                                                    <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <h4 class="text-success h5 mb-20">Social Media links</h4>
                                                <div class="form-group">
                                                    <label>Facebook URL:</label>
                                                    <input class="form-control form-control-lg" type="text" name="facebook" id="facebook" value="<?= $dc['facebook'] ?>">
                                                    <?= form_error('facebook', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Twitter URL:</label>
                                                    <input class="form-control form-control-lg" type="text" name="twitter" id="twitter" value="<?= $dc['twitter'] ?>">
                                                    <?= form_error('twitter', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Instagram URL:</label>
                                                    <input class="form-control form-control-lg" type="text" name="instagram" id="instagram" value="<?= $dc['instagram'] ?>">
                                                    <?= form_error('instagram', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <button type="submit" class="btn btn-success">Save & Update</button>
                                                </div>
                                            </li>
                                        </ul>
                                        </form>
                                    </div>
                                </div>
                                <!-- Timeline Tab End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>