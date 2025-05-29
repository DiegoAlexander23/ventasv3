<?php
    class DB{
        public static function conectar(){
            $url='mysql:host=localhost;dbname=VENTASSENATIDB';
            $user='root';
            $password='admin123';
            /*$url='mysql:host=localhost;dbname=VENTASSENATIDB';
            $user='root';
            $password='';*/
            $cn=new PDO($url, $user, $password);
            return $cn;
        }
    }
?>