<!-- QUERY MENU -->
<?php
$role_id = $this->session->userdata('role_id');
$queryMenu = "SELECT `user_menu`.`id`, `menu`, `icon` FROM `user_menu` JOIN `user_access_menu` ON `user_menu`.`id` = `user_access_menu`.`menu_id` WHERE `user_access_menu`.`role_id` = $role_id ORDER BY `user_access_menu`.`menu_id` ASC ";
$menu = $this->db->query($queryMenu)->result_array();
?>
<div class="left-side-bar">
    <div class="brand-logo">
        <a href="<?= base_url('id/home'); ?>" target="_blank">
            <?php foreach ($getLogo as $gL) : ?>
                <img src="<?= base_url('assets/img/' . $gL['image']); ?>" alt="" class="dark-logo">
                <img src="<?= base_url('assets/img/' . $gL['image']); ?>" alt="" class="light-logo">
            <?php endforeach; ?>
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <?php foreach ($menu as $m) : ?>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <i class="micon <?= $m['icon']; ?>"></i><span class="mtext"><?= $m['menu']; ?></span>
                        </a>
                        <!-- SIAPKAN SUB-MENU SESUAI MENU -->
                        <?php
                        $menuId = $m['id'];
                        $querySubMenu = "SELECT *
                               FROM `user_sub_menu` JOIN `user_menu` 
                                 ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                              WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1
                        ";
                        $subMenu = $this->db->query($querySubMenu)->result_array();
                        ?>
                        <ul class="submenu ">
                            <?php foreach ($subMenu as $sm) : ?>
                                <?php if ($title == $sm['title']) : ?>
                                    <li><a href="<?= base_url($sm['url']); ?>" class="active"><?= $sm['title']; ?></a></li>
                                <?php else : ?>
                                    <li><a href="<?= base_url($sm['url']); ?>"><?= $sm['title']; ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">