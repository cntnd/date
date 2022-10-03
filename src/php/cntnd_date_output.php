<?php
// cntnd_date_output
$cntnd_module = "cntnd_date";

// assert framework initialization
defined('CON_FRAMEWORK') || die('Illegal call: Missing framework initialization - request aborted.');

// editmode
$editmode = cRegistry::isBackendEditMode();

// includes
cInclude('module', 'includes/class.cntnd_date.php');
if ($editmode) {
    cInclude('module', 'includes/style.cntnd_date.php');
}

// input/vars
$date = "CMS_DATE[1]";

// other vars
$cntndDate = new Cntnd\Date\CntndDate();

// module
if ($editmode){
    echo '<span class="module_box"><label class="module_label">'.mi18n("MODULE").'</label></span>';
}

$tpl = cSmartyFrontend::getInstance();
$tpl->assign('date', $date);
$tpl->display('default.html');
?>
