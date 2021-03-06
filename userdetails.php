<style>
#user-details{
  margin-bottom: 20px;
}
#user-details li{
  margin-bottom: 5px;
}
#settings-purchase{
  padding: 0;
}
</style>
<div class="row">
  <div class="col-md-12">
    <h3><i class="fa fa-user"></i> My Profile</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#settings-profile" data-toggle="tab"><i class="fa fa-user"></i> Profile</a></li>
      <li><a href="#edit-profile" data-toggle="tab"><i class="fa fa-pencil"></i> Edit Profile</a></li>
      <li><a href="#settings-purchase" data-toggle="tab"><i class="fa fa-shopping-cart"></i> Purchase</a></li>
      <li><a href="#settings-payment" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment</a></li>
      <li><a href="#settings-password" data-toggle="tab"><i class="fa fa-key"></i> Password</a></li>
    </ul>
    <div class="tab-content">
      <div id="settings-profile" class="box tab-pane active">
        <div class="row">
          <div class="col-md-5 text-center">
            <h4>Muhammed Athimannil</h4>
            <figure>
              <a href="#"><img  class="img-thumbnail" src="img/me.jpg" width="160" height="160" alt="Maanu Manjeri"></a>
            </figure>
          </div>
          <div class="col-md-7">
            <h4>Contact information</h4>
            <ul id="user-details" class="list-unstyled">
              <li><i class="fa fa-map-marker"></i> London, UK</li>
              <li><i class="fa fa-briefcase"></i> Developer at <a href="">Epic</a></li>
              <li><i class="fa fa-phone"></i><a href=""> 07875 506 426</a></li>
              <li><i class="fa fa-envelope"></i> <a href="mailto:hello@athimannil.com"> hello@athimannil.com</a></li>
            </ul>
            <h4>Social connections</h4>
            <ul class="list-inline">
              <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
              <li><a href="#"><i class="fa fa-skype fa-2x"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube-square fa-2x"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div id="edit-profile" class="box tab-pane">
        <form  role="form">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" class="form-control">
              </div>
              <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" class="form-control">
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" id="gender">
              </div>
              <div class="form-group">
                <label for="dob">Date of birth</label>
                <input type="date" class="form-control" id="dob">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="inputPhone">Phone</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                  <input type="text" placeholder="01234567897" class="form-control" id="inputPhone">
                </div>
              </div>
              <div class="form-group">
                <label for="inputMobile">Mobile</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                  <input type="text" placeholder="01234567897" class="form-control" id="inputMobile">
                </div>
              </div>
              <div class="form-group">    
                <label for="inputEmail">E-mail</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                  <input type="text" placeholder="contact@mosaicpro.biz" class="form-control" id="inputEmail">
                </div>
              </div>
              <div class="form-group">  
                <label for="inputWebsite">Website</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-link"></i></span>
                  <input type="text" placeholder="http://www.mosaicpro.biz" class="form-control" id="inputWebsite">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="inputFacebook">Facebook</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                  <input type="text" placeholder="mosaicpro" class="form-control" id="inputFacebook">
                </div>
              </div>
              <div class="form-group">
                <label for="inputTwitter">Twitter</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                  <input type="text" placeholder="mosaicpro" class="form-control" id="inputTwitter">
                </div>
              </div>
              <div class="form-group">
                <label for="inputSkype">Skype ID</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-skype"></i></span>
                  <input type="text" placeholder="mySkypeID" class="form-control" id="inputSkype">
                </div>
              </div>
              <div class="form-group">
                <label for="inputgplus">Google</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
                  <input type="text" placeholder="google ID" class="form-control" id="inputgplus">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div id="settings-purchase" class="box tab-pane">
        <div id="mess-table">
          <div class="row">
            <div class="col-md-12" style="padding-left:20px;">
              Records per page
              <select class="selectpicker" data-width="80px">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select>
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
                                    <select class="selectpicker" data-width="100%">
                                      <option value="01">01</option>
                                      <option value="02">02</option>
                                      <option value="03">03</option>
                                      <option value="04">04</option>
                                      <option value="05">05</option>
                                      <option value="06">06</option>
                                      <option value="07">07</option>
                                      <option value="08">08</option>
                                      <option value="09">09</option>
                                      <option value="10">10</option>
                                      <option value="11">11</option>
                                      <option value="12">12</option>
                                    </select>
                                  </div>
                                  <div class="col-md-6">
                                    <select class="selectpicker" data-width="100%">
                                      <option value="">2011</option>
                                      <option value="">2012</option>
                                      <option value="">2013</option>
                                      <option value="">2014</option>
                                      <option value="">2015</option>
                                      <option value="">2016</option>
                                      <option value="">2017</option>
                                      <option value="">2018</option>
                                      <option value="">2019</option>
                                      <option value="">2020</option>
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