<?php $title = 'Result'; require('./partials/head.php'); ?>
	<section class="section1">
		<div class="logo">
			<img src="./assets/images/recycle.png" class="responsiveimage" style="width:5%;">
			Recycle in <b>Barletta</b>
		</div>
		<div class="content">
			<p style="font-size:30px;text-align:center;">
			  Devi riciclare <b><?php echo($_GET['searchinput']); ?></b><br>come: <b>Vetro</b>
			</p>
		</div>
		<div class="description" style="text-align:center;">
			Speriamo di averti aiutato. Clicca il pulsante Indietro per effettuare un'altra ricerca<br><br>
			<a href="index.php" class="button" >Indietro</a>
		</div>
	</section>
	<section class="section2" style="text-align:center;">
		<img src="./assets/images/bin-glass.png" class="responsiveimage" style="width:50%;margin-top:100px;">
	</section>
<?php require('./partials/tail.php'); ?>
