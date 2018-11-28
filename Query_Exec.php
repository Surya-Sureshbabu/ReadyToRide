<?php
 include "dbConnection.php";

 class Query_Exec
  {
    function Registration($name,$gender,$dob,$aadhar,$blood,$identif,$qual,$address,$mob,$email,$vehicle)
     {
       $con=new Db_Connection();
      echo $q="insert into tbl_registration values(null,'$name','$gender','$dob','$aadhar','$blood','$identif','$qual','$address','$mob','$email','$vehicle',0,null,null,null)";
       $r=$con->execute_Query($q);
       return $r;
       
     }
     function isAccountExists($aadhar)
      {
        $con=new Db_Connection();
        $q="select id from tbl_registration where aadhar='$aadhar'";
        $res=$con->execute_Query($q);
        return $res;
      }
     
     
     
  }
?>