<head>
		<title>Fotbal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<?php
$xml=simplexml_load_file("data.xml") or die("Error: Cannot create object");
$n=0;
if((isset($_POST['nume']))&&(isset($_POST['parola']))){
foreach ($xml->children() as $data){
    if(($_POST['nume']==$data->nume)&&($_POST['parola']==$data->parola)){
        if(($_POST['nume']=='111')&&($_POST['parola']=='222')){
            if(isset($_POST['rememberme'])){
            setcookie('username',$_POST['nume'],time()+60*60*24*365);
            setcookie('password',md5($_POST['parola']),time()+60*60*24*365);
        echo"Remember me cookie set!";}else{
            setcookie('username',$_POST['nume'],false);
            setcookie('password', md5($_POST['parola']),false);
             echo"Remember me cookie not set!";
        }
        header('Location: gestionaredb.php');
            exit();
        } else {
            header('Location:index.php');
            exit();
       }
        
    } else {
        $n=$n+1;
    }
       
    }
   

if($n==$xml->count())
{
    echo 'Username/Password invalid';?><br/>
        <a href='index.php'>Inapoi la pagina principala</a></br><?php
}

}
else {
    echo 'You must supply a username and password.';
}
?>