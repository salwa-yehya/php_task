<?php
echo '_______________Q1______________';
echo '<br>';
for($i=1;$i<=10;$i++){
    if ($i<10){
        echo "$i-";
    }
    else {
        echo "$i";
    }
}
echo '<br>';
?>
<?php
echo '_______________Q2______________';
echo '<br>';
$sum = 0;
for($i=0; $i<=30; $i++){
    $sum +=$i;
  
}
  echo " total is :$sum" ;
  echo '<br>';
?>
<?php 
echo '_______________Q3______________';
echo '<br>';
// $n=5;
// for($i=1; $i<=$n ; $i++){ 
//     for($x=1 ;$x<=$i ; $x++){
//         echo "A";
//     }
// }
?>
<?php 
echo '_______________Q4______________';
echo '<br>';
$res=1;
for ($i=1 ; $i<=5 ; $i++){
  $res *=$i;
}
echo $res;
echo '<br>';
?>
<?php 
echo '_______________Q4______________';
echo '<br>';
$N1 =0;
$N2 =1;
$n=50;
echo $N1 ;
echo $N2 ;
for($i=1 ;$i<=$n ;$i++){
    $N3=$N1 +$N2;
    $N1=$N2;
    $N2=$N3;
}
echo $N3;