<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Room home page</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
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
        <h3><i class="fa fa-cog"></i> Basic changes</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#users" data-toggle="tab"><i class="fa fa-users"></i> Users</a></li>
          <li><a href="#cutlery" data-toggle="tab"><i class="fa fa-cutlery"></i> Kitchen</a></li>
        </ul>
        <div class="tab-content">
          <div id="users" class="box tab-pane active">
            <div class="row">
              <div class="col-md-6">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label for="main-admin" class="col-sm-3 control-label">Admin members</label>
                    <div class="col-sm-9">
                      <select id="main-admin" multiple data-selected-text-format="count">
                        <option>MS Athimannil</option>
                        <option>Muhsin Manniyil</option>
                        <option>Prince Roshan</option>
                        <option>Mohasin Moorkote</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="currency" class="col-sm-3 control-label">Currency</label>
                    <div class="col-sm-9">
                      <select name="currency" id="currency" data-width="auto">
                        <option value="£">£</option>
                        <option value="$">$</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="payment-to" class="col-sm-3 control-label">Payment to</label>
                    <div class="col-sm-9">
                      <select id="payment-to">
                        <option>MS Athimannil</option>
                        <option>Muhsin Manniyil</option>
                        <option>Prince Roshan</option>
                        <option>Mohasin Moorkote</option>
                      </select>
                    </div>
                  </div>
                </form>
              </div>
              <div id="members" class="col-md-6">
                <ul class="list-unstyled">
                  <li class="members">
                    <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add user</button>
                  </li>
                  <li class="members">
                    <figure class="pull-left">
                      <img src="img/me.jpg" alt="Member name" width="100" width="100" class="img-rounded">
                    </figure>
                    <ul class="list-unstyled">
                      <li><strong>MS Athimannil</strong></li>
                      <li><i class="fa fa-phone"></i> 07875 506 426</li>
                      <li><i class="fa fa-envelope"></i> <a href="mailto:hellow@athimannil.com">hello@athimannil.com</a></li>
                      <li><i class="fa fa-briefcase"></i> Developer at <a href="">Epic</a></li>
                      <li><i class="fa fa-skype fa-lg"></i> <a href="#" class="text-info">athimannil</a></li>
                    </ul>
                    <div class="btn-group" id="member-settings">
                      <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></button>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="fa fa-edit"></i> Edit</a></li>
                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa"></i> Set as main admin</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="members">
                    <figure class="pull-left">
                      <img src="img/me.jpg" alt="Member name" width="100" width="100" class="img-rounded">
                    </figure>
                    <ul class="list-unstyled">
                      <li><strong>MS Athimannil</strong></li>
                      <li><i class="fa fa-phone"></i> 07875 506 426</li>
                      <li><i class="fa fa-envelope"></i> <a href="mailto:hellow@athimannil.com">hello@athimannil.com</a></li>
                      <li><i class="fa fa-briefcase"></i> Developer at <a href="">Epic</a></li>
                      <li><i class="fa fa-skype fa-lg"></i> <a href="#" class="text-info">athimannil</a></li>
                    </ul>
                    <div class="btn-group" id="member-settings">
                      <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></button>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="fa fa-edit"></i> Edit</a></li>
                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa"></i> Set as main admin</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="members">
                    <figure class="pull-left">
                      <img src="img/me.jpg" alt="Member name" width="100" width="100" class="img-rounded">
                    </figure>
                    <ul class="list-unstyled">
                      <li><strong>MS Athimannil</strong></li>
                      <li><i class="fa fa-phone"></i> 07875 506 426</li>
                      <li><i class="fa fa-envelope"></i> <a href="mailto:hellow@athimannil.com">hello@athimannil.com</a></li>
                      <li><i class="fa fa-briefcase"></i> Developer at <a href="">Epic</a></li>
                      <li><i class="fa fa-skype fa-lg"></i> <a href="#" class="text-info">athimannil</a></li>
                    </ul>
                    <div class="btn-group" id="member-settings">
                      <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></button>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="fa fa-edit"></i> Edit</a></li>
                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa"></i> Set as main admin</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="members">
                    <figure class="pull-left">
                      <img src="img/me.jpg" alt="Member name" width="100" width="100" class="img-rounded">
                    </figure>
                    <ul class="list-unstyled">
                      <li><strong>MS Athimannil</strong></li>
                      <li><i class="fa fa-phone"></i> 07875 506 426</li>
                      <li><i class="fa fa-envelope"></i> <a href="mailto:hellow@athimannil.com">hello@athimannil.com</a></li>
                      <li><i class="fa fa-briefcase"></i> Developer at <a href="">Epic</a></li>
                      <li><i class="fa fa-skype fa-lg"></i> <a href="#" class="text-info">athimannil</a></li>
                    </ul>
                    <div class="btn-group" id="member-settings">
                      <button i type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></button>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="fa fa-edit"></i> Edit</a></li>
                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa"></i> Set as main admin</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="members">
                    <figure class="pull-left">
                      <img src="img/me.jpg" alt="Member name" width="100" width="100" class="img-rounded">
                    </figure>
                    <ul class="list-unstyled">
                      <li><strong>MS Athimannil</strong></li>
                      <li><i class="fa fa-phone"></i> 07875 506 426</li>
                      <li><i class="fa fa-envelope"></i> <a href="mailto:hellow@athimannil.com">hello@athimannil.com</a></li>
                      <li><i class="fa fa-briefcase"></i> Developer at <a href="">Epic</a></li>
                      <li><i class="fa fa-skype fa-lg"></i> <a href="#" class="text-info">athimannil</a></li>
                    </ul>
                    <div class="btn-group" id="member-settings">
                      <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></button>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="fa fa-edit"></i> Edit</a></li>
                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa"></i> Set as main admin</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="cutlery" class="box tab-pane">
            <div class="row">
              <div class="col-md-2">
                <strong>Monday</strong>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <select class="selectpicker" data-width="100%">
                    <option>MS Athimannil</option>
                    <option>Muhsin Manniyil</option>
                    <option>Prince Roshan</option>
                    <option>Mohasin Moorkote</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <select class="selectpicker" data-width="100%">
                    <option>MS Athimannil</option>
                    <option>Muhsin Manniyil</option>
                    <option>Prince Roshan</option>
                    <option>Mohasin Moorkote</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <strong>Tuesday</strong>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <select class="selectpicker" data-width="100%">
                    <option>MS Athimannil</option>
                    <option>Muhsin Manniyil</option>
                    <option>Prince Roshan</option>
                    <option>Mohasin Moorkote</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <select class="selectpicker" data-width="100%">
                    <option>MS Athimannil</option>
                    <option>Muhsin Manniyil</option>
                    <option>Prince Roshan</option>
                    <option>Mohasin Moorkote</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <strong>Wednesday</strong>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <select class="selectpicker" data-width="100%">
                    <option>MS Athimannil</option>
                    <option>Muhsin Manniyil</option>
                    <option>Prince Roshan</option>
                    <option>Mohasin Moorkote</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <select class="selectpicker" data-width="100%">
                    <option>MS Athimannil</option>
                    <option>Muhsin Manniyil</option>
                    <option>Prince Roshan</option>
                    <option>Mohasin Moorkote</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <strong>Thursday</strong>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <select class="selectpicker" data-width="100%">
                    <option>MS Athimannil</option>
                    <option>Muhsin Manniyil</option>
                    <option>Prince Roshan</option>
                    <option>Mohasin Moorkote</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <select class="selectpicker" data-width="100%">
                    <option>MS Athimannil</option>
                    <option>Muhsin Manniyil</option>
                    <option>Prince Roshan</option>
                    <option>Mohasin Moorkote</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <strong>Friday</strong>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <select class="selectpicker" data-width="100%">
                    <option>MS Athimannil</option>
                    <option>Muhsin Manniyil</option>
                    <option>Prince Roshan</option>
                    <option>Mohasin Moorkote</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <select class="selectpicker" data-width="100%">
                    <option>MS Athimannil</option>
                    <option>Muhsin Manniyil</option>
                    <option>Prince Roshan</option>
                    <option>Mohasin Moorkote</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <strong>Saturday</strong>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <select class="selectpicker" data-width="100%">
                    <option>MS Athimannil</option>
                    <option>Muhsin Manniyil</option>
                    <option>Prince Roshan</option>
                    <option>Mohasin Moorkote</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <select class="selectpicker" data-width="100%">
                    <option>MS Athimannil</option>
                    <option>Muhsin Manniyil</option>
                    <option>Prince Roshan</option>
                    <option>Mohasin Moorkote</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <strong>Sunday</strong>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <select class="selectpicker" data-width="100%">
                    <option>MS Athimannil</option>
                    <option>Muhsin Manniyil</option>
                    <option>Prince Roshan</option>
                    <option>Mohasin Moorkote</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <select class="selectpicker" data-width="100%">
                    <option>MS Athimannil</option>
                    <option>Muhsin Manniyil</option>
                    <option>Prince Roshan</option>
                    <option>Mohasin Moorkote</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



</div>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/core.js"></script>
</body>
</body>
</html>