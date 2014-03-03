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
      <li class="active"><a href="mess.php"><i class="fa fa-shopping-cart"></i> Mess</a></li>
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
      <div class="col-md-12">
        <h3>Mess payed items</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="mess-table" class="box">
          <div class="row">
            <div class="col-md-6">
              Records per page
              <select class="selectpicker" data-width="80px">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select>
              Search <input type="text" class="form-control input-sm" placeholder="Search item" style="display: inline-block; width: 145px;">
            </div>
            <div class="col-md-6">
              <div class="btn-group pull-right">
                <button type="button" class="btn btn-default"><i class="fa fa-plus"></i> Add</button>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#"><i class="fa fa-edit"></i> Edit</a></li>
                  <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
            </div>
          </div>
          <table class="table table-striped table-hover" style="margin-top:10px;">
            <thead>
              <tr>
                <th><i class="fa fa-square-o fa-lg"></i></th>
                <th>Product</th>
                <th>Date</th>
                <th>Amount</th>
                <th>Member</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><label for=""><i class="fa fa-check-square-o fa-lg"></i></label></td>
                <td>Tomotto</td>
                <td>12-Jan-2014</td>
                <td>£6.05</td>
                <td>Maanu</td>
                <td><span class="label label-success">Approved</span></td>
                <td>
                    <div class="btn-group btn-group-xs">
                      <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i></button>
                    <button type="button" class="btn btn-default"><i class="fa fa-times"></i></button>
                    </div>
                </td>
              </tr>
              <tr>
                <td><label for=""><i class="fa fa-square-o fa-lg"></i></label></td>
                <td>Tomotto</td>
                <td>12-Jan-2014</td>
                <td>£6.05</td>
                <td>Maanu</td>
                <td><span class="label label-default">Pending</span></td>
                <td>
                    <div class="btn-group btn-group-xs">
                      <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i></button>
                    <button type="button" class="btn btn-default"><i class="fa fa-times"></i></button>
                    </div>
                </td>
              </tr>
              <tr>
                <td><label for=""><i class="fa fa-check-square-o fa-lg"></i></label></td>
                <td>Tomotto</td>
                <td>12-Jan-2014</td>
                <td>£6.05</td>
                <td>Maanu</td>
                <td><span class="label label-info">Approved</span></td>
                <td>
                    <div class="btn-group btn-group-xs">
                      <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i></button>
                    <button type="button" class="btn btn-default"><i class="fa fa-times"></i></button>
                    </div>
                </td>
              </tr>
              <tr>
                <td><label for=""><i class="fa fa-square-o fa-lg"></i></label></td>
                <td>Tomotto</td>
                <td>12-Jan-2014</td>
                <td>£6.05</td>
                <td>Maanu</td>
                <td><span class="label label-warning">Pending</span></td>
                <td>
                    <div class="btn-group btn-group-xs">
                      <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i></button>
                    <button type="button" class="btn btn-default"><i class="fa fa-times"></i></button>
                    </div>
                </td>
              </tr>
              <tr>
                <td><label for=""><i class="fa fa-square-o fa-lg"></i></label></td>
                <td>Tomotto</td>
                <td>12-Jan-2014</td>
                <td>£6.05</td>
                <td>Maanu</td>
                <td><span class="label label-danger">Denied</span></td>
                <td>
                    <div class="btn-group btn-group-xs">
                      <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i></button>
                    <button type="button" class="btn btn-default"><i class="fa fa-times"></i></button>
                    </div>
                </td>
              </tr>
              <tr>
                <td><label for=""><i class="fa fa-square-o fa-lg"></i></label></td>
                <td>Tomotto</td>
                <td>12-Jan-2014</td>
                <td>£6.05</td>
                <td>Maanu</td>
                <td><span class="label label-success">Approved</span></td>
                <td>
                    <div class="btn-group btn-group-xs">
                      <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i></button>
                    <button type="button" class="btn btn-default"><i class="fa fa-times"></i></button>
                    </div>
                </td>
              </tr>
              <tr>
                <td><label for=""><i class="fa fa-square-o fa-lg"></i></label></td>
                <td>Tomotto</td>
                <td>12-Jan-2014</td>
                <td>£6.05</td>
                <td>Maanu</td>
                <td><span class="label label-success">Approved</span></td>
                <td>
                    <div class="btn-group btn-group-xs">
                      <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i></button>
                    <button type="button" class="btn btn-default"><i class="fa fa-times"></i></button>
                    </div>
                </td>
              </tr>
              <tr>
                <td><label for=""><i class="fa fa-square-o fa-lg"></i></label></td>
                <td>Tomotto</td>
                <td>12-Jan-2014</td>
                <td>£6.05</td>
                <td>Maanu</td>
                <td><span class="label label-success">Approved</span></td>
                <td>
                    <div class="btn-group btn-group-xs">
                      <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i></button>
                    <button type="button" class="btn btn-default"><i class="fa fa-times"></i></button>
                    </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="row">
            <div class="col-md-6">
              <p id="magination-count">Showing <kbd>1</kbd> to <kbd>10</kbd> of <kbd>57</kbd> entries</p>
            </div>
            <div class="col-md-6">
              <ul id="mess-pagination" class="pagination pull-right">
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
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