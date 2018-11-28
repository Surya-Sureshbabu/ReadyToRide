<?php
  include "Query_Exec.php";
  $name=$_REQUEST['name'];
  $gender=$_REQUEST['gender'];
  $dob=$_REQUEST['dob'];
  $aadhar=$_REQUEST['aadhar'];
$blood=$_REQUEST['blood'];
$identif=$_REQUEST['identif'];
$qual=$_REQUEST['qual'];
$address=$_REQUEST['address'];
$mob=$_REQUEST['mob'];
$email=$_REQUEST['email'];
$vehicle=$_REQUEST['vehicle'];
/*$name='jhghj';
  $gender='ihiuh';
  $dob='6546';
  $aadhar='54564';
$blood='jhijh';
$identif='jhi';
$qual='jknjkn';
$address='jbkjjkn';
$mob='546546';
$email='556546';
$vehicle='njnj';*/
  $query=new Query_Exec();
  $query->Registration($name,$gender,$dob,$aadhar,$blood,$identif,$qual,$address,$mob,$email,$vehicle);

?>