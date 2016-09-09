<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>COMP 4711 - Lab 1</title>
    </head>
    <body>
        <?php
        include('student.php');

        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        $me = new Student();
        $me->surname = "Lau";
        $me->first_name = "Wilson";
        $me->add_email('home','lauwilson90@gmail.com');
        $me->add_email('work2','wlau47@my.bcit.ca');
        $me->add_grade(95);
        $me->add_grade(96);
        $me->add_grade(97);
        $students['a009'] = $me;

        ksort($students);

        foreach ($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
