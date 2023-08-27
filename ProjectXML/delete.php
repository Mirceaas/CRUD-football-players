<?php
$id=$_GET['id'];
$xml_data=simplexml_load_file("data_img.xml") or die("Error: Oj=bject Creation failure");
foreach($xml_data->children() as $data)
    if($data->id==$_GET['id'])
    {
        unlink($data->src);
    }
    $xml=new DOMDocument();
    $xml->load('data_img.xml');
    $xpath=new DOMXPATH($xml);
    foreach($xpath->query("/root/date[id='$id']") as $node){
        $node->parentNode->removeChild($node);
    }
    $xml->formatoutput=true;
    $xml->save('data_img.xml');
    header('location:gestionaredb.php');
    ?>