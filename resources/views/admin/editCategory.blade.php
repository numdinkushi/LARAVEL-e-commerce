@extends('admin.layouts.template')
@section('page_title')
    Edit Category-kushiCom
@endsection

@section('content')
    <div class="">

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-1 mb-2"><span class="text-muted fw-light">Page/</span> Edit Category</h4>
        </div>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add new category</h5>
                    {{-- <small class="text-muted float-end">Default label</small> --}}
                </div>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('updateCategory') }}">
                        @csrf
                        <input type="hidden" value="{{$categoryInfo->id}}" name="category_id">
                        <div class="row mb-3">
                            <label class="row-sm-2 row-form-label" for="basic-default-name">Category name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="category_name" value="{{$categoryInfo->category_name}}"
                                    name="category_name" />
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
