<!DOCTYPE>
<html>
<head>
</head>
<body>
    <form>
        <input type="text" name="num1" placeholder="Enter Number1">
        <input type="text" name="num2" placeholder="Enter Number2">
        <button name="check" value="check">Check</button>
        <button name="add" value="add">ADD</button>
        <button name="sub" value="sub">SUBTRACT</button>
        <button name="mul" value="mul">MULTI</button>
        <button name="div" value="div">DIVI</button>
        <
    </form>
    <?php
        $num1=$_GET['num1'];
        $num2=$_GET['num2'];
        if(isset($_GET['check']))
            {
                if($num1<$num2)
                    {
                        echo "<p>Number 1 is less than Number 2.</p>";
                    }
                elseif($num1=$num2)
                    {
                        echo "<p>Number 1 is Equal to Number 2.</p>";
                    }
                else
                    {
                        echo "<p>Number 1 is greater than Number2.</p>";
                    }

            }
            elseif(isset($_GET['add']))
                {
                    $result=$num1+$num2;
                    echo "Answer is : ".$result;
                }
            elseif(isset($_GET['sub']))
                {
                    $result=$num1-$num2;
                    echo "Answer is : ".$result;
                }
            elseif(isset($_GET['mul']))
                {
                    $result=$num1*$num2;
                    echo "Answer is : ".$result;
                }
            elseif(isset($_GET['div']))
                {
                    $result=$num1/$num2;
                    echo "Answer is : ".$result;
                }
    ?>
</body>
</html>