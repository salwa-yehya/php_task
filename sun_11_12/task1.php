

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<!-- 1- -->
<?php 
//phpinfo();
?>
<!-- 2- -->
 <?php
echo 'Tomorrow I ll learn PHP global variables.';
echo '<br>';
echo 'This is a bad command: del c:.';
?>
<!-- 3- -->
<form method='POST'>
<h2>Please Write Your Name</h2>
<input type="text" name="name">
 <input type="submit" value="Submit Name">
</form>
    <?php
    $name =$_POST['name'];
    echo "<h3> Hello $name </h3>"; 
    ?>
 <!-- 4- -->
<?php
echo 'User IP Address : '. $_SERVER['REMOTE_ADDR'];
?>
<!-- 5- -->
<?php
echo basename(__FILE__, '.php'); 
echo '<br>';
 ?>
<!-- 6- -->

<?php
// $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
// $pieces = explode(" ", $pizza);
//$str = "https://www.w3schools.com/php/default.asp";
$split = explode("/", $str);
print_r($split);
echo '<br>';
?> 
<!-- 7- -->
<?php
$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;
?>
<!-- 8- -->
<?php
//header("Location:https://www.w3schools.com/");
//exit();
?>
</body>
</html>