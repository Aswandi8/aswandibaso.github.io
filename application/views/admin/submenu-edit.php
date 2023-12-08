<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4><?= $title; ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Admin</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/menu'); ?>">Menu</a></li>
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
            <?php foreach ($dataSubmenu as $ds) : ?>
                <?= form_open_multipart('admin/editsubmenu/' . $ds['id']); ?>
                <input type="hidden" id="id" name="id" value="<?= $ds['id']; ?>">
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Menu</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="custom-select2 form-control" name="menu_id" style="width: 100%; height: 38px;">
                            <option value="<?= $ds['menu_id']; ?>"><?= $ds['menu']; ?></option>
                            <option value=""></option>
                            <optgroup label="Menu">
                                <?php foreach ($menu as $m) : ?>
                                    <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                <?php endforeach; ?>
                            </optgroup>
                        </select>
                        <?= form_error('menu', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Title</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" id="title" name="title" value="<?= $ds['title']; ?>">
                        <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">URL</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" id="url" name="url" value="<?= $ds['url']; ?>">
                        <?= form_error('url', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <input type="checkbox" class="switch-btn" data-size="small" data-color="#28a745" value="1" name="is_active" id="is_active" checked> Active?
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