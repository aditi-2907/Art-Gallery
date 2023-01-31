<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    $conn = new mysqli('localhost', 'root', '', 'registration');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(firstname, lastname, email, password, confirm)
            values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $firstname, $lastname, $email, $password, $confirm);
        $stmt->execute();
        echo "Registration Successful...";
        $stmt->close();
        $connn->close();
    }

?>
