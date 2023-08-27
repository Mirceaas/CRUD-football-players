<?php


if(isset($_POST['upload'])) {
    $id=$_POST['id'];
    $title=$_POST['title'];
    $info=$_POST['text1'];
    $target="./images/". md5(uniqid(time())). basename($_FILES['image']['name']);
    
    $data=array(
        'id'=>$id,
        'title'=>$title,
        'info'=>$info,
        'image'=>$target,
        );
    $xml=simplexml_load_file('data_img.xml');
    $date=$xml->addChild('date');
    $date->addChild('id', $id);
    $date->addChild('title', $title);
    $date->addChild('info', $info);
    $date->addChild('src', $target);
    $date->addChild('view', 'view.php?id='.$id);
    $date->addChild('edit', 'edit.php?id='.$id);
    $date->addChild('delete', 'delete.php?id='.$id);
    $date->addChild('confirm', 'return confirm("Are you sure you want to delete this item?")');
    $date->addChild('back', 'index.php');
    file_put_contents('data_img.xml', $xml->asXML());
    
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        header('location:gestionaredb.php');
    } else {
        echo "Eroare!";
    }
    }