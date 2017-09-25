<?php

  $obj = new main();
  $title = "This is to demonstrate String and Array functions";
  $obj->printthis($title);
  
  $array = array(1,2,3,4,5,6,7);
  $obj->printArray($array);

  class main {

    public function __construct() {

      echo 'Hello! Let\'s get started </br>';

    }

    
    public function __destruct() {

      echo '</br> That\'s it! Thanks!;

    }


  }



?>