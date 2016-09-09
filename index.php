<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>COMP 4711 - Lab 1</title>
    </head>
    <body>
        <?php
        include('student.php');
        foreach ($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
