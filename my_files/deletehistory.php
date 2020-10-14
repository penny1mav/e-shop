
<?php
include 'config.php';



$x = $_GET["time"];



$sql="DELETE FROM cakes WHERE  time='".$x."'";
 $result2=$conn->query($sql);



header('Refresh:1; URL=page8.php');
$conn->close();




?>