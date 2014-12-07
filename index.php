  <?php
    include_once 'header.php';
  ?>
<div id="wrapper">
  <?php
    include_once 'side-menu.php';
  ?>
  <div id="page-content-wrapper" ng-controller="roomController">
  <!-- <div id="content" ng-controller="roomController"> -->
    <div class="container-fluid">
    <?php
      include_once 'mainmenu.php';
    ?>
    <div ng-include="'dashboard.php'"></div>
      <?php
        // include_once 'dashboard.php';
        // include_once 'expense.php';
        // include_once 'recurring.php';
        // include_once 'invoice.php';
        // include_once 'userdetails.php';
        // include_once 'settings.php';
      ?>
    </div>
  </div>
</div>
<?php 
  include_once 'footer.php';
?>