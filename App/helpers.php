<?php
class LogRegister {
    public function register($arr, $title = '')
        {
        $log = "\n------------------------\n";
        $log .= date("Y.m.d G:i:s") . "\n";
        $log .= (strlen($title) > 0 ? $title : 'DEBUG') . "\n";
        $log .= print_r($arr, 1);
        $log .= "\n------------------------\n";
        file_put_contents(getcwd() . '\log.log', $log, FILE_APPEND);
        return true;
        }

} 