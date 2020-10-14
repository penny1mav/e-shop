
<?php session_start();
include 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $nickname=$_POST["nickname"];
    $fname = $_POST["firstname"];
    $lname=  $_POST["lastname"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $hashed_password = hash('sha512', $_POST['password']);


    $sql = "SELECT * FROM register WHERE nickname = '".$nickname."'";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result)>=1)
       {
        echo"name already exists";
       }
     else{
       $_SESSION["nickname"]=$nickname;
    $sql1="INSERT INTO register (nickname,firstname,lastname,email,age,password) VALUES ('$nickname','$fname','$lname','$email','$age','$hashed_password')";
    $result2=$conn->query($sql1);
    $conf_subject = 'Your recent enquiry';

  // Who should the confirmation email be from?
    $conf_sender = 'chocomania@gmail.com';

    $msg = $fname . ",\n\nThanks for joining our community.";

  mail( $email, $conf_subject, $msg, 'From: ' . $conf_sender );
    header('Refresh: 1; URL = loggedIn.php');


     }

    $conn->close();
    }
?>