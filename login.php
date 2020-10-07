<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
    {
        if($_POST['username']=="laminthant" && $_POST['password']=="lamin")
            {
              header("location:welcome.php");
            }
        else
        {
            $_SESSION['error']="invalid";
        }        
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
    a{
      text-decoration:none;
    }
  </style>
  </head>
  <body>
      <form action="welcome.php" method="POST">             
		        <div class="login-wrap">
		            <input type="text" name="username" placeholder="Username" autofocus>
		            <br>
		            <input type="password" name="password" placeholder="Password"><br >
		            <input  name="login" type="submit">
                <button><a href="registerpage.php">REGISTER</a></button>
                <?php
                if(isset($_SESSION['error']))
                {
                  if($_SESSION['error']=="invalid")
                  echo "<span style='color:red'>Invalid username and password</span>";
                }
                ?>
		        </div>
		      </form>	  	
	  	
	  	</div>
	  </div>
  </body>
</html>
<?php
unset($_SESSION['error']);
?>