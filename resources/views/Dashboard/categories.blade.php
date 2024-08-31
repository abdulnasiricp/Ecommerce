@extends('Dashboard.admin-master')
@section('admin-content')

<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Categories</h3>
            </div>
            <div class="col-auto text-right">
               <!-- <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search">
                  <i class="fas fa-filter"></i>
               </a> -->
               <a href="add-category" class="btn btn-primary add-button ml-3">
                  <i class="fas fa-plus"></i>
               </a>
            </div>
         </div>
      </div>
      <div class="card filter-card" id="filter_inputs">
         <div class="card-body pb-0">
            <form action="#" method="post">
               <div class="row filter-row">
                  <div class="col-sm-6 col-md-3">
                     <div class="form-group">
                        <label>Category</label>
                        <select class="form-control select">
                           <option>Select category</option>
                           <option>Automobile</option>
                           <option>Construction</option>
                           <option>Interior</option>
                           <option>Cleaning</option>
                           <option>Electrical</option>
                           <option>Carpentry</option>
                           <option>Computer</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                     <div class="form-group">
                        <label>From Date</label>
                        <div class="cal-icon">
                           <input class="form-control datetimepicker" type="text">
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                     <div class="form-group">
                        <label>To Date</label>
                        <div class="cal-icon">
                           <input class="form-control datetimepicker" type="text">
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                     <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-hover table-center mb-0 datatable">
                        <thead>
                           <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Category</th>
                              <th>Price</th>
                              <th class="text-end">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($products as $item)
                        <tr>
                          <td>
                            <div class="trending-item">
                              <img src="{{ asset($item['gallery']) }}" style="height:150px;width:150px;">
                            </div>

                          </td>
                          <td>
                            <p>{{$item['name']}}</p>
                          </td>
                          <td>
                            <p>{{$item['category']}}</p>
                          </td>
                          <td>
                            <p>{{$item['price']}}</p>
                          </td>
                          <td class="text-end">
                            <a href="edit-category"  class="btn btn-sm bg-success-light mr-2"> <i
                                 class="far fa-edit mr-1"></i> Edit</a>
                          </td>
                        </tr>
                     @endforeach
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