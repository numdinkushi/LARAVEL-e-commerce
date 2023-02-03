@extends('admin.layouts.template')

@section('page_title')
Add product-kushiCom
@endsection


@section('content')
 <div class="" >

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-1 mb-2"><span class="text-muted fw-light">Page/</span> Add Product</h4>
            </div>
                  <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Add new product</h5>
            {{-- <small class="text-muted float-end">Default label</small> --}}
          </div>
          <div class="card-body">
            <form method="POST" action="">
        
              <div class="row mb-3">
                <label class="row-sm-2 row-form-label" for="basic-default-name">Product name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="category_name" placeholder="electronics" name="category_name" />
                </div>
              </div>
           
              <div class="row mb-3">
                <label class="row-sm-2 row-form-label" for="basic-default-name">Product price</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="category_name" placeholder="100" name="category_name" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="row-sm-2 row-form-label" for="basic-default-name">Product quantity</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="category_name" placeholder="100" name="category_name" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="row-sm-2 row-form-label" for="basic-default-name">Long description</label>
                <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>                </div>
              </div>

              <div class="row mb-3">
                <label class="row-sm-2 row-form-label" for="basic-default-name">Long description</label>
                <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>                </div>
              </div>
             
             
              <div class="row mb-3">
                <label class="row-sm-2 row-form-label" for="basic-default-name">Select category</label>
                <div class="col-sm-10">
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option selected>Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                  <!-- <input type="text" class="form-control" id="category_name" placeholder="electronics" name="category_name" /> -->
                </div>
              </div>

              <div class="row mb-3">
                <label class="row-sm-2 row-form-label" for="basic-default-name">Select subcategory</label>
                <div class="col-sm-10">
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option selected>Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                  <!-- <input type="text" class="form-control" id="category_name" placeholder="electronics" name="category_name" /> -->
                </div>
              </div>

              <div class="mb-3">
                        <label for="formFile" class="form-label">Upload product image</label>
                        <input class="form-control" type="file" id="formFile" />
                      </div>

              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
              </div>
            </form>
          </div>
        </div>
 </div>
@endsection