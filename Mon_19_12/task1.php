<?php 
echo '_______________Q1______________';
echo '<br>';
echo '<br>';
if (isset($_POST['submit'])) {
   $email = $_POST['email'] ;
   $password = $_POST['password'];
   if ((!empty($email)) && (!empty($password))){
       echo $email  ;
       echo '<br>';
       echo $password ;

   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="post">

<input type="text" name="email" id="email">
<input type="password" name="password" id="password">
<input type="submit" name="submit" id="submit">


   </form>
</body>
</html>




<?php 
echo '_______________Q2______________';
echo '<br>';
echo "<h1>Search</h1>";
if ($_SERVER['REQUEST_METHOD']=="post"&& isset($_POST['url'])) {
   echo"salwa";
   $url = $_POST['url'];
   // if (!empty($url)) {
      header("Location:".$url."");
   // }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Document</title>
</head>
<body>
<form action="" method="post">
<input type="url" name="url" id="url"
       placeholder="https://example.com"
       pattern="https://.*" size="30"
       required>


<input type="button" name="GO " id="GO" value="GO">

   </form>
</body>
</html>




<?php 
echo '_______________Q3______________';
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
echo '_______________Q4______________';
echo '<br>';
$errors="";
if(isset($_POST['submit'])){
   if(empty($_POST['text'])){
      $errors =" Please Add Note ";
   }
}
else{
  $text=$_POST['text'];
  echo  $text;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Document</title>
</head>
<body>
   <h1>TO DO LIST</h1>
   <form action="" method="post">
      <input type="text" name="text">
      <button type="submit" name="submit">ADD</button>
   </form>
</body>
</html>
