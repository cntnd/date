<?php

namespace Cntnd\Date;

use Cntnd\CntndUtil;

require_once("class.cntnd_util.php");

/**
 * cntnd_date Class
 */
class CntndDate extends CntndUtil
{
    private array $formats = [
        "DATE_SHORT" => '{"dateFormat":"d.m.y","timeFormat":""}',
        "DATE_LONG" => '{"dateFormat":"l, d. F Y","timeFormat":""}',
        "DATETIME_SHORT" => '{"dateFormat":"d.m.y","timeFormat":"H:i"}',
        "DATETIME_LONG" => '{"dateFormat":"l, d. F Y","timeFormat":"H:i"}'
    ];

    function __construct()
    {
        $this->checkDateFormats();
    }

    private function checkDateFormats(): void
    {
        $type = 'cms_date';
        $formats = \getEffectiveSettingsByType($type);
        foreach ($this->formats as $key => $value) {
            if (!array_key_exists($key, $formats)) {
                \setSystemProperty($type, $key, $value);
            }
        }
    }

    public function dateFormats(): array
    {
        return $this->formats;
    }
}

?>
