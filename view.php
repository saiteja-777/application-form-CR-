<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>style</title>
    <style>
        .ttt{
            border:3px solid black;
            border-radius:10px;
            cellspacing:2px;
            cellpadding:5px;
        }

    </style>
</head>
<body>
    
</body>
</html>
<?php

session_start();
include("db.php");

$result= mysqli_query($conn,"SELECT * FROM `form`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<body>
    <table border='3' class="ttt">
        <tr class="rrr">
            <th class="hhh">S.no</th>
            <th class="hhh">Name</th>
            <th class="hhh">Surname</th>
            <th class="hhh">Father</th>
            <th class="hhh">Mother</th>
            <th class="hhh">Age</th>
            <th class="hhh">Email</th>
            <th class="hhh">Mobile No</th>
            <th class="hhh">Old Class</th>
            <th class="hhh">New Class</th>
            <th class="hhh">Old School</th>
            <th class="hhh">New School</th>
            <th class="hhh">Village</th>
            <th class="hhh">Mandal</th>
            <th>District</th>
            <th>State</th>
            <th>Aadhaar</th>
            <th>Pincode</th>
            <th>Cast</th>
            <th>Income</th>
        </tr>
        <tr>
            <?php
            while($row= mysqli_fetch_assoc($result)){
            ?>
            <td><?php echo $row['sno']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['surname']; ?></td>
            <td><?php echo $row['fathername']; ?></td>
            <td><?php echo $row['mothername']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobileno']; ?></td>
            <td><?php echo $row['lastclass']; ?></td>
            <td><?php echo $row['newclass']; ?></td>
            <td><?php echo $row['oldschool']; ?></td>
            <td><?php echo $row['newschool']; ?></td>
            <td><?php echo $row['village']; ?></td>
            <td><?php echo $row['mandal']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['aadhaar']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['caste']; ?></td>
            <td><?php echo $row['income']; ?></td>
        </tr>
        <?php    
            }
        ?>
    </table>        
    
</body>
</html>