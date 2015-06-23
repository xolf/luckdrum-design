<?php include ('head.php') ?>
	<?php include('nav.html') ?>
	<div class="container">
		<?php include('sidebar-folders.html') ?>
		<div class="col-md-6 choose-opt">
      		<h2>Yahoo! You're now a registered user</h2>
                  <h3>Complete form beneath to continue broadcasting to your Community</h3> 
                  <form method="post">
                        <label for="name">Name of the Community</label>
                        <input type="text" id="name" name="name" placeholder="My Community" class="half-width">
                        <label for="photo">Got a photo?</label>
                        <input type="file" id="photo" name="photo" class="half-width">
                        <label for="headline">Headline</label>
                        <input type="text" id="headline" name="headline" placeholder="My Community" class="half-width">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="half-width" style=" height: 200px;"></textarea>
                        <label for="link">Got a link?</label>
                        <input type="text" id="link" name="link" placeholder="http://example.com" class="half-width">
                        <p class="form-group">Bring the card to</p>
                        <input type="radio" name="to" value="every" id="to-every"><label for="to-every">Everyone</label>
                        <input type="radio" name="to" value="spec" id="to-spec"><label for="to-spec">Speciefied people</label><br>
                        <input type="submit" value="Go ahead!">
                  </form>
		</div>
            <?php include('sidebar-profil.php') ?>
	</div>
	<?php include('foot.php') ?>
</body>
</html>
