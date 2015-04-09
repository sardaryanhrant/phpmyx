<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Displays status of phpMyAdmin configuration storage
 *
 * @package PhpMyAdmin
 */

require_once 'libraries/common.inc.php';

<<<<<<< HEAD
// If request for creating all PMA tables.
if (isset($_REQUEST['create_pmadb'])) {
    PMA_fixPMATables($GLOBALS['db']);
}

$cfgRelation = PMA_getRelationsParam();
// If request for creating missing PMA tables.
if (isset($_REQUEST['fix_pmadb'])) {
    PMA_fixPMATables($cfgRelation['db']);
=======
// If request for fixing PMA tables.
if (isset($_REQUEST['fix_pmadb'])) {
    PMA_fixPMATables($GLOBALS['db']);
>>>>>>> origin/master
}

$response = PMA_Response::getInstance();
$response->addHTML(
    PMA_getRelationsParamDiagnostic($cfgRelation)
);

?>
