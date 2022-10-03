?><?php
// cntnd_date_input
$cntnd_module = "cntnd_date";

// includes
cInclude('module', 'includes/class.cntnd_date.php');
cInclude('module', 'includes/style.cntnd_date.php');

// other vars
$cntndDate = new Cntnd\Date\CntndDate();
?>
<div class="cntnd_alert cntnd_alert-primary">
    This Module sets the following Date and Time Formats:
    <ul>
        <?php
        foreach ($cntndDate->dateFormats() as $key => $value) {
            echo "<li>Name: <strong>$key</strong> / Wert: <strong>$value</strong></li>";
        }
        ?>
    </ul>
    If you need more/other Date/Time Formats add them via: <strong>Administration > System > Experteneinstellung</strong> as follows:<br />
    Typ: <strong>cms_date</strong><br />
    Name: <strong>[Name des Formats]</strong><br >
    Wert: <strong>{"dateFormat":"XXXX","timeFormat":"XXX"}</strong><br />
    XXXX => Date or Time Format or empty if not necessary. <a href="https://www.php.net/manual/en/datetime.format.php" target="_blank">See Date/Time formats</a>
</div>