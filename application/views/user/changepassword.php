<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4><?= $title ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">Usrer</a></li>
                        <li class="breadcrumb-item active text-success" aria-current="page"><?= $title ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-success h4 mb-3"><?= $title ?></h4>
            </div>
        </div>
        <form action="<?= base_url('user/change-password'); ?>" method="post">
            <div class="form-group">
                <label for="current_password">Current Password</label>
                <input type="password" class="form-control" id="current_password" name="current_password">
                <?= form_error('current_password', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="new_password1">New Password</label>
                <input type="password" class="form-control" id="new_password1" name="new_password1">
                <?= form_error('new_password1', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="new_password2">Repeat Password</label>
                <input type="password" class="form-control" id="new_password2" name="new_password2">
                <?= form_error('new_password2', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Change Password</button>
            </div>
        </form>
    </div>
</div>