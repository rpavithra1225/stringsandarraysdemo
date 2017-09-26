<?php

  $obj = new main();
  $text = "This is to demonstrate string functions";
  $obj->stringfunctionsdemo($text);
  
  //$obj->printArray($array);

  class main {

    public function __construct() {

      echo 'Hello! Let\'s get started </br>';

    }

    public function printstrfunc($text) {
      echo '<h1>print function demo </h1>';
      print($text);
      echo '<hr>';
    }

    public function strfunc_explode($text) {
      echo '<h1>explode function demo </h1>';
      $pieces = explode(" ", $text);
      echo $pieces[0];
      echo $pieces[1];
      echo '<hr>';
    }

    public function strfunc_similar($text) {
      echo '<h1>similar_text function demo </h1>';
      $percent = similar_text(" ", $text, $percent);
      echo $percent;
      echo '<hr>';
    }

    public function strfunc_strreplace($text) {
      echo '<h1>str_replace function demo </h1>';
      $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
      $replacedstr = str_replace($vowels, " ", $text);
      echo $replacedstr;
      echo '<hr>';
    }

    public function strfunc_strrepeat($text) {
      echo '<h1>str_repeat function demo </h1>';
      echo str_repeat("Repeat", 10);
      echo '<hr>';
    }

    public function stringfunctionsdemo($text) {
      $this->printstrfunc($text);
      $this->strfunc_explode($text);
      $this->strfunc_similar($text);
      $this->strfunc_strreplace($text);
      $this->strfunc_strrepeat();
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