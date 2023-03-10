@extends('admin.layouts.template')
@section('page_title')
    All Categorues-kushiCom
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
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
                </div>          
        @endif
            <h5 class="card-header">All Categories</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
            

                        <tr>
                            <th>Id</th>
                            <th>Category name</th>
                            <th>Sub category</th>
                            <th>Slug</th>
                            <th>Actions</th>
                        </tr>
                 
                    </thead>
                    <tbody class="table-border-bottom-0">

                        @foreach ($categories as $category)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$category->id}}</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$category->category_name}}</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$category->subcategory_count}}</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$category->slug}}</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <a href="{{route('editCategory', $category->id)}}" class="btn btn-primary">Edit</a> <a href="{{route('deleteCategory', $category->id)}}"  class='btn btn-danger'>Delete</a> </td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
