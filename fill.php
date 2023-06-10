<?php
include "connection.php";
session_start();
include "html-template/fill.html";
if(isset($_POST['submit']))
{
  $Surname=$_POST['surname'];
  $Fname=$_POST['fname'];
  $Contact=$_POST['contact'];
  $Date=$_POST['date'];
  $Age=$_POST['age'];
  $Food=$_POST['food'];
  $out=$_POST['eat'];
  $Movie=$_POST['movie'];
  $Tv=$_POST['tv'];
  $Radio=$_POST['radio'];
  if(empty($Surname)||empty($Fname)||empty($Contact)||empty($Date)||empty($Age)||empty($Food)||empty($out)||empty($Movie)||empty($Tv)||empty($Radio))
  {
    echo"<script> alert('Fill in all the required fields!')</script>";
  }

else{
  include "check.php";
 

  
}


}
?>