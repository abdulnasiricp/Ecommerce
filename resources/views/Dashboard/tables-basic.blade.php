@extends('Dashboard.admin-master')
@section('admin-content')
<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Basic Tables</h3>
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                  <li class="breadcrumb-item active">Basic Tables</li>
               </ul>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Basic Table</h4>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table mb-0">
                        <thead>
                           <tr>
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Email</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>John</td>
                              <td>Doe</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="f59f9a9d9bb5908d9498859990db969a98">[email&#160;protected]</a></td>
                           </tr>
                           <tr>
                              <td>Mary</td>
                              <td>Moe</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="9df0fcefe4ddf8e5fcf0edf1f8b3fef2f0">[email&#160;protected]</a></td>
                           </tr>
                           <tr>
                              <td>July</td>
                              <td>Dooley</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="dcb6a9b0a59cb9a4bdb1acb0b9f2bfb3b1">[email&#160;protected]</a></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Striped Rows</h4>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-striped mb-0">
                        <thead>
                           <tr>
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Email</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>John</td>
                              <td>Doe</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="f69c999e98b6938e979b869a93d895999b">[email&#160;protected]</a></td>
                           </tr>
                           <tr>
                              <td>Mary</td>
                              <td>Moe</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="234e42515a63465b424e534f460d404c4e">[email&#160;protected]</a></td>
                           </tr>
                           <tr>
                              <td>July</td>
                              <td>Dooley</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="95ffe0f9ecd5f0edf4f8e5f9f0bbf6faf8">[email&#160;protected]</a></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Bordered Table</h4>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered mb-0">
                        <thead>
                           <tr>
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Email</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>John</td>
                              <td>Doe</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="a1cbcec9cfe1c4d9c0ccd1cdc48fc2cecc">[email&#160;protected]</a></td>
                           </tr>
                           <tr>
                              <td>Mary</td>
                              <td>Moe</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="5b363a29221b3e233a362b373e75383436">[email&#160;protected]</a></td>
                           </tr>
                           <tr>
                              <td>July</td>
                              <td>Dooley</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="e78d928b9ea7829f868a978b82c984888a">[email&#160;protected]</a></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Hover Rows</h4>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-hover mb-0">
                        <thead>
                           <tr>
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Email</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>John</td>
                              <td>Doe</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="b7ddd8dfd9f7d2cfd6dac7dbd299d4d8da">[email&#160;protected]</a></td>
                           </tr>
                           <tr>
                              <td>Mary</td>
                              <td>Moe</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="92fff3e0ebd2f7eaf3ffe2fef7bcf1fdff">[email&#160;protected]</a></td>
                           </tr>
                           <tr>
                              <td>July</td>
                              <td>Dooley</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="88e2fde4f1c8edf0e9e5f8e4eda6ebe7e5">[email&#160;protected]</a></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Contextual Classes</h4>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table mb-0">
                        <thead>
                           <tr>
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Email</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>Default</td>
                              <td>Defaultson</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="e4808182a4978b898189858d88ca878b89">[email&#160;protected]</a></td>
                           </tr>
                           <tr class="table-primary">
                              <td>Primary</td>
                              <td>Doe</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="452f2a2d2b05203d24283529206b262a28">[email&#160;protected]</a></td>
                           </tr>
                           <tr class="table-secondary">
                              <td>Secondary</td>
                              <td>Moe</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="8be6eaf9f2cbeef3eae6fbe7eea5e8e4e6">[email&#160;protected]</a></td>
                           </tr>
                           <tr class="table-success">
                              <td>Success</td>
                              <td>Dooley</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="573d223b2e17322f363a273b327934383a">[email&#160;protected]</a></td>
                           </tr>
                           <tr class="table-danger">
                              <td>Danger</td>
                              <td>Refs</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="3f5d507f5a475e524f535a115c5052">[email&#160;protected]</a></td>
                           </tr>
                           <tr class="table-warning">
                              <td>Warning</td>
                              <td>Activeson</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="7514160135100d14180519105b161a18">[email&#160;protected]</a></td>
                           </tr>
                           <tr class="table-info">
                              <td>Info</td>
                              <td>Activeson</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="8eefedfaceebf6efe3fee2eba0ede1e3">[email&#160;protected]</a></td>
                           </tr>
                           <tr class="table-light">
                              <td>Light</td>
                              <td>Activeson</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="5a3b392e1a3f223b372a363f74393537">[email&#160;protected]</a></td>
                           </tr>
                           <tr class="table-dark">
                              <td>Dark</td>
                              <td>Activeson</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="7a1b190e3a1f021b170a161f54191517">[email&#160;protected]</a></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Responsive Tables</h4>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-nowrap mb-0">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Age</th>
                              <th>City</th>
                              <th>Country</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>Anna</td>
                              <td>Pitt</td>
                              <td>35</td>
                              <td>New York</td>
                              <td>USA</td>
                           </tr>
                           <tr>
                              <td>1</td>
                              <td>Anna</td>
                              <td>Pitt</td>
                              <td>35</td>
                              <td>New York</td>
                              <td>USA</td>
                           </tr>
                           <tr>
                              <td>1</td>
                              <td>Anna</td>
                              <td>Pitt</td>
                              <td>35</td>
                              <td>New York</td>
                              <td>USA</td>
                           </tr>
                           <tr>
                              <td>1</td>
                              <td>Anna</td>
                              <td>Pitt</td>
                              <td>35</td>
                              <td>New York</td>
                              <td>USA</td>
                           </tr>
                           <tr>
                              <td>1</td>
                              <td>Anna</td>
                              <td>Pitt</td>
                              <td>35</td>
                              <td>New York</td>
                              <td>USA</td>
                           </tr>
                           <tr>
                              <td>1</td>
                              <td>Anna</td>
                              <td>Pitt</td>
                              <td>35</td>
                              <td>New York</td>
                              <td>USA</td>
                           </tr>
                           <tr>
                              <td>1</td>
                              <td>Anna</td>
                              <td>Pitt</td>
                              <td>35</td>
                              <td>New York</td>
                              <td>USA</td>
                           </tr>
                           <tr>
                              <td>1</td>
                              <td>Anna</td>
                              <td>Pitt</td>
                              <td>35</td>
                              <td>New York</td>
                              <td>USA</td>
                           </tr>
                           <tr>
                              <td>1</td>
                              <td>Anna</td>
                              <td>Pitt</td>
                              <td>35</td>
                              <td>New York</td>
                              <td>USA</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection