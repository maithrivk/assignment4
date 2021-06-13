<html>
<head><title>fibonacci&prime number</title></head>
<body >
<center>
     <h1>
        Fibonacci Series and Prime Numbers
    </h1>
     
    <form method="post">
       
              ENTER THE NUMBER <input type="text" name="num1" placeholder="Enter the number"/>
             
                                <button type="submit" name="submit">Enter</button>
              
    </form>

 
<?php   
    if($_POST)  
    {   
        $num = $_POST['num1'];
        $i = 3;
        $n1 = 0;  
        $n2 = 1;  
        $end = $n2;
        echo "<h3>Fibonacci series of  $num is: </h3>";  
        echo "\n";  
        echo $n1.' '.$n2.' ';  
        while ($i <= $num )  
        {  
            $n3 = $n2 + $n1;  
            echo $n3.' ';  
            $n1 = $n2;  
            $n2 = $n3;  
            $i = $i + 1;  
            $end = $n2;

        } 

     
        $count = 0; 
        $num1 = $_POST['num1']; 
        $num = 2;   
        $n1 = 1;
        $n2 = 1;  
        $n3 = 2;    
        echo "<h3>Prime Numbers is: </h3>";  
        echo "\n"; 
while ($count < $end )  
{  
$div_count=0;  
while($num == $n3)
{
    if($end > 2){
for ( $i=1; $i<=$num; $i++)  
{  
if (($num%$i)==0)  
{  
$div_count++;  
}  
} 
if ($div_count<3)  
{  
echo $num." , ";
} 
}
$n1=$n2;
$n2=$n3;
$n3 = $n1 + $n2;
} 
$num=$num+1;
$count =$count+1;
}  
    }    
?> 
</center>
</body>
</html>


