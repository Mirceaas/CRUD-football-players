<head>
		<title>Fotbal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
<?php
$user='111';
$pass='222';
if((isset($_COOKIE['username']))&&(isset($_COOKIE['password']))){
    if(($_COOKIE['username']!=$user)|| ($_COOKIE['password']!=md5($pass))){
    echo "Wrong cookie :(";
        
    }
    else {
        ?><center> <table> <tr><?php echo 'Welcome back, ' .$_COOKIE['username'];?></tr><br><br><?php
    }
    }else{
        header('Location:index.php');
    }?>
                <tr><a href='logout.php' class="button primary">Logout</a></tr><br><br>
                <tr><a href='gestionaredb.php' class="button primary">înapoi în site</a></tr>
        </center></table>