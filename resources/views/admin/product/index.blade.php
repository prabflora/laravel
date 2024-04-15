@extends('admin.layout.app')
@section('content')


<div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Products</h4>

                                    <div class="page-title-right">
                                         <a href="{{ url('admin/product/create') }}" class="btn btn-success w-lg waves-effect waves-light">Add Product</a>
                                    </div>

                                </div>
                            </div>


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
 



                            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                 
        
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>#S.No.</th>
                                                <th>Product Name</th>
                                                <th>Slug</th>
                                                <th>Category name</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Sort order</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            @php
                                            $count = 1;
                
                                            @endphp
                                            @foreach ($products as $product)
                                            
                                              <tr>

                                                <td>{{ $count }}</td>
                                                <td>{{ $product->p_name }}</td>
                                                <td>{{ $product->p_slug }}</td>
                                                <td>{{ $product->c_name }}</td>
                                                <td><img width="60" src="{{ Storage::url('products/'.$product->p_image) }}"></td>
                                                <td>{{ $product->is_active }}</td>
                                                <td>{{ $product->p_sort_order }}</td>
       <td>
                <a href="{{url('admin/product',$product->p_id,)}}/edit" class="edit btn btn-outline-success waves-effect waves-light"><i class="mdi mdi-pencil font-size-18"></i></a></td>
                <td>
                <form action="{{url('admin/product',$product->p_id)}}" method="POST">
                @method('DELETE')
 @csrf
 <button type="submit" class="edit btn btn-outline-danger waves-effect waves-light"> <i class="mdi mdi-delete font-size-18"></i></button></form></td>
       </tr>
                                             
                                                    @php
                                                $count++;
                                                @endphp

                                            @endforeach
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
 
@endsection