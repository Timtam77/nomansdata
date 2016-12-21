<!DOCTYPE html>

<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		
		<header>
		 <h1>NO MAN'S DATA</h1>
		</header>
		<main>
		
		<div id="resources">
			<?php 
			
			$directory = 'icons';
			
			$iconImages = array_diff(scandir($directory), array('..', '.'));
			
			foreach($iconImages as $image){ ?>
				
				<div class="resource col-sm-1 col-xs-3">
					<img src="icons/<?php echo $image ?>">
				</div>
			<?php } ?>
		</div>
		</main>
		
		<footer>
			<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		</footer>
	</body>

</html>