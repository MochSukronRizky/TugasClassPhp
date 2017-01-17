<?php
/**
* class wifi
*/
class wifi extends benda
{
    public $connections

    public function connect()
    {
        return 'connected from '.$connections;
    }
    public function disconnect()
    {
        return 'disconnected from '.$connections;
    }
}
?>
