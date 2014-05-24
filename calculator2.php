<?php
class calculator{
public function add ($first_number, $second_number){
$data=array();
$data[0]="Addition";
$data[1]= $first_number + $second_number;
return $data;
}
public function sub ($first_number, $second_number){
$data=array();
$data[0]="Subtraction";
$data[1]= $first_number - $second_number;
return $data;
}
public function mul ($first_number, $second_number){
$data=array();
$data[0]="Multiplication";
$data[1]= $first_number *  $second_number;
return $data;
}
public function div ($first_number, $second_number){
$data=array();
$data[0]="Division";
if ($second_number==0){
$data[1]= 'Undefine';
}
else{
$date[1]= $first_number / $second_number;
}
return $data;
//$this->
}
public function rim ($first_number, $second_number){
$data=array();
$data[0]="Reminder";
if ($second_number==0){
$data[1]= 'Undefine';
}
else{
$date[1]= $first_number %  $second_number;
}
return $data;
//$this->
}
}

class calculate extends calculator {
public function factorial ($first_number){
$data=array();
$data[0]= "Factorial";
$num= $first_number;
$data[1]=1;
for($x= $num; $x>=1; $x--)
{
$data[1]= $data[1] * $x;
}
return $data;
}
public function sine ($first_number){
$data= array();
$data[0]= "sine value";
$data[1]= sine(deg2rad($first_number));
return $data;
}
public function root ($first_number){
$data=array();
$data[0]="Root value";
$data[1]= sqrt ($first_number);
return $data;
}
public function square ($first_number){
$data=array();
$data[0]="square value";
$data[1]= pow ($first_number , 2);
return $data;
}
public function permutation ($first_number, $second_number){
$data=array();
$data[0]="permutation";
$num= $first_number;
$n=1;
for ($x=$num; $x>=1; $x--)
{
$n= $n* $x;
}
$c= $first_number - $second_number;
$d=1;
for ($x=$c; $x>=1; $x--)
{
$d = $d * $x;
}
$data[1] = $n/ $d;

return $data;
}

}                                                                                                                                                                                                                 
?>