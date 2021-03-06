<?php include ('head.php') ?>
	<?php include('nav.html') ?>
	<div class="container">
		<?php include('sidebar.php') ?>
		<div class="col-md-6 choose-opt">
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
				</div>
				<ul class="nav nav-tabs">
				  	<li role="presentation" class="active panel-pill" id="panel-pill-1"><a>Animations</a></li>
				  	<li role="presentation" class="panel-pill" id="panel-pill-2"><a>Tab 2</a></li>
				  	<li role="presentation" class="panel-pill" id="panel-pill-3"><a>Tab 3</a></li>
				</ul>
				<div class="show-panel">
					<div class="panel-show" id="panel-show-1">
						<h1>Animations</h1>
						<i class="fa fa-refresh fa-spin fa-5x"></i>
						<i class="fa fa-heart fa-5x fa-hearth"></i>
					</div>
					<div class="panel-show" id="panel-show-2">
						<h1>Panel 2</h1>
					</div>
					<div class="panel-show" id="panel-show-3">
						<h1>Panel 3</h1>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php include('foot.php') ?>
</body>
</html>
