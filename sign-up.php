<?php include ('head.php') ?>
	<?php include('nav.html') ?>
	<div class="container">
		<?php include('sidebar.php') ?>
		<div class="col-md-6 ">
			<h3>Sign up</h3>
			<input type="text" placeholder="Email" class="half-width">	
			<input type="password" placeholder="Password" class="half-width">	
			<input type="password" placeholder="Confirm password" class="half-width">
			<input type="date" placeholder="Birthdate" class="half-width">			
			<input type="radio" name="gender" value="male" id="male"> <label for="male">Male</label>
			<input type="radio" name="gender" value="fe-male" id="female"> <label for="female">Female</label>
			<input type="submit" value="Join!" class="half-width">
			<p>You've already an account?<br><a href="">Log in</a> to <span class="luckdrum">Luckdrum</span></p>
		</div>
	</div>
<?php include('foot.php') ?>

