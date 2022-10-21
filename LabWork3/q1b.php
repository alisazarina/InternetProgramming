<html> 
<head> 
<title>Simple Array Loop - Cities</title> 
</head> 
  
<body> 
<h2>List of cities<br /></h2> 
  
<?php 

// 1. Create array named city
$city = array( 
  'Tokyo',                     // Values for city
  'New York City',  
  'Mumbai', 
  'Seoul', 
  'Shanghai', 
  'Buenos Aires' ,
  'Cairo',
  'London'
  ); 
 
 
// 2. Print values of array to browser, separated by commas. 
foreach($city as $value){   
    echo "$value, "; 
}

// syntax for accessing arrays/print values (slide CH3, pg21):
// foreach($array as $value) {
//     echo $value;
// }
 
?> 
</body> 
</html> 