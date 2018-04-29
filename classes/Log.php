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

    public static function formWrite($conf)
    {


        function put_ini_file($file, $array, $i = 0)
        {
            $str = "";
            foreach ($array as $k => $v) {
                if (is_array($v)) {
                    $str .= str_repeat(" ", $i * 2) . "[$k]" . PHP_EOL;
                    $str .= put_ini_file("", $v, $i + 1);
                } else
                    $str .= str_repeat(" ", $i * 2) . "$k = $v" . PHP_EOL;
            }
            if ($file)
                return file_put_contents($file, $str);
            else
                return $str;
        }
    }
        /*

    {
        $dossier= "/formulaire/";
        $conf = parse_ini_file($this->path . $this->file . ".ini", true);
        $handle = fopen($conf, "a");

        if(flock($handle, LOCK_EX)){
            fwrite($handle, $conf . PHP_EOL);
            flock($handle, LOCK_UN);
        }
        fclose($handle);
    }
*/
}