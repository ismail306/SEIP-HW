<?php

namespace cgpaCalculator;
class Calculator{


    function calCgpa($marks){

        if($marks <0 or $marks>100){
            echo "Invalide";

        }

        else{
            if($marks<40){
                return 1.00;
            }
            else if ($marks<45){
                return 2.00;
            }
            else if ($marks<50){
                return 2.25;
            }
            else if ($marks<55){
                return 2.5;
            }
            else if ($marks<60){
                return 2.75;
            }
            else if ($marks<65){
                return 3.00;
            }
            else if ($marks<70){
                return 3.25;
            }
            else if ($marks<75){
                return 3.50;
            }
            else if ($marks<80){
                return 3.75;
            }
            else {
                return 4.00;
            }




        }
    }





}


?>