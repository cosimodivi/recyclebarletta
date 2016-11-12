<?php $title = 'Email'; require('./partials/head.php'); ?>

<div class="email-page">
  <div class="navbar">
    <?php require('./partials/header.php'); ?>
    <form action="/result.php" method="get" class="search-bar">
      <input type="text" name="object" placeholder="Ricicla ora..">
      <input type="image" src="/assets/images/action-icon.svg" alt="Ricicla">
    </form>
  </div>

  <div id="content">
    <figure>
      <img src="/assets/images/check-icon.svg" alt="E-mail inviata">
    </figure>

    <article>
      <p>Ti invieremo al più presto un'email a: 
      <b></b></p>
    </article>
  </div>
</div>

<?php require('./partials/tail.php'); ?>
