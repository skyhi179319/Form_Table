<!DOCTYPE>
<?php
$Ranking1 = $_GET['rank1'];
$Ranking2 = $_GET['rank2'];
$Ranking3 = $_GET['rank3'];
$Ranking4 = $_GET['rank4'];
$Ranking5 = $_GET['rank5'];
?>
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
<link rel="icon" href="http://localhost:3000/Icon.png">
</head>
<html>
<body>
<section>
<table>
<tr class="odd">
<th>Name</th>
<th>Number</th>
<th>Points</th>
<th>Seed Points</th>
<th>Region Points</th>
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
<td>
<?php
$Points1 = $_GET['number1'];
$Seed1 = $Points1 / 5;
echo $Seed1;
?>
</td>
<td>
<?php
$Region1 = $Seed1 / 20;
echo $Region1;
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
<td>
<?php
$Points2 = $_GET['number2'];
$Seed2 = $Points2 / 5;
echo $Seed2;
?>
</td>
<td>
<?php
$Region2 = $Seed2 / 20;
echo $Region2;
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
<td>
<?php
$Points3 = $_GET['number3'];
$Seed3 = $Points3 / 5;
echo $Seed3;
?>
</td>
<td>
<?php
$Region3 = $Seed3 / 20;
echo $Region3;
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
<td>
<?php
$Points4 = $_GET['number4'];
$Seed4 = $Points4 / 5;
echo $Seed4;
?>
</td>
<td>
<?php
$Region4 = $Seed4 / 20;
echo $Region4;
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
<td>
<?php
$Points5 = $_GET['number5'];
$Seed5 = $Points5 / 5;
echo $Seed5;
?>
</td>
<td>
<?php
$Region5 = $Seed5 / 20;
echo $Region5;
?>
</td>
</tr>
<tr class="odd">
<th>Name</th>
<th>Number</th>
<th>Chart XP + New XP</th>
<th>Starting Rank</th>
<th>New Rank</th>
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
$XP1 = $_GET['XP1'];
echo $XP1;
?>
</td>
<td>
<?php
$Start1 = $_GET['Start1'];
echo $Start1;
?>
</td>
<td>
<?php
$Rank1_level = 500;
$Rank2_level = 1000;
$Rank3_level = 2500;
$Rank4_level = 5000;
//Most Of Operators Are Switch Because Of Malfunction Don't Know Why But It Works. Don't Recommend For Kids For Ranking System. But Teach Operators If Wanted Too.
$Ranking1_Total1 = $Rank1_level - $Ranking1;
$Ranking1_Leftover1 = $Rank2_level + $Rank1_level - $Ranking1;
$Ranking1_Total2 = $Rank2_level - $Ranking1;
$Ranking1_Leftover2 = $Rank3_level + $Rank2_level - $Ranking1;
$Ranking1_Total3 = $Rank3_level - $Ranking1;
$Ranking1_Leftover3 = $Rank4_level + $Rank3_level - $Ranking1;
$Ranking1_Total4 = $Rank4_level - $Ranking2;
$Ranking1_Leftover4 = $Rank5_level + $Rank4_level - $Ranking1;
$Ranking1_Total5 = $Rank5_level - $Ranking1;
if ($Rank1_level > $Ranking1) {
echo "Rank 1 And "."$Ranking1_Total1". " Points Left To Go";
} elseif ($Rank1_level >= $Ranking1) {
echo "You Reached Rank 2. ";
echo "$Ranking1_Leftover1 ". "Points Left To Go";
} elseif ($Rank2_level > $Ranking1) {
echo "Rank 2 And "."$Ranking1_Total2". " Points Left To Go";
} elseif ($Rank2_level > $Ranking1) {
echo "You Reached Rank 3. ";
echo "$Ranking1_Leftover2 ". "Points Left To Go";
} elseif ($Rank3_level > $Ranking1) {
echo "Rank 3 And "."$Ranking1_Total3". " Points Left To Go";
} elseif ($Rank3_level >= $Ranking1) {
echo "You Reached Rank 4. ";
echo "$Ranking1_Leftover3 ". "Points Left To Go";
} elseif ($Rank4_level > $Ranking1) {
echo "Rank 4 And "."$Ranking1_Total4". " Points Left To Go";
} elseif ($Rank4_level < $Ranking1) {
echo "You Are A Ranking Winner. ";
}
else{
  echo "No Information Or Error";
}
?>
</td>
</tr>
<tr name="table2" class="odd">
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
$XP2 = $_GET['XP2'];
echo $XP2;
?>
</td>
<td>
<?php
$Start2 = $_GET['Start2'];
echo $Start2;
?>
</td>
<td>
<?php
$Rank1_level = 500;
$Rank2_level = 1000;
$Rank3_level = 2500;
$Rank4_level = 5000;
//Most Of Operators Are Switch Because Of Malfunction Don't Know Why But It Works. Don't Recommend For Kids For Ranking System. But Teach Operators If Wanted Too.
$Ranking2_Total1 = $Rank1_level - $Ranking2;
$Ranking2_Leftover1 = $Rank2_level + $Rank1_level - $Ranking2;
$Ranking2_Total2 = $Rank2_level - $Ranking2;
$Ranking2_Leftover2 = $Rank3_level + $Rank2_level - $Ranking2;
$Ranking2_Total3 = $Rank3_level - $Ranking2;
$Ranking2_Leftover3 = $Rank4_level + $Rank3_level - $Ranking2;
$Ranking2_Total4 = $Rank4_level - $Ranking2;
$Ranking2_Leftover4 = $Rank5_level + $Rank4_level - $Ranking2;
$Ranking2_Total5 = $Rank5_level - $Ranking2;
if ($Rank1_level > $Ranking2) {
echo "Rank 1 And "."$Ranking2_Total1". " Points Left To Go";
} elseif ($Rank1_level >= $Ranking2) {
echo "You Reached Rank 2. ";
echo "$Ranking2_Leftover1 ". "Points Left To Go";
} elseif ($Rank2_level > $Ranking2) {
echo "Rank 2 And "."$Ranking2_Total2". " Points Left To Go";
} elseif ($Rank2_level > $Ranking2) {
echo "You Reached Rank 3. ";
echo "$Ranking2_Leftover2 ". "Points Left To Go";
} elseif ($Rank3_level > $Ranking2) {
echo "Rank 3 And "."$Ranking2_Total3". " Points Left To Go";
} elseif ($Rank3_level >= $Ranking2) {
echo "You Reached Rank 4. ";
echo "$Ranking2_Leftover3 ". "Points Left To Go";
} elseif ($Rank4_level > $Ranking2) {
echo "Rank 4 And "."$Ranking2_Total4". " Points Left To Go";
} elseif ($Rank4_level < $Ranking2) {
echo "You Are A Ranking Winner. ";
}
else{
  echo "No Information Or Error";
}
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
$XP3 = $_GET['XP3'];
echo $XP3;
?>
</td>
<td>
<?php
$Start3 = $_GET['Start3'];
echo $Start3;
?>
</td>
<td>
<?php
$Rank1_level = 500;
$Rank2_level = 1000;
$Rank3_level = 2500;
$Rank4_level = 5000;
//Most Of Operators Are Switch Because Of Malfunction Don't Know Why But It Works. Don't Recommend For Kids For Ranking System. But Teach Operators If Wanted Too.
$Ranking3_Total1 = $Rank1_level - $Ranking3;
$Ranking3_Leftover1 = $Rank2_level + $Rank1_level - $Ranking3;
$Ranking3_Total2 = $Rank2_level - $Ranking3;
$Ranking3_Leftover2 = $Rank3_level + $Rank2_level - $Ranking3;
$Ranking3_Total3 = $Rank3_level - $Ranking3;
$Ranking3_Leftover3 = $Rank4_level + $Rank3_level - $Ranking3;
$Ranking3_Total4 = $Rank4_level - $Ranking3;
$Ranking3_Leftover4 = $Rank5_level + $Rank4_level - $Ranking3;
$Ranking3_Total5 = $Rank5_level - $Ranking3;
if ($Rank1_level > $Ranking3) {
echo "Rank 1 And "."$Ranking3_Total1". " Points Left To Go";
} elseif ($Rank1_level >= $Ranking3) {
echo "You Reached Rank 2. ";
echo "$Ranking3_Leftover1 ". "Points Left To Go";
} elseif ($Rank2_level > $Ranking3) {
echo "Rank 2 And "."$Ranking3_Total2". " Points Left To Go";
} elseif ($Rank2_level > $Ranking3) {
echo "You Reached Rank 3. ";
echo "$Ranking3_Leftover2 ". "Points Left To Go";
} elseif ($Rank3_level > $Ranking3) {
echo "Rank 3 And "."$Ranking3_Total3". " Points Left To Go";
} elseif ($Rank3_level >= $Ranking3) {
echo "You Reached Rank 4. ";
echo "$Ranking3_Leftover3 ". "Points Left To Go";
} elseif ($Rank4_level > $Ranking3) {
echo "Rank 4 And "."$Ranking3_Total4". " Points Left To Go";
} elseif ($Rank4_level < $Ranking3) {
echo "You Are A Ranking Winner. ";
}
else{
  echo "No Information Or Error";
}
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
$XP4 = $_GET['XP4'];
echo $XP4;
?>
</td>
<td>
<?php
$Start4 = $_GET['Start4'];
echo $Start4;
?>
</td>
<td>
<?php
$Rank1_level = 500;
$Rank2_level = 1000;
$Rank3_level = 2500;
$Rank4_level = 5000;
//Most Of Operators Are Switch Because Of Malfunction Don't Know Why But It Works. Don't Recommend For Kids For Ranking System. But Teach Operators If Wanted Too.
$Ranking4_Total1 = $Rank1_level - $Ranking4;
$Ranking4_Leftover1 = $Rank2_level + $Rank1_level - $Ranking4;
$Ranking4_Total2 = $Rank2_level - $Ranking4;
$Ranking4_Leftover2 = $Rank3_level + $Rank2_level - $Ranking4;
$Ranking4_Total3 = $Rank3_level - $Ranking4;
$Ranking4_Leftover3 = $Rank4_level + $Rank3_level - $Ranking4;
$Ranking4_Total4 = $Rank4_level - $Ranking4;
$Ranking4_Leftover4 = $Rank5_level + $Rank4_level - $Ranking4;
$Ranking4_Total5 = $Rank5_level - $Ranking4;
if ($Rank1_level > $Ranking4) {
echo "Rank 1 And "."$Ranking4_Total1". " Points Left To Go";
} elseif ($Rank1_level >= $Ranking4) {
echo "You Reached Rank 2. ";
echo "$Ranking4_Leftover1 ". "Points Left To Go";
} elseif ($Rank2_level > $Ranking4) {
echo "Rank 2 And "."$Ranking4_Total2". " Points Left To Go";
} elseif ($Rank2_level > $Ranking4) {
echo "You Reached Rank 3. ";
echo "$Ranking4_Leftover2 ". "Points Left To Go";
} elseif ($Rank3_level > $Ranking4) {
echo "Rank 3 And "."$Ranking4_Total3". " Points Left To Go";
} elseif ($Rank3_level >= $Ranking4) {
echo "You Reached Rank 4. ";
echo "$Ranking4_Leftover3 ". "Points Left To Go";
} elseif ($Rank4_level > $Ranking4) {
echo "Rank 4 And "."$Ranking4_Total4". " Points Left To Go";
} elseif ($Rank4_level < $Ranking4) {
echo "You Are A Ranking Winner. ";
}
else{
  echo "No Information Or Error";
}
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
$XP5 = $_GET['XP5'];
echo $XP5;
?>
</td>
<td>
<?php
$Start5 = $_GET['Start5'];
echo $Start5;
?>
</td>
<td>
<?php
$Rank1_level = 500;
$Rank2_level = 1000;
$Rank3_level = 2500;
$Rank4_level = 5000;
//Most Of Operators Are Switch Because Of Malfunction Don't Know Why But It Works. Don't Recommend For Kids For Ranking System. But Teach Operators If Wanted Too.
$Ranking5_Total1 = $Rank1_level - $Ranking5;
$Ranking5_Leftover1 = $Rank2_level + $Rank1_level - $Ranking5;
$Ranking5_Total2 = $Rank2_level - $Ranking5;
$Ranking5_Leftover2 = $Rank3_level + $Rank2_level - $Ranking5;
$Ranking5_Total3 = $Rank3_level - $Ranking5;
$Ranking5_Leftover3 = $Rank4_level + $Rank3_level - $Ranking5;
$Ranking5_Total4 = $Rank4_level - $Ranking5;
$Ranking5_Leftover4 = $Rank5_level + $Rank4_level - $Ranking5;
$Ranking5_Total5 = $Rank5_level - $Ranking5;
if ($Rank1_level > $Ranking5) {
echo "Rank 1 And "."$Ranking5_Total1". " Points Left To Go";
} elseif ($Rank1_level >= $Ranking5) {
echo "You Reached Rank 2. ";
echo "$Ranking5_Leftover1 ". "Points Left To Go";
} elseif ($Rank2_level > $Ranking5) {
echo "Rank 2 And "."$Ranking5_Total2". " Points Left To Go";
} elseif ($Rank2_level > $Ranking5) {
echo "You Reached Rank 3. ";
echo "$Ranking5_Leftover2 ". "Points Left To Go";
} elseif ($Rank3_level > $Ranking5) {
echo "Rank 3 And "."$Ranking5_Total3". " Points Left To Go";
} elseif ($Rank3_level >= $Ranking5) {
echo "You Reached Rank 4. ";
echo "$Ranking5_Leftover3 ". "Points Left To Go";
} elseif ($Rank4_level > $Ranking5) {
echo "Rank 4 And "."$Ranking5_Total4". " Points Left To Go";
} elseif ($Rank4_level < $Ranking5) {
echo "You Are A Ranking Winner. ";
}
else{
  echo "No Information Or Error";
}
?>
</td>
</tr>
</table>
</section>
<br>
<a href="http://localhost:3000/PHP/Programs/Form_Table/Form/Form.php">Back To Form</a>
<br>
<?php
$skyler = $_GET['skyler'];
$staff = $_GET['staff'];
$guest = $_GET['guest'];
if($skyler){
echo "Owner Has Put Information In.";
}
elseif($staff){
echo "Staff Has Put Information In.";
}
elseif($guest){
echo "Guest Has Put Information In.";
}
else{
Die();
}
?>
</body>
</html>