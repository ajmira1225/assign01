<?php echo "AJ Mira-ato's Calculator and GCD";  ?>
<body>
    <form method="get">
        <br>
        Input first number<br>
        <input name="num1"><br>
        Input second number<br>
        <input name='num2'><br>
        Choose Method
        <select name="op">
            <option value="Add">Add</option>
            <option value="Subtract">Subtract</option>
            <option value="Multiply">Multiply</option>
            <option value="Divide">Divide</option>
            <option value="GCD">Find GCD</option>
        </select><br>
        <button type="submit" name="submit" value="submit"> Calculate </button><br>
    </form>
The answer is 
<?php 
    if(isset($_GET['submit']))
    {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $op = $_GET['op'];
        switch($op)
        {
            case "Add":
                echo $result1 + $result2;
            break;

            case "Subtract":
                echo $result1 - $result2;
            break;

            case "Multiply":
                echo $result1 * $result2;
            break;

            case "Divide":
                echo $result1 / $result2;
            break;
            
            case "GCD":
                function getGCD($num1, $num2)
                {
                    if($num2 == 0)
                    echo $num1;
                    if($num2 != 0)
                    return getGCD($num2, $num1%$num2);
                }
                $gcd = getGCD($result1, $result2);
            default:
            return "Sorry no command found";
        }
    }
?>
</body>
