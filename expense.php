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
      <div class="table-responsive">
        <table class="table table-striped table-hover checkbox-list" style="margin-top:10px;">
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
          <tfoot>
            <td colspan="7">
              <div class="row">
                <div class="col-md-4 text-left">
                  Page <kbd>{{currentpage+1}}/{{totalpages()}}</kbd> 
                  Showing <kbd>{{(currentpage*pageSize)+1}}</kbd> to <kbd>{{(currentpage+1)*pageSize}}</kbd> of <kbd>{{items.length}}</kbd> items
                </div>
                <div class="col-md-8 text-right">
                  <nav>
                    <ul id="mess-pagination" class="pagination pagination-sm">
                      <li ng-class="{disabled : currentpage == 0}">
                        <a ng-click="prevlist(currentpage);">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      <li ng-repeat="displaypage in pagelist()" ng-class="{active: displaypage == currentpage}">
                        <a ng-click="showlist(displaypage)">{{displaypage+1}}</a>
                      </li>
                      <li ng-class="{'disabled' : currentpage >= items.length/pageSize - 1}">
                        <a ng-click="nextlist()">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </td>
          </tfoot>
          <tbody>
            <tr ng-repeat="item in items | orderBy : 'rate' | startFrom:currentpage*pageSize | limitTo:pageSize">
              <td>
                <label class="check-lab">
                  <input type="checkbox">
                  <span class="fa fa-lg"></span>
                </label>
              </td>
              <td>
                <span ng-show="editmode == false">{{item.product}}</span>
                <input type="text" ng-model="item.product" ng-show="editmode">
              </td>
              <td>
                <span ng-show="editmode == false">{{item.date}}</span>
                <input type="date" ng-model="item.date" ng-show="editmode">
              </td>
              <td>
                <span ng-show="editmode == false">{{item.rate | currency:"£"}}</span>
                <input type="text" ng-model="item.rate" ng-show="editmode">
              </td>
              <td>
                <span ng-repeat="user in users" ng-if="user.id === item.member" ng-show="editmode == false">{{user.firstname}} {{user.lastname}}</span>
                <select ng-show="editmode" ng-model="users[item.member-1].id" ng-options="user.id as user.lastname for user in users"></select>
              </td>
              <td><span class="label" ng-class="{'approved':'label-success', 'pending':'label-default', 'denied':'label-danger'}[item.status]">{{item.status}}</span></td>
              <td>
                <div class="btn-group btn-group-xs" role="group">
                  <button type="button" class="btn btn-default" ng-hide="editmode" ng-click="editmode = !editmode">
                    <i class="fa fa-pencil"></i>
                  </button>
                  <button type="button" class="btn btn-default" ng-hide="editmode">
                    <i class="fa fa-trash-o"></i>
                  </button>
                  <button type="button" class="btn btn-default" ng-show="editmode" ng-click="editmode = !editmode">
                    <i class="fa fa-save"></i>
                  </button>
                  <button type="button" class="btn btn-default" ng-show="editmode" ng-click="editmode = !editmode">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>