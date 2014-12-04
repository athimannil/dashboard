<?php
  include_once 'header.php';
  include_once 'side-menu.php';
?>
<div id="content" ng-controller="roomController">
  <?php
    include_once 'mainmenu.php';
  ?>
    <div class="container-fluid">
    <?php
      // include_once 'dashboard.php';
      // include_once 'userdetails.php';
      include_once 'expense.php';
      // include_once 'invoice.php';
      // include_once 'settings.php';
      // include_once 'recurring.php';
    ?>
  </div>
</div>
<?php 
  include_once 'footer.php';
?>