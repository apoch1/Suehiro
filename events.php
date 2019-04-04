 <!DOCTYPE html>
 <!-- original js script by https://github.com/niinpatel/calendarHTML-Javascript 
 all hail the great Nitin Patel for this wonderful starting point
 Ariane Dupaix
 CSIS 2470
 Updated 3/31/2019
 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calendar</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="crossorigin="anonymous"></script>
	<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
		
    
    <script type="text/javascript">
		var html="";
		$(document).ready(function() {
			//console.log('ready');
			$.getJSON('events.json', function (data){
				//read my json file!
            
				$.each(data, function (key, value){
					$.each(value, function (index, stuff){
                
						html += '<div class="events">';
						html += '<h4 id="title">' + stuff.title + '</h4>';
						html += '<p>Starting on:' + '&nbsp;' + stuff.day + '<br />';
						html += 'From:' + '&nbsp;' + stuff.start + '&nbsp;' + 'to:' + '&nbsp;' + stuff.end + '<br />';
						html += stuff.description + '</p></div>';
					});
				});
            
				//replace htmls with read json
				$('#events').html(html);
    
			});
        
			//Add DOB picker here
			$('#cateringdate').datepicker({
				changeMonth : true,
				changeYear : true,
				yearRange : '0:+10',
				minDate : 0,
				dateFormat : 'm-dd-yy'
			});
			//end datepicker awesomeness
		});//end ready
    </script>
</head>
<body>
    <?php
		include 'includes/nav.php';
	?>
	<div class="container-fluid">
		<h1>Welcome to Suehiro's Events</h1>
		<div class="row">
			<div class="col">   
				<iframe src="https://calendar.google.com/calendar/embed?title=Example%20Suehiro%20Google%20Calendar&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=r4opc1scjtbvr9mo445v89ucag%40group.calendar.google.com&amp;color=%23691426&amp;ctz=America%2FDenver" style="border-width:0" width="600" height="600" frameborder="0" scrolling="no"></iframe>
			</div>
			<div class="col-4">
				<h2>Weekly Events</h2>
				<div id="events"></div>
				<div>
					<h3>Catering Reservations</h3>
					<form action="mailto:someone@example.com" method="POST" enctype="text/plain">
						<div>
							<p>
							<label for="person or business" class="label">Please provide your name or your business's name:</label> <input type="text" name="Your Name" /><br />
							<label for="email" class="label">Please provide your or your business's email address:</label><input type="text" name="mail"><br />
							<label for="cateringdate" class="label">What is the date of your event?</label><input type="text" id="cateringdate" name="Select Date for your event"><br />
							<label for="commentsoncatering" class="label">Any comments you wish to include for this Catering Reservation?</label><br/>
							<input type="text" name="comment" size="50">
							</p>
							<input type="submit" class="btn btn-sm" value="Send"> <input type="reset" class="btn btn-sm btn-danger" value="Reset">
						</div>
					</form>
				</div>
			</div>
			<div class="col-1"></div>
		</div><!--end row-->
	</div><!--end containter-->
</body>
</html>