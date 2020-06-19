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
    $pending="SELECT * FROM `order` Where Order_Status='1'";
    $completed="SELECT * FROM `order` Where Order_Status='2'";
    $totalresult=$this->conn->query($total);
    $totalrows=$totalresult->num_rows;
    $pendingresult=$this->conn->query($pending);
    $pendingrows=$pendingresult->num_rows;
    $completedresult=$this->conn->query($completed);
    $completedrows=$completedresult->num_rows;

    $dashboard['totalcases']=$totalrows;
    $dashboard['pendingcases']=$pendingrows;
    $dashboard['completedcases']=$completedrows;

    echo json_encode($dashboard);
    
           
            

    }
}
            $basic_details=new States($db);
            $basic_details->get_package();