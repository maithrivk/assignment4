
<html>
<head><title>factorial</title></head>
<body>
<form method="post"><br><br><center>
    Enter the Number : <input type="text" name="no" /><br><br>
    
    <input type="submit" name="submit" value="Submit" /><br><br>
</form>
<?php
  if(isset($_POST['submit']))
  {
    function fact($n)
    {
      if($n ==0)
        {
         return 1;
        }
      else 
        { 
         return $n * fact($n-1);
        }
    }
    print_r("Factorial of ".$_POST['no']." is :\n".fact($_POST['no']));
  }
?>
</center>
</body>
</html>
