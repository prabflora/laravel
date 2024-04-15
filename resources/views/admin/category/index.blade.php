@extends('admin.layout.app')
@section('content')
<script type="text/javascript">
    $(function() {
        $("#search_user").on("blur", function() {
            var site_url = "<?php echo base_url(); ?>";
            var u_Id = $("#search_user").val();

            $.post(site_url + "index.php/admin/ajax/search_user", {
                u_Id: u_Id
            }, function(response) {
                $("#selction-ajax").html(response.message);
                $("#hidden_id").val(response.value);

            }, "json")

        });
    });
</script>
<!-- public function search_user()
    {
        $user_id  = $this->common_lib->get_post('u_Id');
        $userlist = $this->commonm->get_all("users", array("unique_id" => $user_id), array("user_id", "pin_code", "mobile", "email", "first_name", "last_name", "address", "region_id", "unique_id"));
        if (count($userlist) > 0) {

            $message = "You have selected {$userlist[0]->unique_id} - {$userlist[0]->first_name} {$userlist[0]->user_id}";
            $value = $userlist[0]->user_id;
        } else {
            $message = " No Customer Found ";
            $value = 0;
        }
        echo json_encode(array("message" => $message, "value" => $value));
        exit;
    } -->
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
                                        <h5 class="card-title mb-4">Create Category</h5>
                                        <form   action="" method="Post">
                                        <div class="hstack gap-3">
                                     
                                             @csrf
                                           
                                             <input class="form-control me-auto" type="text" name="c_name" placeholder="Add Category" aria-label="Add Category" required>
                                             <input class="form-control me-auto" type="number" name="c_sort_order" placeholder="Sort Order" aria-label="Add Category" required>
                                             <button type="submit" class="btn btn-secondary">Submit</button>
                                             <div class="vr"></div>
                                           
                                       
                                        </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>




                            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                 
        
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>#S.No.</th>
                                                <th>Category Name</th>
                                                <th>Sort order</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            @php
                                            $count = 1;
                                            @endphp
                                            @foreach ($categories as $category)

                                              <tr>

                                                <td>{{ $count }}</td>
                                                <td>{{ $category->c_name }}</td>
                                                <td>{{ $category->c_sort_order }}</td>
       <td>
                <a href="{{url('admin/category',$category->id,)}}/edit" class="edit btn btn-outline-success waves-effect waves-light"><i class="mdi mdi-pencil font-size-18"></i></a></td>
                <td>
                <form action="{{url('admin/category',$category->id)}}" method="POST">
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