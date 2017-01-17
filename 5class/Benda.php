<?php
/**
*class benda
*/
require 'Botol.php';
require 'RiceCoocer.php';
require 'Wifi.php';

class Benda extends aktivitas
{
    public $jenis;

    public function canUse()
    {
        return 'can using';
    }
    public function canNotUse()
    {
        return 'can not using';
    }

    public function use($item)
    {
        return 'using '.$item;
    }
    public function notUse($item)
    {
        return 'not Using '.$item;
    }
}
?>
