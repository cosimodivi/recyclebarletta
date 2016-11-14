<?php $title = 'DoveLoButto'; require('./partials/head.php'); ?>

<div class="homepage">
  <div class="navbar">
    <?php require('./partials/header.php'); ?>
  </div>

  <div class="sidebar is-serif">
    <article>
      <p>
        <strong>DoveLoButto</strong> ti permette di scoprire velocemente e 
        facilmente come riciclare tutto ciò che ti passa per le mani.
      </p>
      <p>
        La raccolta differenziata non è facile come sembra e questo servizio 
        nasce apposta per facilitarla, fornendo alle persone uno strumento 
        utile e facile da usare.
      </p>
    </article>
  </div>

  <div class="action-box">
    <article>
      <p>Riciclare non è mai stato così facile..</p>
    </article>
    <form action="/result.php" method="get" class="search-bar">
      <input id="inputsearch" type="text" name="object" placeholder="Ricicla ora" autocomplete="off">
      <input type="image" src="/assets/images/action-icon.svg" alt="Ricicla">
    </form>
	 <div id="results" class="results"></div>
  </div>
</div>

<?php require('./partials/tail.php'); ?>
