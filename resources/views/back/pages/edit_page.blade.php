@extends('back.layout.app')

@section('container')

<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Admin</h4>

              <div class="form-group">
                <label >Image</label>
               <img src="" alt="err">
              </div>
              
              <form class="forms-sample" method="post" action="{{route('admin.edit.all')}}" enctype="multipart/form-data">
                  @csrf
                  
                  <div class="form-group">
                    <label for="exampleInputUsername1">Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputUsername1">
                  </div>

                <div class="form-group">
                  <label for="exampleInputUsername1">Username</label>
                  <input type="text" name="name" class="form-control" id="exampleInputUsername1" placeholder="{{$admin->name}}" value="{{$admin->name}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="{{$admin->email}}" value="{{$admin->email}}">
                </div>
                
                {{-- <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Confirm Password</label>
                  <input type="password" name="confirm_password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                </div> --}}
              
                <button type="submit" class="btn btn-primary me-2">Submit</button>
           
              </form>
            </div>
          </div>
        </div>

    </div>
</div>
</div>




@endsection