@extends('Dashboard.admin-master')
@section('admin-content')
      <div class="page-wrapper">
         <div class="content container-fluid">
            <div class="row">
               <div class="col-xl-8 offset-xl-2">
                  <div class="page-header">
                     <div class="row">
                        <div class="col">
                           <h3 class="page-title">Add Category</h3>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-body">
                        <form action="/addproduct" method="POST" enctype="multipart/form-data">
                           @csrf
                           <div class="form-group">
                              <label>Product Name</label>
                              <input class="form-control" type="text" placeholder="Enter product name" name="name">
                           </div>

                           <div class="mb-3">
                              <label for="categorySelect" class="form-label">Select Category</label>
                              <select class="form-select" id="categorySelect" aria-label="Category select"
                                 name="category">
                                 <option selected>Select a category</option>
                                 <option value="Automobile">Automobile</option>
                                 <option value="Constraction">Constraction</option>
                                 <option value="Interior">Interior</option>
                                 <option value="Computer">Computer</option>
                                 <option value="Cleaning">Cleaning</option>
                                 <option value="Electrical">Electrical</option>
                                 <option value="Carpentry">Carpentry</option>
                                 <option value="Mobile">Mobile</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label>Product Price</label>
                              <input class="form-control" type="text" placeholder="Enter product Price" name="price">
                           </div>
                           <div class="form-group">
                              <label>Product Description</label>
                              <input class="form-control" type="textarea" placeholder="Enter description"
                                 name="description">
                           </div>
                           <div class="form-group">
                              <label>Category Image</label>
                              <input class="form-control" type="file" name="gallery">
                           </div>
                           <div class="mt-4">
                              <button class="btn btn-primary" type="submit">Add Category</button>
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