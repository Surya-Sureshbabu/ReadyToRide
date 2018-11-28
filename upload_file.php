<?php
 
 
 
 //$image = 'ghhguh145';
 $image = $_POST['image'];
 $medical=$_POST['medical'];
 $sign=$_POST['sign'];
 
 require_once('Db_Connection.php');
 $q="select MAX(id) from tbl_registration";
 $a=mysqli_query($con,$q);
 $res=mysqli_fetch_array($a);
 echo $id=$res[0];
 
 $sql="update tbl_registration set photo='$image',medical='$medical',sign='$sign' where id=$id";
 
$res=mysqli_query($con,$sql);
 
 
 if($res == 1){
 echo "Image Uploaded Successfully";
 }else{
 echo "Error Uploading Image";
 }
 mysqli_close($con);
 