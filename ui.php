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
      <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li><a href="#"><i class="fa fa-envelope"> </i> <span>Inbox</span> <span class="badge pull-right">42</span></a></li>
      <li class="active"><a href="invoice.php"><i class="fa fa-file-text-o"></i> <span>Invoice</span></a></li>
      <li><a href="profile.php"><i class="fa fa-user"></i> <span>My details</span></a></li>
      <li><a href="#"><i class="fa fa-group"></i> <span>Members</span></a></li>
      <li><a href="#"><i class="fa fa-calendar"></i> <span>Events</span> </a></li>
      <li><a href="#"><i class="fa fa-book"></i> Contacts</a></li>
      <li><a href="mess.php"><i class="fa fa-shopping-cart"></i> Mess</a></li>
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
      <div class="col-md-3">
        <div class="alert alert-success">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, aliquam, sit nulla nihil debitis minima quasi delectus possimus cum enim incidunt velit id quidem hic tenetur. Sit, nihil laboriosam deserunt!
        </div>
      </div>
      <div class="col-md-3">
        <div class="alert alert-info">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, natus tenetur laborum excepturi voluptatem voluptate ipsum exercitationem ea quas facere quod modi vitae delectus odio sed numquam sapiente! Eos, corrupti.
        </div>
      </div>
      <div class="col-md-3">
        <div class="alert alert-warning">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, fuga, sit hic corrupti in a odit aliquam voluptate vero id veritatis numquam incidunt neque cupiditate molestiae. Debitis ab at neque!
        </div>
      </div>
      <div class="col-md-3">
        <div class="alert alert-danger">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, inventore, dolor aut perferendis nesciunt fugiat natus est eveniet maxime ducimus veritatis saepe doloribus impedit? Fugiat, maxime odio sit sed reprehenderit!
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="progress">
            <div class="progress-bar progress-bar-success" style="width: 20%">
              <span class="sr-only">20% Complete (success)</span>
            </div>
            <div class="progress-bar progress-bar-warning" style="width: 40%">
              <span class="sr-only">40% Complete (warning)</span>
            </div>
            <div class="progress-bar progress-bar-danger" style="width: 15%">
              <span class="sr-only">15% Complete (danger)</span>
            </div>
            <div class="progress-bar progress-bar-info" style="width: 20%">
              <span class="sr-only">20% Complete (danger)</span>
            </div>
          </div>
          <hr>
          <!-- Standard button -->
          <button type="button" class="btn btn-default">Default</button>
          <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
          <button type="button" class="btn btn-primary">Primary</button>
          <!-- Indicates a successful or positive action -->
          <button type="button" class="btn btn-success">Success</button>
          <!-- Contextual button for informational alert messages -->
          <button type="button" class="btn btn-info">Info</button>
          <!-- Indicates caution should be taken with this action -->
          <button type="button" class="btn btn-warning">Warning</button>
          <!-- Indicates a dangerous or potentially negative action -->
          <button type="button" class="btn btn-danger">Danger</button>
          <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
          <button type="button" class="btn btn-link">Link</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="box">p</div>
      </div>
      <div class="col-md-3">
        <div class="box">p</div>
      </div>
      <div class="col-md-3">
        <div class="box">p</div>
      </div>
      <div class="col-md-3">
        <div class="box">p</div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <h3 style="margin-top:0;"><i class="fa fa-dashboard"></i> Dashboard</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, minima, ex eos quisquam architecto totam aliquid possimus vero dolores harum dicta assumenda a sit fugiat facilis sed fugit excepturi illum!</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="box">
          <h2>kooy</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="box">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, possimus, esse, quidem, aliquam vero doloribus enim sit modi expedita nulla dolores minus neque hic voluptatem veniam atque nisi maxime nihil.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="box">
          <a class="btn btn-danger" href="#">
            <i class="fa fa-trash-o fa-lg"></i> Delete</a>
          <a class="btn btn-default btn-sm" href="#">
            <i class="fa fa-cog"></i> Settings</a>  
        </div>
      </div>
      <div class="col-md-3">
        <div class="box">
          <div class="btn-group">
            <a class="btn btn-default" href="#"><i class="fa fa-align-left"></i></a>
            <a class="btn btn-default" href="#"><i class="fa fa-align-center"></i></a>
            <a class="btn btn-default" href="#"><i class="fa fa-align-right"></i></a>
            <a class="btn btn-default" href="#"><i class="fa fa-align-justify"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="box">
          <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Email address">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
            <input class="form-control" type="password" placeholder="Password">
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="box">
          <a class="btn btn-lg btn-success" href="#">
            <i class="fa fa-flag fa-2x pull-left"></i> Font Awesome<br>Version 4.0.3</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="btn-group">
            <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i> User</a>
            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
              <span class="fa fa-caret-down"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
              <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
              <li><a href="#"><i class="fa fa-ban fa-fw"></i> Ban</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="i"></i> Make admin</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, perspiciatis, nemo, beatae vitae nesciunt ea et excepturi soluta labore rerum sint asperiores est unde itaque dicta sapiente maxime neque modi? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, consequuntur, corrupti, tempore officia consequatur maxime doloribus porro aperiam adipisci voluptate id itaque reprehenderit reiciendis similique nobis necessitatibus labore quia at.</p>
          <hr>
          <strong>kooy</strong>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, perspiciatis, nemo, beatae vitae nesciunt ea et excepturi soluta labore rerum sint asperiores est unde itaque dicta sapiente maxime neque modi? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, consequuntur, corrupti, tempore officia consequatur maxime doloribus porro aperiam adipisci voluptate id itaque reprehenderit reiciendis similique nobis necessitatibus labore quia at.</p>
          <hr>
          <cite>kooy</cite>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, perspiciatis, nemo, beatae vitae nesciunt ea et excepturi soluta labore rerum sint asperiores est unde itaque dicta sapiente maxime neque modi? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, consequuntur, corrupti, tempore officia consequatur maxime doloribus porro aperiam adipisci voluptate id itaque reprehenderit reiciendis similique nobis necessitatibus labore quia at.</p>
        </div>
      </div>
    </div>
  </div>

</div>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/core.js"></script>
</body>
</body>
</html>