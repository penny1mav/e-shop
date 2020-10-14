<?php session_start();

include 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['submit'])){
      if(!isset($_FILES['file'])){

      }

        $name = $_FILES['file']['name'];
        $location = $_FILES['file']['tmp_name'];
        $details=$_POST['details'];
        $folder="C:/xampp/htdocs/chocomania/my_files/";

        if(isset($name) and !empty($name)){
            if(move_uploaded_file($location, $folder.$name)){
              $user=$_SESSION["nickname"];
              echo 'File uploaded successfully';

                $sql="INSERT INTO filetable (file,details,username) VALUES ('$name','$details','$user')";
                $result=$conn->query($sql);
                header("Refresh: 1; URL= view.php");

              }
        } else {
            echo 'You should select a file to upload !!';
        }

      }
  }

  $conn->close();
  ?>