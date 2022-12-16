<?php 
session_start()
// echo "oday is 23 years old and has 22 in his hand ";
// echo '<br>';
// class userInfo {
//     public $name;
//     public $age;
//     public $money;
// function __construct($name="" ,$age="" ,$money=""){ //defult vaule 3shan eza ma d5lt vaule t7t ma e3tene error
// $this->name=$name;
// $this->age=$age;
// $this->money=$money;
// }
// }
// $user = new userInfo("oday" ,"24" ,"20 jod") ;
// echo "$user->name is $user->age and has $user->money";
?>
<?php
class userInfo {
    public $name;
    public $age;
    public $money;
    public $car = 'BMW';

    function __construct($name ,$age ,$money){ //defult vaule 3shan eza ma d5lt vaule t7t ma e3tene error
        $this->name=$name;
        $this->age=$age;
        $this->money=$money;
    }
 function set_name($name){
        $this->name= $name;
      }
function set_age($age){
        $this->age= $age;
      }
 function set_money($money){
        $this->money= $money;
      }


function get_name(){
    return $this ->name;
}
function get_age(){
    return $this ->age;
}
function get_money(){
    return $this ->money;
}
}

$user = new userInfo('salwa', 22 , 20000);
// $user->set_name("salwa");
// $user->set_age("22");
$user->set_money("200");
echo '<pre>';
print_r ($user);
echo '</pre>';
?>