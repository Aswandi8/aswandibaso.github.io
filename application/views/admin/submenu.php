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
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Medium-modal">Add New Sub Menu</button>
            <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Add New Sub Menu</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form action="<?= base_url('admin/sub-menu'); ?>" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <select class="custom-select2 form-control" name="menu_id" style="width: 100%; height: 38px;">
                                        <optgroup label="Menu">
                                            <?php foreach ($menu as $m) : ?>
                                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                            <?php endforeach; ?>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="url" name="url" placeholder="Url name">
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" class="switch-btn" data-size="small" data-color="#28a745" value="1" name="is_active" id="is_active" checked> Active?
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <table class="data-table table stripe hover nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">No</th>
                        <th>Menu</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Url</th>
                        <th>Active</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($submenu as $sm) : ?>
                        <tr>
                            <td class="table-plus"><?= $i++; ?></td>
                            <td><?= $sm['menu']; ?></td>
                            <td><?= $sm['title']; ?></td>
                            <td><?= $sm['slug_submenu']; ?></td>
                            <td><?= $sm['url']; ?></td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="submenuChangeActive" value="<?= $sm['id']; ?>" <?php if ($sm['is_active'] == 1) echo "checked='checked'"; ?> data-toggle="checkbox">
                                </div>
                            </td>
                            <td>
                                <a class="" href="<?= base_url('admin/edit-sub-menu/' . $sm['slug_submenu']); ?>"><i class="dw dw-edit2 text-indigo"></i></a>
                                <a class="" href="<?= base_url('admin/deleteSubmenu/' . $sm['slug_submenu']); ?>"><i class="dw dw-delete-3 text-danger"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>