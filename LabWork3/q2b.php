<html> 
<head> 
<title>Simple Array Loop - Colours (Sorting)</title> 
</head> 
  
<body> 
<h2>List of colours<br /></h2> 
  
<?php 
//Create array. 
$colours=array( 
  'violet',  
  'blue',  
  'green', 
  'yellow', 
  'orange', 
  'red' 
  ); 
    
//Print values of array to browser, separated by commas. 
foreach($colours as $c){   
    echo "$c, "; 
} 
  
// Sort array by ascending order -- discarding original keys.
// sort($colours);

// Randomize the order of the array.
shuffle($colours);

// Sort associative array in ascending order (according to value) -- maintain original keys.
// asort($colours);

// Sort associative array in descending order (according to value).
//arsort($colours);

// Sort associative array in ascending order (according to key).
//ksort($colours);
  
//Print array using bullet list. 
echo "\n<ul>\n" ; 
foreach($colours as $c){  
    echo "<li>$c</li>\n"; 
} echo "</ul>" ; 
  
?> 
  
</body> 
</html> 