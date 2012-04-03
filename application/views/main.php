<!-- http://code.google.com/p/jquery-week-calendar/issues/detail?id=35 -->
<!DOCTYPE html>
<html lang="en">
<head>

<link rel='stylesheet' type='text/css' href='/style/reset.css' />
<link rel='stylesheet' type='text/css' href='/style/smoothness/jquery-ui-1.8.9.custom.css' />
<link rel='stylesheet' type='text/css' href='/style/jquery.weekcalendar.css' />
<link rel='stylesheet' type='text/css' href='/style/demo.css' />
<link rel='stylesheet' type='text/css' href='/style/default.css' />


	   <!--
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js'></script>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js'></script>
    -->
    




	<meta charset="utf-8">
	<title>Welcome to <?php echo COMPANY_NAME; ?></title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
</head>
<body>

	<h1></h1>
	<div id="about_button_container">
		<div id="switcher"></div>
		<button type="button" id="about_button">About this demos</button>
	</div>
	<div id='calendar'></div>
	<div id="event_edit_container">
		<form>
			<input type="hidden" />
			<ul>
				<li>
					<span>Date: </span><span class="date_holder"></span>
				</li>
				<li>
					<label for="start">Start Time: </label><select name="start"><option value="">Select Start Time</option></select>
				</li>
				<li>
					<label for="end">End Time: </label><select name="end"><option value="">Select End Time</option></select>
				</li>
				<li>
					<label for="title">Title: </label><input type="text" name="title" />
				</li>
				<li>
					<label for="body">Body: </label><textarea name="body"></textarea>
				</li>
			</ul>
		</form>
	</div>
	<div id="about">
		<h2>Summary</h2>
		<p>
			This calendar implementation demonstrates further usage of the calendar with editing and deleting of events.
			It stops short however of implementing a server-side back-end which is out of the scope of this plugin. It
			should be reasonably evident by viewing the demo source code, where the points for adding ajax should be.
			Note also that this is **just a demo** and some of the demo code itself is rough. It could certainly be
			optimised.
		</p>
		<p>
			***Note: This demo is straight out of SVN trunk so may show unreleased features from time to time.
		</p>
		<h2>Demonstrated Features</h2>
		<p>
			This calendar implementation demonstrates the following features:
		</p>
		<ul class="formatted">
			<li>Adding, updating and deleting of calendar events using jquery-ui dialog. Also includes
				additional calEvent data (body field) not defined by the calEvent data structure to show the storage
				of the data within the calEvent</li>
			<li>Dragging and resizing of calendar events</li>
			<li>Restricted timeslot rendering based on business hours</li>
			<li>Week starts on Monday instead of the default of Sunday</li>
			<li>Allowing calEvent overlap with staggered rendering of overlapping events</li>
			<li>Use of the 'getTimeslotTimes' method to retrieve valid times for a given event day. This is used to populate
				select fields for adding, updating events.</li>
			<li>Use of the 'eventRender' callback to add a different css class to calEvents in the past</li>
			<li>Use of additional calEvent data to enforce readonly behaviour for a calendar event. See the event
				titled "i'm read-only"</li>
		</ul>
	</div>

  <?php
  foreach ($lastTenViews as $dateEntry) {
    var_dump($dateEntry);
    echo "<br /><br />";

  }

  ?>
</body>
</html>


<script>
 var year = new Date().getFullYear();
      var month = new Date().getMonth();
      var day = new Date().getDate();


      var testDate = new Date(year, month, day, 12);
      //alert(testDate);

      var javascriptDate = '<?php echo date("D"); ?>';

      //alert(javascriptDate);

      var myEvents = {
         events : [
            {
               "id":1,
               "start": new Date(2011, month, day, 12),
               "end": new Date(year, month, day, 13, 30),
               "title":"Lunch with Mike"
            },
            {
               "id":2,
               "start": new Date(year, month, day, 14),
               "end": new Date(year, month, day, 14, 45),
               "title":"Dev Meeting"
            },
            {
               "id":3,
               "start": new Date(year, month, day + 1, 17),
               "end": new Date(year, month, day + 1, 17, 45),
               "title":"Hair cut"
            },
            {
               "id":4,
               "start": new Date(year, month, day - 1, 8),
               "end": new Date(year, month, day - 1, 9, 30),
               "title":"Teammmm breakfast"
            },
            {
               "id":5,
               "start": new Date(year, month, day + 1, 14),
               "end": new Date(year, month, day + 1, 15),
               "title":"Product showcase"
            },
            {
               "id":6,
               "start": new Date(year, month, day, 10),
               "end": new Date(year, month, day, 11),
               "title":"I'm read-only",
               readOnly : true
            },
            {
               "id":7,
               "start": new Date(year, month, day + 2, 17),
               "end": new Date(year, month, day + 3, 9),
               "title":"Multiday"
            }
         ]
      }


</script>





<script type='text/javascript' src='/script/jquery-1.4.4.min.js'></script>
<script type='text/javascript' src='/script/jquery-ui-1.8.9.custom.min.js'></script>
<script type="text/javascript" src="http://jqueryui.com/themeroller/themeswitchertool/"></script>
<script>
$(document).ready(function(){
  $('#switcher').themeswitcher();
});
</script>
<script type="text/javascript" src="/script/date.js"></script>
<script type='text/javascript' src='/script/jquery.weekcalendar.js'></script>
<!-- this script is loading a black page in firefox, looking up weekly calendar usage -->
<script type='text/javascript' src='/script/booker_script.js'></script>