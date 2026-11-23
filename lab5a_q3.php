<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>

<h2>Calculate Area of Rectangle</h2>

<?php
function calculateArea($width, $height) {
    return $width * $height;
}
?>

<form method="POST">
    <label>Width:</label>
    <input type="number" name="width" min="0.01" step="any" required>

    <br><br>

    <label>Height:</label>
    <input type="number" name="height" min="0.01" step="any" required>

    <br><br>

    <input type="submit" value="Calculate Area">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $width = filter_input(INPUT_POST, "width", FILTER_VALIDATE_FLOAT);
    $height = filter_input(INPUT_POST, "height", FILTER_VALIDATE_FLOAT);

    if ($width !== false && $width !== null &&
        $height !== false && $height !== null &&
        $width > 0 && $height > 0) {

        $area = calculateArea($width, $height);

        echo "<h3>Result:</h3>";
        echo "The area of a rectangle with a width of "
            . $width . " and " . $height . " is " . $area;

    } else {
        echo "<p>Please enter valid positive numbers.</p>";
    }
}
?>

</body>
</html>