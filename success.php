<html>
<title>Login</title>
<body>
<?php
echo "<b>You are in </b>".$_SERVER['PHP_SELF']." <b>script</b>";
if(empty($_POST["uname"])||empty($_POST["pass"])){
    echo "<h1>Access Denied!!</h1> <br /> Please enter both username and password";
}
else{
    echo"<h1>Access Granted!!</h1>";
    echo "Your Username is ".$_POST["uname"]."<br />"."Your password is ".$_POST["pass"];
}
?>
</body>
</html>