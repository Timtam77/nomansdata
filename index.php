<?php require('../databaseConnect.php'); ?>

<!DOCTYPE html>

<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		
		<header>
		<div class="roundedSquare">
		</div>
		<div class="outline col-sm-11">
		<h1>NO MAN'S DATA</h1>
		</div>
		<div class="roundedSquare">
		</div>
		</header>
		<main>
		
		<div id="resources">
			<?php 
			
			$getAllFirstTable = "SELECT * FROM elements1 WHERE 1";
			$getAllSecondTable = "SELECT * FROM elements2 WHERE 1";
			$getAllThirdTable = "SELECT * FROM elements3 WHERE 1";
			
			$firstTable = $connect->query($getAllFirstTable);
			$secondTable = $connect->query($getAllSecondTable);
			$thirdTable = $connect->query($getAllThirdTable);
			?>
			<div id="elements" class="col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1">
			<?php foreach($firstTable as $element){ ?>
				
				<div class="resource col-sm-2 col-xs-2">
					<img src="icons/<?php echo $element['elementImage'] ?>">
					<h6><?php echo $element['elementName'] ?></h6>
				</div>
				
			<?php } ?>
			</div>
			<div id="elements2" class="col-md-5 col-md-offset-0 col-sm-8 col-sm-offset-2">
			<?php foreach($secondTable as $element){ ?>
				<div class="resource col-sm-3 col-xs-3">
					<?php if($element['elementImage'] != null){ ?>
					<img src="icons/<?php echo $element['elementImage'] ?>">
					<?php } ?>
					<h6><?php echo $element['elementName'] ?></h6>
				</div>
				
			<?php } ?>
			</div>
			
			<div id="elements3" class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<?php foreach($thirdTable as $element){ ?>
					<div class="resource col-sm-2 col-xs-2">
						<?php if($element['elementImage'] != null){ ?>
						<img src="icons/<?php echo $element['elementImage'] ?>">
						<?php } ?>
						<h6><?php echo $element['elementName'] ?></h6>
				</div>
				
			<?php } ?>
			</div>
		</div>
		
		<div id="elementDisplay">
		<h1>
			Title
		</h1>
		
		</div>
		</main>
		
		<footer>
			<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="js/elementDisplay.js"></script>
		</footer>
	</body>

</html>