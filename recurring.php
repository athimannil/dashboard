<div class="row">
  <div class="col-md-12">
    <h2><i class="fa fa-retweet"> </i>  Recurring Bills</h2>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Add a recurring bill</h3>
      </div>
      <div class="panel-body">
        <form role="form" ng-submit="recurbill()">
          <div class="form-group">
            <label for="item-name">Item name</label>
            <input type="text" class="form-control" id="item-name" placeholder="Eg: Broadband" ng-model="addrecur.type">
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon">£</span>
                <input type="text" class="form-control" placeholder="0.00" ng-model="addrecur.amount">
              </div>
            </div>
            <div class="col-md-6">
              <div class="checkbox">
                <label><input type="checkbox" ng-model="addrecur.fixed"> Fixed amount</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label for="bill-date">Due date</label>
                <div class="input-group">
                  <input type="date" class="form-control" placeholder="12-12-2012" ng-model="addrecur.due">
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="prchase-date">Bill type</label>
                <select class="selectpicker" data-width="100%" ng-model="addrecur.recurterm">
                  <option value="Daily">Daily</option>
                  <option value="Weekly">Weekly</option>
                  <option value="Monthly">Monthly</option>
                  <option value="Yearly">Yearly</option>
                </select>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary pull-right">
            <i class="fa fa-plus"></i> Add to bills</button>
        </form>
      </div>
    </div>
  </div>
  <!-- <div class="col-md-4">{{addrecur}}</div> -->
  <div class="col-md-4">{{recurbills}}</div>

<div class="col-md-12">
  <p>{{recurbills.length}}</p>
  <div class="col-md-4" ng-repeat="recurbill in recurbills">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">{{recurbill.type}}</h3>
      </div>
      <div class="panel-body">
        <p><i class="fa fa-retweet"> </i> <strong> Recurs:</strong> {{recurbill.recur}}</p>
        <p><i class="fa fa-hand-o-left"> </i> <strong> last Bill:</strong> 12 January 2014</p>
        <p><i class="fa fa-hand-o-right"> </i> <strong> Next Bill:</strong> 11 February 2014</p>
        <div class="well text-center">Amount Due: <strong> {{recurbill.amount | currency:"£"}}</strong></div>
      </div>
    </div>
  </div>

</div>

  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Broadband</h3>
      </div>
      <div class="panel-body">
        <p><i class="fa fa-retweet"> </i> <strong> Recurs:</strong> Monthly</p>
        <p><i class="fa fa-hand-o-left"> </i> <strong> last Bill:</strong> 12 January 2014</p>
        <p><i class="fa fa-hand-o-right"> </i> <strong> Next Bill:</strong> 11 February 2014</p>
        <div class="well text-center">Amount Due: <strong> £23.50</strong></div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Electricity</h3>
      </div>
      <div class="panel-body">
        <p><i class="fa fa-retweet"> </i> <strong> Recurs:</strong> Monthly</p>
        <p><i class="fa fa-hand-o-left"> </i> <strong> last Bill:</strong> 12 January 2014</p>
        <p><i class="fa fa-hand-o-right"> </i> <strong> Next Bill:</strong> 11 February 2014</p>
        <div class="well text-center">Amount Due: <strong> £23.50</strong></div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Gas</h3>
      </div>
      <div class="panel-body">
        <p><i class="fa fa-retweet"> </i> <strong> Recurs:</strong> Monthly</p>
        <p><i class="fa fa-hand-o-left"> </i> <strong> last Bill:</strong> 12 January 2014</p>
        <p><i class="fa fa-hand-o-right"> </i> <strong> Next Bill:</strong> 11 February 2014</p>
        <div class="well text-center">Amount Due: <strong> £23.50</strong></div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Council Tax</h3>
      </div>
      <div class="panel-body">
        <p><i class="fa fa-retweet"> </i> <strong> Recurs:</strong> Monthly</p>
        <p><i class="fa fa-hand-o-left"> </i> <strong> last Bill:</strong> 12 January 2014</p>
        <p><i class="fa fa-hand-o-right"> </i> <strong> Next Bill:</strong> 11 February 2014</p>
        <div class="well text-center">Amount Due: <strong> £321.76</strong></div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-warning">
      <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
      </div>
      <div class="panel-body">
        <p><i class="fa fa-retweet"> </i> <strong> Recurs:</strong> Monthly</p>
        <p><i class="fa fa-hand-o-left"> </i> <strong> last Bill:</strong> 12 January 2014</p>
        <p><i class="fa fa-hand-o-right"> </i> <strong> Next Bill:</strong> 11 February 2014</p>
        <div class="well text-center">Amount Due: <strong> £23.50</strong></div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
      </div>
      <div class="panel-body">
        <p><i class="fa fa-retweet"> </i> <strong> Recurs:</strong> Monthly</p>
        <p><i class="fa fa-hand-o-left"> </i> <strong> last Bill:</strong> 12 January 2014</p>
        <p><i class="fa fa-hand-o-right"> </i> <strong> Next Bill:</strong> 11 February 2014</p>
        <div class="well text-center">Amount Due: <strong> £23.50</strong></div>
      </div>
    </div>
  </div>
</div>            
