<?php
namespace gradeCalculator;
class Calculator{
    function calgrade($g1,$g2,$g3){

        $sgpa=(($g1*3)+($g2*3)+($g3*3))/9;
        echo"Your CGPA: $sgpa <br>" ;
if($sgpa<1){
    return'F';

}
else if($sgpa<2.25){
    return'D';
}
else if($sgpa<2.50){
    return'C';
}
else if($sgpa<2.75){
    return'C+';
}
else if($sgpa<3.00){
    return'B-';
}
else if($sgpa<3.25){
    return'B';
}
else if($sgpa<3.50){
    return'B+';
}
else if($sgpa<3.75){
    return'A-';
}
else if($sgpa<4.00){
    return'A';
}
else{
    return 'A+';
}


    }

}
?>