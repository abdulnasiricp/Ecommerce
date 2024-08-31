@extends('Dashboard.admin-master')
@section('admin-content')
<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="row">
         <div class="col-xl-8 offset-xl-2">
            <div class="page-header">
               <div class="row">
                  <div class="col-sm-12">
                     <h3 class="page-title">Edit Subscription</h3>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-body">
                  <form action="subscriptions">
                     <div class="form-group">
                        <label>Subscription Name</label>
                        <input class="form-control" type="text" value="Enterprice">
                     </div>
                     <div class="form-group">
                        <label>Subscription Amount</label>
                        <input class="form-control" type="text" value="$1200">
                     </div>
                     <div class="form-group">
                        <label>Subscription Duration</label>
                        <select class="form-control select">
                           <option>Select Duration</option>
                           <option>One Month</option>
                           <option>3 Months</option>
                           <option>6 Months</option>
                           <option selected>One Year</option>
                           <option>2 Years</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label class="d-block">Subscription Status</label>
                        <div class="d-flex">
                           <div class="form-check me-3">
                              <input type="radio" class="form-check-input" id="subscription_active"
                                 name="subscriptionradio" value="subscription" checked>
                              <label class="form-check-label" for="subscription_active">Active</label>
                           </div>
                           <div class="form-check">
                              <input type="radio" class="form-check-input" id="subscription_inactive"
                                 name="subscriptionradio" value="subscription">
                              <label class="form-check-label" for="subscription_inactive">Inactive</label>
                           </div>
                        </div>
                     </div>
                     <div class="mt-4">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                        <a href="subscriptions" class="btn btn-link">Cancel</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection