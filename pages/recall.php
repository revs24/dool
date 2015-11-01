<?php
    require "../scripts/connect_to_mysql.php";
    // require "../components/parseInfoAndUpdateDB.php";
?>
<?php
    $sql = mysqli_query($conn,'SELECT DISTINCT category FROM tutorials');
    $category = array();
    while($row = mysqli_fetch_array($sql,MYSQLI_NUM)) {
        array_push($category, $row[0]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DOOL The Recall</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/styles/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/styles/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/styles/css/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="/styles/css/recall.css"/>
    <script src="/js/compiled/recall.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="header row">
            <div class="col-md-5 header-left-image">
                <img src="/images/header-img.png" alt="" height="80%" width="80%"></img>
            </div>
            <div class="col-md-7 header-right-text">
                <h1>
                    <bold>DOOL</bold>
                    : The Recall
                </h1>
            </div>
        </div>
        <hr/>
        <!-- header ends and category begins -->

        <div class="main-content row">
            <div class="col-md-4 category-section">
                <h1>Category</h1>
                <?php
                    $tempvar = '<h3 class="categoryList" >';
                    for($i=0; $i<count($category); $i++) {
                        echo $tempvar.$category[$i].'</h3>';
                    }
                ?>
            </div>
            <div class="col-md-8 details-section">
                <h1>Details</h1>
                <div class="your-class">
                    <div>
                        <p>your content1</p>
                    </div>
                    <div>
                        <p>your content2</p>
                    </div>
                    <div>
                        <p>your content3</p>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
    </div>
</body>
</html>