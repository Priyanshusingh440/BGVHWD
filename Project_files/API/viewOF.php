<?php

require_once "../config/config.php";

#---------------------<---Code Written and Designed By Priyanshu Raghuvanshi--->-----------------------#

$get_connection=new connectdb;
$db=$get_connection->connect();

class country
{
    
    public function __construct($db)
    {
    $this->conn=$db;
    }

   public function update_details()
   {
    
        $checbk='SELECT * FROM employee_of ORDER BY Id DESC';
            $result1=$this->conn->query($checbk);
            if($result1->num_rows>0)
            {
                $i=0;
               while($reed=$result1->fetch_assoc())
               {
                $country[$i][$i][$i]['Id']=$reed['id'];
                $country[$i][$i]['Company']=$reed['Company'];
                $country[$i][$i]['first_name']=$reed['first_name'];
                $country[$i][$i]['middle_name']=$reed['middle_name'];
                $country[$i][$i]['last_name']=$reed['last_name'];
                $country[$i][$i]['fullname']=$reed['fullname'];
                $country[$i][$i]['email_id']=$reed['email_id'];
                $country[$i][$i]['Address']=$reed['Address'];
                $country[$i][$i]['city']=$reed['city'];
                $country[$i][$i]['country']=$reed['country'];
                $country[$i][$i]['postal_code']=$reed['postal_code'];
                $country[$i][$i]['mobile_number']=$reed['mobile_number'];
                $country[$i][$i]['password']=$reed['password'];
                $country[$i][$i]['otp']=$reed['otp'];
                $country[$i][$i]['user_status']=$reed['user_status'];
                $country[$i][$i]['about_me']=$reed['about_me'];
                $i++;
               }    
               echo json_encode($country);
            }
            else
            {
                echo "No client Found";
            }
 
    }
}
            $basic_details=new country($db);
            $basic_details->update_details();