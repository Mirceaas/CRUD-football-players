<head>
		<title>Fotbal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
        
<?php
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $data=simplexml_load_file('data_img.xml');
    if(!isset($_POST['image'])){
        $target="./images/".md5(uniqid(time())).basename($_FILES['image']['name']);
        
    }else{
        $target="";
    }
    foreach($data->date as $date){
        if($date->id==$id){
            $date->title=$_POST['title'];
            $date->info=$_POST['info'];
            $date->src=$target;
        }
    }
    $handle=fopen("data_img.xml","wb");
    fwrite($handle,$data->asXML());
    fclose($handle);
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        header('location:gestionaredb.php');
    }else{
        echo "<br>Eroare!";
    }
}
?>
<?php 
$id=$_GET['id'];
$data=simplexml_load_file('data_img.xml');
foreach($data->date as $date){
    if($date->id==$id){
        ?>
<form  method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $date->id;?>">
    Titlu:<br>
    <input type="text" name="title" value="<?php echo $date->title;?>"><br><br>
    Informații:<br>
    <input type="text" name="info" value="<?php echo $date->info;?>"><br><br>
    Imagine: <br>
    <input type="file" name="image"><br><br>
    <img src="<?php echo $date->src;?>" height='100' width='100'>
    <br><br>
    <input type="submit" name="submit" value="Update">
</form>
<?php
    }
}?>