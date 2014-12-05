<div class="row">
  <div class="col-md-12">
    <h2><i class="fa fa-retweet"> </i>  Recurring Bills</h2>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Add a recurring bill</h3>
      </div>
      <div class="panel-body">
        <form role="form" ng-submit="recurbill()">
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="item-name">Item name</label>
                <input type="text" class="form-control" id="item-name" placeholder="Eg: Broadband" ng-model="addrecur.type">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="">Amount</label>
                <div class="input-group">
                  <span class="input-group-addon">£</span>
                  <input type="text" class="form-control" placeholder="0.00" ng-model="addrecur.amount">
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="bill-date">Due date</label>
                <div class="input-group">
                  <input type="date" class="form-control" placeholder="12-12-2012" ng-model="addrecur.due">
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="prchase-date">Bill type</label>
                <div class="input-group" style="display:block;">
                  <select class="selectpicker" ng-model="addrecur.recurterm" style="width:100%;">
                    <option value="Daily">Daily</option>
                    <option value="Weekly">Weekly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Yearly">Yearly</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for=""></label>
                <div class="checkbox">
                  <label><input type="checkbox" ng-model="addrecur.fixed"> Fixed amount</label>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add to bills</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4" ng-repeat="recurbill in recurbills">
    <div class="panel panel-primary">
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
