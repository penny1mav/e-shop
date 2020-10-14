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
<form action="othercomments.php" method="POST">
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
            <?php

include 'config.php';



$x = $_GET["time"];



$sql="SELECT * FROM filetable WHERE  time='".$x."'";
 $result2=$conn->query($sql);
echo "<h1> <button type='submit' name='submit' class='button'>Other comments</a></h1> <br><br><br><br><br>";
echo "<h1>";
 while($row=$result2->fetch_assoc()){
    echo $row['time'];
      echo "<br>";
      echo $row['username'];
      echo "<br><br>";
      echo "
      <img src=" .$row['file']."> </a> ";
      echo "<br>";
      echo $row['details'];
      echo "<br><br><br><br><br><br>";
      echo "<h1>Your Comment</h1> <br><br><br><br><br>
            <textarea id='details' value='0' name='details' rows='4' cols='40'></textarea><br><br><br><br><br><br><br>";
      echo "<div class='rating' id='rating'>

      </div>";
      echo "<br><br><br><br><br><input type='submit' name='submit'  class='toggler-txt' id='submit'>";

      echo " <script src='SimpleStarRating.js'></script>
      <script>
          var ratings = document.getElementsByClassName('rating');
          var submit = document.getElementById('submit');
          for (var i = 0; i < ratings.length; i++) {
              var r = new SimpleStarRating(ratings[i]);

              ratings[i].addEventListener('rate', function(e) {
                  console.log('Rating: ' + e.detail);
                });
          }
      </script>";


          echo "</h1>";
 }

$conn->close();




?>
</form>
</h1>

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








