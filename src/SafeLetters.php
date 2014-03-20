<?php

class SafeLetters{
  static function byRegex($regex, $str){
    preg_match_all($regex, $str, $matches);
    
    $str = "";
    foreach($matches[0] as $match){
      $str .= $match;
    }
    
    return $str;
  }
  
  static function onlyLetters($str){
    return SafeLetters::byRegex("/[A-z]+/", $str);
  }
}
