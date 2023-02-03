@extends('admin.layouts.template')
@section('page_title')
All products-kushiCom
@endsection


@section('content')
<div>
    <div class="container"  >
        <div class="nav-item d-flex align-items-center" style="background-color: white; padding-left:10px; border-radius:4px;">
            <i class="bx bx-search fs-4 lh-0"></i>
            <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                aria-label="Search..." />
        </div>
    </div>
</div>
<div class="card-header d-flex align-items-center justify-content-between">
    <h5 class="mb-0">Add new category</h5>
    {{-- <small class="text-muted float-end">Default label</small> --}}
  </div>
<div style="margin-top:10px;">
    <div class="card">

            <h5 class="card-header">Light Table head</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Product name</th>
                            <th> Image</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Fan</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong></strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>100</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <a href="" class="btn btn-primary">Edit</a> <a href=""  class='btn btn-danger'>Delete</a> </td>
                        </tr>
                       
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
