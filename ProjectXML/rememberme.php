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
    echo "Wrong cookie 🙁";
        
    }
    else {?>
<h2> <?php echo 'Welcome back, ' .$_COOKIE['username'];?></h2>
<a href='gestionaredb.php'>Intra in site</a></br>

   <?php }
    }else{
        header('Location:index.php');
    }?>

<a href='logout.php'>Logout</a>
                </section>