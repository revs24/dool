<?php
	// call python parser file
	// $command = escapeshellcmd('rawInputToFormattedInfoConvertor.py');
	// $output = shell_exec($command);
	// exit;
	$command = escapeshellcmd('python rawInputToFormattedInfoConvertor.py');
	// echo $command;
	$rawInputToFormattedInfoConvertor = system($command, $retval);
	$last_line = system('ls', $retval);
	echo $retval;
	// var_dump($retval);
	if($rawInputToFormattedInfoConvertor) {
		echo "string";
	}
	die;
	require "../scripts/connect_to_mysql.php";
	$category = 'Fact';
	$subCategory = '';
	$categorySeparator = ':::';
	foreach(file('../data/info') as $line) {
		//echo $line;echo ' ';echo $i;
		if(strpos($line, $categorySeparator)) {
			// echo $line;echo ' if ';echo $i;
			$tempCategoryAndSubcategory = explode($categorySeparator, $line);
			$category = trim($tempCategoryAndSubcategory[0]);
			$subCategory = trim($tempCategoryAndSubcategory[1]);
		} else {
			$category = ucfirst($category);
			$subCategory = ucfirst($subCategory);
			$line = ucfirst($line);
			$line = mysql_real_escape_string($line);
			$sql = mysqli_query($conn,"INSERT INTO tutorials (category, sub_category, data) VALUES ('$category', '$subCategory', '$line')");
		}
	}
?>