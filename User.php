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