<div class="footer-wrap pd-20 mb-20 card-box">
    &copy; Copyright <strong><span> <?= $profile['name']; ?></span></strong> <?= date('Y'); ?>
</div>
</div>
</div>
<!-- js -->
<script src="<?= base_url('assets/'); ?>vendors/scripts/core.js"></script>
<script src="<?= base_url('assets/'); ?>vendors/scripts/script.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendors/scripts/process.js"></script>
<script src="<?= base_url('assets/'); ?>vendors/scripts/layout-settings.js"></script>

<script src="<?= base_url('assets/'); ?>src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/'); ?>src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>

<!-- bootstrap-tagsinput js -->
<script src="<?= base_url('assets/'); ?>src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

<!-- buttons for Export datatable -->
<script src="<?= base_url('assets/'); ?>src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/'); ?>src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/'); ?>src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/'); ?>src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="<?= base_url('assets/'); ?>src/plugins/datatables/js/pdfmake.min.js"></script>
<script src="<?= base_url('assets/'); ?>src/plugins/datatables/js/vfs_fonts.js"></script>

<!-- Datatable Setting js -->
<script src="<?= base_url('assets/'); ?>vendors/scripts/datatable-setting.js"></script>

<!-- Slick -->
<!-- <script scr="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script>
    $('.logo-slider').slick({
        slidesToShoe: 5,
        slidesToScroll: 1,
    });



    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    $('.roleChangeActive').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
        });
    });

    $('.submenuChangeActive').on("click", function() {
        var val = $(this).val();
        var apply = $(this).is(':checked') ? 1 : 0;
        $.ajax({
            url: "<?= base_url('admin/submenuChangeActive'); ?>",
            type: "post",
            data: {
                val: val,
                apply: apply
            },
            success: function() {
                document.location.href = "<?= base_url('admin/sub-menu'); ?>";
            }
        });
    });

    $('.bannerChangeActive').on("click", function() {
        var val = $(this).val();
        var apply = $(this).is(':checked') ? 1 : 0;
        $.ajax({
            url: "<?= base_url('website/bannerChangeActive'); ?>",
            type: "post",
            data: {
                val: val,
                apply: apply
            },
            success: function() {
                document.location.href = "<?= base_url('website/banner'); ?>";
            }
        });
    });
</script>
</body>

</html>