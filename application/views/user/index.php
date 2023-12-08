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
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
            <div class="pd-20 card-box height-100-p">
                <div class="profile-photo">
                    <img src="<?= base_url('assets/img/profile/' . $user['image']); ?>" alt="" class="avatar-photo">
                </div>
                <h5 class="text-center h5 mb-0"><?= ucwords($user['name']) ?></h5>
                <p class="text-center text-muted font-14">Member since <?= date('d F Y', $user['date_created']); ?></p>
                <div class="profile-info">
                    <h5 class="mb-20 h5 text-success">Contact Information</h5>
                    <ul>
                        <li>
                            <span class="text-success">Email:</span>
                            <?= $user['email'] ?>
                        </li>
                    </ul>
                </div>
                <div class="profile-social">
                    <h5 class="mb-20 h5 text-success">Social Links</h5>
                    <ul class="clearfix">
                        <li><a href="<?= $user['facebook'] ?>" class="btn" data-bgcolor="#3b5998" data-color="#ffffff" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?= $user['twitter'] ?>" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?= $user['instagram'] ?>" class="btn" data-bgcolor="#f46f30" data-color="#ffffff" target="_blank"><i class="fa fa-instagram"></i></a></li>
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
                                    <?= form_open_multipart('user'); ?>
                                    <ul class="profile-edit-list row">
                                        <li class="weight-500 col-md-6">
                                            <h4 class="text-success h5 mb-20">Your Personal Setting</h4>
                                            <div class="form-group">
                                                <label>Email:</label>
                                                <input class="form-control form-control-lg" type="text" value="<?= $user['email'] ?>" id="email" name="email" readonly>
                                                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Name:</label>
                                                <input class="form-control form-control-lg" type="text" name="name" id="name" value="<?= $user['name'] ?>">
                                                <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Image:</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image" name="image">
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="weight-500 col-md-6">
                                            <h4 class="text-success h5 mb-20">Social Media links</h4>
                                            <div class="form-group">
                                                <label>Facebook URL:</label>
                                                <input class="form-control form-control-lg" type="text" name="facebook" id="facebook" value="<?= $user['facebook'] ?>">
                                                <?= form_error('facebook', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Twitter URL:</label>
                                                <input class="form-control form-control-lg" type="text" name="twitter" id="twitter" value="<?= $user['twitter'] ?>">
                                                <?= form_error('twitter', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Instagram URL:</label>
                                                <input class="form-control form-control-lg" type="text" name="instagram" id="instagram" value="<?= $user['instagram'] ?>">
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
</div>