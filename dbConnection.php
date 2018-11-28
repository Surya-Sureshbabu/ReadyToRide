<?php
class Db_Connection
{
  var $con,$result;
  function getConnection()
  {
    $this->con=mysqli_connect("localhost","id7822268_saintgits","saintgits");
    mysqli_select_db($this->con,"id7822268_saintgits");
  }

  function execute_Query($q)
  {
    $this->getConnection();
    $this->result=mysqli_query($this->con,$q);
    return $this->result;
  }
}
?>