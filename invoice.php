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
      <li class="active"><a href="invoice.php"><i class="fa fa-file-text-o"></i> Invoice</a></li>
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
    <div class="col-md-10 col-md-offset-1">
      <div class="box">
        <div class="row">
          <div class="col-md-12 ">
            <div class="page-header">
              <h1 class="text-center">Maanu Konu <small>മാനു കോനു</small></h1>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <address>
              <strong><i class="fa fa-home fa-lg"></i> Malayali House</strong><br>
              3 Richard Court<br>
              Truro Road<br>
              <i class="fa fa-phone"></i> 020 8881 7936
            </address>
          </div>
          <div class="col-md-4">
            <p>Invoice no: <strong>12</strong></p>
            <p>Invoice Date: <strong>12-January-2014</strong></p>
            <p>Invoice from: <strong>December 2014</strong></p>
            <p>Invoice status: <span class="label label-danger">Pending</span></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <table class="table table-stripeds table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Item</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Rent</td>
                  <td>£1200.00</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Mess</td>
                  <td>£50.56</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Broadband</td>
                  <td>£25.00</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Elactricy</td>
                  <td>£65.87</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Gas</td>
                  <td>£55.80</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="alert alert-warning">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, magnam voluptatum sunt ullam aliquid cumque quasi placeat quia officia fugit ipsam est ab autem aspernatur cum eaque eos? Praesentium, dignissimos.</p>              
            </div>
          </div>
          <div class="col-md-4 col-md-offset-4">
            <table class="table table-bordered">
              <tr class="">
                <td>Sub total</td>
                <td align="right">£1234.90</td>
              </tr>
              <tr class="success">
                <td>Your contribution</td>
                <td align="right">-£365.45</td>
              </tr>
              <tr class="">
                <td><strong>Total</strong></td>
                <td align="right"><strong>£832.40</strong></td>
              </tr>
            </table>
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