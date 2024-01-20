<?php
if(isset($_POST["submit"])){
    $Pname = $_POST["Pname"];
    $Cname = $_POST["Cname"];
    $Email = $_POST["Email"];
    $Pasword = $_POST["Passwords"];
    $number = $_POST["numbers"];
    $CityName = $_POST["CityName"];
    echo nl2br ("Data as follow -\n");
    echo ($Pname);
    echo nl2br ("\n");
    echo ($Cname);
    echo nl2br ("\n");
    echo ($Email);
    echo nl2br ("\n");
    echo $Pasword;
    echo nl2br ("\n");
    $sql="INSERT INTO userss (Pname,Cname,Email,Passwords,numbers,CityName) VALUES ('$Pname','$Cname','$Email','$Pasword','$number','$CityName')";
    echo $sql;
    echo nl2br ("\n");

    if(!empty($Pname)){
    if (!empty($Cname)){
        if (!empty($Email)){
            if (!empty($Pasword)){
                if (!empty($number)){
                    if (!empty($CityName)){
                        $link = new mysqli("localhost","root","","registers");
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
                else{ echo "Please Provide City Name"; }
                }
            else{ echo "Please Provide Cotact Number";}   
            }
        else{echo "Please Provide Password";}    
        }
    else{echo "Please Provide Email Address";}    
    }
   else{echo "Please Provide Child Name";}    
}
else{echo "Please Provide Name";}           
}

?>