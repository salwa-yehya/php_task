<?php
class Books {
  public $title;
  public $pages;
  public $auther;

//---
function set_title($title){
  $this->title = $title;
}
function set_pages($pages){
    $this->pages = $pages;
  }
  function set_auther($auther){
    $this->auther = $auther;
  }
//------
function get_title(){
   return $this->title ;
 }
 function get_pages(){
    return $this->pages ;
  }
function get_auther(){
    return $this->auther ;
  }
}
//------
$book1 = new Books();
$book1->set_title("salwa");
$book1->set_pages("30");
$book1->set_auther("baraa");
//----
$book2 = new Books();
$book2->set_title("bayan");
$book2->set_pages("35");
$book2->set_auther("salwa");
//---
echo $book1->get_title();
echo '<br>';
echo $book1->get_pages();
echo '<br>';
echo $book1->get_auther();
echo '<br>';
echo '<pre>';
print_r ($book1);
echo '</pre>';
echo '<br>';
echo "----------------------------------------------------------------------------";
echo '<br>';
echo $book2->get_title();
echo '<br>';
echo $book2->get_pages();
echo '<br>';
echo $book2->get_auther();
echo '<br>';
echo '<pre>';
print_r ($book2);
echo '</pre>';