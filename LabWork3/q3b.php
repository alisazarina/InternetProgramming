<html> 
<head> 
<title>Simple Array Loop - States</title> </head> 
  
<body> 
<h2>List of states<br /></h2> 
  
<?php 
//Create array. 
$states = array( 
  'MD' => 'Maryland',  
  'PA' => 'Pennsylvania', 
  'IL' => 'Illinois',
  'MO' => 'Missouri'
  ); 
    
//Print keys and values of array to browser. 
echo "\n<ul>\n";
foreach($states as $key => $value){ 
    echo "<li>$key - $value </li>\n"; 
} echo "</ul>";



?> 
</body> 
</html>