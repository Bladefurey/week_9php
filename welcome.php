<?php
session_start();

?>
<!DOCTYPE>
<html>
<head>
</style>
</head>
<body>
<?php
if(isset($_POST['username']) && isset($_POST['password']))
    {
        if($_POST['username']=="laminthant" && $_POST['password']=="lamin")
            echo "<span> logged in successful</span>";
        else
        {
            $_SESSION['error']="invalid";
            echo "error is" .$_SESSION['error'];
            header("location:login.php");
        }
           
    }

?>
</body>
</html>