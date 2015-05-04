<?php include ('head.php') ?>
	<?php include('nav.html') ?>
	<div class="container">
		<div class="col-md-3 ld-sidebar">
			<h1><span class="luckdrum">Luckdrum</span></h1>
			<p>LuckDrum helps you actualizing your golas by broadcasting messages to the right people anywhere</p>
		</div>
		<div class="col-md-9 choose-opt">
			<h2>Input example</h2>
			<form method="post">
				<div class="input-group">
					<label for="text">Text</label>
					<input type="text" placeholder="Example" id="text" class="half-width">
				</div>
				<div class="input-group">
					<label for="text">Search</label>
					<input type="text" placeholder="Example" id="text" class="half-width typeahead" data="https://gist.githubusercontent.com/xolf/2fc9efcd1b979d979ae4/raw/1be89cddb2304c1705dfab7ce37bd2963661db10/names.json">
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
	<?php include('foot.php') ?>
</body>
</html>
