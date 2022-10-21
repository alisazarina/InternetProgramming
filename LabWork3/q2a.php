<html> 
<head> 
<title>Simple Array Loop - Colours</title> 
</head> 
  
<body> 
<h2>List of colours<br /></h2> 
  
<?php 
// Create array. 
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
sort($colours); 
  
// Print array using bullet list. 
echo "\n<ul>\n" ; 
foreach($colours as $c){  
    echo "<li>$c</li>\n"; 
} echo "</ul>" ; 
  
?> 
  
</body> 
</html> 
