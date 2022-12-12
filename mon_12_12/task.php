<?php
$a=1000;
$b=1200;
$c=1400;
echo "<table border=1 cellspacing=0 cellpading=0>
<tr> <td><font color=blue>Salary of Mr. A is</td> <td>$a$</font></td></tr> 
<tr> <td><font color=blue>Salary of Mr. B is</td> <td>$b$</font></td></tr>
<tr> <td><font color=blue>Salary of Mr. C is</td> <td>$c$</font></td></tr>
</table>";
echo '<br>';
?>


<?php 
echo "Last Modified : ".date("F d Y H:i:s", filemtime("task.php"));
echo '<br>';
?>


<?php
$fileLine = "task.php";
$line = count(file($fileLine));
echo "There are $line lines in $fileLine";
?>
