<!doctype html>
<html>
<head>
<title>php</title>
<link rel="stylesheet" href="css/style.css">
<meta charset = "UTF-8">
<style>
body li{
list-style : none;
}
</style
</head>
<body>
<header></header>
<?php
$result=0;
require_once ('math.php');

class calculator extends math 
{
function add ($n1, $n2)
{
return $n1+$n2;
}
function sub($n1, $n2)
{
return $n1-$n2;
}
function mul ($n1, $n2)
{
return $n1*$n2;
}
function div($n1, $n2)
{
if ($n2!='0')
{
return $n1/$n2;
}
return 'Divide by zero';
}
function rem($n1, $n2)
{
if ($n2!='0')
{
return $n1%$n2;
}
return 'Divide by zero';
}
public function tan_c($value=' ')
{
return $this->tan_m($value);
}
public function cot_c($value= ' ')
{
return $this->cot_m($value);
}
} 
$obj= new calculator();
switch ($_POST ['btn']){
case '+':
$result= $obj->add($_POST['first_number'], $_POST ['last_number']);
break;
case '-':
$result= $obj->sub($_POST['first_number'], $_POST ['last_number']);
break;
case '*':
$result= $obj->mul($_POST['first_number'], $_POST ['last_number']);
break;
case '/':
$result= $obj->div($_POST['first_number'], $_POST ['last_number']);
break;
case '%':
$result= $obj->rem($_POST['first_number'], $_POST ['last_number']);
break;
 case 'sin':
$result= $obj->sin_m($_POST['first_number'], $_POST ['last_number']);
break;
case 'cos':
$result= $obj->cos_m($_POST['first_number'], $_POST['last_number']);
break;
case 'tan':
$result= $obj->tan_c($_POST['first_number'], $_POST ['last_number']);
break;
case 'cot':
$result= $obj->cot_c($_POST['first_number'], $_POST ['last_number']);
break;
case 'pow':
$result= $obj->pow_m($_POST['first_number'], $_POST ['last_number']);
break;
case 'sqr':
$result= $obj->sqr_m($_POST['first_number'], $_POST ['last_number']);
break;
case 'sqrt':
$result= $obj->sqrt_m($_POST['first_number'], $_POST ['last_number']);
break;
case '10':
$result= $obj10( $_POST['first_number'], $_POST ['last_number']);
break;
case 'ln':
$result= $obj->ln_m($_POST['first_number'], $_POST ['last_number']);
break;
default:
break;
}
?>
form action="calculator.php" method="post">
<ul>
<li>
<label for="first_number">First number</label>
</li>
<li>
<label for="first_number">First number</label>
</li 
</ul>





</body>
</html>