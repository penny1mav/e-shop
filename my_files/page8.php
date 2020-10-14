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
    <form  method="POST">

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
                <h1>My Orders</h1>
                <br><br><br><br>




                       <br>
                <h1>
                    <?php
                    include 'config.php';


                     $sql = "SELECT * FROM cakes";

                     $result = $conn->query($sql);
                     if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        echo "<br><br><br>"  .$row["time"]. "<br>";

                        if($row["first"]>0){

                        echo " ferrero cake:10$  x ". $row["first"]. "";

                        }
                        if($row["second"]>0){
                        echo "blackforest cake:10$ x  ". $row["second"]. "";

                        }
                        if($row["third"] >0){
                        echo " Strawberry cake :10$ x    ". $row["third"]. "";
                        }
                        if($row["fourth"] >0){
                        echo " Nutella cake :10$ x  ". $row["fourth"]. "";
                        }
                        if($row["fifth"] >0){
                        echo " Bueno cake:10$ x   ". $row["fifth"]. "";
                        }
                        if($row["sixth"] >0){
                        echo " Oreo  cake:10$ x   ". $row["sixth"]. "";
                        }
                        echo "<a href=\"deletehistory.php?time=".$row['time']."\">Delete</a>";

                      }





                        }

                    $conn->close();



                    ?>
                </h1>

                <h1>
                    <?php
                    include 'config.php';


                     $sql = "SELECT * FROM cupcakes";

                     $result = $conn->query($sql);
                     if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        echo "<br><br><br>"  .$row["time"]. "<br>";

                        if($row["first"]>0){

                        echo " Strawberry cupcake:2$  x ". $row["first"]. "";

                        }
                        if($row["second"]>0){
                        echo "Nutella cupcake:2$ x  ". $row["second"]. "";

                        }
                        if($row["third"] >0){
                        echo " Caramel cupcake :2$ x    ". $row["third"]. "";
                        }
                        if($row["fourth"] >0){
                        echo " Lemon cupcake :2$ x  ". $row["fourth"]. "";
                        }
                        if($row["fifth"] >0){
                        echo " Oreo cupcake:2$ x   ". $row["fifth"]. "";
                        }
                        if($row["sixth"] >0){
                        echo " Bueno  cupcake:2$ x   ". $row["sixth"]. "";
                        }
                        echo "<a href=\"deletehistory2.php?time=".$row['time']."\">Delete</a>";

                      }





                        }

                    $conn->close();



                    ?>
                </h1>
                <h1>
                    <?php
                    include 'config.php';


                     $sql = "SELECT * FROM drinks";

                     $result = $conn->query($sql);
                     if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        echo "<br><br><br>"  .$row["time"]. "<br>";

                        if($row["first"]>0){

                        echo " Ferrero drink:4$  x ". $row["first"]. "";

                        }
                        if($row["second"]>0){
                        echo "Nutella drink:4$ x  ". $row["second"]. "";

                        }
                        if($row["third"] >0){
                        echo " Strawberry drink :4$ x    ". $row["third"]. "";
                        }
                        if($row["fourth"] >0){
                        echo " Bueno drink :4$ x  ". $row["fourth"]. "";
                        }
                        if($row["fifth"] >0){
                        echo " Caramel drink:4$ x   ". $row["fifth"]. "";
                        }
                        if($row["sixth"] >0){
                        echo " Oreo  drink:4$ x   ". $row["sixth"]. "";
                        }
                        echo "<a href=\"deletehistory3.php?time=".$row['time']."\">Delete</a>";

                      }





                        }

                    $conn->close();



                    ?>
                    <br><br><br>
                     <br><br><br>
                    <br><br><br>


                </h1>


                      </div>




                    </div>
                </div>


                      </form>
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