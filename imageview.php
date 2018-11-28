<?php
 
 $db = mysqli_connect("localhost","id7822268_saintgits","saintgits","id7822268_saintgits"); 
// $id = $_GET['id'];
 $sql = "select * from tbl_registration where id = 30";
 
 
 $r = mysqli_query($db,$sql);
 
 $result = mysqli_fetch_array($r);
 
 header('content-type: image/jpeg');
// echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
 //echo '<img src="data:image/jpeg;base64,'.base64_encode($image->load()) .'" />';
 echo base64_decode($result['sign']);
 
 
 mysqli_close($con);
 
?>