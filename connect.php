<?php
if(isset($_POST["submit"])){
    $Name = $_POST["name"];
    $PhoneNumber = $_POST["PhoneNumber"];
    $EmailID = $_POST["EmailID"];
    $Complaint = $_POST["Complaint"];
    echo nl2br ("Data as follow -\n");
    echo ($Name);
    echo nl2br ("\n");
    echo ($PhoneNumber);
    echo nl2br ("\n");
    echo ($EmailID);
    echo nl2br ("\n");
    echo $Complaint;
    echo nl2br ("\n");
    $sql="INSERT INTO content (Name,PhoneNumber,EmailID,Complaint) VALUES ('$Name','$PhoneNumber','$EmailID','$Complaint')";
    echo $sql;
    echo nl2br ("\n");

    if(!empty($Name)){
    if (!empty($PhoneNumber)){
        if (!empty($EmailID)){
            if (!empty($Complaint)){
                        $link = new mysqli("localhost","root","","feedback");
                        if ($link == FALSE) {
                            die(mysql_connect_error());
                        }
                        else
                        {
                            echo "Connected Successfully";
                            echo nl2br ("\n");
                        } 
                        if(mysqli_query($link,$sql)) {
                            echo "RECORD INSERTED SUCCESSFULLY";
                        }
                    }
                else{ echo "Please Enter your Complaint"; }
                }
            else{ echo "Please Provide EmailId";}   
            }
        else{echo "Please Provide Phone Number";}    
        }
    else{echo "Please Provide Name";}    
    }
?>