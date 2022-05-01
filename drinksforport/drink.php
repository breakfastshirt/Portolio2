<?php

require 'Controller/GameController.php';
$Controller = new Controller();

if(isset($_POST['types']))
{

    $drinkTables = $Controller->CreateDrinkTables($_POST['types']);
}
else 
{

    $drinkTables = $Controller->CreateDrinkTables('%');
}


$title = 'drink overview';
$content = $Controller->CreatedrinkDropdownList(). $drinkTables;

include 'Template.php';
?>
