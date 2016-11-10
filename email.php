<?php $title = 'Result'; require('partials/head.php'); ?>
	<section class="section1">
		<div class="logo">
			<img src="assets/images/recycle.png" class="responsiveimage logoimage">
			Recycle in <b>Barletta</b>
		</div>
		<div class="content">
			<p class="mdtext centertext">
			  Devi riciclare <b><?php echo($_GET['searchinput']); ?></b><br>come: <b>Vetro</b>
			</p>
		</div>
		<div class="description centertext">
			Speriamo di averti aiutato. Clicca il pulsante Indietro per effettuare un'altra ricerca<br><br>
			<a href="index.php" class="button flatwhite" >Indietro</a>
		</div>
	</section>
	<section class="section2 centertext">
		<img src="assets/images/bin-glass.png" class="responsiveimage sectionimage">
	</section>
<?php require('partials/tail.php'); ?>
