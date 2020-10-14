
<?php
include 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {




    $cupcake1 = $_POST["cupcake1"];
    $cupcake2 = $_POST["cupcake2"];
    $cupcake3 = $_POST["cupcake3"];
    $cupcake4 = $_POST["cupcake4"];
    $cupcake5 = $_POST["cupcake5"];
    $cupcake6 = $_POST["cupcake6"];

    $address=$_POST["address"];
    $number = $_POST["number"];
    $postcode=  $_POST["post"];
    $region = $_POST["region"];
    $phone = $_POST["phone"];
    $details = $_POST["details"];





    $selected_val = $_POST["selectBox"];




    $x1="INSERT INTO cupcakes (first,second,third,fourth,fifth,sixth) VALUES ($cupcake1,$cupcake2,$cupcake3,$cupcake4,$cupcake5,$cupcake6)";
    $y1=$conn->query($x1);




    if(!isset($_POST["express"])){
        $sql5="INSERT INTO shipping (address,number,postcode,region,phone,details,expr) VALUES($address,$number,$postcode,$region,$phone,$details,0);";

        $result2=$conn->query($sql5);

        }
        elseif(isset($_POST["express"])){
            $express=$_POST["express"];
            $sql5="INSERT INTO shipping (address,number,postcode,region,phone,details,expr) VALUES($address,$number,$postcode,$region,$phone,$details,1);";

        $result2=$conn->query($sql5);


        }


    if($selected_val=='card'){
        $card_option=$_POST["card_option"];
        $code = $_POST["code"];
        $fullname=  $_POST["fullname"];
        $expiration = $_POST["expire"];
        $verification = $_POST["verif"];
            $sql="INSERT INTO card (card_option,code,fullname,expiration_date,verification) VALUES ('$card_option','$code','$fullname','$expiration','$verification')";
            $result2=$conn->query($sql);
            header('Refresh: 1; URL=loggedIn.php');
    }
    elseif($selected_val=='pay on delivery'){
        header('Refresh:1; URL=loggedIn.php');
    }



     }

    $conn->close();

?>