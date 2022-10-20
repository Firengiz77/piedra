<style>
  body{
    color:black;
  }
#parent_id{
width: 250px;
  display: flex;
  margin-bottom: 20px;
  margin-top: 20px;
  height: 45px;
  background: #F95F53;
  color: #ffffff;
  border-radius: 5px;
  border: none;
  font-size: 18px;
  
}
#parent_id_id{
border-radius: 5px;
background: white;
  color: rgb(70, 66, 66);
  opacity: 0.1;
}
  </style>
@php
   $catalog2=App\Models\Catalog::get();
@endphp

 @extends('back.layout.app')

       @section('container')
       <div class="main-panel">        
         <div class="content-wrapper">
           <div class="row">
             <div class="col-md-12 grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                   <h4 class="card-title"> Edit Catalog </h4>

                   
                   <div style="margin-bottom:20px;width:50px;height:auto">
                    <label >Image</label>
                    <img class="card-img-top"  src="{{  (!empty($catalog->image)? url('upload/catalog_images/'.$catalog->image):url('upload/catalog_images/icon-admin.png')  )}}"  width="50px" height="50px">
                  </div>

                   <form class="forms-sample" method="post" action="{{ route('catalog.update',['id'=> $catalog->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="name_az">Name (az)</label>
                      <input type="text" name="name_az" class="form-control form-control-lg" id="name_az" value="{{ $catalog->name_az }}">
                  
                    </div>
    
                    <div class="form-group">
                     <label for="name_en">Name (en)</label>
                     <input type="text" name="name_en" class="form-control form-control-lg" id="name_en" value="{{ $catalog->name_en }}">
                   </div>
    
                   <div class="form-group">
                     <label for="name_ru">Name (ru)</label>
                     <input type="text" name="name_ru" class="form-control form-control-lg" id="name_ru" value="{{ $catalog->name_ru }}">
                   </div>


                  {{-- <div class="form-group">
                    <label for="parent_id">Parent_id</label>
                    @if($catalog->parent_id !== null)
                    <input type="text" name="parent_id" class="form-control form-control-lg" id="parent_id" value="{{ $catalog['catalogs']['name_az'] }}">
                    @else
                    <input type="text" name="parent_id" class="form-control form-control-lg" id="parent_id" value="0">
                   
                    @endif
                  </div> --}}

                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                  </div>

                  
                  <label for="parent_id">Parent Id:</label>

                  <select name="parent_id" id="parent_id">
                    <option value="0" id="parent_id_id" >0</option>

                    @foreach ($catalog2 as $cat )
                    @if($cat->parent_id !== null)
                    <option value=" {{ $cat->id }} "  id="parent_id_id">{{ $cat->name_az }}</option>
                    @else
                    <option value="0" id="parent_id_id" >0</option>

                    @endif

                  @endforeach

                </select>



                     <button type="submit" class="btn btn-primary me-2">Submit</button>
                
                   </form>


                 </div>

               </div>
             </div>
     
         </div>
     </div>
     </div>

 @endsection