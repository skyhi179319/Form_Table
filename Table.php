<!DOCTYPE>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid green;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: gold;
}
.odd{
  background-color:goldenrod;
}
body{
  background-color:goldenrod;
}
</style>
</head>
<html>
<body>
<section>
<table>
<tr class="odd">
<th>Name</th>
<th>Number</th>
<th>Points</th>
</tr>
<tr>
<td>
<?php
$Name1 = $_GET['name1'];
echo $Name1;
?>
</td>
<td>
<?php
$Number1 = $_GET['card1'];
echo $Number1;
?>
</td>
<td>
<?php
$Points1 = $_GET['number1'];
echo $Points1;
?>
</td>
</tr>
<tr class="odd">
<td>
<?php
$Name2 = $_GET['name2'];
echo $Name2;
?>
</td>
<td>
<?php
$Number2 = $_GET['card2'];
echo $Number2;
?>
</td>
<td>
<?php
$Points2 = $_GET['number2'];
echo $Points2;
?>
</td>
</tr>
<tr>
<td>
<?php
$Name3 = $_GET['name3'];
echo $Name3;
?>
</td>
<td>
<?php
$Number3 = $_GET['card3'];
echo $Number3;
?>
</td>
<td>
<?php
$Points3 = $_GET['number3'];
echo $Points3;
?>
</td>
</tr>
<tr class="odd">
<td>
<?php
$Name4 = $_GET['name4'];
echo $Name4;
?>
</td>
<td>
<?php
$Number4 = $_GET['card4'];
echo $Number4;
?>
</td>
<td>
<?php
$Points4 = $_GET['number4'];
echo $Points4;
?>
</td>
</tr>
<tr>
<td>
<?php
$Name5 = $_GET['name5'];
echo $Name5;
?>
</td>
<td>
<?php
$Number5 = $_GET['card5'];
echo $Number5;
?>
</td>
<td>
<?php
$Points5 = $_GET['number5'];
echo $Points5;
?>
</td>
</tr>
</table>
</section>
<br>
<a href="http://localhost:3000/PHP/Programs/Form_Table/Form/Form.php">Back To Form</a>
</body>
</html>