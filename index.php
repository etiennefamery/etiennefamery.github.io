<html>
<header><title>My friends book</title></header>
<body>
<h1>Friend book</h1>
<form action="index.php" method="post">
	<label>Name:<input type="text" name="name"></label>
	<input type="submit" value="Add new friend">
	<input type="text" name="nameFilter" >
	<input type="checkbox" name="checkbox" value="value1">Only names starting with</input>
	<input type="submit" value="Filter list">	
	<?php
	
	$filename= 'friends.txt';
	// appending to file
	if (isset($_POST["name"]) && strlen($_POST["name"])>0){
		$var = $_POST["name"];
		$var .= "\n";	
		$file = fopen($filename,"a");
		fwrite( $file, $var );
		fclose($file);
		affichageEntier();
		
	// loop to find friends names which start with the value typed into "nameFilter"	
	} elseif(isset($_POST["nameFilter"]) && strlen($_POST["nameFilter"])>0 && isset($_POST["checkbox"])){
		$findme = $_POST["nameFilter"];
		if ($file = fopen( $filename, "r" )){
			while (!feof($file)) {
				$line = fgets($file);
				$pos = strpos($line, $findme);
				if ($pos !== false && $pos === 0){
					$var = "<li>";
					$var .= $line;
					$var .= "</li>";
					echo $var;
				}
			}
		fclose($file);
		}	
	//loop to find all names which contains the value typed into "nameFilter"	
	} elseif(isset($_POST["nameFilter"]) && strlen($_POST["nameFilter"])>0){
		$findme = $_POST["nameFilter"];
		if ($file = fopen( $filename, "r" )){
			while (!feof($file)) {
				$line = fgets($file);
				$pos = strpos($line, $findme);
				if ($pos !== false){
					$var = "<li>";
					$var .= $line;
					$var .= "</li>";
					echo $var;
				}
			}
		fclose($file);
		}
		
	} else{
		affichageEntier();
	}
	
	
	
		function affichageEntier(){
			$filename= 'friends.txt';
			if ($file = fopen( $filename, "r" )){
				while (!feof($file)) {
					$line = fgets($file);
					$var = "<li>";
					$var .= $line;
					$var .= "</li>";
					echo $var;
				}
				fclose($file);
			}
		}
		
		
	?>
	
</form>

</body>
</html>
