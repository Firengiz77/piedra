@extends('back.layout.app')

@section('container')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div style="display:flex;flex-direction:column">   <h4 class="card-title">All Admins </h4> 
                  <a style="align-self:flex-end" href="{{route('admin.register.page')}}" class="btn btn-success"> Add Admin </a>
                </div>
                
              
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>
                         Name
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Delete
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($admins as $admin )
                      <tr>
                        <td> {{$admin->id}} </td>
                        <td> {{$admin->name}} </td>
                        <td> {{$admin->email}} </td>
                        <td> <a href="{{route('admin.delete',['id'=>$admin->id])}}" style="text-decoration: none;color:white"> <button class="btn btn-danger btn-rounded btn-fw"> Delete  </button> </a> </td>
                      </tr>
                      @endforeach
                  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

    </div>
</div>
</div>







@endsection