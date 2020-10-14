<!DOCTYPE html>
<html>

<head>
    <title>Choco Mania</title>
    <meta charset="UTF-8">
    <script src="SimpleStarRating.js"></script>
    <link name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css ">
    </head>
    <body>
<form action="othercomments.php">
 <div class="image ">
        <div class="header ">
            <div class="logo ">
                    <a href="loggedIn.php ">
                     <img src="logo.png ">
                     </a>
            </div>
         <div class="rows " >
         <div class="footer ">

          <a href="reviews.html ">Reviews </a>
          </div>
            <div class="footer ">
                    <a href="page3.html "> Categories </a>
            </div>
            <div class="footer ">
                    <a href="page8.php" >My Orders </a>
            </div>
            <div class="footer">
              <a href="logout.php ">Logout
              </a>
              </div>
        </div>
    </div>
    <div class="registerbg ">
        <div class="row4 ">
            <div class="cakes">
    <h1>
            <?php session_start();

include 'config.php';


if($_SERVER["REQUEST_METHOD"] == "POST") {

$stars = $_POST["submit"];
$user=$_SESSION["nickname"];
$comment=$_POST["details"];

$sql="INSERT INTO comments (user,stars,comment) VALUES ('$user','$stars','$comment')";
$result=$conn->query($sql);
$sql2="SELECT * FROM comments";
$result2=$conn->query($sql2);

if($result2->num_rows > 0){
    while($row=$result2->fetch_assoc()){
        echo "<br>";
        echo $row['time'];
        echo "<br>";
      echo $row['user'];
      echo "<br>";
        echo "stars:" . $row['stars'];
        echo "<br>";

            echo  $row["comment"] ;
            echo "<br>";



        echo "<br> <br>";

    }
    }
}


$conn->close();




?>
</form>
</h1>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>






                      </div>


                    </div>
                </div>


<div class="rights">
    <div class="media">
        follow us!
        <a target="_blank" href="http://www.facebook.com/">
            <img src="fb.png"  >
          </a>
          <a target="_blank" href="http://www.instagram.com/">
            <img src="insta.png" >
          </a>
          <a target="_blank" href="http://www.twitter.com/">
            <img src="twitter.png" >
          </a>
        </div>
</div>
 </div>
    </body>








