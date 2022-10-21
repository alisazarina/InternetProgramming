<html>
<head>
    <title>Registration Form</title>
</head>

<body>
    <form action="q4b-2.php" method="post">
        <fieldset>
            <legend>Enter your information in the form below:</legend>
            <p><b>First Name: </b> <input type="text" name="fname" size="20" maxlength="40" /></p>
            <p><b>Last Name: </b> <input type="text" name="lname" size="20" maxlength="40" /></p>
            <p><b>Phone No: </b> <input type="text" name="phone" size="20" maxlength="40" /></p>
            <p><b>Email Address: </b> <input type="text" name="email" size="20" maxlength="40" /></p>
            
            <p><b>Programme: </b>
            
            <?php  
            $programme = array (1 => 'BSE', 'DIT', 'DIM', 'DEC', 'DCNET', 'DIA');  
            
            // The programmes are displayed using the pull-down menu. 
            echo '<select name="programme">';
            foreach ($programme as $key => $value) { 
                 echo "<option value=\"$value\">$value</option>\n"; }
            echo '</select>'; 
        
            ?>
            </p>
            <div align="left"><input type="submit" name="submit" value="Register" /></div>            
        </fieldset>
    </form>
</body>
</html>