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
          <li><a href="#money" data-toggle="tab"><i class="fa fa-money"></i> Purchase</a></li>
          <li><a href="#cutlery" data-toggle="tab"><i class="fa fa-cutlery"></i> Kitchen</a></li>
          <li><a href="#settings-payment" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment</a></li>
          <li><a href="#settings-password" data-toggle="tab"><i class="fa fa-key"></i> Password</a></li>
        </ul>
        <div class="tab-content">
          <div id="users" class="box tab-pane active">
            <div class="row">
              <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quisquam, magni inventore hic aut eligendi cumque maxime exercitationem provident accusantium tenetur minima vitae error sed saepe? Libero, perferendis in delectus!</p>
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
          <div id="money" class="box tab-pane">
            <div class="row">
              <div class="col-md-12">
                <div id="mess-table">
                  <div class="row">
                    <div class="col-md-12">
                      Records per page
                      <div class="btn-group btn-group-sm">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:80px; margin-right:20px;">
                          <span class="pull-left">10</span><span class="caret pull-right" style="margin-top:7px;"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">10</a></li>
                          <li><a href="#">25</a></li>
                          <li><a href="#">50</a></li>
                          <li><a href="#">100</a></li>
                        </ul>
                      </div>
                      Search <input type="text" class="form-control input-sm" placeholder="Search item" style="display: inline-block; width: 145px;">
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
          <div id="cutlery" class="box tab-pane">
            <form class="form-horizontal" role="form">
            <div class="row">
              <div class="col-md-3">
                <strong>Contact details</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, doloremque, officiis, rem asperiores incidunt pariatur cum molestiae eligendi ducimus quaerat adipisci corporis earum repudiandae eaque tenetur nisi minima quae optio!</p>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  <label for="first-name" class="col-sm-2 control-label">First Name</label>
                  <div class="col-sm-6"><input type="text" id="first-name" class="form-control"></div>
                </div>
                <div class="form-group">
                  <label for="last-name" class="col-sm-2 control-label">Last Name</label>
                  <div class="col-sm-6"><input type="text" id="last-name" class="form-control"></div>
                </div>
                <div class="form-group">
                  <label for="gender" class="col-sm-2 control-label">Gender</label>
                  <div class="col-sm-6"><input type="text" class="form-control" id="gender"></div>
                </div>
                <div class="form-group">
                  <label for="dob" class="col-sm-2 control-label">Date of birth</label>
                  <div class="col-sm-6"><input type="date" class="form-control" id="dob"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <hr>
              <div class="col-md-3">
                <strong>Contact details</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, doloremque, officiis, rem asperiores incidunt pariatur cum molestiae eligendi ducimus quaerat adipisci corporis earum repudiandae eaque tenetur nisi minima quae optio!</p>
              </div>
              <div class="col-md-9">
                <div class="row">
                  <div class="col-md-6">
                    <label for="inputPhone">Phone</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                      <input type="text" placeholder="01234567897" class="form-control" id="inputPhone">
                    </div>
                    <div class="separator bottom"></div>

                    <label for="inputMobile">Mobile</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                      <input type="text" placeholder="01234567897" class="form-control" id="inputMobile">
                    </div>
                    <div class="separator bottom"></div>
                      
                    <label for="inputEmail">E-mail</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <input type="text" placeholder="contact@mosaicpro.biz" class="form-control" id="inputEmail">
                    </div>
                    <div class="separator bottom"></div>
                    
                    <label for="inputWebsite">Website</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-link"></i></span>
                      <input type="text" placeholder="http://www.mosaicpro.biz" class="form-control" id="inputWebsite">
                    </div>
                    <div class="separator bottom"></div>
                  </div>
                  <div class="col-md-6">
                    <label for="inputFacebook">Facebook</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                      <input type="text" placeholder="mosaicpro" class="form-control" id="inputFacebook">
                    </div>
                    <div class="separator bottom"></div>
                    
                    <label for="inputTwitter">Twitter</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                      <input type="text" placeholder="mosaicpro" class="form-control" id="inputTwitter">
                    </div>
                    <div class="separator bottom"></div>
                    
                    <label for="inputSkype">Skype ID</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-skype"></i></span>
                      <input type="text" placeholder="mySkypeID" class="form-control" id="inputSkype">
                    </div>
                    <div class="separator bottom"></div>
                    
                    <label for="inputgplus">Google</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
                      <input type="text" placeholder="google ID" class="form-control" id="inputgplus">
                    </div>
                    <div class="separator bottom"></div>
                  </div>
                </div>
              </div>
            </div>
              <p>.form-group>label.col-sm-2.control-label+.col-sm-6>input.form-control</p>
            </form>
          </div>
          <div id="settings-payment" class="box tab-pane">
            <h4>Payment & Billing Information</h4>
            <div class="row">
              <div class="col-md-9">
                <div id="card-accordion" class="panel-group">
                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-credit-card"></i> XXXX-XXXX-XXXX-9007</a>
                        <div class="btn-group btn-group-xs pull-right">
                          <a class="btn btn-default"><i class="fa fa-times"></i></a>
                        </div>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                      <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, aliquid, ex, tempora distinctio aperiam veritatis minus deleniti nam aliquam fuga ducimus enim delectus earum ad quas hic qui sunt voluptates.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-credit-card"></i> XXXX-XXXX-XXXX-5678</a>
                        <div class="btn-group btn-group-xs pull-right">
                          <a class="btn btn-default"><i class="fa fa-check"></i> Make primary</a>
                          <a class="btn btn-default"><i class="fa fa-times"></i></a>
                        </div>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-credit-card"></i> Add new account</a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-md-12">
                            <form role="form">
                              <div class="form-group">
                                <label for="nameon-card">Name on card</label>
                                <input type="text" class="form-control" id="nameon-card" placeholder="Name on card">
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-6">
                                    <label for="ac-number">Account number</label>
                                    <input type="text" class="form-control" id="ac-number" maxlength="8" placeholder="Account number">
                                  </div>
                                  <div class="col-md-6">
                                    <label for="" class="col-md-offset-2">Sort code</label>
                                    <div class="row">
                                      <div class="col-md-3 col-md-offset-2">
                                        <input type="text" class="form-control" maxlength="2" placeholder="00">
                                      </div>
                                      <div class="col-md-3">
                                        <input type="text" class="form-control" maxlength="2" placeholder="00">
                                      </div>
                                      <div class="col-md-3">
                                        <input type="text" class="form-control" maxlength="2" placeholder="00">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <hr>
                              <div class="form-group">
                                <label for="card-number">Card number</label>
                                <input type="text" class="form-control" id="card-number" maxlength="16" placeholder="Card number">
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-5">
                                    <label for="">Expirty date</label>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <select name="" id="" class="form-control">
                                          <option value="">01</option>
                                          <option value="">02</option>
                                          <option value="">03</option>
                                          <option value="">04</option>
                                          <option value="">05</option>
                                          <option value="">06</option>
                                          <option value="">07</option>
                                          <option value="">08</option>
                                          <option value="">09</option>
                                          <option value="">10</option>
                                          <option value="">11</option>
                                          <option value="">12</option>
                                        </select>
                                      </div>
                                      <div class="col-md-6">
                                        <select name="" id="" class="form-control">
                                          <option value="">2011</option>
                                          <option value="">2012</option>
                                          <option value="">2013</option>
                                          <option value="">2014</option>
                                          <option value="">2015</option>
                                          <option value="">2016</option>
                                          <option value="">2017</option>
                                          <option value="">2018</option>
                                          <option value="">2019</option>
                                          <option value="">20110</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-md-offset-1">
                                    <label for="security-code">Expiry date</label>
                                    <input type="text" class="form-control" maxlength="3" id="security-code" placeholder="Security code">
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <i class="fa fa-user fa-3x pull-left"></i>
                    <strong>Muhammed Athimannil</strong>
                    <small>kooy</small>
                  </div>
                </div>
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-home fa-lg"></i> Billing address</h3>
                  </div>
                  <div class="panel-body">
                    <address>
                      <strong>Malayali House</strong><br>
                      243 Folsom Ave, Suite 600<br>
                      England, UK<br>
                    </address>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="settings-password" class="box tab-pane">
            <h4>Change your password</h4>
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label for="current-password" class="col-sm-2 control-label">Current Password</label>
                <div class="col-sm-6">
                  <input id="current-password" type="password" class="form-control" placeholder="Current Password">
                </div>
              </div>
              <div class="form-group">
                <label for="new-password" class="col-sm-2 control-label">New Password</label>
                <div class="col-sm-6">
                  <input id="new-password" type="password" class="form-control" placeholder="New Password">
                </div>
              </div>
              <div class="form-group">
                <label for="repeat-password" class="col-sm-2 control-label">Repeat Password</label>
                <div class="col-sm-6">
                  <input id="repeat-password" type="password" class="form-control" placeholder="Repeat Password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Save change</button>
                </div>
              </div>
            </form>
          </div>
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