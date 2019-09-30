@extends('layouts.myapp')
@section('content')
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-center">Post Add form:</h4>
                    <hr>
                </div>
            </div>
            <div class="col-12">
            <form method="post" action="{{url('post/update')}}" class="form-group">
                @csrf
                <input hidden type="text" value="{{$post_data->id}}" name="id">

                <div class="form-group row">
                    <label for="" class="col-3">Title: </label>
                    <div class="col-9">
                        <input type="text" class="form-control form-control-sm" name="title" value="{{$post_data->title}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-3">Description: </label>
                    <div class="col-9">
                        <textarea name="description" id="description" cols="" rows="5" class="form-control form-control-sm" style="resize:none" ;>{{$post_data->description}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-3">Status: </label>
                    <div class="col-9">
                        <select name="status" id="status" class="form-control form-control-sm">
                            <option value="active"@if($post_data->status=='active'){{"selected"}} @endif>Active</option>
                            <option value="inactive"@if($post_data->status=='inactive'){{"selected"}} @endif>Inactive</option>
                        </select>
                    </div>
                </div>
                 <div class="form-row">
                <label class="col-3">Profile Image:</label>
                <div class="col-9">
                    <input type="file" name="image" accept="image/*" value="<img src="{{$post_data->image}}">" @if(isset($post_data->image)) {{asset('uploads/'.$post_data->image)}} @endif>
            </div>
            </div>

                
                <div class="form-group row">
                    <label for="" class="col-3"> </label>
                    <div class="col-9">
                        <button class="btn btn-warning">Update</button>
                        <button class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    @endsection