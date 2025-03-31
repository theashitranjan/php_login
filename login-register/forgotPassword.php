

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
    <?php
    require("database.php");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function sendMail($email,$reset_token)
    {
        require('PHPMailer/PHPMailer.php');
        require('PHPMailer/SMTP.php');
        require('PHPMailer/Exception.php');

        $mail = new PHPMailer(true);

        try {
            //Server settings
            //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = ';                     //SMTP username
            $mail->Password   = '';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('krraaz776207@gmail.com', 'kunal kumar');
            $mail->addAddress($email);     //Add a recipient

        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'password reset link from kunal kumar';
            $mail->Body    = "we got a request for reset your password  <b>click the link below:
                </b> <a href='http://localhost/password recovery system/updatepassword.php?email=$email&reset_token=$reset_token'>
                reset password</a>";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }


    }





    if (isset($_POST['send-reset-link']))
    {
        $email=$_POST["email"];
        $query="SELECT * FROM users WHERE email='$email'";
        $result=mysqli_query($conn,$query);
        if ($result)
        {
            if (mysqli_num_rows($result)==1)
            {
                $reset_token=bin2hex(random_bytes(16));
                date_default_timezone_set('asia/kolkata');
                $date=("Y-m-d");
                $query="UPDATE `users` SET `resettoken`='$reset_token',`resettokenexpire`='$date' WHERE email='$email'";
                if (mysqli_query($conn,$query) && sendMail($email,$reset_token))
                {
                    echo "link send to mail";

                }
                else
                {
                    echo "server down";

                }

            }
            else
            {
                echo "invalid email";
            }

        }
        else
        {
            echo "cannot run query";
        }

    }

    ?>



<div class="containner">

<form action="forgotPassword.php" method="post">

<div class="form-group">
    <input type="text" class="form-control" name="email"  placeholder="enter mail">
</div>

<div class="form-btn">
    <input type="submit"class="btn btn-primary"   value="send-mail" name="send-reset-link">
</div>
</form>
</div>





</body>
</html>
