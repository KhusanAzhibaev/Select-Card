<?php require('includes.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="scripts.js"></script>
	
</head>
<body>
	<div class="buttons">
		<?php foreach($suites as $suite => $suite_info) { ?>
			<button class="suite-button <?=$suite;?>" data-suite="<?=$suite;?>"><?=$suite;?></button> 
		<?php } ?>
		<div class="switches">
			<label class="switch">
				Test loading
				<input class="test_loading" type="checkbox">
				<span class="slider round"></span>
			</label>
			<label class="switch">
				Test failure
				<input class="test_failure" type="checkbox">
				<span class="slider round"></span>
			</label>
		</div>
		<div class="loader">
		</div>
	</div>
	<div class="cards">
		<?php 
		foreach($suites as $suite => $suite_info) {
			foreach($suite_info['ranks'] as $card) { 
				?>
				<div class="card <?=$suite;?> <?=$card;?>">
					<i class="left"><?=$suite_info['icon'];?></i>
						<?=$card;?>
					<i class="right"><?=$suite_info['icon'];?></i>
				</div> 
				<?php
			}
		} ?>
	</div>
</body>