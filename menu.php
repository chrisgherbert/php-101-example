<?php

// Set up information on the page
$page_title = 'Menu';

?>

<?php include('components/html-header.php') ?>

<?php include('components/header.php') ?>

<?php include('components/nav-menu.php') ?>

<div class="site-content">

  <h1 class="page-title">
    <?php echo $page_title ?>
  </h1>

  <p>
    Here is our wonderful menu.
  </p>

  <img src="/assets/menu.jpg" alt="Richard's place menu">

</div>

<?php include('components/footer.php') ?>

<?php include('components/html-footer.php') ?>