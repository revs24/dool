<?php
	require "../scripts/connect_to_mysql.php";
    $entryType = (string)$_POST['entryType'];
    $content = (string)$_POST['content'];

    $content = nl2br($content);
    $contentArr = explode('<br />', $content);
    for($i=0; $i<count($contentArr); $i++) {
    	$line = $contentArr[$i];
    	$line = trim($line);
    	if(strlen($line) <= 3) {
    		continue;
    	}
    	$entryType = ucfirst($entryType);
		$line = ucfirst($line);
		$line = mysql_real_escape_string($line);
    	$sql = mysqli_query($conn,"INSERT INTO diary (office_or_home, data) VALUES ('$entryType', '$line')");
    }
    echo "Done";
?>