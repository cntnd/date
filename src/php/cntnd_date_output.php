<?php
// cntnd_date_output

// includes
cInclude('module', 'includes/class.cntnd_date.php');

// assert framework initialization
defined('CON_FRAMEWORK') || die('Illegal call: Missing framework initialization - request aborted.');

// editmode
$editmode = cRegistry::isBackendEditMode();

// input/vars
$date = "CMS_DATE[1]";

// other vars
$cntndDate = new Cntnd\Date\CntndDate();

// module
if ($editmode) {
    echo '<div class="content_box"><label class="content_type_label">' . mi18n("MODULE") . '</label>';
}

echo $date;

$tpl = cSmartyFrontend::getInstance();
$tpl->assign('date', $date);
$tpl->display('default.html');

if ($editmode) {
    echo '</div>';
}
?>
