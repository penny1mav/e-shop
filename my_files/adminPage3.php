

<?php
   include 'config.php';

   if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit1']) and (isset($_POST['new']))) {

            $newname=$_POST['new'];
            $name = $_FILES['file']['name'];
            $location = $_FILES['file']['tmp_name'];
             $folder="C:/xampp/htdocs/chocomania/my_files/";
             if(isset($name) and !empty($name)){
                if(move_uploaded_file($location, $folder.$name)){
                     $sql="INSERT INTO categories (name,image) VALUES ('$newname','$name')";
                    $result=$conn->query($sql);
                    echo "success!";
                    header("Refresh: 1; URL= AdminPage2.php");

                }
            else {
                echo 'You should select a file to upload !!';
                }
}



    }
    elseif (isset($_POST['submit2']) and (isset($_POST['edit']))) {
        $category=$_POST['edit'];
        $sql="SELECT * FROM categories WHERE name='$category'";
        $result=$conn->query($sql);
        while($row = $result->fetch_assoc()) {
            if(isset($_POST['newtitle'])){
                $newtitle=$_POST['newtitle'];
                $row['name']=$newtitle;


            }
            $name = $_FILES['file2']['name'];
            $location = $_FILES['file2']['tmp_name'];
             $folder="C:/xampp/htdocs/chocomania/my_files/";
             if(isset($name) and !empty($name)){
                if(move_uploaded_file($location, $folder.$name)){
                     $row['image']=$name;
                    echo "success!";
                    //header("Refresh: 4; URL= AdminPage2.php");
        }

        }

        }


    }

    elseif (isset($_POST['submit3']) and (isset($_POST['category']))) {
        $category=$_POST['category'];
        $sql="SELECT * FROM products WHERE categories='$category'";
        $result=$conn->query($sql);
        while($row = $result->fetch_assoc()) {
            if(isset($_POST['productTitle'])){
                $newproduct=$_POST['productTitle'];
                $sql2="ALTER TABLE 'products' ADD '$newproduct' VARCHAR(500) NOT NULL";
            }
            $name = $_FILES['file2']['name'];
            $location = $_FILES['file2']['tmp_name'];
             $folder="C:/xampp/htdocs/chocomania/my_files/";
             if(isset($name) and !empty($name)){
                if(move_uploaded_file($location, $folder.$name)){
                     $row['image']=$name;
                    echo "success!";
                    header("Refresh: 1; URL= AdminPage2.php");
               }

            }

        }


    }
    //elseif (isset($_POST['submit4'])&&(isset($_POST['category']))) {
      //  $category=$_POST['category'];
        //$productname=$_POST['product'];
        //$newname=$_POST['newproduct'];
        //$sql="SELECT * FROM products WHERE categories='$category' AND  *='$productname' ";
        //$result=$conn->query($sql);
        //while($row = $result->fetch_assoc()) {
          //  if(isset($_POST['productTitle'])){

           //     $row['name']=
           // }
            //$name = $_FILES['file2']['name'];
           // $location = $_FILES['file2']['tmp_name'];
            // $folder="C:/xampp/htdocs/chocomania/my_files/";
             //if(isset($name) and !empty($name)){
              //  if(move_uploaded_file($location, $folder.$name)){
               //      $row['image']=$name;
                 //   echo "success!";
                   // header("Refresh: 1; URL= AdminPage2.php");
    //    }


    //}

    //}
//}
    elseif (isset($_POST['delete1']) and (isset($_POST['category']))) {
        $category=$_POST['category'];
        $sql="DELETE  FROM categories WHERE name='$category'";
        $result=$conn->query($sql);
        header("Refresh: 1; URL= AdminPage2.php");



}



    elseif (isset($_POST['delete2'])&&(isset($_POST['category']))) {
        $category=$_POST['category'];
        $sql="SELECT * FROM categories WHERE name='$category'";
        $result=$conn->query($sql);
        while($row = $result->fetch_assoc()) {
            if(isset($_POST['newtitle'])){
                $row['name']=$_POST['newtitle'];
            }
            $name = $_FILES['file2']['name'];
            $location = $_FILES['file2']['tmp_name'];
             $folder="C:/xampp/htdocs/chocomania/my_files/";
             if(isset($name) and !empty($name)){
                if(move_uploaded_file($location, $folder.$name)){
                     $row['image']=$name;
                    echo "success!";
                    header("Refresh: 1; URL= AdminPage2.php");
        }

}

}


    }

   }
$conn->close();
?>




