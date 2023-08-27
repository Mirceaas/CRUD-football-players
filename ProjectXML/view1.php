
	<head>
		<title>sAFUUUUUU</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
               <!-- <link rel="stylesheet" href="assets/css/style.css" />-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
<?php
include 'connection.php';
$sql="SELECT * FROM campionat WHERE ID='{$_GET['id']}'";
$query=mysqli_query($con,$sql) or die (mysqli_error($con));
$row=mysqli_fetch_array($query);
?>
        <table>
            <tr>
                <td>    <?php  echo "".$row["nume"]."<br/>";?></td>
            </tr>
            
            <tr>
                <td><div clas="mystyle"> <?php echo "".$row["info"]."</br>";?></div></td></tr>

</table>
<a href="gestionaredb.php" class="button primary">Înapoi</a>
