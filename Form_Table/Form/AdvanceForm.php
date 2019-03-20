<!doctype>
<head>
<link rel="icon" href="http://localhost:3000/Icon.png">
<style>
body{
  background-color:goldenrod;
}
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
<body>
<form method="GET" action="http://localhost:3000/PHP/Programs/Form_Table/Table/Table.php">
<table>
<tr>
<th>Names</th>
<th>Number</th>
<th>Points</th>
<th>XP Total</th>
<th>Starting Rank</th>
<th>Rank Points</th>
</tr>
<tr>
<td><input type="name" name="name1"></td>
<td><input type="name" name="card1"></td>
<td><input name="number1" type="number"></td>
<td><input name="XP1" type="number"></td>
<td><input name="Start1" type="number"></td>
<td><input name="rank1" type="number"></td>
</tr>
<tr>
<td><input type="name" name="name2"></td>
<td><input type="name" name="card2"></td>
<td><input name="number2" type="number"></td>
<td><input name="XP2" type="number"></td>
<td><input name="Start2" type="number"></td>
<td><input name="rank2" type="number"></td>
</tr>
<tr>
<td><input type="name" name="name3"></td>
<td><input type="name" name="card3"></td>
<td><input name="number3" type="number"></td>
<td><input name="XP3" type="number"></td>
<td><input name="Start3" type="number"></td>
<td><input name="rank3" type="number"></td>
</tr>
<tr>
<td><input type="name" name="name4"></td>
<td><input type="name" name="card4"></td>
<td><input name="number4" type="number"></td>
<td><input name="XP4" type="number"></td>
<td><input name="Start4" type="number"></td>
<td><input name="rank4" type="number"></td>
</tr>
<tr>
<td><input type="name" name="name5"></td>
<td><input type="name" name="card5"></td>
<td><input name="number5" type="number"></td>
<td><input name="XP5" type="number"></td>
<td><input name="Start5" type="number"></td>
<td><input name="rank5" type="number"></td>
</tr>
</table>
<section>
Guest:<input type="checkbox" name="guest">
Staff:<input type="checkbox" name="staff">
Skyler:<input type="checkbox" name="skyler">
</section>
<section>
<input type="submit">
</section>
</form>
</body>