<!DOCTYPE html>
<html>
<head>
	<title>Question 4</title>
</head>
<body>
 <form action="screencast.php" method="post">	
 <label>Number1</label>
 <input type="text" name="a">
 <br> <br>
 <label>Number2</label>
 <input type="text" name="b">
 <br> <br>
 <input type="submit" name="submit">
</form>
</body>
</html>
<?php

    $a = $_POST['a'];
    $b = $_POST['b'];

  if (isset ($_POST['submit'])) {

    function test($a,$b) {

  if (!preg_match('/^[0-9]*$/', $a)) {
        echo "$a is not a number" ;
    } else if (!preg_match('/^[0-9]*$/', $b)) {
        echo "$b is not a number" ;
    } else {
        
        $ans = $a * $b;
        echo $ans; 
    }

   echo $ans; // call the function
  }
}
?>