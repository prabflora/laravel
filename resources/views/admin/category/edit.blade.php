@extends('admin.layout.app')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li></li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Edit Category</h5>
                                        <form   action="{{ url('admin/category',$category->id) }}" method="Post">
                                        <div class="hstack gap-3">
                                     
                                        @csrf
                                        @method('PUT')
                                           
    <input class="form-control me-auto" type="text" value="{{ $category->c_name }}" name="c_name" placeholder="Add Category" aria-label="Add Category" required>
    <input class="form-control me-auto" type="number" value="{{ $category->c_sort_order }}" name="c_sort_order" placeholder="Sort Order" aria-label="Add Category" required>
    <button type="submit" class="btn btn-secondary">Submit</button>
    <div class="vr"></div>
                                           
                                       
                                        </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>




                           
 
@endsection