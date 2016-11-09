<?php $title = 'Nessun risultato'; require('./partials/head.php'); ?>
	<section class="section1">
		<div class="logo">
			<img src="./assets/images/recycle.png" class="responsiveimage" style="width:5%;">
			Recycle in <b>Barletta</b>
		</div>
		<div class="content">
			<p style="font-size:30px;text-align:center;">
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
	<section class="section2" style="text-align:center;background:#e74c3c;">
		<h1 style="margin-top:250px;font-size:50px;">NESSUN<br>RISULTATO</h1>
	</section>
<?php require('./partials/tail.php'); ?>
