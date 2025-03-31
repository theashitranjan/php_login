<?php
session_start();
if (isset($_SESSION['user'])){
    header("location: index.php");

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Simonetta:ital,wght@0,400;0,900;1,400;1,900&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="routes">
        <div class="bharat">
        <h3>bharat logistics</h3>
        </div>
        <div class="cities">
            <h4>routes</h4>
            <h4>cities</h4>
            <h4><a href="index.php"><button class="button">orders</button></a></h4>
        </div>
    </div>


    <div class="box">
        <div class="paragraph-box">
                <h5>LEADER IN TRUCK</h5>
                <h5>MANAGEMENT SOLUTIONS</h5>
                <h6>We partner with hundreds of thousands of businesses across India in the shared</h6>
                <h6>journey of building a reliable, safer and predictable transportation infrastructure.</h6>

        </div>

    
















    
    <div class="containner">
        <div class="loginmail">
        <form action="login.php" method="post">
            <div class="form-group">

            <?php
    if (isset($_POST["login"])){
        $email=$_POST["email"];
        $password=$_POST["password"];
        require_once "database.php";
        $sql="SELECT * FROM users WHERE email='$email'";
        $result=mysqli_query($conn,$sql);
        $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
        if ($user){
            if (password_verify($password,$user["password"])){
                session_start();
                $_SESSION["user"]="yes";
                header("location: index.php");
                die();
            }else{
                echo "<div class='dangerp1'>password doesn't match</div>";

            }
        }else{
            echo "<div class='dangerp1'>email doesn't match</div>";
        }
    }

    ?>




                <input type="text" placeholder="enter email:" name="email" class="form-control">
            </div>

            <div class="form-group">
                <input type="password" placeholder="Enter Password:" name="password" class="form-control">
            </div>

            <div class="form-btn">
                <input type="submit" value="login" name="login" class="btn btn-primary" class="form-group">
            </div>

        </form>
        <div class="register">yet not register <a href="registration.php">register here</a></p></div>
        <a href="forgotPassword.php">forgot Password?</a>
        </div>






    </div>

    </div>
















    <div class="para">
        <p>Presenting india's First Logistics Root</p>
        <p>Global Logistics Services</p>
    </div>
	
    <main>

        <div class="service">
            <div class="destination">
                <ul>
                <li><input placeholder="location" id="i1"></i>
                </li>
                <li id="f1"><i class="fa-solid fa-location-dot"></i></li>
                <br>
                <li><input placeholder="destination" id="i1"></li>
                <br>
                <button id="b1">Find</button>
                </ul>
            </div>
            <div class="fig1">
                <img src="images\download.jpeg" alt="" id="img2">
            </div>
        </div>
        <div class="image">
            <div class="img1">
                <img src="images\8988dbf1f69399a08d954cb91ef274ab.jpg" alt="">
                <p id="p1">All India Permit</p>
            </div>
            <div class="img2">
                <img src="images\istockphoto-961649530-612x612.jpg" alt="">
                <p id="p1">500M+ Users</p>
            </div>
        </div>
        <div class="map">
            <div class="imp">
                <p>Our Motive</p>
                <hr id="hr">
                <p id="p1">our main motive to make a superfast transportation</p>
                <p id="p1">india's first multidomain transportation system</p>
            </div>
            <div class="safety">
                <p id="s1">Safety for all</p>
                <p id="s2">At Bharat logistics, the well being of our customers is
                    above everythings else we are constantly in pursuit of enhanching our safety
                    measures to ensure every BL users for pleasant and comfortable experience
                </p>

                <p></p>
            </div>
        </div>
        

    </main>
    <footer>
        <div class="footer1">
            <div class="hand">
                <i class="fa-sharp fa-solid fa-hand" id="hand1"></i>
            </div>
            <div class="note">
                <p id="n1">Exclusive deals1</p>
                <P id="n2">Want exclusive offers and seamless payment for your logistics?</P>
                <p id="n2">sign up now for our premium membership!</p>
            </div>
            <div class="join">
                <button id="join">join now</button>
            </div>
        </div>
        <div class="term">
            <p id="n1">Terms and Condition</p>
            <div class="list5">
                <div class="servicess">
                    <p id="n2">Service hours</p>
                    <p id="n2">24?7 avilability</p>
                    <div class="copyright">
                        <p id="n21">Bharat logistics <i class="fa-solid fa-copyright"></i></p>
                    </div>
                </div>
                <div class="cancel">
                    <p id="n2">Cancellation policy</p>
                    <p id="n2">Flexible</p>
                </div>
                <div class="footersuport">
                    <p id="n31">suport</p>
                    <p id="n3">helpdesk</p>
                    <p id="n3">Assitance</p>
                    <p id="n3">User manual</p>
                    <p id="n3">Research BLS</p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>