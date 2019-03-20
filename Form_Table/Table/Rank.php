<?php
$Rank1_level = 500;
$Rank2_level = 1000;
$Rank3_level = 2500;
$Rank4_level = 5000;
$Ranking1 = $_GET['rank1'];
$Ranking2 = $_GET['rank2'];
$Ranking3 = $_GET['rank3'];
$Ranking4 = $_GET['rank4'];
$Ranking5 = $_GET['rank5'];
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