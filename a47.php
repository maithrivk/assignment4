<html>
<head><title>Electricity bill</title></head>
<body>
<center>
     <h1>
        Electricity Bill 
    </h1>
     
    <form method="post">
        <table border="0">
            <tr>
                <td>ENTER PREVIOUS READING <input type="text" name="r1" placeholder="Enter previous reading"/>
                </td>
            </tr>
            <tr>
            <td>ENTER PRESENT READING <input type="text" name="r2"  placeholder="Enter present reading"/>
                </td>
            </tr>
            <tr>
                <td> <button type="submit" name="submit">Enter</button>
                </td>
            </tr>
        </table>
    </form>

 
<?php   
    if($_POST)  
    {   
        $prev = $_POST['r1']; 
        $cur = $_POST['r2'];
        $unit = $cur - $prev;
        $total=0;  
        if ($unit <= 100)
        {
            $total= $unit * 3;
        }
        elseif ($unit <= 200)
        {
            $total = (100 * 3) + ($unit - 100) * 4;
        }
        elseif ($unit <= 300)
        {
            $total = (100 * 3) + (100 * 4) + ($unit - 200) * 5;
        }
        elseif ($unit > 300)
        {
            $total = (100 * 3) + (100 * 4) + (100 * 5) + ($unit - 300) * 6;
        }
        echo "Previous Reading is $prev"; 
        echo "</br>";        
        echo " Current Reading is $cur"; 
        echo "</br>";
        echo " Units used is $unit"; 
        echo "</br>";
        echo "Amount Payable is $total"; 
        echo "</br>";
    }     
?> 
</center>
</body>
</html>


