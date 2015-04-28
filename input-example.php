<html lang="en">
<head>
	<meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- Font Awsome -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Luckdrum - Send a message</title>
</head>
<body class="start-body">
	<?php include('nav.html') ?>
	<div class="container">
		<div class="col-md-3 ld-sidebar">
			<h1><span class="luckdrum">Luckdrum</span></h1>
			<p>LuckDrum helps you actualizing your golas by broadcasting messages to the right people anywhere</p>
		</div>
		<div class="col-md-9 choose-opt">
			<h2>Send a message to your community</h2>
			<form method="post">
				<div class="input-group">
					<label for="text">Text</label>
					<input type="text" placeholder="Example" id="text" class="half-width">
				</div>
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" placeholder="example@example.com" id="email" class="half-width">
				</div>
				<div class="input-group">
					<label for="url">URL</label>
					<input type="url" placeholder="http://example.com" id="url" class="half-width">
				</div>
				<div class="input-group">
					<label for="file">File upload</label>
					<input type="file" id="file" class="half-width">
				</div>
				<div class="input-group">
					<label for="headline">Textarea</label>
					<textarea placeholder="Textarea" class="half-width text-x"></textarea>
				</div>
				<div class="input-group">
					<label for="radio">Radio buttons</label>
					<input type="radio" name="radio" id="radio"> Solution 1<br>
					<input type="radio" name="radio" id="radio"> Solution 2<br>
				</div>
				<div class="input-group">
					<label for="checkbox">Checkboxes</label>
					<input type="checkbox" name="checkbox1" id="checkbox"> Solution 1<br>
					<input type="checkbox" name="checkbox2" id="checkbox"> Solution 2<br>
				</div>
				<div class="input-group">
				<input type="submit" value="Submit button">
			</form>
		</div>
	</div>
	<footer><div class="container">&copy; Luckdrum 2015</div></footer>
</body>
</html>
