@extends('Dashboard.admin-master')
@section('admin-content')
         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="row">
                  <div class="col-xl-8 offset-xl-2">
                     <div class="page-header">
                        <div class="row">
                           <div class="col">
                              <h3 class="page-title">Edit Category</h3>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-body">
                           <form action="" method="POST" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')
                              <div class="form-group">
                                 <label>Product Name</label>
                                 <input class="form-control" type="text" name="name" >
                              </div>
                              <div class="form-group">
                                 <label>Product Price</label>
                                 <input class="form-control" type="text" name="price">
                              </div>
                              <div class="form-group">
                                 <label>Product Description</label>
                                 <input class="form-control" type="text" name="description">
                              </div>
                              <div class="form-group">
                                 <label>Category Image</label>
                                 <input class="form-control" type="file" name="category">
                              </div>
                              <div class="form-group">
                                 <div class="avatar">
                                    <img class="avatar-img rounded" alt src="assets/img/category/category-01.jpg">
                                 </div>
                              </div>
                              <div class="mt-4">
                                 <button class="btn btn-primary" type="submit">Save Changes</button>
                                 <a href="categories" class="btn btn-link">Cancel</a>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
  @endsection