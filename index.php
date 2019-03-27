<html>
<header><title>My friends book</title></header>
<body>
<h1>Friend book</h1>
<form action="index.php" method="post">
	<label>Name:<input type="text" name="name"></label>
	<input type="submit" value="Add new friend">	
	<?php
	// appending to file
	if (isset($_POST["name"]) && strlen($_POST["name"])>0){
		$filename = 'friends.txt';
		$var = "<li>";
		$var .= $_POST["name"];
		$var .= "</li>";
		$file = fopen( $filename, "a" );
		fwrite( $file, $var );
		fclose($file);
		
		if ($file = fopen( $filename, "r" )){
		while (!feof($file)) {
			$line = fgets($file);
			echo $line;
		}
		fclose($file);
		}
	}
	else{
		$filename = 'friends.txt';
		if ($file = fopen( $filename, "r" )){
		while (!feof($file)) {
			$line = fgets($file);
			echo $line;
		}
		fclose($file);
		}
	}
	?>
	<input type="text" name="nameFilter" value="<?=$nameFilter?>">
	<input type="submit" value="Filter list">	
</form>

</body>
</html>
