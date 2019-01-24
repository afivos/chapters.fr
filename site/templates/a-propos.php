<?php snippet('header-long') ?>

<div class="container container-light-grey away-from-top section-contact">
	<h3><?= $page->title()->html() ?></h3>

	<div class="row">
		<div class="six columns">
			<img src="assets/images/photocontact.png">
		</div>
		<div class="six columns">
			<p>Pierre Le Leuch, 38 ans, 6 ans d’expérience en coaching et accompagnement managérial, 7 ans de finance d’entreprise en contexte international (Mexico, New York), Passionné de kite surf, stand-up, bande dessinées et sciences sociales, Trilingue ENG-ESP-FR, HEC 2005.</p>
		</div>
	</div>

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