<?php
    $con = mysqli_connect("localhost", "root", "", "usuarios");
    
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $age = $_POST["age"];
    $statement = mysqli_prepare($con, "INSERT INTO user (name, username, password, age) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "sssi", $name, $username, $password, $age);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>