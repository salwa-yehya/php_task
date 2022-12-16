<?php  
echo '_______________Q1______________';
echo '<br>';
$year = 2000;  
//a leap year is always a multiple of four 
//century no leap years %!=100 ex:1700 , 1800 ---but  2000 is leap 0 == $year % 400
if((0 == $year % 4) &&(0 != $year % 100) | (0 == $year % 400))
{
echo "$year is a Leap Year.";    
// 366 days , every 4 years
}
 
else  
{  
echo "$year is not a Leap Year.";    
}
echo '<br>';
?> 
<?php  
echo '_______________Q2______________';
echo '<br>';
$temp = 25 ;
if ( $temp <= 20 ){
    echo " IT Is WinterTime ";
}
else {
    echo " IT Is SummerTime ";
}
echo '<br>';
?>
<?php  
echo '_______________Q3______________';
echo '<br>';
$firInt = 3 ;
$SecINT = 3 ;
$Sum = $firInt + $SecINT;
if ($firInt == $SecINT){
    echo " result is :" .$Sum * 3 ;
}
else {
    echo " result is : $Sum ";
}
echo '<br>';
?>
<?php  
echo '_______________Q4______________';
echo '<br>';
function check($firInt ,$SecINT){
$Sum = $firInt + $SecINT;
if ($Sum == 30){
    echo "True";
}
else {
    echo "True";
}
echo '<br>';
}
 check(25 ,5);
?>
<?php  
echo '_______________Q5______________';
echo '<br>';
function Multiple($num){
    if ($num % 3 ==0 ){
        echo "True";
    }
    else {
        echo "True";
    }
}
Multiple(9);
echo '<br>';
?>
<?php  
echo '_______________Q6______________';
echo '<br>';
$num = 30 ;
if ((20 <= $num ) && ($num >= 50)){
    echo "True";
}
else {
    echo "True";
}
echo '<br>';
?>
<?php  
echo '_______________Q7______________';
echo '<br>';
function LargestNum($N1 , $N2 , $N3){
$max = $N1 ;
if (($N1 >= $N2) && ($N1 >= $N3)){
        $max = $N1 ;
    echo "Largest number among $N1, $N2 and $N3 is: $max";

}

 elseif (($N2 >= $N1) && ($N2 >= $N3)){
    $max = $N2 ;
    echo "Largest number among $N1, $N2 and $N3 is: $max";
}

elseif (($N3 >= $N1) && ($N3 >= $N2)){
    $max = $N3 ;  
    echo "Largest number among $N1, $N2 and $N3 is: $max";
}}
LargestNum(1,5,9);
echo '<br>';
?>


<!DOCTYPE html>

<head>
	<!-- <title>PHP-Calculate Electricity Bill</title> -->
</head>

<?php
echo '_______________Q8______________';
// if in if ,  function ,  if inside function ,post
$result_str =  '';
$result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' is : ' . $result .'JOD' ;
    }
}
/**
 * To calculate electricity bill as per unit cost
 */
function calculate_bill($units) {
    $unit_cost_first = 2.50;
    $unit_cost_second = 5.00;
    $unit_cost_third = 6.20;
    $unit_cost_fourth = 7.50;

    if($units <= 50) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * $unit_cost_first) + (100 * $unit_cost_second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    else {
        $temp = (50 * $unit_cost_first) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    return number_format((float)$bill, 2, '.', '.');
}

?>

<body>
	<div id="page-wrap">
		<h3>Php - Calculate Electricity Bill</h3>
        <form action="" method="post" id="quiz-form">
            	<input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form> 

		<div>
		    <?php echo '<br />' . $result_str; ?>
		</div>
	</div>
</body>
</html>
<?php
echo '_______________Q9______________';
echo '<br>';
$FirstNum = $_POST['FirstNum'];
$SecondNum = $_POST['SecondNum'];
$operator = $_POST['operator'];
$result ="";
if(is_numeric($FirstNum) && is_numeric($SecondNum)){
    switch ($operator) {
        case "+":
           $result = $FirstNum + $SecondNum;
            break;
        case "-":
           $result = $FirstNum - $SecondNum;
            break;
        case "*":
            $result = $FirstNum * $SecondNum;
            break;
        case "/":
            $result = $FirstNum / $SecondNum;
    }
}
?>
<!DOCTYPE html>
<head>
    <!-- <title>calculator</title> -->
</head>
<body>
    <h3>PHP - calculator</h3>
    <form action="" method="post">
        <p><b>First Number</b></p>
<p>
<input type="number" name="FirstNum" id="FirstNum" required="required"  placeholder="please enter a number"  value="<?php echo $FirstNum; ?>"/>
</p>
        <p><b>Second Number</b></p>
<p>
<input type="number" name="SecondNum" id="SecondNum" required="required" placeholder="please enter a number" value="<?php echo $SecondNum; ?>" />
</p>
<input type="submit" name="operator" id="operator" value="+" />
<input type="submit" name="operator" id="operator"  value="-" />
<input type="submit" name="operator" id="operator" value="*" />
<input type="submit" name="operator" id="operator" value="/" />
          <p><b>Result</b></p>
<P>
<input type="result" readonly="readonly" value="<?php echo "$result" ?>">
</p>
    </form>
</body>
</html>
<?php
echo '_______________Q10______________';
echo '<br>';
function Vote($age){
 if($age >=18){
    echo "You can Vote";
 }
 else{
    echo "is no eligible to vote";
 }
}
Vote(15);
echo '<br>';
?>
<?php
echo '_______________Q11______________';
echo '<br>';
$num = 5 ;
if( $num > 0){
    echo "$num is positive number";
}
elseif ($num == 0){
    echo "$num is zero";
}
elseif ($num < 0) {
    echo "$num is negative number";
}
echo '<br>';
?>
<?php
echo '_______________Q12______________';
echo '<br>';
$sum = 0 ;
$Avarge = 0 ;
$grade = 0;
$sub_1 = 60;
$sub_2 = 86;
$sub_3 = 95;
$sub_4 = 63;
$sub_5 = 55;
$sub_6 = 74;
$sub_7 = 79;
$sub_8 = 62;
$sub_9 = 50;
$sum = $sub_1 + $sub_2 + $sub_3 +$sub_4 +$sub_5 +$sub_6 +$sub_7 +$sub_8 +$sub_9 ;
$Avarge = $sum/9 ;
if($Avarge <60){
    echo "your avarge is ". (int)$Avarge ." and your Grade is E";
}
elseif($Avarge <70){
    echo "your avarge is ". (int)$Avarge ." and your Grade is D";
}
elseif($Avarge <80){
    echo "your avarge is ". (int)$Avarge ." and your Grade is C";
}
elseif($Avarge <90){
    echo "your avarge is ". (int)$Avarge ." and your Grade is B";
}
elseif($Avarge <100){
    echo "your avarge is ". (int)$Avarge ." and your Grade is A";
}