<!DOCTYPE html>
<head>
		<title>sAFUUUUUU</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
   <!DOCTYPE html>
<?php
$user='111';
$pass='222';
if((isset($_COOKIE['username']))&&(isset($_COOKIE['password']))&&($_COOKIE['username']==$user)&&($_COOKIE['password']==md5($pass))){
    header('Location: rememberme.php');
} else {
?>
<html>
<head>
<title>Login</title>
</head>
<body>

<form method="post" action="login.php" align="center">
            <table align="center">
                <th colspan="2"><h1>Login</h1></th><!-- comment -->
                        <tr style="height:30px"><td>Username:</td><td>
                    <input type="text" size="20" name="nume"/>
                            </td></tr>
                        <tr style="height:30px"><td>Password:</td><td>
                    <input type="text" size="20" name="parola"/>
                            </td></tr>
                         <tr style="height:30px"><td>Remember me:</td><td>
                       <input type="checkbox" name="rememberme" value="1"></td></tr>
                        <tr style="height:30px"><td colspan="2"><input type="Submit" value="Login"></td></tr>
            </table>
        </form>
</body>
</html>
<?php } ?>

    
 