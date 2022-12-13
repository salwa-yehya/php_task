<?php
session_start();
?>
<?php  
echo $_SESSION['table'];
echo "<br>";
echo "Last Modified : ".date("F d Y H:i:s", $_SESSION['last']);
echo "<br>";
echo "There are " . $_SESSION['line'] . " lines in" .  $_SESSION['file'];

?>