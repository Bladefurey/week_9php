<!DOCTYPE>
<html>
<head>
</head>
<body>
    <form>
        <input type="text" name="num1" placeholder="Enter Number 1">
        <select>
            <option name="sin" value="+">+</option>
            <option name="sin" value="-">-</option>
            <option name="sin" value="*">*</option>
            <option name="sin" value="/">/</option>
        </select>
        <input type="text" name="num2" placeholder="Enter Number 2">
        <button name="sumbit" value="sumbit">Calculate</button>
        <?php
            if(isset($_GET['sumbit']))
                {
                    $num1=$_GET['num1'];
                    $num2=$_GET['num2'];
                    $sin=$_GET['sin'];
                    if($sin=="+")
                        {
                            $result=$num1+$num2;
                            echo "Answer is : ".$result;
                        }
                }
        ?>
</body>
</html>