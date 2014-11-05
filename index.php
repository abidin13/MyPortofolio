<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Febriyant Abidin</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/simpan.js"></script>
	<script type="text/javascript" src="js/countdown.js"></script>
</head>
<body>
	<header>
		<h1>Febriyant Abidin</h1>
		<h2 class="title">This Page Is A Page Before Published <a href="">febriyant-abidin.com</a> Website</h2>
		<p>Follow Me <a href="https://www.twitter.com/embebidin/">@embebidin</a> On Twitter</p>
	</header>

	<section id="cm-febri">
		<h1>COMING SOON</h1>
		<div id="count-down-container"></div>

		<script>
			var currentyear=new Date("2015").getFullYear();
			var target_date=new cdtime("count-down-container", "January 01, "+currentyear+" 0:0:00")
			target_date.displaycountdown("days", displayCountDown)
		</script>

		<div id="email-form">
			<h6>Please Subcscribed For Web Launch</h6>
			<form id="btn-form">
				<input type="email" id="user_email" class="input" value="" name="user_email" placeholder="Add your e-mail address" required="required">
				<button type="submit" class="button">Subscribed</button>
			</form>
		</div>

		<div id="success">Thank you!</div>
	</section>
	
</body>
</html>
