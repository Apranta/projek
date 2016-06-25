<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Booyermore extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();    
        define('ALPHABET_SIZE',1);
    }
        
  public function suffixes($pattern, &$suffixes)
  {
   $m = strlen($pattern);
 
   $suffixes[$m - 1] = $m;
   $g = $m - 1;
 
   for ($i = $m - 2; $i >= 0; --$i) {
      if ($i > $g && $suffixes[$i + $m - 1 - $f] < $i - $g) {
         $suffixes[$i] = $suffixes[$i + $m - 1 - $f];
      } else {
         if ($i < $g) {
            $g = $i;
         }
         $f = $i;
 
         while ($g >= 0 && $pattern[$g] == $pattern[$g + $m - 1 - $f]) {
            $g--;
         }
         $suffixes[$i] = $f - $g;
      }
   }
}

// make char table
public function badCharacters($pattern, &$badChars)
{
   $m = strlen($pattern);
 
   for ($i = 0; $i < $m - 1; ++$i) {
      $badChars[$pattern{$i}] = $m - $i - 1;
   }
}
 
public function goodSuffixes($pattern, &$goodSuffixes)
{
   $m     = strlen($pattern);
   $suff  = array();
 
   $this->suffixes($pattern, $suff);
 
   for ($i = 0; $i < $m; $i++) {
      $goodSuffixes[$i] = $m;
   }
 
   for ($i = $m - 1; $i >= 0; $i--) {
      if ($suff[$i] == $i + 1) {
         for ($j = 0; $j < $m - $i - 1; $j++) {
            if ($goodSuffixes[$j] == $m) {
               $goodSuffixes[$j] = $m - $i - 1;
            }
         }
      }
   }
 
   for ($i = 0; $i <= $m - 2; $i++) {
      $goodSuffixes[$m - 1 - $suff[$i]] = $m - $i - 1;
   }
}
 
function boyer_moore($pattern, $text)
{
   $n = strlen($text);
   $m = strlen($pattern);
 
   $goodSuffixes  = array();
   $badCharacters   = array();
 
   $this->goodSuffixes($pattern, $goodSuffixes);
   $this->badCharacters($pattern, $badCharacters);
 
   $j = 0;
   while ($j <= $n - $m) {
      for ($i = $m - 1; $i >= 0 && $pattern[$i] == $text[$i + $j]; $i--);
      if ($i < 0) {
         // note that if the substring occurs more
         // than once into the text, the algorithm will
         // print out each position of the substring         
         return $j;         
         break;
         //return $j;
         $j += $goodSuffixes[0];
      } else {
        if($text[$i + $j] = null)
        {
          break;
        }
         $j += max($goodSuffixes[$i], $badCharacters[$text[$i + $j]] - $m + $i + 1);
      }
   }
   return -1;
}  

  function makeCharTable($string) {
      $len = strlen($string);
      $table = array();
      for ($i=0; $i < $len; $i++) {
          $table[$string[$i]] = $len - $i - 1; 
      }
      return $table;
  }

  function BoyerMoore($text, $pattern) {
      $patlen = strlen($pattern);
      if ($patlen <= 0) return -1;
      $textlen = strlen($text);
      $table = $this->makeCharTable($pattern);
      for ($i=$patlen-1; $i < $textlen;) { 
          $t = $i;
          for ($j=$patlen-1; $pattern[$j]==$text[$i]; $j--,$i--) { 
              if($j == 0) return $i;
          }
          $i = $t;
          if(array_key_exists($text[$i], $table))
              $i = $i + max($table[$text[$i]], 1);
          else
              $i += $patlen;
      }
      return -1;
  }
}