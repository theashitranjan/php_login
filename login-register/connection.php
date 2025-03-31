<?php
print_r($_POST);

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
    $cateogry=$_POST['job-role'];

    $conn= mysqli_connect($server, $username, $password,'iitp_project_info');

    if (!$conn){
        die("connection to database is failed due to".
        mysqli_connect_error());
    }
    echo "sucess connect";

    


    $sql="INSERT INTO `order_reciving` (`first name`, `last name`, `email`, `mobile number`, `Adress`, `city`, `pincode`, `date`, `location`, `destination`, `vehicle type`, `material weight`, `truck length`, `Buissness cateogry`) VALUES ('$firstname','$lastname','$email','$number','$adress','$city','$pincode','$date','$from','$To','$vehicle','$material','$length','$cateogry');";
    echo $sql;

    if ($conn->query($sql) == true){
        echo "sucess insert";

    }

    else{
        echo "ERROR: $sql <br> $con->error";

    }

    $conn->close();



?>


