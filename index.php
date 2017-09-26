<?php

  
  $obj = new main();
  $text = "This is to demonstrate string functions";
  $obj->stringfunctionsdemo($text);
  
  echo '<h1>Arrays</h1><br/>';
  $array = array(1, "hello", 1, "world", "hello");
  $obj->arrayfunctionsdemo($array);

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

    public function strfunc_strrepeat() {
      echo '<h1>str_repeat function demo </h1>';
      echo str_repeat("Repeat", 10);
      echo '<hr>';
    }

    public function strfunc_strpad() {
      echo '<h1>str_pad function demo </h1>';
      echo str_pad("Welcome", 10, "_", STR_PAD_BOTH);
      echo '<hr>';
    }

    public function strfunc_strreverse($text) {
      echo '<h1>strrev function demo </h1>';
      echo strrev($text);
      echo '<hr>';
    }

    public function strfunc_substr($text) {
      echo '<h1>substr function demo </h1>';
      echo substr($text, -4, 3);
      echo '<hr>';
    }

    public function strfunc_substrcount($text) {
      echo '<h1>substr_count function demo </h1>';
      echo substr_count($text, 'is', 3);
      echo '<hr>';
    }

    public function strfunc_strpos($text) {
      echo '<h1>strpos function demo </h1>';
      echo strpos($text, 's', 4);
      echo '<hr>';
    }

    public function stringfunctionsdemo($text) {
      echo '<h1>Strings</h1><br/>';
      $this->printstrfunc($text);
      $this->strfunc_explode($text);
      $this->strfunc_similar($text);
      $this->strfunc_strreplace($text);
      $this->strfunc_strrepeat();
      $this->strfunc_strpad();
      $this->strfunc_strreverse($text);
      $this->strfunc_substr($text);
      $this->strfunc_substrcount($text);
      $this->strfunc_strpos($text);
    }

    public function arrayfunctionsdemo($array) {
      $this->arrfunc_arraycount($array);
      $this->arrfunc_arrayunique($array);
      $this->arrfunc_arraycombine($array);
      $this->arrfunc_arraychunk($array);
      $this->arrfunc_arrayslice($array);
      //$this->strfunc_strpad($array);
      //$this->strfunc_strreverse($array);
      //$this->strfunc_substr($array);
      //$this->strfunc_substrcount($array);
      //$this->strfunc_strpos($array);
    }

    public function arrfunc_arraycount($array) {
      echo '<h1>array_count_values function demo</h1>';
      print_r(array_count_values($array));
      echo '<hr>';
    }

    public function arrfunc_arrayunique($array) {
      echo '<h1>array_unique function demo</h1>';
      print_r(array_unique($array));
      echo '<hr>';
    }

    public function arrfunc_arraycombine($array) {
      $arraydummy = array('11','22','33','44','55');
      echo '<h1>array_combine function demo</h1>';
      print_r(array_combine($arraydummy, $array));
      echo '<hr>';
    }

    public function arrfunc_arraychunk($array) {
      echo '<h1>array_chunk function demo</h1>';
      print_r(array_chunk($array, 2, true));
      echo '<hr>';
    }

    public function arrfunc_arrayslice($array) {
      echo '<h1>array_slice function demo</h1>';
      $output = array_slice($array, -3, -1,true);
      echo '<hr>';
    }

    public function __destruct() {

      echo '</br> That\'s it! Thanks!';

    }


  }



?>