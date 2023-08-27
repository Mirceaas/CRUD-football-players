<?php
$nume=$_POST['nume'];
$prenume=$_POST['parola'];
$xml=simplexml_load_file('data.xml');
$date=$xml->addChild('date');
$date->addChild('nume',$nume);
$date->addChild('parola',$prenume);
file_put_contents('data.xml', $xml->asXML());
 header('Location:index.php');
?>
