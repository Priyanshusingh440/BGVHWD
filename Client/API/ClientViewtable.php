<?php
require_once "../config/config.php";
//$con = mysqli_connect("localhost","pesrsxttfd","Demo@123","pesrsxttfd");
  
   $get_connection=new connectdb;
   $db=$get_connection->connect();

   if (mysqli_connect_errno($db)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
  
   $Ser=$_POST["Service"];
   $option=$_POST["option"];
   $dob=$_POST["dob"];
   $opt=$_POST["opt"];
   
// $userid =$_SESSION['uid'];
   $userid="1";
   $Sr=0;
   // echo"case:".$Ser;
   switch ($Ser) {
  case "First_Name_Last_Name" :
  //  $sql="SELECT * FROM `order` WHERE first_Name or last_Name LIKE '$option%'";
    $sql = "SELECT * FROM `order` WHERE first_Name LIKE '$option%' or last_Name LIKE '$option%' or CONCAT (first_Name,' ', last_Name) LIKE '$option%' or  CONCAT (first_Name,' ', middle_Name) LIKE '$option%'";
    //$sql = "SELECT * FROM `order` WHERE first_Name='$option' or last_Name='$option' or CONCAT (first_Name,' ', last_Name)='$option' or  CONCAT (first_Name,' ', middle_Name)='$option'";
    break;
  case "Internal_Reference_Id":
    $sql = "SELECT * FROM `order` WHERE internal_reference_id='$option%'";
    break;
  case "Joing_Location":
    $sql = "SELECT * FROM `order` WHERE joining_location LIKE '$option%'";
    break;
  case "Case_Ref_ID" :
    $sql = "SELECT * FROM `order` WHERE generated_reference_id LIKE '$option%'";
    break;
  case "Order_Creation_Date":
    $sql = "SELECT * FROM `order` WHERE order_creation_date_time LIKE'$dob%'";
    break;
  case "Order_Completion_Date":
    $sql = "SELECT * FROM `order` WHERE Order_Completion_Date LIKE '$dob%'";
   // echo $sql;
    break;
     case "Email_ID":
    $sql = "SELECT * FROM `order` WHERE email_id LIKE '$option%'";
    break;
  case "Order_Status":
    $sql = "SELECT * FROM `order` WHERE Order_Status='$opt'";
    break;
  default:
   $sql = "SELECT * FROM `order` WHERE id='$userid'";
   
}
//echo $sql;
   
   $result = mysqli_query($db,$sql);
   echo ' <table class="table table-bordered table-dark"style="background-color:#1A2035;margin-bottom:9%;">';
   echo"<thead><tr style='color:white;'>";
          echo"<th scope='col' style='color:white;'>Sr.no</th>
               <th scope='col' style='color:white;'>Case Reference No</th>
              <th scope='col' style='color:white;'>First Name/Last Name</th>
              <th scope='col' style='color:white;'>Order Creation Date</th>
              <th scope='col' style='color:white;'>Order Status</th>
              <th scope='col' style='color:white;'>Order Completion Date</th>
              <th scope='col' style='color:white;'>Reports</th>
           </tr></thead>";
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
  echo "<tbody>";
        echo"<tr scope='row'>";
        $Sr++;
            echo "<td>" . $Sr. "</td>";
            echo "<td>" . $row['generated_reference_id'] . "</td>";
            echo "<td>" . $row['first_Name'] ." ". $row['last_Name'] . "</td>";
            echo "<td>" . $row['order_creation_date_time'] . "</td>";
            echo "<td>" . $row['Order_Status'] . "</td>";
            echo "<td>" . $row['Order_Completion_Date']. "</td>";    
            echo "<td>" . $row['Reports']. "</td>";   
            echo "</tr>";
            echo "</tbody>";

}
   echo '</table>';
   

?>
