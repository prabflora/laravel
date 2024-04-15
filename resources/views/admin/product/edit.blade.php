@extends('admin.layout.app')
@section('content')

<div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Add Product</h4>

            
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<div class="row ">
                             
 
<div class="col-xl-12" style="margin:0px auto">
                                <div class="card">
                                    <div class="card-body">
                                       <form   action="{{ url('admin/product', $product->p_id) }}" method="Post" enctype="multipart/form-data">
                                       @csrf
                                        @method('PUT')
                                        <div class="row">
                                                <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                <input type="text" name="p_name" value="{{ $product->p_name }}" class="form-control" id="floatingnameInput" placeholder="Enter Name">
                                                <label for="floatingnameInput">Product Name</label>
                                            </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                <input type="text" name="p_slug" value="{{ $product->p_slug }}" class="form-control" id="floatingnameInput" placeholder="Enter Name">
                                                <label for="floatingnameInput">Product Slug</label>
                                            </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                <div class="form-floating mb-3">
  <textarea class="form-control" placeholder="Enter the product description here" id="floatingTextarea2" style="height: 100px" name="p_desc">{{ $product->p_desc }}</textarea>
  <label for="floatingTextarea2">Product Description</label>
</div>
</div>
                                    <div class="row">


                                            <div class="col-md-4">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" name="c_id" id="floatingSelectGrid" aria-label="Floating label select example">
                                                        @foreach ($product->categories as $category)
                                                            <option value="{{ $category->id }}"  @if($category->id == $product->c_id) {{ "selected" }} @endif > {{ $category->c_name }}</option>
                                                        @endforeach
                                                        </select>
                                                        <label for="floatingSelectGrid">Select Category</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" name="p_price" value="{{ $product->p_price }}" class="form-control" id="floatingemailInput" placeholder="Enter Email address">
                                                        <label for="floatingemailInput">Price</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" name="p_sort_order" value="{{ $product->p_sort_order }}" class="form-control" id="floatingemailInput" placeholder="Enter Email address">
                                                        <label for="floatingemailInput">Sort Order</label>
                                                    </div>
                                                </div>


                                               

                                            </div>

                                           


                                                <div class="col-md-4">
                                                <div class="mb-3">
                                                            <label for="formFileLg" class="form-label">Product Image</label>
                                                            <input class="form-control form-control-lg" id="formFileLg" name="p_image" type="file">
                                                           
                                                        </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div  style="padding-top:32px"><img width="60" src="{{ Storage::url('products/'.$product->p_image) }}"></div></div>
                                                <div class="col-md-7">
                                                <div class="mt-3">
                                                            <label for="formFileLg" class="form-label">Status</label>
                                                <div class="square-switch">
                                                            <input type="checkbox" name="is_active" id="square-switch3" switch="bool" value="1" checked="">
                                                            <label for="square-switch3" data-on-label="Yes" data-off-label="No"></label>
                                                        </div>
                                                     </div>
                                            </div>


  
                                            <div>
                                                
                                                <button type="submit" class="btn btn-primary w-md">Submit</button> &nbsp; &nbsp;
                                                <a href="{{ url('admin/product') }}" class="btn btn-warning waves-effect waves-light" style="width:120px">Back</a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>




                           
 
@endsection