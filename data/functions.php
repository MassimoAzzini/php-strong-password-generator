<?php

function message_return($number_char){

  $message = '';
  $pass = []; 


  if ($number_char == null){
    $message = '';
  }else if ($number_char < 8 || $number_char > 32){
    $message = 'Hai inserito un valore minore di 7 o maggiore di 32';
  }else{

    $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!$%&@#-';
    $combLen = strlen($comb) - 1; 
    for ($i = 0; $i < $number_char; $i++) {
        $n = rand(0, $combLen);
        $pass[] = $comb[$n];
    }
    $message = 'Password generata:<br>' .implode($pass);
  }

  return $message;
}

