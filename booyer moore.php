<?php
 
/**
 * Pattern we're searching for
 *
 * @var string
 */
$pattern = 'gloria';
 
/**
 * The text we're searching in
 *
 * @var string
 */
$text = 'Sic transit gloria mundi, non transit gloria Gundi!';
 
/**
 * Calculates the suffixes for a given pattern
 *
 * @param string $pattern
 * @param array  $suffixes
 */
function suffixes($pattern, &$suffixes)
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
 
/**
 * Fills in the array of bad characters.
 *
 * @param string $pattern
 * @param array  $badChars
 */
function badCharacters($pattern, &$badChars)
{
   $m = strlen($pattern);
 
   for ($i = 0; $i < $m - 1; ++$i) {
      $badChars[$pattern{$i}] = $m - $i - 1;
   }
}
 
/**
 * Fills in the array of good suffixes
 *
 * @param string $pattern
 * @param array  $goodSuffixes
 */
function goodSuffixes($pattern, &$goodSuffixes)
{
   $m 		= strlen($pattern);
   $suff 	= array();
 
   suffixes($pattern, $suff);
 
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
 
   for ($i = 0; $i < $m - 2; $i++) {
      $goodSuffixes[$m - 1 - $suff[$i]] = $m - $i - 1;
   }
}
 
/**
 * Performs a search of the pattern into a given text
 *
 * @param string $pattern
 * @param string $text
 */
function boyer_moore($pattern, $text)
{
   $n = strlen($text);
   $m = strlen($pattern);
 
   $goodSuffixes 	= array();
   $badCharacters 	= array();
 
   goodSuffixes($pattern, &$goodSuffixes);
   badCharacters($pattern, &$badCharacters);
 
   $j = 0;
   while ($j < $n - $m) {
      for ($i = $m - 1; $i >= 0 && $pattern[$i] == $text[$i + $j]; $i--);
      if ($i < 0) {
         // note that if the substring occurs more
         // than once into the text, the algorithm will
         // print out each position of the substring
         echo $j;
         $j += $goodSuffixes[0];
      } else {
         $j += max($goodSuffixes[$i], $badCharacters[$text[$i + $j]] - $m + $i + 1);
      }
   }
}
 
// search using Boyer-Moore
// will return 12 and 38
boyer_moore($pattern, $text);

