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
	<title>DOOL Add Tute</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/styles/css/bootstrap.min.css">
	<link rel="stylesheet" href="/styles/css/addNewTute.css">
	<script src="/js/compiled/addNewTute.min.js"></script>
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
					: Conquer Obscurity
				</h1>
			</div>
		</div>
		<hr/>
		<!-- header ends and category begins -->

		<div class="main-content row">
			<div class="col-md-4 category-section">
				<h1>Select Category</h1>
				<h3 class="new-category categoryList">New Category</h3>
				<?php
					$tempvar = '<h3 class="categoryList" >';
					for($i=0; $i<count($category); $i++) {
                        // $category[$i] = $category[$i];
						echo $tempvar.$category[$i].'</h3>';
					}
				?>
			</div>
			<div class="col-md-8 details-section">
				<h1>Input Details</h1>
				<div class="row">
					<div class="col-md-3">
						<h4>Category</h4>
					</div>
					<div class="col-md-9">
						<input type="text" id="input-category">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<h4>Content</h4>
					</div>
					<div class="col-md-9">
						<textarea name='main-content' id='main-content' ></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-5">
						<h3 id="upload">Upload</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-5 is-uploaded">
						<label id="is-uploaded"></label>
					</div>
				</div>
			</div>
		</div>
		<hr/>
	</div>
</body>
</html>