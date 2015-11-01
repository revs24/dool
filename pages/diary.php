<?php
	require "../scripts/connect_to_mysql.php";
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
	<title>DOOL Diary</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/styles/css/bootstrap.min.css">
	<link rel="stylesheet" href="/styles/css/diary.css">
	<link rel="stylesheet" href="/styles/css/ToggleSwitch.css">
	<script src="/js/compiled/diary.min.js"></script>
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
					: The Diary
				</h1>
			</div>
		</div>
		<hr/>
		<!-- header ends and category begins -->

		<div class="main-content row">
			<div class="col-md-4 category-section">
				<h1>Entries</h1>
				<?php
					// $tempvar = '<h3 class="categoryList" >';
					// for($i=0; $i<count($category); $i++) {
                        // $category[$i] = $category[$i];
						// echo $tempvar.$category[$i].'</h3>';
					// }
				?>
				<h3 id="new-entry" class="categoryList" >New Entry</h3>
			</div>
			<div class="col-md-8 details-section">
				<h1>Details</h1>
				<div class="input-form disable-display">
					<div class="row">
						<div class="col-md-3 left-option">
							<h3 class="left-btn">CF</h3>
						</div>
						<div class="col-md-1 middle-option">
							<input type="checkbox" name="switch" id="switch">
						</div>
						<div class="col-md-3 right-option">
							<h3 class="right-btn">SELF</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h4>Content</h4>
						</div>
						<div class="col-md-9">
							<textarea name='diary-content' id='diary-content' ></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-5">
							<h3 id="upload">Upload</h4>
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
		</div>
	</div>
</body>
</html>