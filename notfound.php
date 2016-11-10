<?php $title = 'Nessun risultato'; require('./partials/head.php'); ?>
	<section class="section1">
		<div class="logo">
			<img src="./assets/images/recycle.png" class="responsiveimage logoimage">
			Recycle in <b>Barletta</b>
		</div>
		<div class="content">
			<p class="mdtext">
			  Non abbiamo ancora a disposizione una risposta, inserisci la tua email per inoltrarci la richiesta di aggiunta
			</p>
		</div>
		<div class="form">
			<form method="GET" action="result.php">
				<input required type="email" name="searchinput" placeholder="Inserisci la tua email" class="form-input">
				<input type="submit" name="submit" value="Invia" class="form-submit">
			</form>
		</div>
	</section>
	<section class="section2 notfound">
		<h1 class="notfoundtitle">Nessun<br>risultato</h1>
	</section>
<?php require('./partials/tail.php'); ?>
