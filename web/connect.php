<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_post['phone'];

    //database connection
    $conn = new mysqli('localhost','root','','connect');
    if($conn->connect_error){
        die('Connection Failed : '.$connect_error);

    }
    else{
        $stmt = $conn->prepare("insert into registration(name,email,phone) value(?,?,?)");
        $stmt->bind_param("ssi",$name,$email,$phone)
        $stmt ->execute();
        echo "registaratiohn successful......";
        $stmt->close();
        $conn->colse();
    }

?>