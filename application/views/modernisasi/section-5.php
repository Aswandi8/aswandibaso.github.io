<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4><?= $title; ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('modernisasi'); ?>">Modernisasi</a></li>
                        <li class="breadcrumb-item active text-success" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <?= $this->session->flashdata('message'); ?>
    <div class="card-box mb-30">
        <div class="pd-20">
            <h4 class="text-success h4"><?= $title; ?></h4>
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Medium-modal">Add New Data</button>
            <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Add New Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <?= form_open_multipart('modernisasi/section-5'); ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Deskripsi"></textarea>
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
                        <th>Title</th>
                        <th>Deskripsi</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($ModernisasiSection5 as $m) : ?>
                        <tr>
                            <td>
                                <div class="name-avatar d-flex align-items-center">
                                    <div class="avatar mr-2 flex-shrink-0">
                                        <img src="<?= base_url('assets/img/modernisasi/' . $m['image']); ?>" class=" shadow" width="60" alt="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="weight-600"><?= substr($m['title'], 0, 20); ?>...</div>
                            </td>
                            <td>
                                <div class="weight-600"><?= substr($m['keterangan'], 0, 60); ?>...</div>
                            </td>
                            <td>
                                <a class="" href="<?= base_url('modernisasi/edit-section-5/' . $m['slug_title']); ?>"><i class="dw dw-edit2 text-indigo"></i></a>
                                <a class="" href="<?= base_url('modernisasi/deleteSection5/' . $m['slug_title']); ?>"><i class="dw dw-delete-3 text-danger"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>