<?php
	require "../scripts/connect_to_mysql.php";
?>
<?php
    $cate = (string)$_POST['id'];
    // "SELECT `data` FROM `tutorials` WHERE category = '".$cate."'"
    $sql = mysqli_query($conn,"SELECT data FROM tutorials WHERE category = '".$cate."'");
    $response = '';
    while($row = mysqli_fetch_array($sql,MYSQLI_NUM)) {
        $response .= $row[0].'#&';
    }
    echo $response;
?>