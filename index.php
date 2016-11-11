<?php $title = 'Home'; require('./partials/head.php'); ?>
	<section class="section1">
		<div class="logo">
			<img src="./assets/images/recycle.png" class="responsiveimage logoimage">
			Recycle in <b>Barletta</b>
		</div>
		<div class="form">
			<form name="searchform" method="GET" action="result.php" onsubmit="return validateForm()">
				<input type="text" name="searchinput" id="searchinput" placeholder="Inserisci qui il nome dell'oggetto che vuoi cercare" class="form-input form-search">
				<input type="submit" value="Cerca" name="submit" class="form-submit">
			</form>
		</div>
		<div class="description">
			Riciclare è importante, ma non sempre facile.<br>
			Recycle in Barletta ti aiuta: non sai dove mettere qualcosa? Inserisci l’oggetto in questa pagina, noi ti diremo dove!
		</div>
	</section>
	<section class="section2 homeimage"></section>
<?php require('./partials/tail.php'); ?>