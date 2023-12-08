<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4><?= $title ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('partner'); ?>">Partner</a></li>
                        <li class="breadcrumb-item active text-success" aria-current="page"><?= $title ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <div class="card-box mb-30">
        <div class="pd-20">
            <h2 class="h4"><?= $title; ?></h2>
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Medium-modal">Add New Partner</button>
            <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Add New Partner</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <?= form_open_multipart('partner'); ?>
                        <div class="modal-body">
                            <input type="hidden" id="is_active" name="is_active" value="1">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name Partner">
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
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
        <table class="data-table table hover ">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Image</th>
                    <th>Partner</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($getPartner as $gmk) : ?>
                    <tr>
                        <td class="table-plus">
                            <img src="<?= base_url('assets/img/partner/' . $gmk['image']); ?>" width="100" alt="">
                        </td>
                        <td class="table-plus"><?= $gmk['name']; ?></td>
                        <td>
                            <a class="" href="<?= base_url('partner/edit-partner/' . $gmk['slug_partner']); ?>"><i class="dw dw-edit2 text-indigo"></i></a>
                            <a class="" href="<?= base_url('partner/deletePartner/' . $gmk['slug_partner']); ?>"><i class="dw dw-delete-3 text-danger"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>