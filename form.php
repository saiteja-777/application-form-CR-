<?php
include("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>application form</title>
    <style>
        .hi{
            right: 0%;
            left: 100%;
        }
        .appli{
            border: 3px solid black;
            border-radius: 20px;
            padding: 100px;
            margin: 5px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            align-items: center;
            background-color: rgb(134, 201, 186);
            box-shadow: 0px 0px 15px rosybrown;
        }
        .appli:hover{
            box-shadow: 0px 0px 20px rgb(103, 116, 116);
            background-color: black;
        }
        .appli label{
            color: red;
        }
        .appli label:hover{
            color:aliceblue
        }
        .appli input{
            padding: 5px 5px;
            background-color: rgb(140, 206, 233);
            color: black;
            align-items: center;
            border: 2px solid burlywood;
            border-radius: 10px;
        }
        .appli input:hover{
            background-color: darkturquoise ;
        }
        


    </style>
</head>
<body>

    <div class="appli">
        <form action="fan.php" method="post">
            <label>Name:</label>
            <input type="text" placeholder="Enter your name" name="name">
            <label class="hi">Surname:</label>
            <input type="text" placeholder="surname" name="surname"><br><br>
            <label>Father name:</label>
            <input type="text" placeholder="Enter Father name" name="fathername">
            <label class="hi">Mother Name:</label>
            <input type="text" placeholder="Enter mother name" name="mothername"><br><br>
            <label>Age:</label>
            <input type="int" placeholder="Enter your age" name="age">
            <label class="hi">Email:</label>
            <input type="email" placeholder="Enter your email" name="email"><br><br>
            <label>Mobile :</label>
            <input type="text" placeholder="Enter your mobile number" name="mobileno">
            <label class="hi">Old class:</label>
            <input type="text" placeholder="Enter your class" name="lastclass"><br><br>
            <label>New class:</label>
            <input type="text" placeholder="Enter your class" name="newclass">
            <label class="hi">Old school:</label>
            <input type="text" placeholder="Enter your school" name="oldschool"><br><br>
            <label>New school:</label>
            <input type="text" placeholder="Enter your school" name="newschool">
            <label class="hi">Village:</label>
            <input type="text" placeholder="Enter your village" name="village"><br><br>
            <label>Mandal:</label>
            <input type="text" placeholder="Enter your Mandal" name="mandal">
            <label class="hi">District:</label>
            <input type="text" placeholder="Enter your dist" name="district"><br><br>
            <label>State:</label>
            <input type="text" placeholder="Enter your state" name="state">
            <label class="hi">Aadhaar:</label>
            <input type="text" placeholder="Enter your aadhaar" name="aadhaar"><br><br>
            <label>Pincode:</label>
            <input type="text" placeholder="Enter your pincode" name="pincode">
            <label class="hi">Caste:</label>
            <input type="text" placeholder="Enter your caste" name="caste"><br><br>
            <label>Income:</label>
            <input type="text" placeholder="Enter your income" name="income">
            <input type="submit" class="btn1"><input type="reset" class="btn2">
            
            
            
        </form>
    </div>
    
</body>
</html>