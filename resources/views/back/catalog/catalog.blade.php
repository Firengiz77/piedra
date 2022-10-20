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
                      <h4 class="card-title"> Catalog </h4>
                      <a style="align-self:flex-end" href="{{ route('catalog.add.page') }}" class="btn btn-success"> Add Catalog </a>

                </div>
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>  Name (az)</th>
                        <th> Name (en)  </th>
                        <th>  Name (ru) </th>
                        <th>  Parent_id </th>
                        <th> Image </th>
                        <th> Edit </th>
                        <th> Delete</th>
                    
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($catalogs as $catalog )
                      <tr>
                        <td> {{$catalog->id}} </td>
                        <td> {{$catalog->name_az}} </td>
                        <td> {{$catalog->name_en}} </td>
                        <td> {{$catalog->name_ru}} </td>
                        <td>

                          @if($catalog->parent_id === null ) 
                          0
                          @else
                          {{  $catalog->parent_id  }}
                        @endif
                        
                        </td>

                        <td>

                          <img class="card-img-top" src="{{  (!empty($catalog->image)? url('upload/catalog_images/'.$catalog->image):url('upload/catalog_images/icon-admin.png')  )}}"  width="50px" height="50px">
                
                        </td>

                        <td><a href="{{ route('catalog.edit',['id' => $catalog->id]) }}" style="text-decoration: none;color:white"> <button class="btn btn-success btn-rounded btn-fw"> Edit  </button> </a>  </td>
                       <td><a href="{{ route('catalog.delete',['id'=>$catalog->id]) }}" style="text-decoration: none;color:white"> <button class="btn btn-danger btn-rounded btn-fw"> Delete  </button> </a>  </td>
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



 @endsection