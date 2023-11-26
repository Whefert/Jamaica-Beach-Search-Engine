<?php 
require "./Parish.php";

class Parishes{

    public static function importParishes(){
        if (($handle = fopen("parishes.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            //insert Beach
            Parish::insertParish($data[0]);
            }
            fclose($handle);
        }
    }

}


?>