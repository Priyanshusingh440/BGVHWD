<?php

require_once "../config/config.php";

#---------------------<---Code Written and Designed By Priyanshu Raghuvanshi--->-----------------------#

$get_connection=new connectdb;
$db=$get_connection->connect();

class login
{
    
    public function __construct($db)
    {
    $this->conn=$db;
    }

   public function update_details()
   {
 
    
    $json_data = file_get_contents("php://input");
// Checks if it's empty or not
if( !empty($json_data))
{
  $data = json_decode($json_data, true);
  //echo print_r($_POST);
  $email=$data['email'];
  $password=$data['password'];
  //echo $data['user-type'];
  if($data['user-type']!="")
  {
    if($data['user-type']=="Admin")
    {
      
      if ($email != "" && $password != "")
      {
          $check='SELECT * FROM admin  WHERE email_id="'.$email.'" and password="'.$password.'"';
          
          $result=$this->conn->query($check);
          
          if($result->num_rows==1)
              {
                  $row = $result->fetch_assoc();
                  session_start();
                  $_SESSION['email'] = $email;
                  $_SESSION['password']=$password;
                  $_SESSION['uid']=$row['id'];
                  
                  echo "Admin logged in";
                  
              }
              else
              {
                  echo "Wrong admin Credentials";
              }
      }
    } 
    else if($data['user-type']=='Employee')
    {
      $check='SELECT * FROM employee_qc WHERE email_id="'.$email.'" and password="'.$password.'"';
      $check1='SELECT * FROM employee_of WHERE email_id="'.$email.'" and password="'.$password.'"';
      $check2='SELECT * FROM employee_vendor WHERE email_id="'.$email.'" and password="'.$password.'"';

      $result=$this->conn->query($check);
      $result1=$this->conn->query($check1);
      $result2=$this->conn->query($check2);
      
      if($result->num_rows==1)
          {
              $row = $result->fetch_assoc();
              session_start();
              $_SESSION['email'] = $email;
              $_SESSION['password']=$password;
              $_SESSION['uid']=$row['id'];
              
              echo "Employee Logged QC In";
              
          }
          else if($result1->num_rows==1)
          {
              $row = $result->fetch_assoc();
              session_start();
              $_SESSION['email'] = $email;
              $_SESSION['password']=$password;
              $_SESSION['uid']=$row['id'];
              
              echo "Employee Logged OF In";
              
          }
          else if($result2->num_rows==1)
          {
              $row = $result->fetch_assoc();
              session_start();
              $_SESSION['email'] = $email;
              $_SESSION['password']=$password;
              $_SESSION['uid']=$row['id'];
              
              echo "Employee Logged vendor In";
              
          }
          else
          {
              echo "Wrong Employee Credentials";
          }
    }
  }
  else
  {
    echo "Please Select User-type".$data['user-type']."abc";
  }
 
}

else 
{
  echo "Connection Denied From Server";
}

                }

            }

            $basic_details=new login($db);
            $basic_details->update_details();