<html>
<head><title>BILL</title></head>
<body style="background-color: black;color: yellow;">
   <CENTER>  <h2>
        Bill
    </h2>
     <?php
     if($_POST)  
    {   
        $name = $_POST['name']; 
        $price = $_POST['price'];

        $nme = explode(',',$name);
        $x = count($nme);

        $prc = explode(',',$price);

        echo '<body style="background-color:black;color:yellow;"><table>
            <tr>
                <th>Item Name</th><th>Item Price</th>
            </tr>';
            for($i=0;$i<$x;$i++){
    echo "<tr>";
        echo "<td>{$nme[$i]}</td><td>{$prc[$i]}</td>";
    }
    echo "<tr>";
echo "</table>";

        echo '<br>';
        $total = 0;
        for($i=0; $i<$x;$i++)
        {
            $total = $total + $prc[$i];
        }

        echo 'Total Amount Is: '.$total;

        $mx= max($prc);
        $ky = array_search($mx, $prc);
        echo '<br>';
        echo 'Costliest item Is: '.$nme[$ky];

        $mn= min($prc);
        $key = array_search($mn, $prc);
        echo '<br>';
        echo 'Cheapest item Is: '.$nme[$key];
}     
?>
<br>
    <form method="post" action="a411.php">
        <input type="submit" name="submit" value="Back"/>
    </form>
</CENTER>
</body>
</html>
