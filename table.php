table example and foreach loop
Khaing Swe Win
•
Oct 6

exeforeach.php
PHP
Class comments


table example and foreach loop
<!DOCTYPE>
<html>
<head>
<title>Test </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<table class="table table-striped">
<thead>
<tr>
<td>No</td>
<td>Name</td>
<td>Email</td>
<td>Actions</td>
</tr>
</thead>
<tbody>
<?php

$names=array("tun tun","david","thiri","Naychi");
$emails=array("tun2@gmail.com","david@yahoo.com","thiri@gmail.com","nc@gmail.com");
for($row=0;$row<count($names);$row++)
{
$num=$row+1;
echo "<tr><td>$num</td><td>$names[$row]</td><td>$emails[$row]</td><td><button name='edit'>Edit</button></td></tr>";

}

?>
</tbody>

</table>
</div>

</body>
</html>