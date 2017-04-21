<!DOCTYPE html>
<html>
<head>
  <title>How to add calendar using jQuery and fullCalendar</title>
	
	<link href='css/1.css' rel='stylesheet' />
	<link href='css/cal-print.css' rel='stylesheet' media='print' />
	
	
	<script src='jq/jquery.custom.min.js'></script>
	<script src='jq/jquery.min.js'></script>

	<script src='css/cal-min.js'></script>
	<script type="text/javascript">
		
		
		$(document).ready(function()
		{
			
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();
		
			var calendar = $('#calendar').fullCalendar(
			{
				
				header:
				{
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				
				defaultView: 'agendaWeek',
				
				selectable: true,
				selectHelper: true,
				
				select: function(start, end, allDay)
				{
					
					var title = prompt('Event Title:');
					
					if (title)
					{
						calendar.fullCalendar('renderEvent',
							{
								title: title,
								start: start,
								end: end,
								allDay: allDay
							},
							true 
						);
					}
					calendar.fullCalendar('unselect');
				},
				
				editable: true,
			
			});
			
		});

	</script>
	<style type="text/css">
		body
		{
			margin-top: 40px;
			text-align: center;
			font-size: 14px;
			font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		}
		#calendar
		{
			width: 900px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<div id='calendar'></div>
	
</body>
</html>