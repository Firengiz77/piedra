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
                      <h4 class="card-title"> Məhsullar </h4>
                      <a style="align-self:flex-end" href="{{ route('product.add.page') }}" class="btn btn-success"> Add Catalog </a>

                </div>
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>  Name (az)</th>
                        <th>  Name (en)  </th>
                        <th>  Name (ru) </th>
                        <th>  Catalog_id </th>
                        <th> Thumbnail </th>
                        <th> Edit </th>
                        <th> Delete</th>
                    
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($products as $product )
                      <tr>
                        <td> {{$product->id}} </td>
                        <td> {{$product->name_az}} </td>
                        <td> {{$product->name_en}} </td>
                        <td> {{$product->name_ru}} </td>
                        <td>

                          @if($product->catalog_id === null ) 
                          0
                          @else
                          {{  $product->catalog_id  }}
                        @endif
                        
                        </td>

                        <td>
                          <img class="card-img-top" src="{{  (!empty($product->thumbnail)? url('upload/product_images/'.$product->thumbnail):url('upload/product_images/icon-admin.png')  )}}"  width="50px" height="50px">
                
                        </td>
                     

                        <td><a href="{{ route('product.edit',['id'=>$product->id]) }}" style="text-decoration: none;color:white"> <button class="btn btn-success btn-rounded btn-fw"> Edit  </button> </a>  </td>
                       <td><a href="{{ route('product.delete',['id'=> $product->id]) }}" style="text-decoration: none;color:white"> <button class="btn btn-danger btn-rounded btn-fw"> Delete  </button> </a>  </td>
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