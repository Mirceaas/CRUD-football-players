<head>
		<title>Fotbal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
<html>
<head></head>
    <body>
                <form method="post" action="save.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<table>
    <tr><input type="text" name="id" placeholder="ID"></tr>
    <tr><input type="file" name="image"></tr>
    <tr><textarea name="title" cols="40" row="4" placeholder="Titlu"></textarea><br/></tr>
<tr><textarea name="text1" cols="40" row="4" placeholder="Informatii"></textarea><tr/>
</table>
<input type="submit" name="upload" value="Upload image">
</form>    
    </body>
</html>
