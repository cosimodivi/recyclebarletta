<?php $title = 'Home'; require('./partials/head.php'); ?>
	<div class="sezione1">
		<div class="logo">
			Recycle in <b>Barletta</b>
		</div>
		<div class="form">
			<form method="GET" action="result.php">
				<input required type="text" name="searchinput" placeholder="Inserisci qui il nome dell'oggetto che vuoi cercare" class="form-input">
			</form>
		</div>
	</div>
	<div class="sezione2">
		<img src="./assets/images/recycle.png" class="responsiveimage" style="margin-top:10%;">
	</div>
<?php require('./partials/tail.php'); ?>