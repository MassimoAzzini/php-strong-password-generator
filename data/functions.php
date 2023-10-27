<?php

function message_return($number_char){

  $message = '';
  $pass = []; 


    $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!$%&@#-';
    $combLen = strlen($comb) - 1; 
    for ($i = 0; $i < $number_char; $i++) {
        $n = rand(0, $combLen);
        $pass[] = $comb[$n];
    }
  return $message = 'Password generata:<br>' .implode($pass);
}

