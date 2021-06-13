<html>
<head><title>Sum&Palindrome</title></head>
<body >
<center>
    <form method="post">        
Enter a Number: <input type="text" name="no"/><br>  <br>
<button type="submit">Enter</button>  
</form> 

 
<?php   
    if($_POST)  
    {   
        $no = $_POST['no']; 
        $num1 = $no;
        $rev = 0;
        $sum = 0;
        $rem = 0;
        while($no > 1)
        {
            $rem = $no % 10;
            $sum += $rem;
            $rev = $rev * 10 + $rem;
            $no = (int)$no / 10;
        }
        echo "The sum of the digits of $num1 is $sum"; 
        echo "</br>";
        if($num1 == $rev){  
            echo "The number is Palindrome";     
        }else{  
            echo "The number  is not a Palindrome";   
        }  
}     
      ?> 
</center>
</body>
</html>


