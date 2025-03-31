<?php
session_start();
if (isset($_SESSION['user'])){
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="style_01.css">



</head>
<body>
<div class="containner">

<?php
if(isset($_POST['submit'])){
    $fullName=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $passwordRepeat=$_POST['repeat_password'];

    $passwordHash=password_hash($password,PASSWORD_DEFAULT);

    $errors=array();

    if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)){
        array_push($errors,"all fields are required");
    }
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        array_push($errors,"email is not valid");

    }
    if (strlen($password)<8){
        array_push($errors,"password at least musat be 8 character long");
    }
    if($password!=$passwordRepeat){
        array_push($errors, "password doesn't match");
    }
    require_once "database.php";
    $sql="SELECT * FROM users WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    $rowCount=mysqli_num_rows($result);
    if ($rowCount>0){
        array_push($errors, 'email already exist!');
    }




    if (count($errors)>0){
        foreach($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";

        }
    }else{
        $sql="INSERT INTO users (full_name,email, password) VALUES (?,?,?)";
        $stmt=mysqli_stmt_init($conn);
        $preparesmt=mysqli_stmt_prepare($stmt,$sql);
        if ($preparesmt){
            mysqli_stmt_bind_param($stmt,"sss",$fullName,$email,$passwordHash);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-sucess'>you are registered sucessfully</div>";
        }else{
            die("something went wrong");
        }
    }
}

?>


<form action="registration.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control"  name="fullname"  placeholder="Full Name">
        </div>

        <div class="form-group">
            <input type="email" class="form-control"   name="email"  placeholder="Email">
        </div>

        <div class="form-group">
            <input type="text" class="form-control"   name="password"  placeholder="Password">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="repeat_password"  placeholder="Repeat Password">
        </div>

        <div class="form-btn">
            <input type="submit"class="btn btn-primary"   value="Register" name="submit">
        </div>
    </form>
    <div><p>already register <a href="login.php">login here</a></p></div>
</div>
    
</body>
</html>
    

            