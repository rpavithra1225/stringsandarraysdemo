<?php

  $obj = new main();
  $text = "This is to demonstrate string functions";
  $obj->stringfunctionsdemo($text);
  
  $array = array(1,2,3,4,5,6,7);
  //$obj->printArray($array);

  class main {

    public function __construct() {

      echo 'Hello! Let\'s get started </br>';

    }

    public function printfunction($text) {
      echo '<h1>print function demo </h1>';
      print($text);
      echo '<hr>';
    }

    public function stringfunctionsdemo($text) {
      $this->printfunction($text);
    }

    

    public function arrayfunctionsdemo($array) {
      echo '<h1>array print function</h1>';
      print_r($array);
      echo '<hr>';
    }
    public function __destruct() {

      echo '</br> That\'s it! Thanks!';

    }


  }



?>