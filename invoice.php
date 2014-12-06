<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="box">
      <div class="row">
        <div class="col-md-12 ">
          <div class="page-header">
            <h1 class="text-center" ng-repeat="user in users" ng-if="user.id === currentuser">{{ user.firstname}} {{user.lastname}}</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <address ng-repeat="user in users" ng-if="user.id === currentuser">
            <strong><i class="fa fa-home fa-lg"></i> Malayali House</strong><br>
            {{ user.ad1}}<br>
            {{ user.ad2}}<br>
            <i class="fa fa-phone"></i> {{ user.mob }}
          </address>
        </div>
        <div class="col-md-4">
          <p>Invoice no: <strong>{{invoicebill.id}}</strong></p>
          <p>Invoice Date: <strong>{{invoicebill.invoicedate}}</strong></p>
          <p>Invoice from: <strong>{{invoicebill.invoicefrom}}</strong></p>
          <p>Invoice status: <span class="label text-capitalize" ng-class="{'paid':'label-success', 'pending':'label-danger', 'due':'label-info'}[invoicebill.status]">{{invoicebill.status}}</span></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-stripeds table-bordered">
            <thead>
              <tr>
                <th>No.</th>
                <th>Item</th>
                <th class="text-right">Price</th>
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat="invoiceprice in invoicebill.invoiceprice">
                <td>{{$index+1}}</td>
                <td>{{invoiceprice.item}}</td>
                <td class="text-right">{{invoiceprice.price | currency:"£"}}</td>
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
              <td align="right">{{invoicebill.invoiceprice | sum:'price' | currency:"£"}}</td>
            </tr>
            <tr class="success">
              <td>Your contribution</td>
              <td align="right">{{invoicebill.contribution | currency:"£"}}</td>
            </tr>
            <tr class="">
              <td><strong>Total</strong></td>
              <td align="right"><strong>{{(invoicebill.invoiceprice | sum:'price') - invoicebill.contribution | currency:"£"}}</strong></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>