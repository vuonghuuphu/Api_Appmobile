<?php 
    if (!empty($_POST)){
        $Name  =  $_POST['Name'];
        $Price = $_POST['Price'];

    $connect = mysqli_connect("localhost","root","","app_Apg");    
    if ($connect->connect_error){
        var_dump($connect->connect_error);
        die();
    }
    $query = "INSERT INTO get (Name, Price)
VALUES ('".$Name."', '".$Price."')";
    mysqli_query($connect,$query);
    $connect->close();    
}
 ?>