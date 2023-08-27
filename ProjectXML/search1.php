<head>
		<title>sAFUUUUUU</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
  <?php         
      $xml_data=simplexml_load_file("data_img.xml") or die("Error: Object Creation failure");
if(isset($_POST["search"])){
    ?>
<table width="70" cellpadding="4" cellspace="4">
    <tr>
        <th>Nume</th>
        <th>Imagine</th>
        <th>Vezi mai mult</th>
    </tr>
    <?php
        foreach ($xml_data->children() as $data){
            if($data->title==$_POST['search_box']){?>
    <tr>
    
    <td><?php echo $data->title;?></td>
    <td><a class="image" ><img src="<?php echo $data->src;?>"width="50" height="50"></a></td>
    <td><a <?php echo "<a href=".$data->view.""?> class="button primary">Detalii</a></td>
    
    
</tr>
               
        <?php        }}
echo "</table>";}
echo "<br/><br/><a href=\"gestionaredb.php\">Back</a>";

?>
