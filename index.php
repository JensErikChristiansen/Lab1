<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');
        
        // Create an array of students
        $students = array();
        
        // Create Leon
        $student1 = new Student();
        $student1 -> surname = "Ho";
        $student1 -> first_name = "Leon";
        $student1 -> add_email('home', 'leon@hotmail.com');
        $student1 -> add_email('work', 'leon@bchydro.com');
        $student1 -> add_grade(50);
        $student1 -> add_grade(50);
        $student1 -> add_grade(50);
        // Add Duy to array of students
        $students['leon'] = $student1;
        
        // Create Duy
        $student2 = new Student();
        $student2 -> surname = "Le";
        $student2 -> first_name = "Duy";
        $student2 -> add_email('home', 'duy@hotmail.com');
        $student2 -> add_email('work', 'duy@rcmp.com');
        $student2 -> add_grade(10);
        $student2 -> add_grade(8);
        $student2 -> add_grade(9);
        // Add Duy to array of students
        $students['duy'] = $student2;
        
        // Create Jens
        $student3 = new Student();
        $student3 -> surname = "Christiansen";
        $student3 -> first_name = "Jens";
        $student3 -> add_email('home', 'jens@hotmail.com');
        $student3 -> add_email('work', 'jens@work.com');
        $student3 -> add_grade(100);
        $student3 -> add_grade(89);
        $student3-> add_grade(99);
        // Add Jens to array of students
        $students['jens'] = $student3;
        
        // sort by key
        ksort($students);
        
        // Print each student
        foreach ($students as $student) {
            echo $student -> toString();
        }
        ?>
    </body>
</html>
