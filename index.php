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
      <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="profile.php"><i class="fa fa-user"></i> My details</a></li>
      <li><a href="mess.php"><i class="fa fa-shopping-cart"></i> Mess</a></li>
      <li><a href="invoice.php"><i class="fa fa-file-text-o"></i> Invoice</a></li>
      <li><a href="settings.php"><i class="fa fa-cog"></i> Settings</a></li>
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
      <div class="col-md-8">
        <h1 style="margin-top:0;"><i class="fa fa-dashboard"></i> Dashboard</h1>
        <h2 style="margin-top:0;"><i class="fa fa-dashboard"></i> Dashboard</h2>
      </div>
      <div class="col-md-3 pull-right hidden-xs hidden-sm">
        <div id="today" class="row">
          <div id="date" class="col-md-7">
            <p><?php echo date("l"); ?></p>
            <h1><?php echo date("j"); ?><small> <?php echo date("M"); ?></small></h1>
          </div>
          <div id="time" class="col-md-5">
            <span class="text-right"><?php echo date("A"); ?></span>
            <h1><?php echo date("g:i"); ?></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div id="mess-info" class="box quick-info">
          <h2><i class="fa fa-gbp"></i> 1320.90</h2>
          <h5>This month bill so far</h5>
          <span><i class="fa fa-arrow-circle-o-down"></i>
            7% Less than last month</span>
          <div class="info-icon">
            <i class="fa fa-shopping-cart fa-3x"></i>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div id="buy-info" class="box quick-info">
          <h2><i class="fa fa-gbp"></i> 192.43</h2>
          <h5>Contribution in this month</h5>
          <span><i class="fa fa-arrow-circle-o-up"></i>
            3% Higher than last month</span>
          <div class="info-icon">
            <i class="fa fa-gbp fa-3x"></i>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div id="average-info" class="box quick-info">
          <h2><i class="fa fa-gbp"></i> 607.00</h2>
          <h5>Average bill could be</h5>
          <span><i class="fa fa-arrow-circle-o-right"></i>
            same amount as last month</span>
          <div class="info-icon">
            <i class="fa fa-user fa-3x"></i>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div id="total-info" class="box quick-info">
          <h2><i class="fa fa-gbp"></i> 2156.67</h2>
          <h5>Total bill for all</h5>
          <span><i class="fa fa-arrow-circle-o-up"></i>
            3% Higher than last month</span>
          <div class="info-icon">
            <i class="fa fa-bar-chart-o fa-3x"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Quick add to list</h3>
          </div>
          <div class="panel-body">
            <form role="form">
              <div class="form-group">
                <label for="Product">Product name</label>
                <input type="text" class="form-control" id="Product" placeholder="Enter name">
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-8">
                    <label for="prchase-date">Date</label>
                    <input type="text" class="form-control" id="prchase-date" placeholder="Date">
                  </div>
                  <div class="col-md-4">
                    <label for="product-value">Value</label>
                    <input type="text" class="form-control" id="product-value" placeholder="Price">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> Add to mess</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a href="#"><strong><i class="fa fa-hand-o-left fa-lg"></i> Last month</strong></a></li>
          <li><a href="#"><strong><i class="fa fa-clock-o fa-lg"></i> Recent</strong></a></li>
        </ul>
        <ul id="last-pay" class="list-group">
          <li href="#" class="list-group-item">
            <span class="badge progress-bar-success">34%</span>
            <img src="img/me.jpg" alt="member" height="40" width="40" class="img-circle pull-left">
            Muhamed Athimannil
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span>
              </div>
            </div>
          </li>
          <li href="#" class="list-group-item">
            <span class="badge progress-bar-info">76%</span>
            <img src="img/me.jpg" alt="member" height="40" width="40" class="img-circle pull-left">
            Roshan Ismail
            <div class="progress">
              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
              </div>
            </div>
          </li>
          <li href="#" class="list-group-item">
            <span class="badge progress-bar-warning">38%</span>
            <img src="img/me.jpg" alt="member" height="40" width="40" class="img-circle pull-left">
            Muhsin Manniyil
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
          </li>
          <li href="#" class="list-group-item">
            <span class="badge progress-bar-danger">14%</span>
            <img src="img/me.jpg" alt="member" height="40" width="40" class="img-circle pull-left">
            Mohasin Moorkote
            <div class="progress">
              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                <span class="sr-only">80% Complete</span>
              </div>
            </div>    
          </li>
          <li href="#" class="list-group-item">
            <span class="badge progress-bar-info">42%</span>
            <img src="img/me.jpg" alt="member" height="40" width="40" class="img-circle pull-left">
            Usharif Kalathingal
            <div class="progress">
              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul id="to-do" class="list-group">
          <a class="list-group-item active"><i class="fa fa-lg fa-list-alt"></i>To Do List</a>
          <li class="list-group-item"><i class="fa fa-lg fa-square-o"></i>
            Spart ds lfds <span class="label label-danger pull-right">Tomorrow</span></li>
          <li class="list-group-item"><i class="fa fa-lg fa-square-o"></i>
            Clear fdfs <span class="label label-default pull-right">Default</span></li>
          <li class="list-group-item tick"><i class="fa fa-lg fa-check-square"></i>Kooy</li>
          <li class="list-group-item"><i class="fa fa-lg fa-square-o"></i>
            Great a think <span class="label label-info pull-right">Postponed</span></li>
          <li class="list-group-item tick"><i class="fa fa-lg fa-check-square"></i>Nothing to type</li>
        </ul>
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