<?php

  extract($_POST);
  include("database.php");

    
    echo "hello";

    $UID = '1';
    $UserName = 'Adi';

    $sql=sqlsrv_query($conn,"SELECT * FROM dbo.UsersTest where UID='1'");

  //$query="INSERT INTO UsersTest(UID, UserName, Password, Permission, SubsEnd, Phone, Email, CompanyName) VALUES ('$UID', '$UserName', '$Password', '$Permission', '$SubsEnd', '$Phone', '$Email', '$CompanyName')";
  $query="INSERT INTO dbo.UsersTest(UID, UserName, Password, Permission, SubsEnd, Phone, Email, CompanyName) VALUES ('$UID', '$UserName')";

   $sql=sqlsrv_query($conn,$query)or die("User Already Exists");
    echo "success";

?>
