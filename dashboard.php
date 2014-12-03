<div class="row">
  <div class="col-md-8">
    <!-- <h1 style="margin-top:0;"><i class="fa fa-dashboard"></i> Dashboard</h1> -->
    <h2><i class="fa fa-dashboard"></i> Dashboard</h2>
  </div>
  <div class="col-md-3 pull-right hidden-xs hidden-sm">
    <div id="today" class="row">
      <div id="date" class="col-md-7">
        <!-- <p><?php echo date("l"); ?></p> -->
        <p>Thursday</p>
        <h1><!--<?php echo date("j"); ?>--> 6 <small> <!-- <?php echo date("M"); ?> --> Mar</small></h1>
      </div>
      <div id="time" class="col-md-5">
        <span class="text-right"><!--<?php echo date("A"); ?>--> PM</span>
        <h1><!--<?php echo date("g:i"); ?>--> 12:30</h1>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 col-md-3">
    <div id="mess-info" class="box quick-info">
      <h2>{{lastspend | currency:"£"}}</h2>
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
      <h2 ng-repeat="user in users" ng-if="user.id === currentuser">{{ user.spent | currency:"£"}}</h2>
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
      <h2>{{totalamount/todolist.length | currency:"£"}}</h2>
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
      <h2>{{totalamount | currency:"£"}}</h2>
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
        <h3 class="panel-title">Add Expense</h3>
      </div>
      <div class="panel-body">
        <form role="form">
          <div class="form-group">
            <label for="Product">Item Name</label>
            <input type="text" class="form-control" id="Product" placeholder="Eg: Sugar">
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="product-value">Price</label>
                <div class="input-group">
                  <span class="input-group-addon">£</span>
                  <input type="text" class="form-control" placeholder="0.00">
                </div>
              </div>
              <div class="col-md-6">
                <label for="prchase-date">Who paid ?</label>
                <select class="selectpicker" data-width="100%">
                  <option>MS Athimannil</option>
                  <option>Muhsin Manniyil</option>
                  <option>Prince Roshan</option>
                  <option>Mohasin Moorkote</option>
                </select>
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
    <ul id="to-do" class="list-group checkbox-list">
      <a class="list-group-item active"><i class="fa fa-lg fa-list-alt"></i> To Do List</a>
      <li class="list-group-item checkbox">
        <input type="checkbox" id="to-do1">
        <label class="check-lab" for="to-do1">Some thing to do</label>
        <span class="label label-danger pull-right">Tomorrow</span>
      </li>
      <li class="list-group-item checkbox">
        <input type="checkbox" id="to-do2" checked>
        <label class="check-lab" for="to-do2">Nothing to do</label>
      </li>
      <li class="list-group-item checkbox">
        <input type="checkbox" id="to-do3">
        <label class="check-lab" for="to-do3">Meeting at 9 PM</label>
        <span class="label label-default pull-right">Default</span>
      </li>
      <li class="list-group-item checkbox">
        <input type="checkbox" id="to-do4" checked>
        <label class="check-lab" for="to-do4">Whole cleaning home</label>
        <span class="label label-info pull-right">Postponed</span>
      </li>
      <li class="list-group-item checkbox">
        <input type="checkbox" id="to-do5">
        <label class="check-lab" for="to-do5">Verude oru rasam</label>
      </li>
      <!-- <li class="list-group-item"> -->
        <div class="input-group">
          <input type="text" class="form-control" id="new-todo" placeholder="Enter To Do">
          <span class="input-group-btn">
            <button id="add-todo" class="btn btn-default" type="button"><i class="fa fa-plus"></i></button>
          </span>
        </div>
      <!-- </li> -->
    </ul>
  </div>
  <div class="col-md-4">
    <ul class="nav nav-tabs nav-justified">
      <li class="active"><a href="#"><strong><i class="fa fa-clock-o fa-lg"></i> This month</strong></a></li>
      <li><a href="#"><strong><i class="fa fa-hand-o-left fa-lg"></i> Last month</strong></a></li>
    </ul>
    <ul id="last-pay" class="list-group">

      <li class="list-group-item" ng-repeat="user in users">
        <span class="badge progress-bar-warning">{{percentage(user.spent, totalamount)}}%</span>
        <img src="img/me.jpg" alt="member" height="40" width="40" class="img-circle pull-left">
        {{user.firstname}} {{user.lastname}}
        <div class="progress">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{percentage(user.spent, totalamount)}}" aria-valuemin="0" aria-valuemax="100" style="width: {{percentage(user.spent, totalamount)}}%">
            <span class="sr-only">{{percentage(user.spent, totalamount)}}% Complete (warning)</span>
          </div>
        </div>
      </li>
    </ul>
  </div>

</div>