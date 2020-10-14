

<?php session_start();
   include 'config.php';

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = $_POST["nickname"];
      $mypassword = hash('sha512', $_POST['password']);



      $sql = "SELECT * FROM register WHERE nickname = '$myusername' and password = '$mypassword'";
      $result = $conn->query($sql);

      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         if($myusername=="admin"){
            header('Refresh: 1; URL = adminPage1.html');

         }
         else{
         $_SESSION["nickname"]=$_POST["nickname"];
         header('Refresh: 1; URL = loggedIn.php');
         }
      }else {
         echo "Your Login Name or Password is invalid";
      }

}
?>




