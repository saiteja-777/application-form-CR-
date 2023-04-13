<?php
session_start();

$Name= $_POST['name'];
$surname=$_POST['surname'];
$Father=$_POST['fathername'];
$Mother=$_POST['mothername'];
$Age=$_POST['age'];
$Email=$_POST['email'];
$Mobile=$_POST['mobileno'];
$OldC = $_POST['lastclass'];
$NewC=$_POST['newclass'];
$Olds=$_POST['oldschool'];
$News=$_POST['newschool'];
$vill=$_POST['village'];
$man=$_POST['mandal'];
$dist=$_POST['district'];
$state=$_POST['state'];
$Aadhar=$_POST['aadhaar'];
$pincode=$_POST['pincode'];
$cast=$_POST['caste'];
$Income=$_POST['income'];
include("db.php");


$query= "INSERT INTO `form` (`name`, `surname`, `fathername`, `mothername`, `age`, `email`, `mobileno`, `lastclass`, `newclass`, `oldschool`, `newschool`, `village`, `mandal`, `district`, `state`, `aadhaar`, `pincode`, `caste`, `income`) VALUES ('$Name', '$surname', '$Father', '$Mother', '$Age', '$Email', '$Mobile', '$OldC', '$NewC', '$Olds', '$News', '$vill', '$man', '$dist', '$state', '$Aadhar', '$pincode', '$cast', '$Income')";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saved</title>
    <style>
        .hello{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            align-items: center;
            color: black;
        }
        .hhh{
            padding: 10px 20px;
            border-radius: 10px;
            border: 2px solid black;
            background-color: white;
            align-items: center;
            margin-left: 30px;
        }


    </style>
</head>
<body>
    <div class="hello">
        <h1>
            <?php
            if($conn->query($query)===TRUE){
                echo "data entered";
            }

            ?>
        </h1>
        <a class="hhh" href="index.php">Go Back</a>
    </div>
</body>
</html>