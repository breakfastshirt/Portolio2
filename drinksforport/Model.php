<?php

require ("Entities/Entity.php");


class Model
 {


    function GetdrinkTypes() {
        require 'Credentials.php';


        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT type FROM drink") or die(mysql_error());
        $types = array();


        while ($row = mysql_fetch_array($result)) {
            array_push($types, $row[0]);
        }
        mysql_close();
        return $types;
    }


    function GetdrinkByType($type) {
        require 'Credentials.php';
 
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM drink WHERE type LIKE '$type'";
        $result = mysql_query($query) or die(mysql_error());
        $drinkArray = array();


        while ($row = mysql_fetch_array($result)) {
            $name = $row[1];
            $type = $row[2];
            $price = $row[3];
            $origin = $row[4];
            $image = $row[5];
            $review = $row[6];


            $drink = new Entity(-1, $name, $type, $price, $origin, $image, $review);
            array_push($drinkArray, $drink);
        }

        mysql_close();
        return $drinkArray;
    }

}

?>
