<html>
<head><title>ARMSTRONG NUMBER</title></head>
<body >
<center>
    <form method="post">        
Enter a Number: <input type="text" name="num"/><br>  <br>
<button type="submit">Enter</button>  
</form> 

 
<?php   
    if($_POST)  
    {   
        $num = $_POST['num']; 
        $total=0;  
        $no=$num;  
        while($no!=0)  
        {  
        $rem=$no%10;  
        $total=$total+$rem*$rem*$rem;  
        $no=$no/10;  
        }  
        echo "The given number is $num"; 
        echo "</br>";
        echo "The sum of the digits is $total"; 
        echo "</br>";
        if($num==$total)  
        {  
        echo "It is an Armstrong number.";  
        }  
        else  
        {  
        echo "It is not an Armstrong number.";  
        }  
    }     
?> 
</center>
</body>
</html>


