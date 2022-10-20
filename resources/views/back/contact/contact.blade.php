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

        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div style="display:flex;flex-direction:column"> 
                      <h4 class="card-title"> Contact </h4>
                </div>
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>  Phone Number</th>
                        <th> Email  </th>
                        <th>  Address </th>
                        <th> Edit </th>
                        <th> Delete</th>
                    
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($contacts as $contact )
                      <tr>
                        <td> {{$contact->id}} </td>
                        <td> {{$contact->phone}} </td>
                        <td> {{$contact->email}} </td>
                        <td> {{$contact->address}} </td>
                        <td><a href=" {{ route('contact.edit',['id'=>$contact->id]) }} " style="text-decoration: none;color:white"> <button class="btn btn-success btn-rounded btn-fw"> Edit  </button> </a>  </td>
                       <td><a href="{{ route('contact.delete',['id'=>$contact->id]) }}" style="text-decoration: none;color:white"> <button class="btn btn-danger btn-rounded btn-fw"> Delete  </button> </a>  </td>
                      </tr>

                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

   
    <div class="col-lg-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">

            <h4 class="card-title"> Add Contact  </h4>
            <form class="forms-sample" method="post" action="{{ route('contact.add') }}">
                @csrf
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" name="phone" class="form-control form-control-lg" id="phone">
              
                </div>

                <div class="form-group">
                 <label for="email">Email</label>
                 <input type="text" name="email" class="form-control form-control-lg" id="email">
               </div>

               <div class="form-group">
                 <label for="address">Address</label>
                 <input type="text" name="address" class="form-control form-control-lg" id="address">
               </div>

              <button type="submit" class="btn btn-primary me-2">Submit</button>
         
            </form>


          </div>
       
        </div>
      </div>


</div>


</div>
</div>



 @endsection