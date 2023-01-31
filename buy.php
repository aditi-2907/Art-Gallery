<?php
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $name = $_POST['name'];
    $confirm = $_POST['OrderID'];
    $category = $_POST['category'];
    $card = $_POST['card'];
    $number = $_POST['number'];
    $month= $_POST['month'];
    $year = $_POST['year'];
    $CVV = $_POST['CVV'];

    $conn = new mysqli('localhost', 'root', '', 'order');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into order(fullname, email, address, name, OrderID, category, card, number, month, year, CVV)
            values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssissiiii", $fullname, $email, $address, $name, $OrderID, $category, $card, $number, $month, $year, $CVV);
        $stmt->execute();
        echo "Order Successful...";
        $stmt->close();
        $connn->close();
    }

?>