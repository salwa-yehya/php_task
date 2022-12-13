<?php
echo '_______________1________________';
echo '<br>';
echo(strtoupper("salwa yehya abuafash ."))."\n";
echo '<br>';
echo(strtolower("salwa yehya abuafash."))."\n";
echo '<br>';
echo(ucfirst("salwa yehya abuafash."))."\n";
echo '<br>';
echo(ucwords("salwa yehya abuafash."))."\n";
echo '<br>';
?>
<?php
echo '_______________2________________';

echo '<br>';?>

<?php
echo '_______________3________________';
echo '<br>';
$str1 = 'The quick brown fox jumps over the lazy dog.';
if (strpos($str1,'jumps') !== false) 
 {
    echo 'The specific word is present.';
 }
else
 {
    echo 'The specific word is not present.';
 }
 ?>
 <?php 
 echo '<br>';
 echo '_______________4________________';
 echo '<br>';
 $str1 = 'rayy@example.com';
echo substr($str1, -3)."\n";
?>
<br>
<?php
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";
 
 ?>
 <?php
 echo '<br>';
 echo '_______________5________________';
 echo '<br>';
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1)."\n"; 
?>
<br>
<?php
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
?>
<?php
 echo '<br>';
 echo '_______________6________________';
 echo '<br>';
 $str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);
?>
<?php
 echo '<br>';
 echo '_______________7________________';
 echo '<br>';
 $cha = 'a';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
?>
<?php
 echo '<br>';
 echo '_______________8________________';
 echo '<br>';
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";
?>