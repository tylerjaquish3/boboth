<?php
session_start();
//print_r($_SESSION);
//echo "session userid: " . $_SESSION["user_id"];

if (!isset($_SESSION["user_name"])) {
    header('location:index.html');
} 
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--[if lt IE 9]> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<![endif]-->
	<title>Boboth Vision Clinic - Admin Access</title>
	<link rel="shortcut icon" href="/images/logo.ico" type="image/png">
	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/css/isotope.css" media="screen" />
	<link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="/css/animate.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="/css/styles.css" />
	<!-- Font Awesome -->
	<link href="/font/css/font-awesome.min.css" rel="stylesheet">

	<style type="text/css">
		img {
			border-style: solid;
			border-color: #fff;
			border-width: 0px;
			border-radius: 10px;
			box-shadow: 5px 5px 5px #888888;
			width: 100px;
		}
	</style>

</head>
<body class="homepage" bgcolor="white">

	<header class="header">
		<div class="container">
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="navbar-header">
					<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b>Boboth Vision Clinic</b></a> 
				</div>
				<div id="main-nav" class="collapse navbar-collapse">
					<ul class="nav navbar-nav" id="mainNav">
						<li class="active" id="firstLink"><a href="/admin/admin_home.php" class="scroll-link">Dashboard</a></li>
						<li class="active" id="firstLink"><a href="/admin/reviews" class="scroll-link">Reviews</a></li>
						<li class="active" id="firstLink"><a href="/admin/quotes" class="scroll-link">Quotes</a></li>
						<li class="active" id="firstLink"><a href="/admin/logout.php" class="scroll-link">Log Out</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</header>

	<section id="services" class="page-section colord down60">
		<div class="container">
			<div class="heading text-center"> 
				<br /><br />
				<h2>Patient Reviews</h2>
				<p>This information is not accessible from your public site. This data is intended to help administration understand and investigate patient reviews. Admin can also approve/disapprove reviews
				to be used as testimonials for the home page by selecting the proper checkboxes below and saving the changes.</p>
			</div>
		</div>
	</section>

	<!-- we want to collaps the stuff, and toggle it when clicking the heading -->

	<!-- Main -->
	<div id="main">
		<div class="container">
			<div class="row">

				<div id="sidebar" class="3u">
					<section>
						
						<?php
						//MySQL Database Connect 
						include '../datalogin.php';
						
						function get_stars($input_int)
						{
							switch($input_int){
								case 1:
									echo '<img src="images/star1.jpg">';
									break;
								case 2:
									echo '<img src="images/star2.jpg">';
									break;
								case 3:
									echo '<img src="images/star3.jpg">';
									break;
								case 4:
									echo '<img src="images/star4.jpg">';
									break;
								case 5:
									echo '<img src="images/star5.jpg">';
									break;
							}
						}
						
						$total = 0;
						
						//summary table - all reviews
						$result = mysqli_query($conn,"SELECT AVG(likelihood), AVG(listens), AVG(explains), AVG(trust), AVG(staff), AVG(environment), AVG(appointments), COUNT(likelihood) FROM reviews");
						while($row = mysqli_fetch_array($result)) 
						{
							$avg_likelihood = round($row['AVG(likelihood)'], 2);
							$avg_listens = round($row['AVG(listens)'], 2);
							$avg_explains = round($row['AVG(explains)'], 2);
							$avg_trust = round($row['AVG(trust)'], 2);
							$avg_staff = round($row['AVG(staff)'], 2);
							$avg_environment = round($row['AVG(environment)'], 2);
							$avg_appointments = round($row['AVG(appointments)'], 2);
							$total = $row['COUNT(likelihood)'];
						}
						if ($total > 0) {
							/*echo "<table class='totals'><tbody>";
							echo "<tr><td colspan='2'><center><b>" . $total . " Total Reviews</b>";
							echo '<tr><td class="stars"><img src="images/star5.jpg"><td class="name">' . $sum_5 . ' reviews';
							echo '<tr><td class="stars"><img src="images/star4.jpg"><td class="name">' . $sum_4 . ' reviews';
							echo '<tr><td class="stars"><img src="images/star3.jpg"><td class="name">' . $sum_3 . ' reviews';
							echo '<tr><td class="stars"><img src="images/star2.jpg"><td class="name">' . $sum_2 . ' reviews';
							echo '<tr><td class="stars"><img src="images/star1.jpg"><td class="name">' . $sum_1 . ' reviews';
							echo "</tbody></table>";
							echo '<hr />';*/
							
							echo "<table class='details'><thead>";
							
							echo '<tr><td><b>Question Asked</b><td class="name"><b>Average</b></thead>';
							echo '<tbody><tr><td>Ease of Scheduling Appointments<td class="name">' . $avg_appointments;
							echo '<tr><td>Office Environment, Cleanliness, Comfort, etc.<td class="name">' . $avg_environment;
							echo '<tr><td>Staff Friendliness and Courteousness<td class="name">' . $avg_staff;
							echo '<tr><td>Level of Trust in Providers Decisions<td class="name">' . $avg_trust;
							echo '<tr><td>How Well Provider Explains Medical Conditions<td class="name">' . $avg_explains;
							echo '<tr><td>How Well Provider Listens and Answers Questions<td class="name">' . $avg_listens;
							echo '<tr><td>Likelihood of Recommending Boboth Vision Clinic to Family and Friends<td class="name">' . $avg_likelihood;
							echo "<tr><td colspan='2'><center><b>" . $total . " Total Reviews</b>";
							echo "</tbody></table>";
							echo '<hr />';
							
							echo "<form action='approved_review.php' method='post'><center>Don't forget to save your changes! <br /><input type='submit' name='submit' value='Save Changes'></center> <br />";
							
							echo '<div style="background-color:#c8c8c8;">';
							//while there are reviews in the db, display them
							$result = mysqli_query($conn,"SELECT * FROM reviews ORDER BY review_id DESC");
							while($row = mysqli_fetch_array($result)) 
							{	
								echo '<br /><center>';
								if($row['user_name'] == NULL) {
									$user_name = "Anonymous";
								} else {
									$user_name = $row['user_name'];
								}
								$date = date("F d, Y", strtotime($row['entry_datetime']));
								echo "<table class='details'><thead><tr><th><b>Review by:</b> " .  $user_name . " <b>on</b> " . $date . "</th><th>Approve?</th></tr></thead><tbody>";
								echo "<tr><td><b>Comments</b><br /> " . $row['comments'] . "<br />";
								if($row['approved'] == 0)
								{
									echo '<td> <input type="checkbox" name="review_id[]" value="'.$row['review_id'].'">';
								}
								else
								{
									echo '<td> <input type="checkbox" checked name="review_id[]" value="'.$row['review_id'].'">';
								}
								echo "</tbody></table></form>";

								echo '<h3><u>Show/Hide Review Details</u></h3>';
								
								echo "<table class='details'><thead><tr><th><center>Office</th><th><center>Provider</th></tr></thead><tbody><tr><td>";
								echo "Ease of Scheduling Appointments<br />"; get_stars($row['appointments']);
								echo "<td>Level of Trust in Provider's Decisions<br />"; get_stars($row['trust']);
								echo "<tr><td>";
								echo "Office Environment, Cleanliness, Comfort, etc.<br />"; get_stars($row['environment']);
								echo "<td>How Well Provider Explains Medical Conditions<br />"; get_stars($row['explains']);
								echo "<tr><td>";
								echo "Staff Friendliness and Courteousness<br />";  get_stars($row['staff']);
								echo "<td>How Well Provider Listens and Answers Questions<br />"; get_stars($row['listens']);
								echo "<tr><td colspan='2'>";
								echo "<center><b>Likelihood of Recommending Boboth Vision Clinic to Family and Friends</b><br />"; get_stars($row['likelihood']);
								
								echo "</tbody></table><p>";
								echo '<br /><hr />';										
							}
							echo "</div>";
						} else {
							echo "We need more reviews in order to make calculations.";
						}
						
						?>
							
					</section>
				</div>
			</div>
		</div>
	</div>

	<script src="/js/jquery-1.8.2.min.js" type="text/javascript"></script> 
	<script src="/js/bootstrap.min.js" type="text/javascript"></script> 
	<script>
		$(document).ready(function(){
		   // hide all the stuff
		   $('h3 + table').hide();
		   // if a heading is clicked
		   $('h3').on('click', function(){
			  // toggle the stuff right after it
			  $(this).next('table').toggle(1000);
		   });
		});
	</script>
</body>
</html>