<?php
$Rank1 = 100;
$Rank2 = 50;
$Rank3 = 10;
$Rank4 = 5;
$Rank5 = 0;
$Rank1_level = 100;
$Rank2_level = 200;
$Rank3_level = 300;
$Rank4_level = 400;
$Rank5_level = 500;
$Rank6_level = 1000;
$Rank7_level = 2000;
$Rank8_level = 2500;
$Rank9_level = 3000;
$Rank10_level = 5000;
$Ranking1 = $_GET['rank1'];
$Ranking2 = $_GET['rank2'];
$Ranking3 = $_GET['rank3'];
$Ranking4 = $_GET['rank4'];
$Ranking5 = $_GET['rank5'];
function Ranking1(){
    if ($Rank1_level<$Ranking1) {
    echo "Rank 1 And "."$Rank1_level - $Ranking1". "Points Left To Go";
    } 
    elseif ($Rank1_level>$Ranking1) {
    echo "You Reached Rank 2. ";
    echo "$Rank2_level - $Ranking1". "Left To Go";
    }
     elseif ($Rank2_level<$Ranking1) {
    echo "Rank 2 and". "$Rank2_level - $Ranking1". "Points Left To Go";
    }
     elseif ($Rank2_level>$Ranking1) {
    echo "You Reached Rank 3 ";
    echo "$Rank2_level - $Ranking1". "Left To Go";
    }
     elseif ($Rank3_level<$Ranking1) {
    echo "$Rank3_level - $Ranking1"." Point Left To Go";
    }
    elseif ($Rank3_level>$Ranking1) {
    echo "You Reached Rank 4. ";
    echo "$Rank2_level - $Ranking1". "Left To Go";
    }
     elseif ($Rank4_level>$Ranking1) {
    echo "Rank 4 and". "$Rank4_level - $Ranking1"."Points Left To Go";
    }
     elseif ($Rank4_level<$Ranking1) {
    echo "You Reached Rank 5. ";
    echo "$Rank4_level - $Ranking1". "Left To Go";
    }
     elseif ($Rank5_level>$Ranking1) {
    echo "$Rank5_level - $Ranking1"." Point Left To Go";
    }
     elseif ($Rank5_level<$Ranking1) {
    echo "You Reached Rank 6. ";
    echo "$Rank5_level - $Ranking1". "Left To Go";
    }
     elseif ($Rank6_level>$Ranking1) {
    echo "$Rank6_level - $Ranking1"." Point Left To Go";
    }
     elseif ($Rank6_level<$Ranking1) {
    echo "You Reached Max Rank Til Update. ";
    echo "$Rank5_level - $Ranking1". "Over Rank";
    } else {
        echo error;
    }
}
?>