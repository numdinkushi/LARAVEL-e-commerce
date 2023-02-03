@extends('admin.layouts.template')
@section('page_title')
Add Category-kushiCom
@endsection

@section('content')
 <div class="" >

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-1 mb-2"><span class="text-muted fw-light">Page/</span> Add Category</h4>
            </div>
                  <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Add new category</h5>
            {{-- <small class="text-muted float-end">Default label</small> --}}
          </div>
          <div class="card-body">
            <form method="POST" action="">
              <div class="row mb-3">
                <label class="row-sm-2 row-form-label" for="basic-default-name">Category name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="category_name" placeholder="electronics" name="category_name" />
                </div>
              </div>
              {{-- <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Company</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control"
                    id="basic-default-company"
                    placeholder="ACME Inc."
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <input
                      type="text"
                      id="basic-default-email"
                      class="form-control"
                      placeholder="john.doe"
                      aria-label="john.doe"
                      aria-describedby="basic-default-email2"
                    />
                    <span class="input-group-text" id="basic-default-email2">@example.com</span>
                  </div>
                  <div class="form-text">You can use letters, numbers & periods</div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    id="basic-default-phone"
                    class="form-control phone-mask"
                    placeholder="658 799 8941"
                    aria-label="658 799 8941"
                    aria-describedby="basic-default-phone"
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-message">Message</label>
                <div class="col-sm-10">
                  <textarea
                    id="basic-default-message"
                    class="form-control"
                    placeholder="Hi, Do you have a moment to talk Joe?"
                    aria-label="Hi, Do you have a moment to talk Joe?"
                    aria-describedby="basic-icon-default-message2"
                  ></textarea>
                </div>
              </div> --}}
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Add Category</button>
                </div>
              </div>
            </form>
          </div>
        </div>
 </div>
@endsection