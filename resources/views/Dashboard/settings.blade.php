@extends('Dashboard.admin-master')
@section('admin-content')
<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col-12">
               <h3 class="page-title">General Settings</h3>
            </div>
         </div>
      </div>
      <ul class="nav nav-tabs menu-tabs">
         <li class="nav-item active">
            <a class="nav-link" href="settings">General Settings</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="emailsettings">Email Settings</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="stripe_payment_gateway">Payment Gateway</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="sms-settings">SMS Gateway</a>
         </li>
      </ul>
      <div class="row">
         <div class="col-xl-3 col-lg-4 col-md-4 settings-tab">
            <div class="card">
               <div class="card-body">
                  <div class="nav flex-column">
                     <a class="nav-link active" data-toggle="tab" href="#general">General</a>
                     <a class="nav-link" data-toggle="tab" href="#push_notification">Push Notification</a>
                     <a class="nav-link" data-toggle="tab" href="#terms">Terms & Conditions</a>
                     <a class="nav-link mb-0" data-toggle="tab" href="#privacy">Privacy</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-9 col-lg-8 col-md-8">
            <div class="card">
               <div class="card-body p-0">
                  <form>
                     <div class="tab-content pt-0">
                        <div id="general" class="tab-pane active">
                           <div class="card mb-0">
                              <div class="card-header">
                                 <h4 class="card-title">General Settings</h4>
                              </div>
                              <div class="card-body">
                                 <div class="form-group">
                                    <label>Website Name</label>
                                    <input type="text" class="form-control" placeholder="Dreamguy's Technologies">
                                 </div>
                                 <div class="form-group">
                                    <label>Contact Details</label>
                                    <input type="text" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label>Currency</label>
                                    <p><strong>USD $ </strong></p>
                                 </div>
                                 <div class="form-group">
                                    <label>Website Logo</label>
                                    <div class="uploader">
                                       <input type="file" class="form-control">
                                    </div>
                                    <p class="form-text text-muted small mb-0">Recommended image size is <b>150px x
                                          150px</b></p>
                                    <img src="assets/img/logo.png" class="site-logo" alt>
                                 </div>
                                 <div class="form-group">
                                    <label>Favicon</label>
                                    <div class="uploader">
                                       <input type="file" class="form-control">
                                    </div>
                                    <p class="form-text text-muted small mb-0">Recommended image size is <b>16px x
                                          16px</b> or <b>32px x 32px</b></p>
                                    <p class="form-text text-muted small mb-1">Accepted formats: only png and ico</p>
                                    <img src="assets/img/favicon.png" class="fav-icon" alt>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="push_notification" class="tab-pane">
                           <div class="card mb-0">
                              <div class="card-header">
                                 <h4 class="card-title">Push Notification</h4>
                              </div>
                              <div class="card-body">
                                 <div class="form-group">
                                    <label>Firebase Server Key</label>
                                    <input type="text" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label>APNS Key</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="terms" class="tab-pane">
                           <div class="card mb-0">
                              <div class="card-header">
                                 <h4 class="card-title">Terms & Conditions</h4>
                              </div>
                              <div class="card-body">
                                 <div class="form-group">
                                    <label>Page Content</label>
                                    <textarea class="form-control content-textarea"
                                       rows="4">Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scel erisque the mattis, leo quam aliquet congue justo ut scelerisque. Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue justo ut scelerisque.</textarea>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="privacy" class="tab-pane pt-0">
                           <div class="card mb-0 shadow-none">
                              <div class="card-header">
                                 <h4 class="card-title">Privacy</h4>
                              </div>
                              <div class="card-body">
                                 <div class="form-group">
                                    <label>Page Content</label>
                                    <textarea class="form-control content-textarea"
                                       rows="4">Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scel erisque the mattis, leo quam aliquet congue justo ut scelerisque. Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue justo ut scelerisque.</textarea>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body pt-0">
                           <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection