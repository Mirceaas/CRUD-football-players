
	<head>
		<title>Fotbaaal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
       <?php
$xml_data=simplexml_load_file("data_img.xml") or die("Error: Object Creation failure");?>                  <table>
                  <table>
<?php
             foreach($xml_data->children() as $data){
        if($data->id==$_GET['id']){?>
         
            <tr>
<td><?php echo $data->title." <br/>";?></td>
</tr>
            <tr>
<td><?php
             echo $data->info;}}?></td>

                  </table>
             
<a href="index.php" class="button primary">Înapoi</a>