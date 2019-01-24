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
			<img src="assets/images/photocontact.png">
		</div>
		<div class="six columns">
			<h2>Pierre Le Leuch</h2>
			<p><script>displayage(1981, 1, 1, "ans", 0, "rounddown")</script></p>
			<p>Passionné par le management sous toutes ses formes, je pratique le coaching en entreprise et l’accompagnement managérial depuis 6 ans. J’ai eu la chance d’intervenir dans des secteurs variés (luxe, retail, media) et des contextes enrichissants (hypercroissance, PSE, enjeux syndicaux). Un peu geek sur les bords et avide de comprendre les changements qui nous entourent, je me suis spécialisé dans les secteurs des nouvelles technologies et des start-up.</p>
			<p>Avant cela, j’ai connu une première vie professionnelle de 7 ans dans le monde de la finance d’entreprise, en cabinet et en direction financière, dans des contextes internationaux (Mexique, New York City).</p>
			<p>En 2008, j’ai assisté à l’histoire en voyant des fenêtres de mon bureau les employés de Lehman Brothers sortir avec leur carton. Je me suis dit que c’était la fin d’une époque ! ;)</p>
			<p>Aujourd’hui, quand je ne travaille pas, je profite de mes autres passions pour me ressourcer : le kite-surf, le stand-up (les spectacles, pas le paddle), les bandes dessinées, les sciences sociales (livres, podcasts, conférences..) et les jeux vidéos.</p>
			<p>Trilingue Anglais-Espagnol-Français</p>
			<p>Diplômé d’HEC 2005</p>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="six columns">

		  <main class="main" role="main">

		    <form method="post" class="contact" id="contact">

		      <?php if($alert): ?>
		      <div class="alert">
		        <ul>
		          <?php foreach($alert as $message): ?>
		          <li><?php echo html($message) ?></li>
		          <?php endforeach ?>
		        </ul>
		      </div>
		      <?php endif ?>

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
			<p>Téléphone :<br><a href="tel:0756924800">07 56 92 48 00</a></p>
			<p>Email :<br><a href="mailto: contact@chapters.fr">contact@chapters.fr</a></p>
			<p>Siège :<br>5 rue du Faubourg<br>Saint-Antoine 75011 Paris</p>
			<p>Bureau :<br>23 rue du Cherche Midi<br>75006 Paris</p></p>
		</div>
	</div>
</div>

<?php snippet('footer') ?>