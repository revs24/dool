<?php
	require "../scripts/connect_to_mysql.php";
    $category = (string)$_POST['category'];
    $subCategory = "";
    $content = (string)$_POST['content'];

    // $fp = fopen('../data/rawInput.txt', 'w');
    // fwrite($fp, $category.":::\n\n");
    // fwrite($fp, $content);
    // fclose($fp);
    $content = nl2br($content);
    $contentArr = explode('<br />', $content);
    for($i=0; $i<count($contentArr); $i++) {
    	$line = $contentArr[$i];
    	$line = trim($line);
    	if(strlen($line) <= 3) {
    		continue;
    	}
    	$category = ucfirst($category);
		$subCategory = ucfirst($subCategory);
		$line = ucfirst($line);
		$line = mysql_real_escape_string($line);
    	$sql = mysqli_query($conn,"INSERT INTO tutorials (category, sub_category, data) VALUES ('$category', '$subCategory', '$line')");
    }
    echo "Done";
?>