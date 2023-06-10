<?php
include "connection.php";
$header='header';
if(isset($_POST['fill']))
{
$fill=$header("Location:fill.php");
exit();
}
if(isset($_POST['view']))
{
$view=$header("Location:view.php");
exit();
}
if(isset($_POST['ok']))
{
$redirect=$header("Location:index.php");
exit();
}

?>