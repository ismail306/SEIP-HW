<?php
include_once './Class/cgpaCalculator/Calculator.php';
include_once './Class/gradeCalculator/Calculator.php';
include_once './Class/courseDetails.php';

$sub1=$_POST["sub1"];
$sub2=$_POST["sub2"];
$sub3=$_POST["sub3"];

$std=new student();
$std->std('Ismail Hossain','191-35-427',88000);

$teacher=new faculty();
$teacher->teacher('Maruf Hasan','192364964123',120000);


$cgpacal= new \cgpaCalculator\Calculator();

 $cgpa1= $cgpacal->calCgpa($sub1);
 $cgpa2= $cgpacal->calCgpa($sub2);
 $cgpa3= $cgpacal->calCgpa($sub3);



$gradecal= new \gradeCalculator\Calculator();
$grade=$gradecal->calgrade($cgpa1, $cgpa2, $cgpa3);
echo" Your Grade : $grade ";





?>