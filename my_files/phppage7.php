
<?php
include 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {




    $cake1 = $_POST["drink1"];
    $cake2 = $_POST["drink2"];
    $cake3 = $_POST["drink3"];
    $cake4 = $_POST["drink4"];
    $cake5 = $_POST["drink5"];
    $cake6 = $_POST["drink6"];

    $address=$_POST["address"];
    $number = $_POST["number"];
    $postcode=  $_POST["post"];
    $region = $_POST["region"];
    $phone = $_POST["phone"];
    $details = $_POST["details"];

    $selected_val = $_POST["selectBox"];


    if(!isset($_POST["express"])){
    $sql5="INSERT INTO shipping (address,number,postcode,region,phone,details,expr) VALUES($address,$number,$postcode,$region,$phone,$details,0);";

    $result2=$conn->query($sql5);

    }
    elseif(isset($_POST["express"])){

        $sql5="INSERT INTO shipping (address,number,postcode,region,phone,details,expr) VALUES($address,$number,$postcode,$region,$phone,$details,1);";

    $result2=$conn->query($sql5);


    }



    $x1="INSERT INTO drinks (first,second,third,fourth,fifth,sixth) VALUES ($cake1,$cake2,$cake3,$cake4,$cake5,$cake6)";
    $y1=$conn->query($x1);





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