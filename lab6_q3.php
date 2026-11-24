<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
        function calculateArea($width, $height) {
            return $width * $height;
        }

        $width = 6;
        $height = 7;
        $area = calculateArea($width, $height);

        echo "The area of a rectangle with a width of $width and $height is $area";
    ?>
</body>
</html>