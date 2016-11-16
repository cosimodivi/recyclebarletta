<?php $title = 'Result'; require('./partials/head.php'); require('./api/items.php');

if(!isset($_GET['object'])) { header("Location: index.php"); } // Redirect to index if object is not written

foreach($items as $key => $v)
{ 
	if ($key == strtolower($_GET['object'])) {
		$bin = $v;
	}	
} 

if(!isset($bin)) { header("Location: email.php"); } // If object doesn't exists, redirect to index

$type=$bin;
 ?>

<div class="response-page <?=$type;?>">
  <div class="navbar">
    <?php require('./partials/header.php'); ?>
    <form action="/result.php" method="get" class="search-bar">
		<input id="inputsearch" type="text" name="object" placeholder="Ricicla ora" autocomplete="off">
		<input type="image" src="/assets/images/action-icon.svg" alt="Ricicla">
    </form>
  </div>
  <div id="response" class="lets-move pop-up-2s">
    <figure>
		<img src="/assets/images/bin-<?=$type;?>.png" alt="Ricicla come plastica">
    </figure>
    <article>
		<h2><?php echo $_GET['object']; ?></h2>
		<h4>Ricicla come</h4>
		<h2><?=$binsname[$type]; ?></h2>
    </article>
  </div>
</div>

<?php require('./partials/tail.php'); ?>
