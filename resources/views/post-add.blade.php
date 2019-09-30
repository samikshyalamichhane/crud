@extends('layouts.myapp');
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-center">Post Add form:</h4>
                    <hr>
                </div>
            </div>
            <div class="col-12">
            <form method="post" action="{{ route('submit-post')}}" class="form-group" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="" class="col-3">Title: </label>
                    <div class="col-9">
                        <input type="text" class="form-control form-control-sm" name="title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-3">Description: </label>
                    <div class="col-9">
                        <textarea name="description" id="description" cols="" rows="5" class="form-control form-control-sm" style="resize:none" ;></textarea>
                    </div>
                </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group ">
                <label for="" class="col-sm-12">Category: </label>
               
                    <select class="form-control form-control-sm" id="categorization_id" name="categorization_id">
                        <option value="active">Active</option>
                       <option value="inactive">Inactive</option>
                    </select>
            
            </div> 
                </div>
                <div class="col-6" >
                     <div class="form-group d-none">
                <label for="" class="col-sm-12">Sub category: </label>
               
                    <select class="form-control form-control-sm" id="sub_cat_id" name="sub_cat_id">
<option value="active">Active</option>
                       <option value="inactive">Inactive</option>
                     
                        
                    </select>
            
            </div> 
                </div>
            </div>
                <div class="form-group row">
                    <label for="" class="col-3">Status: </label>
                    <div class="col-9">
                        <select name="status" id="status" class="form-control form-control-sm">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-3">Image Uploads: </label>
                    <div class="col-9">
                       <input type="file" name="image" accept="image/*">
                    </div>
                </div>
 <div class="form-group ">
                <label for="" class="col-3">Related Images: </label>
                
                    <input type="file" name="files[]" id="images" accept="image/*" multiple>
                   
                    
                
            </div>
                
                <div class="form-group row">
                    <label for="" class="col-3"> </label>
                    <div class="col-9">
                        <button class="btn btn-success">Submit</button>
                        <button class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <script >
            $(document).ready(function(){
 $('#categorization_id').change(function(){
    var categorization_id = $('#categorization_id').val();
    // console.log(categorization_id);
    if(categorization_id){
        $.ajax({
            url: "/api/category",
            type: "post",
            data:{
                category_id:categorization_id
            },
            success:function(response){
                console.log(response);
            }
        });
    }
   });
   
});
   
</script>
<!-- <script >
    $("#categorization_id").on('change','select',function () { alert('helo'); });
</script> -->
    @endsection

