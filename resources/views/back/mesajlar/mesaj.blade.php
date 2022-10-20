<style>
    body{
      color:black;
    }
</style>
 
@extends('back.layout.app')

@section('container')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div style="display:flex;flex-direction:column"> 
                      <h4 class="card-title"> Messages </h4> 
                </div>
            
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>  Name</th>
                        <th> Surname  </th>
                        <th>  Email </th>
                        <th> Phone Number </th>
                        <th> Messages </th>
                        <th> Delete</th>
                    
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($messages as $message )
                      <tr>
                        <td> {{$message->id}} </td>
                        <td> {{$message->name}} </td>
                        <td> {{$message->surname}} </td>
                        <td> {{$message->email}} </td>
                        <td> {{$message->phone}} </td>
                        <td> {{$message->msj}} </td>
                       <td><a href="{{ route('messages.delete',['id'=>$message->id]) }}" style="text-decoration: none;color:white"> <button class="btn btn-danger btn-rounded btn-fw"> Delete  </button> </a>  </td>
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