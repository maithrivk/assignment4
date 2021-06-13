<html>
<head><title>ARITHMETIC OPERATIONS</title></head>
<body>
<center>
    <h1>
        ARITHMETIC OPERATIONS USING SWITCH CASE 
    </h1>
     
    <form method="post">
        <table border="0">
            <tr>
                <td>ENTER FIRST NUMBER  : <input type="text" name="num1" placeholder="Enter value 1"/>
                </td>
            </tr>
            <tr>
            <td> ENTER SECOND NUMBER : <input type="text" name="num2"  placeholder="Enter value 2"/>
                </td>
            </tr>
            <tr>
                <td>ENTER THE OPERATOR :  <input type="text" name="op" placeholder="Enter operator"/>
                </td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Enter</button>
                </td>
            </tr>
        </table>
    </form>
 
<?php
 
if(isset($_POST['submit'])) {
 
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $ch = $_POST['op'];
 
    echo "The first number is $a"; 
    echo "</br>";
    echo "The second number is $b"; 
    echo "</br>";

    switch($ch) {
        case '+':
            $r = $a + $b;
            echo " Addition of  $a and $b is " . $r ;
            break;
 
        case '-':
            $r = $a - $b;
            echo " Subtraction  of $a and $b is " . $r ;
            break;
 
        case '*':
            $r = $a * $b;
            echo " Multiplication $a and $b is " . $r ;
            break;
 
        case '/':
            $r = $a / $b;
            echo " Division of $a and $b is" . $r ;
            break;
 
    
    }
}
?>

</center>
</body>
</html>