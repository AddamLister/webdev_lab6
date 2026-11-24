<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 - Question 1</title>
</head>
<body>
    <?php
        $name = "Addam Narru Batalis @ Norbert";
        $matric_no = "CI240014";
        $course = "BIC21203";
        $year_of_study = "3";
        $address = "Batu Pahat, Johor";
    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <th>Matric No</th>
            <td><?php echo $matric_no; ?></td>
        </tr>
        <tr>
            <th>Course</th>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <th>Year of Study</th>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>