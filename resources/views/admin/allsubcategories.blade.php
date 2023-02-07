@extends('admin.layouts.template')
@section('page_title')
    All sub Category-kushiCom
@endsection

@section('content')
    <div>
        <div class="container">
            <div class="nav-item d-flex align-items-center"
                style="background-color: white; padding-left:10px; border-radius:4px;">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                    aria-label="Search..." />
            </div>
        </div>
    </div>
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Sub category</h5>
        {{-- <small class="text-muted float-end">Default label</small> --}}
    </div>
    <div style="margin-top:10px;">
        <div class="card">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <h5 class="card-header">All sub categories</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Sub Category name</th>
                            <th>category</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        @foreach ($allSubcategories as $subcategory)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$subcategory->id}}</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$subcategory->subcategory_name}}</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$subcategory->category_name}}</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$subcategory->product_count}}</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <a href="{{route('editSubcat', $subcategory->id)}}" class="btn btn-primary">Edit</a> <a href="{{route('deleteSubcat', $subcategory->id)}}"  class='btn btn-danger'>Delete</a> </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
