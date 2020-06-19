<?php

require_once "../config/config.php";

#---------------------<---Code Written and Designed By Priyanshu Raghuvanshi--->-----------------------#

$get_connection=new connectdb;
$db=$get_connection->connect();

class States
{
    
    public function __construct($db)
    {
    $this->conn=$db;
    }

   public function get_package()
   {

    $total="SELECT * FROM `order`";
    $totaltime="SELECT MAX(order_creation_date_time) FROM `order`";
    $rowtime=$this->conn->query($totaltime);
    $timecompleted=$rowtime->fetch_assoc();

    $pending="SELECT * FROM `order` Where Order_Status='0' or Order_Status='1'";
    $pendingtime="SELECT MAX(order_creation_date_time) FROM `order` Where Order_Status='0' or Order_Status='1'";
    $rowpendingtime=$this->conn->query($pendingtime);
    $timepending=$rowpendingtime->fetch_assoc();

    $completed="SELECT * FROM `order` Where Order_Status='2'";
    $completedtime="SELECT MAX(order_creation_date_time) FROM `order` Where Order_Status='2'";
    $rowcompletedtime=$this->conn->query($completedtime);
    $timecomplete=$rowcompletedtime->fetch_assoc();
    $totalresult=$this->conn->query($total);
    $totalrows=$totalresult->num_rows;
    $pendingresult=$this->conn->query($pending);
    $pendingrows=$pendingresult->num_rows;
    $completedresult=$this->conn->query($completed);
    $completedrows=$completedresult->num_rows;

    $dashboard['totalcases']=$totalrows;
    $dashboard['totalcasestime']="Updated on ".$timecompleted["MAX(order_creation_date_time)"];
    $dashboard['pendingcases']=$pendingrows;
    $dashboard['pendingcasestime']="Updated on ".$timepending["MAX(order_creation_date_time)"];
    $dashboard['completedcases']=$completedrows;
    $dashboard['completedcasestime']="Updated on ".$timecomplete["MAX(order_creation_date_time)"];

  echo json_encode($dashboard);
    
           
            

    }
}
            $basic_details=new States($db);
            $basic_details->get_package();