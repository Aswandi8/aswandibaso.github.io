<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Id/home';

// Admin
$route['admin/edit-role/(:any)'] = 'admin/editrole/$1';
$route['admin/role-access/(:any)'] = 'admin/roleAccess/$1';

$route['admin/edit-menu/(:any)'] = 'admin/editmenu/$1';
$route['admin/delete-menu/(:any)'] = 'admin/deleteMenu/$1';

$route['admin/sub-menu'] = 'admin/submenu';
$route['admin/edit-sub-menu/(:any)'] = 'admin/editsubmenu/$1';

// Partner
$route['partner/edit-partner/(:any)'] = 'partner/editPartner/$1';

// Website
$route['website/edit-service/(:any)'] = 'website/editService/$1';
$route['website/edit-banner/(:any)'] = 'website/editBanner/$1';

// Features
$route['website/add-features'] = 'website/addFeatures';
$route['website/edit-features/(:any)'] = 'website/editFeatures/$1';

// Features
$route['website/edit-iklan/(:any)'] = 'website/editIklan/$1';

// Landingpage
$route['id/about-us'] = 'id/aboutus';
$route['id/contact-us'] = 'id/contactUs';


// Maintenance
$route['maintenance/data-maintenance'] = 'maintenance/dataMaintenance';
$route['maintenance/edit-maintenance/(:any)'] = 'maintenance/editSection1/$1';
$route['maintenance/section-2'] = 'maintenance/section2';
$route['maintenance/edit-section-2/(:any)'] = 'maintenance/editSection2/$1';
$route['maintenance/section-3'] = 'maintenance/section3';
$route['maintenance/edit-section-3/(:any)'] = 'maintenance/editSection3/$1';

// Modernisasi
$route['modernisasi/data-modernisasi'] = 'modernisasi/dataModernisasi';
$route['modernisasi/edit-modernisasi/(:any)'] = 'modernisasi/editSection1/$1';
$route['modernisasi/section-2'] = 'modernisasi/section2';
$route['modernisasi/edit-section-2/(:any)'] = 'modernisasi/editSection2/$1';
$route['modernisasi/section-3'] = 'modernisasi/section3';
$route['modernisasi/edit-section-3/(:any)'] = 'modernisasi/editSection3/$1';
$route['modernisasi/section-4'] = 'modernisasi/section4';
$route['modernisasi/edit-section-4/(:any)'] = 'modernisasi/editSection4/$1';
$route['modernisasi/section-5'] = 'modernisasi/section5';
$route['modernisasi/edit-section-5/(:any)'] = 'modernisasi/editSection5/$1';

// About
$route['about/sejarah-kbm'] = 'about/sejarah';
$route['about/visi-kbm'] = 'about/visi';
$route['about/edit-visi-kbm/(:any)'] = 'about/editVisi/$1';
$route['about/misi-kbm'] = 'about/misi';
$route['about/edit-misi-kbm/(:any)'] = 'about/editMisi/$1';

// Kategori 
$route['kategori/edit-elevator/(:any)'] = 'kategori/editElevator/$1';
$route['kategori/edit-escalator/(:any)'] = 'kategori/editEscalator/$1';

// Product 
$route['product/add-elevator'] = 'product/addElevator';
$route['product/edit-elevator/(:any)'] = 'product/editElevator/$1';
$route['product/add-escalator'] = 'product/addescalator';
$route['product/edit-escalator/(:any)'] = 'product/editescalator/$1';
$route['product/multi-escalator/(:any)'] = 'product/multiEscalator/$1';
$route['product/spare-part'] = 'product/sparepart';
$route['product/add-spare-part'] = 'product/addsparepart';
$route['product/edit-spare-part/(:any)'] = 'product/editsparepart/$1';

// Elevator ID 
$route['id/product/elevator'] = 'id/elevator';
$route['id/product/elevator/(:any)'] = 'id/detailElevator/$1';
$route['id/product/escalator'] = 'id/escalator';
$route['id/product/escalator/(:any)'] = 'id/detailEscalator/$1';
$route['id/product/spare-part'] = 'id/sparepart';
$route['id/product/spare-part/(:any)'] = 'id/detailsparepart/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
