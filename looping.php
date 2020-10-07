<!DOCTYPE>
<html>
<head>
</head>
<body>
    <ul>
        <?php
            for($i=0;$i<10;$i++)
            {
                echo "<li>ForLoop $i</li>";
            }
            $j=0;
            while($j<10)
            {
                echo "<li>WhileLoop $j</li>";
                $j++;
            }
            $k=2;
            do{
                echo "<li>DoWhileLoop $k</li>";
                $k++;
            }while($k<10);
            $items=array("Phone","tablet","Laptop");
            foreach($items as $item)
            {
                echo $item."<br>";
            }
        ?>
    </ul>
</body>
</html>