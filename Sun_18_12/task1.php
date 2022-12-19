<?php
echo '_______________Q1______________';
echo '<br>';
class MyClass {
    public function __construct()  {   
        echo 'MyClass class has initialized !'."\n";
    }
 }
$userclass = new MyClass;
echo '<br>';
?> 
<?php
echo '_______________Q2______________';
echo '<br>';
class User {
    public $message = 'Hello All , I am ';
    public function Name($name){
        return $this->message.$name;
    }
 }   
 $Mymessage = New User();
 echo  $Mymessage->Name('salwa');
 echo '<br>';
 ?>
<?php
echo '_______________Q3______________';
echo '<br>';
class Factorial {
    public $mess = 'factorial is :';
    public function Factor($x){
        $res=1;
        for ($i=1 ; $i<=$x ; $i++){
            $result= $res*=$i; 
            //    return $this-> $mess.$result;
        }
        echo $this->mess;
        echo $result;
        echo '<br>';

    }

}
$math = new Factorial();
 $math->Factor(5);
?>
<?php
echo '_______________Q4______________';
echo '<br>';
class Order{
    public $sort ;
    public function __construct (array $sortA){
        $this->sort =$sortA;
    }
    public function Alsort()
    {
        $sortAA= $this->sort;
        sort($sortAA);
        return $sortAA ;
    }
}
$sortArray= new Order(array(11,-2,4,35,0,8,-9));
echo '<pre>';
print_r($sortArray->Alsort());
echo '</pre>';
echo '<br>';
?>
<?php 
// $int =array(11,-2,4,35,0,8,-9);
// sort($int);
// echo '<pre>';
// print_r ($int);
// echo '</pre>';
?>
<?php
echo '_______________Q5______________';
echo '<br>';

$sdate = new DateTime("1993-01-31");
$edate = new DateTime("2000-06-29");
$interval = $sdate->diff($edate);
echo "Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";
echo '<br>';
?>
<?php
echo '_______________Q6______________';
echo '<br>';
$dt = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');
echo $dt;
?>