<?php
require_once 'calculator2.php';
$obj=new calculator();
$obj1=new calculate();
?>
<html>
<head>
<title>Calculator</title>
</head>
<body>
<form action="calculator2_view.php" method="post">
<table border="1"  align="center">
<tr>
<td>first number</td>
<td>
<input type="text" name="first_number" value="<?php
if (isset($_POST['first_number']))
echo $_POST[first_number];
?>"/>
</td>
</tr>
<tr>
<td>second number</td>
<td>
<input type="text" name="second_number" value="<?php
if (isset($_POST['second_number']))
echo $_POST[second_number];
?>" />
</td>
</tr>
</table>
</form>
</body>
</html>