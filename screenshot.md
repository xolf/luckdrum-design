///
/// Screenshot saving file
///


# 5th Step 
```html
<?php include ('head.php') ?>
	<?php include('nav.html') ?>
	<div class="container">
		<?php include('sidebar-folders.html') ?>
		<div class="col-md-6 choose-opt">
			<h2>You are in luck</h2>
            <h3>Two thousand people are available in your target area to actualize your goal</h3> 
            <h4>You get a hundred people without charge</h3>
            <br>
            <form method="post">
            <a href="" class="input-submit">Select by photos</a> 
            <h3>OR</h3>
            <a href="" class="input-submit">Deliver message</a> 
            <br><br><br><br>
            <p class="alert red-color">It is ten cent per every recipient above a hundred.</p>
            <input type="number" placeholder="2000">
            <input type="submit" value="Submit">  
			</form>
		</div>
            <?php include('sidebar-profil.php') ?>
	</div>
	<?php include('foot.php') ?>
</body>
</html>
```

# 4th Step
```html
<?php include ('head.php') ?>
      <?php include('nav.html') ?>
      <div class="container">
            <?php include('sidebar-folders.html') ?>
            <div class="col-md-6 choose-opt">
            <h2>Nearly finished</h2>
            <h3>Select people and personality type to receive your broadcast</h3> 
            <form method="post">
            <p class="form-group">Gender</p>
            <input type="checkbox" name="gender" id="gender-female"><label for="gender-female">Female </label>
            <input type="checkbox" name="gender" id="gender-male"><label for="gender-male">Male </label>
            <input type="checkbox" name="gender" id="gender-lesbian"><label for="gender-lesbian">Lesbian </label>
            <input type="checkbox" name="gender" id="gender-gay"><label for="gender-gay">Gay </label>
            <input type="checkbox" name="gender" id="gender-bifemale"><label for="gender-bifemale">Bifemale </label>
            <input type="checkbox" name="gender" id="gender-bimale"><label for="gender-bimale">Bimale </label>
            <p class="form-group">Age</p>
            <input type="checkbox" name="age" id="age-1"><label for="age-1">12-17 </label>
            <input type="checkbox" name="age" id="age-2"><label for="age-2">18-25 </label>
            <input type="checkbox" name="age" id="age-3"><label for="age-3">26-33 </label>
            <input type="checkbox" name="age" id="age-4"><label for="age-4">34-41 </label>
            <input type="checkbox" name="age" id="age-5"><label for="age-5">42-48 </label>
            <input type="checkbox" name="age" id="age-6"><label for="age-6">49-56 </label>
            <input type="checkbox" name="age" id="age-7"><label for="age-7">57-62 </label>
            <input type="checkbox" name="age" id="age-8"><label for="age-8">63-70 </label>
            <input type="checkbox" name="age" id="age-9"><label for="age-9">71-79 </label>
            <input type="checkbox" name="age" id="age-10"><label for="age-10">80-91 </label>
            <input type="checkbox" name="age" id="age-11"><label for="age-11">92-100 </label>
            <p class="form-group">Race</p>
            <input type="checkbox" name="race" id="race-white"><label for="race-white">White </label>
            <input type="checkbox" name="race" id="race-black"><label for="race-black">Black </label>
            <input type="checkbox" name="race" id="race-yellow"><label for="race-yellow">Yellow </label>
            <input type="checkbox" name="race" id="race-others"><label for="race-others">Others </label>
            <p class="form-group">Language</p>
            <input type="text" placeholder="English, German" name="language" class="half-width">
            <p class="form-group">Personality type and more</p>
            <input type="radio" name="perso" id="perso-1"><label for="perso-1">Broadcast my card to personality types sympathetic to mine </label><br>
            <input type="radio" name="perso" id="perso-2"><label for="perso-2">Broadcast my card to soulmate personality type </label><br>
            <input type="radio" name="perso" id="perso-3"><label for="perso-4">Broadcast my card to my personality type </label><br>
            <input type="radio" name="perso" id="perso-4"><label for="perso-5">Broadcast my card tp opposite personality type </label><br>
            <input type="radio" name="perso" id="perso-5"><label for="perso-6">Broadcast my postcard to people I selected via one of the options beneath </label>
            <ul class="nav nav-tabs">
                  <li role="presentation" class="active panel-pill" id="panel-pill-1"><a>Archetype</a></li>
                  <li role="presentation" class="panel-pill" id="panel-pill-2"><a>Celebrity type</a></li>
                  <li role="presentation" class="panel-pill" id="panel-pill-3"><a>Interest</a></li>
                  <li role="presentation" class="panel-pill" id="panel-pill-4"><a>Myer-Briggs</a></li>
                  <li role="presentation" class="panel-pill" id="panel-pill-5"><a>Occupation</a></li>
                  <li role="presentation" class="panel-pill" id="panel-pill-6"><a>Prototype</a></li>
            </ul>
            <div class="show-panel">
                  <div class="panel-show" id="panel-show-2">
                        <p>Luckdrum uses celebrity names to represent personality types. Enter a celebrity name to broadcast your postcard to that personality type.</p>
                        <input type="text" placeholder="Madona" name="celebrity" class="half-width">
                  </div>
            </div>
            <p class="form-group">Audience/target area</p>
            <input type="text" placeholder="Los Angeles" name="area" class="half-width">
            <input type="submit" value="Go ahaed, Drum my Luck ...">  
            </form>
            </div>
            <?php include('sidebar-profil.php') ?>
      </div>
      <?php include('foot.php') ?>
</body>
</html>
```

# 3rd Step
```html
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
```
