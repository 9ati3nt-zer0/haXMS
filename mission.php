<?php

$mission = $_GET['m'];
switch($mission){
case "Mission Title 1":
include("mission/type/name1.php");
break;
case "Mission Title 2":
include("mission/type/name2.php");
break;
default:
include("mission-tpl.php");
break;
}

?>