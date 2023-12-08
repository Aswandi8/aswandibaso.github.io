<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4><?= $title; ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('website'); ?>">Website</a></li>
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
            <!-- <a href="<?= base_url('website/add-features'); ?>" class="btn btn-outline-success">Add features</a> -->
        </div>
        <div class="">
            <table class="data-table table stripe hover nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">Title</th>
                        <th>Tombol</th>
                        <th>Deskripsi</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($getDataFeatures as $m) : ?>
                        <tr>
                            <td class="table-plus">
                                <div class="name-avatar d-flex align-items-center">
                                    <div class="avatar mr-2 flex-shrink-0">
                                        <img src="<?= base_url('assets/img/landingpage/' . $m['image']); ?>" class=" shadow" width="100" alt="">
                                    </div>
                                    <div class="txt">
                                        <div class="weight-600"><?= substr($m['title'], 0, 20); ?></div>
                                    </div>
                                </div>
                            </td>
                            <td><?= substr($m['tombol'], 0, 50); ?></td>
                            <td><?= substr($m['keterangan'], 0, 50); ?>...</td>
                            <td>
                                <a class="" href="<?= base_url('website/edit-features/' . $m['slug_title']); ?>"><i class="dw dw-edit2 text-indigo"></i></a>
                                <a class="" href="<?= base_url('website/deleteFeatures/' . $m['slug_title']); ?>"><i class="dw dw-delete-3 text-danger"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>