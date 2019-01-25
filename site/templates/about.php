<?php snippet('header-long') ?>

<script>
/*
Ultimate Age calculator script- By JavaScript Kit (http://www.javascriptkit.com)
Over 200+ free scripts here!
Credit must stay intact for use
*/

var one_day=1000*60*60*24
var one_month=1000*60*60*24*30
var one_year=1000*60*60*24*30*12

function displayage(yr, mon, day, unit, decimal, round){
today=new Date()
var pastdate=new Date(yr, mon-1, day)

var countunit=unit
var decimals=decimal
var rounding=round

finalunit=(countunit=="days")? one_day : (countunit=="months")? one_month : one_year
decimals=(decimals<=0)? 1 : decimals*10

if (unit!="years"){
if (rounding=="rounddown")
	document.write(Math.floor((today.getTime()-pastdate.getTime())/(finalunit)*decimals)/decimals+" "+countunit)
else
	document.write(Math.ceil((today.getTime()-pastdate.getTime())/(finalunit)*decimals)/decimals+" "+countunit)
}
else{
	yearspast=today.getFullYear()-yr-1
	tail=(today.getMonth()>mon-1 || today.getMonth()==mon-1 && today.getDate()>=day)? 1 : 0
	pastdate.setFullYear(today.getFullYear())
	pastdate2=new Date(today.getFullYear()-1, mon-1, day)
	tail=(tail==1)? tail+Math.floor((today.getTime()-pastdate.getTime())/(finalunit)*decimals)/decimals : Math.floor((today.getTime()-pastdate2.getTime())/(finalunit)*decimals)/decimals
	document.write(yearspast+tail+" "+countunit)
	}
}
</script>



<div class="container container-light-grey away-from-top section-contact">
	<h3><?= $page->title()->html() ?></h3>

	<div class="row">
		<div class="six columns">
	        <?php
	        // try to get an image object
	        $image = $page->profileImg()->toFile();
	        // check if image exists
	        if($image): ?>
		        <img src="<?php echo $image->url(); ?>" alt="">
	        <?php endif ?>
		</div>
		<div class="six columns">
			<?= $page->bio()->kirbytext() ?>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="six columns">

		  <main class="main" role="main">

		    <form method="post" class="contact" id="contact">

			  <fieldset>
			    <input name="name" placeholder="Nom (*)" type="text" tabindex="1" required autofocus>
			  </fieldset>
			  <fieldset>
			    <input name="phone" placeholder="Votre numéro de téléphone" type="tel" tabindex="2">
			  </fieldset>
			  <fieldset>
			    <input name="email" placeholder="Votre email (*)" type="email" tabindex="3" required>
			  </fieldset>
			  <fieldset>
			    <textarea name="subject" placeholder="Objet de votre demande (*)" tabindex="4" required id="textarea-1"></textarea>
			  </fieldset>
			  <fieldset>
			    <textarea name="text" placeholder="Écrivez votre message ici...." tabindex="5" required id="textarea-2"></textarea>
			  </fieldset>
			  <fieldset>
			    <input type="submit" name="submit" id="contact-submit" value="Envoyer" data-submit="...Envoyé">
			  </fieldset>

		    </form>

		  </main>

		</div>
		<div class="six columns">
			<?= $page->contactinfo()->kirbytext() ?>
		</div>
	</div>
</div>

<?php snippet('footer') ?>