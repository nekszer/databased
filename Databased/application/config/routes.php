<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "dashboard";
$route['404_override'] = '';

$route['backoffice/login'] = "backoffice/auth/login";
$route['backoffice/logout'] = "backoffice/auth/logout";
$route['backoffice/forgot_password'] = "backoffice/auth/forgot_password";
$route['backoffice/reset_password'] = 'backoffice/auth/reset_password';

$route['backoffice/table_datasource/(.+?)'] = 'backoffice/table_datasource/index/$1';

$route['backoffice/revisions'] = 'backoffice/revisions/index';
$route['backoffice/revisions/loadRecordRevisions/(.+?)/(.+?)/(.+?)/(.+?)'] = 'backoffice/revisions/loadRecordRevisions/$1/$2/$3/$4';
$route['backoffice/revisions/removeRevision/(.+?)'] = 'backoffice/revisions/removeRevision/$1';
$route['backoffice/revisions/restoreRevision/(.+?)'] = 'backoffice/revisions/restoreRevision/$1';
$route['backoffice/revisions/restoreRecordRevision/(.+?)'] = 'backoffice/revisions/restoreRecordRevision/$1';
$route['backoffice/revisions/deleteRecordRevision/(.+?)/(.+?)/(.+?)/(.+?)'] = 'backoffice/revisions/deleteRecordRevision/$1/$2/$3/$4';
$route['backoffice/revisions/viewCell/(.+?)'] = 'backoffice/revisions/viewCell/$1';
$route['backoffice/revisions/viewRecord/(.+?)/(.+?)/(.+?)/(.+?)/(.+?)'] = 'backoffice/revisions/viewRecord/$1/$2/$3/$4/$5';
$route['backoffice/revisions/(.+?)/(.+?)/(.+?)/(.+?)/(.+?)'] = 'backoffice/revisions/index/$1/$2/$3/$4/$5';

$route['backoffice/db/saveField/(.+?)/(.+?)/(.+?)'] = 'backoffice/db/saveField/$1/$2/$3';
$route['backoffice/db/addField/(.+?)'] = 'backoffice/db/addField/$1';
$route['backoffice/db/removeField/(.+?)'] = 'backoffice/db/removeField/$1';
$route['backoffice/db/newRecord/(.+?)/(.+?)'] = 'backoffice/db/newRecord/$1/$2';
$route['backoffice/db/getRecord/(.+?)/(.+?)/(.+?)'] = 'backoffice/db/getRecord/$1/$2/$3';
$route['backoffice/db/getCell/(.+?)/(.+?)/(.+?)/(.+?)'] = 'backoffice/db/getCell/$1/$2/$3/$4';
$route['backoffice/db/deleteRecord/(.+?)/(.+?)/(.+?)'] = 'backoffice/db/deleteRecord/$1/$2/$3';
$route['backoffice/db/updateRecord/(.+?)/(.+?)/(.+?)/(.+?)'] = 'backoffice/db/updateRecord/$1/$2/$3/$4';
$route['backoffice/db/deleteTable/(.+?)/(.+?)'] = "backoffice/db/deleteTable/$1/$2";
$route['backoffice/db/newTable/(.+?)'] = "backoffice/db/newTable/$1";
$route['backoffice/db/updateTable/(.+?)/(.+?)'] = "backoffice/db/updateTable/$1/$2";
$route['backoffice/db/uploadCsv/(.+?)'] = "backoffice/db/uploadCsv/$1";
$route['backoffice/db/importCsv/(.+?)'] = "backoffice/db/importCsv/$1";
$route['backoffice/db/(.+?)/(.+?)'] = 'backoffice/db/index/$1/$2';
$route['backoffice/db/(.+?)'] = 'backoffice/db/index/$1';

$route['backoffice/crud/(.+?)/(.+?)'] = 'backoffice/crud/index/$1/$2';
$route['backoffice/crud/(.+?)'] = 'backoffice/crud/index/$1';

$route['backoffice/recordNotes/deleteNote/(.+?)/(.+?)/(.+?)/(.+?)/(.+?)'] = 'backoffice/recordnotes/deleteNote/$1/$2/$3/$4/$5';

$route['backoffice/users'] = 'backoffice/users/index';
$route['backoffice/users/create'] = 'backoffice/users/create';
$route['backoffice/users/updateLogin/(.+?)'] = 'backoffice/users/updateLogin/$1';
$route['backoffice/users/update/(.+?)'] = 'backoffice/users/update/$1';
$route['backoffice/users/delete/(.+?)'] = 'backoffice/users/delete/$1';
$route['backoffice/users/(.+?)'] = 'backoffice/users/index/$1';

$route['backoffice/roles'] = "backoffice/roles/index";
$route['backoffice/roles/create'] = 'backoffice/roles/create';
$route['backoffice/roles/update'] = 'backoffice/roles/update';
$route['backoffice/roles/delete/(.+?)'] = 'backoffice/roles/delete/$1';
$route['backoffice/roles/(.+?)'] = "backoffice/roles/index/$1";

//$route['redactorUpload'] = "backoffice/redactorUpload/index";

/* End of file routes.php */
/* Location: ./application/config/routes.php */