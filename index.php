<html>
<header><title>My friends book</title></header>
<body>
<h1>Friend book</h1>
<form action="index.php" method="post">
	<label>Name:<input type="text" name="name"></label>
	<input type="submit">	
</form>
<?php
    echo $_GET["name"];
    
    
    $filename = 'friends.txt';
	if ($file = fopen( $filename, "r" )){
		while (!feof($file)) {
			$line = fgets($file);
			echo $line;
		}
		fclose($file);
	}

	// appending to file
	if (isset["name"] && (strlen($_POST["name"]))>0){
	$file = fopen( $filename, "a" );
	fwrite( $file, "some string" );
	}
?>
</body>
</html>
