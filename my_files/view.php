<!DOCTYPE html>
<html>

<head>
    <title>Choco Mania</title>
    <meta charset="UTF-8">
    <script src="myscript.js"></script>
    <link name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css ">
    </head>
    <body>

 <div class="image ">
        <div class="header ">
            <div class="logo ">
                    <a href="loggedIn.html ">
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


    $sql="SELECT * FROM filetable";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
          echo $row['time'];
            echo "<br>";
            echo $row['username'];
            echo "<br>";


            echo "<a href=\"comments.php?time=".$row['time']."\"> <img src=" .$row['file']."> </a> ";
            echo "<br>";
            echo $row['details'];
            echo "<br>";
            echo "<br> <br><br><br>";

        }
        }
  $conn->close();
  ?>
</h1>





                      </div>


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
</html>

