<?php
class person{
Public $name;
public $id;


}
class faculty extends person{
    private $salary;

function teacher($name,$id,$salary){
    $this->name=$name;
    $this->id=$id;
    $this->salary=$salary;
    echo"Your Course Teacher Name: $this->name <br> ID: $this->id <br>Teacher Salary : $this->salary <br> ";


}



}
class student extends person{
private $tutionfee;
function std($name,$id,$tutionFee){
    $this->name=$name;
    $this->id=$id;
    $this->tutionfee=$tutionFee;
    echo"Name: $this->name <br> ID: $this->id <br> Your Tution Fee : $this->tutionfee <br> ";


}



}



?>