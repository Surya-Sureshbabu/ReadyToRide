<?php
include "Query_Exec.php";
$aadhar=$_REQUEST['aadhar'];
//$aadhar='567';
//$r_number='9745539841';
//$contact='9562861150';
//$device_id='866156020682384';
$query=new Query_Exec();

$res=$query->isAccountExists($aadhar);
$sa=mysqli_fetch_array($res);
if($sa<=0)
{

echo $found="success";
$arr=array('result'=>$found);
}
else
{echo $found="failed";
$arr=array('result'=>$found);
// header('Content-type: application/json');
}
//header('Content-type: application/json');
//echo $result= json_encode($arr);


?>