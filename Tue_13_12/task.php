<?php 
$color = array('white', 'green', 'red');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0]  house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
echo '<br>';?>

<?php '<br>'; ?>
<!-- 2 -->
<?php
echo '---------------------------------2--------------------------------';
echo '<br>';
$color = array('white', 'green', 'red');
sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
?>
<?php '<br>'; ?>
<!-- 3 -->
<?php
echo '----------------------------------3-------------------------------';
$cities = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
"Germany" => "Berlin", "Greece" => "Athens",
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London",
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
"Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort($cities) ;
foreach($cities as $country => $capital)
{
    echo '<br>';
echo "The capital of $country is $capital"."\n" ;
echo '<br>';
}
?>
<!-- 4 -->
<?php
echo '----------------------------------4-------------------------------';
echo '<br>';
$colors = array(4 => 'white', 6 => 'green', 11=> 'red');

echo $colors[4];
echo '<br>';
?>
<!-- 5 -->


<?php
echo '----------------------------------5-------------------------------';
echo '<br>';
$original = array( '1','2','3','4','5' );
foreach ($original as $x) 
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
foreach ($original as $x) 
{echo "$x ";}
echo "\n"

?>
<?php echo '<br>';?>
<!-- 6 -->
<?php
echo '----------------------------------6-------------------------------';
echo '<br>';
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
asort($fruits);
print_r($fruits);
echo '<pre>';
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
asort($fruits);
print_r($fruits);
echo'</pre>';
?>
<!-- 7 -->
<?php
echo '----------------------------------7-------------------------------';
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
echo '<br>';
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
echo'</pre>';
}
?>
<?php echo '<br>';?>

<!-- 8 -->

<?php echo '--------------------------8---------------------------------------';
echo '<br>';?>
<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
echo '<pre>';
print_r($result);
echo '</pre>';
?>
<?php echo '<br>';?>
<?php echo '<br>';?>
<!-- 9 -->
<?php 
echo '---------------------------------9--------------------------------';
echo '<br>';
$colors=array("red","blue","white","yellow");
print_r($colors);
echo '<pre>';
print_r(array_change_key_case($colors,CASE_UPPER));
echo '</pre>';
?>
