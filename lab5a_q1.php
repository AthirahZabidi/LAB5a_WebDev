<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
<?php
$name = "Nor Athirah Zulaikha Binti Mohd Zabidi";
$matric_number = "CI230029";
$course = "Bachelor of Computer Science (Web Technology) With Honours";
$year_of_study = "Year 2";
$address = "17 Mutiara Idaman, 11600 Georgetown, Penang";
?>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td><strong>Name</strong></td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td><strong>Matric Number</strong></td>
        <td><?php echo $matric_number; ?></td>
    </tr>
    <tr>
        <td><strong>Course</strong></td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td><strong>Year of Study</strong></td>
        <td><?php echo $year_of_study; ?></td>
    </tr>
    <tr>
        <td><strong>Address</strong></td>
        <td><?php echo $address; ?></td>
    </tr>
</table>

</body>
</html>
