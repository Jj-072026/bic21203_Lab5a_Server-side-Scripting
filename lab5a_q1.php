<!DOCTYPE html>
<html>
<head>
    <title>Lab 5a - Question 1</title>
</head>
<body>

<h2>Student Details</h2>

<?php
$name = "Ler Jing Jing";
$matric = "AI240115";
$course = "Bachelor of Computer Science Information Security";
$year = "2026";
$address = "No 123, Jalan 1, Taman Bunga 84200 Muar, Johor.";
?>

<table border="1" cellpadding="10">
    <tr>
        <td>Name</td>
        <td><?php echo htmlspecialchars($name); ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo htmlspecialchars($matric); ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo htmlspecialchars($course); ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo htmlspecialchars($year); ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo htmlspecialchars($address); ?></td>
    </tr>
</table>

</body>
</html>