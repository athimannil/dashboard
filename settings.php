<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Room home page</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>

<aside id="side-bar">
  <figure id="profile">
    <a href="#"><img class="img-circle" src="img/me.jpg" width="130" height="130" alt="Maanu Manjeri"></a>
    <figcaption>
      <h3>maanu manjeri</h3>
    </figcaption>
  </figure>
  <nav class="side-nav">
    <ul class="nav nav-pills nav-stacked">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="profile.php"><i class="fa fa-user"></i> My details</a></li>
      <li><a href="mess.php"><i class="fa fa-shopping-cart"></i> Mess</a></li>
      <li><a href="invoice.php"><i class="fa fa-file-text-o"></i> Invoice</a></li>
      <li class="active"><a href="settings.php"><i class="fa fa-cog"></i> Settings</a></li>
      <!-- <li><a href="#"><i class="fa fa-envelope"> </i> Inbox <span class="badge pull-right">42</span></a></li>
      <li><a href="#"><i class="fa fa-group"></i> Members</a></li>
      <li><a href="#"><i class="fa fa-calendar"></i> Events </a></li>
      <li><a href="#"><i class="fa fa-book"></i> Contacts</a></li> -->
    </ul>
  </nav>
</aside>
<div id="content">
  <header class="container-fluid">
    <a id="toggle-button" class="btn btn-primary pull-left"><i class="fa fa-bars fa-lg"></i></a>
    <div id="login-menu" class="dropdown pull-right">
      <a data-toggle="dropdown" href="#"> 
        <img class="img-circle" src="img/me.jpg" width="30" height="30" alt="Maanu Manjeri">
        മാനു കോനു <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
        <li><a href="settings.php"><i class="fa fa-gear"></i> Settings</a></li>
        <li class="divider"></li>
        <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
      </ul>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h2>Main admin settings to control all members</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, voluptatibus, maiores, quos temporibus atque rerum sunt unde ad accusantium rem quo aspernatur ipsum ullam eius praesentium! Voluptas provident suscipit quia.
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/core.js"></script>
</body>
</body>
</html>