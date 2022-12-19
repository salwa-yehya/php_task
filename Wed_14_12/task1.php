<?php
echo '_______________Q1______________';
echo '<br>';
$number =3;  
$count= 0;  
for ( $i=1; $i <= $number; $i++)  {  //1  2 3
if (($number % $i)==0)  {     //3%1=0 //3%2!=0 //3%3=0 
$count++;  // 2
}}  
if ($count < 3)  {  // 0 1 2 
echo "$number is a prime number.";  
echo '<br>';

}
else {
echo "$number is not a prime number."; 
echo '<br>';
}
?>
<?php
// function IsPrime($n)
// {
//  for($x=2; $x<$n; $x++)
//    {
//       if($n %$x ==0)
// 	      {
// 		   return 0;
// 		  }
//     }
//   return 1;
//    }
// $a = IsPrime(3);
// if ($a==0)
// echo 'This is not a Prime Number.....'."\n";
// else
// echo 'This is a Prime Number..'."\n";
?>
<?php
echo '_______________Q2______________';
echo '<br>';
function reverse($word){
return strrev($word);
}
 echo reverse("remove");
 echo '<br>';
?>
<?php 
echo '_______________Q3______________';
echo '<br>';
$str ="salwa";
if (ctype_lower($str)) {
    echo "your string $str is OK";
}
else {
    echo "your string $str is  NOTOK"; 
}
echo '<br>';
?>
<?php 
echo '_______________Q4______________';
echo '<br>';
$S = 22;
$M = 29;
echo "The number before swapping is:";
echo "Number S=".$S." and M=".$M;
echo '<br>';
$temp = $S;
$S= $M;
$M = $temp;
 
echo "The number after swapping is:";
echo "Number S=".$S." and M=".$M."\n";
echo '<br>';
?>
<?php 
echo '_______________Q5______________';
echo '<br>';
function ArmStrongNum($MyNum, $Order) { //407
  $y = $MyNum;
  $sum = 0;

  while ($y > 0){ //407>0
    $x = $y % 10;     //7
    $sum = $sum + Pow($x, $Order); // 7 *3 =21
    $y = (int)($y/10);  //40.7
  }

  if ($MyNum == $sum){
    echo $MyNum." is a Armstrong Number.\n";
  } else {
    echo $MyNum." is not a Armstrong Number.\n";
  }
}

ArmStrongNum(407, 3);
echo '<br>';
?>

<?php 
echo '_______________Q6______________';
echo '<br>';
function palindrome ($string){
$revString = strrev($string);
echo "$string ";
echo '<br>';
if ($string == $revString){
  echo "Yes it is a palindrome ";
}
else {
  echo "NO it isn't a palindrome ";
}
}
palindrome ("salwa yehya ayhey awlas");
echo '<br>';
?>

<?php 
echo '_______________Q7______________';
echo '<br>';
$NUM = array(2,4,7,4,8,4);
$result = array_unique($NUM);
echo "array before";
echo '<pre>';
print_r ($NUM);
echo '</pre>';
echo '<br>';
echo "array after";
echo '<pre>';
print_r ($result);
echo '</pre>';
?>