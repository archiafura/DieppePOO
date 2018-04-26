<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 26/04/2018
 * Time: 11:59
 */

class Log
{
    public static function logWrite($data)
    {
        $directory = "/logs/";
        $file = date('Y-m-d') . ".log"; //permet d'avoir un fichier daté
        $path = dirname(__DIR__) . $directory . $file;
        $data = date('H:i:s:u') . " " . $data;
        $handle = fopen($path, "a");

        if(flock($handle, LOCK_EX)){
            fwrite($handle, $data . PHP_EOL);
            flock($handle, LOCK_UN);
        }
        fclose($handle);
    }
}