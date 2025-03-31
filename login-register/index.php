<?php
session_start();
if (!isset($_SESSION['user'])){
    header("location: login.php");



    $server="localhost";
    $username="root";
    $password="";

    $firstname=$_POST['first-name'];
    $lastname=$_POST['last-name'];
    $email=$_POST['Eemail'];
    $number=$_POST['mobile-number'];
    $adress=$_POST['adress'];
    $city=$_POST['city'];
    $pincode=$_POST['pincode'];
    $date=$_POST['date'];
    $from=$_POST['location'];
    $To=$_POST['to'];
    $vehicle=$_POST['vehicle-type'];
    $material=$_POST['material-weight'];
    $length=$_POST['truck-length'];
    $cateogry=$_POST['buisenness'];

    $conn= mysqli_connect($server, $username, $password,'iitp_project_info');

    if (!$conn){
        die("connection to database is failed due to".
        mysqli_connect_error());
    }
    echo "sucess connect";

    


    $sql="INSERT INTO `order_reciving` (`first name`, `last name`, `email`, `mobile number`, `Adress`, `city`, `pincode`, `date`, `location`, `destination`, `vehicle type`, `material weight`, `truck length`, `Buissness cateogry`) VALUES ('$firstname','$lastname','$email','$number','$adress','$city','$pincode','$date','$from','$To','$vehicle','$material','$length','$cateogry');";
    echo $sql;

    if ($conn->query($sql) == true){
        echo "<div onClick='sucessfull order'>sucessfull order</div>";

    }

    else{
        echo "ERROR: $sql <br> $con->error";

    }

    $conn->close();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
</head>
<body>
<div class="containner">
        <h1>welcome to home page</h1>
        <a href="logout.php" class="btn btn-warning">logout</a>
    </div>
    <a href="myorder.php"><button>make orders</button></a>


</body>
</html>