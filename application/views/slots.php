<h1>Available Slots</h1>
<?php 
define('PIXELS_PER_HOUR', 60);
date_default_timezone_set($timezone);


foreach ($slotsResult as $slot) {
	
	$lapse = $slot->end - $slot->begin;
	$lapseMinutes = ($lapse / 60) ;
	$lapseHours = ($lapse / 3600) ;
	$beginDateArray = getdate($slot->begin);
	$boxSize = $lapseHours * PIXELS_PER_HOUR;
	$outputDate = date("Y M d g:i", $slot->begin);
	
	//var_dump($beginDateArray);
	
	# find out how to slot these on the visual grid
	# what is the timespan we are currently looking at?
	# is that based off the user's computer or the server's timezone?
	# I would think it is based on the user's computer
	# the view will determine the current timespan to search for
	# so... if we're looking at December of 2011, find the unix timestamps for that space
	
//	echo "<pre>";
	
//	echo date("Y M d", $slot->begin)." $lapseMinutes $lapseHours $boxSize";
	
//	echo "</pre>";
	
	?>
	
	<div style="height:<?php echo $boxSize; ?>; width:200px; background-color:#ff0;">
		item<br />
		<?php echo $outputDate; ?>
	
	</div>
	
	<?php
	
	echo "<br />";
}



?>