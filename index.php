<?php $title = 'Home'; require('./partials/head.php'); ?>
	<section class="section1">
		<div class="logo">
			Recycle in <b>Barletta</b>
		</div>
		<div class="form">
			<form method="GET" action="result.php">
				<input required type="text" name="searchinput" placeholder="Inserisci qui il nome dell'oggetto che vuoi cercare" class="form-input">
			</form>
		</div>
		<div class="description">
			Riciclare è importante, ma non sempre facile.<br>
			Recycle in Barletta ti aiuta: non sai dove mettere qualcosa? Inserisci l’oggetto in questa pagina, noi ti diremo dove!

		</div>
	</section>
	<section class="section2">
		<img src="./assets/images/recycle.png" class="responsiveimage" style="margin-top:10%;">
	</section>
<?php require('./partials/tail.php'); ?>