<!-- http://code.google.com/p/jquery-week-calendar/issues/detail?id=35 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<script type='text/javascript' src='/script/datepicker/jquery-1.7.1.min.js'></script>
	<script type='text/javascript' src='/script/datepicker/jquery-ui-1.8.17.custom.min.js'></script>
	<script type='text/javascript' src='/script/datepicker/jquery-ui-timepicker-addon.js'></script>
	
	<link rel='stylesheet' type='text/css' href='/style/ui-lightness/jquery-ui-1.8.17.custom.css' />
	
	
	
	
</head>

<body>
	


<form method="POST" action="datepicker">

	<div class="demo">

	<p>Date: <input name = 'datepicker' type="text" id="datepicker"></p>

	</div><!-- End demo -->
	
	<input type="submit">
</form>
	
</body>

<script>
	$(function() {
		$( "#datepicker" ).datetimepicker();
	});
	</script>

</html>