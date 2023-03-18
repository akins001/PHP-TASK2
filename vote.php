<?php
 $voterAge = 20;
 $pvcCheck = true;
 $voterWard = '020';

 if($voterAge < 18) {
    echo "Sorry, voter is not eligible to vote because they are under 18";
 }
 else if (!$pvcCheck) {
    echo "Sorry, voter is not eligible to vote because they do not have PVC";
 }
 else if ($voterWard !== '020') {
    echo "Sorry, voter is not eligible to vote because they are not registered in ward 020";
 }
 else {
    echo "Voter is eligible to vote.";
 }
?>