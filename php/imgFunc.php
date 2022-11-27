<?php
    function img($img){
        $extension =  pathinfo($img['full_path'], PATHINFO_EXTENSION);

        if($img['size'] > 2097152){
            return false;
        }
        if(preg_match("/(png|jpg|jpeg)/", $extension) == 0){
            return false;
        }
        $path =  $_SERVER["DOCUMENT_ROOT"]. "/ppi-biblioteca/img/covers"  . "/" . uniqid() . ".$extension";
        move_uploaded_file($img['tmp_name'], $path);
        return($path);
    }
?>