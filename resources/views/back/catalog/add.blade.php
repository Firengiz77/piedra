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
      $id=auth()->guard('admin')->id();
         $admin=App\Models\User::find($id);
 
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
                   <h4 class="card-title"> Add Catalog  </h4>
                   <form class="forms-sample" method="post" action="{{ route('catalog.add') }}" enctype="multipart/form-data">
                       @csrf
                       <div class="form-group">
                         <label for="name_az">Name (az)</label>
                         <input type="text" name="name_az" class="form-control form-control-lg" id="name_az">
                     
                       </div>
     
                       <div class="form-group">
                        <label for="name_en">Name (en)</label>
                        <input type="text" name="name_en" class="form-control form-control-lg" id="name_en">
                      </div>

                      <div class="form-group">
                        <label for="name_ru">Name (ru)</label>
                        <input type="text" name="name_ru" class="form-control form-control-lg" id="name_ru">
                      </div>

                      {{-- <div class="form-group">
                        <label for="parent_id">Parent_id</label>
                        <input type="text" name="parent_id" class="form-control form-control-lg" id="parent_id">
                      </div>
                    


                      <div class="template-demo mt-5">
                        <div class="dropdown">
                          <button class="btn btn-danger btn-lg dropdown-toggle" type="button" id="dropdownMenuSizeButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Parent Category
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton1">
                         @foreach ($catalog as $cat )
     
                       
                          <a class="dropdown-item" >{{ $cat->name_az }}</a>
                        
                        @endforeach
                          </div>
                        </div>
                      </div> --}}
                
                

                <div class="dropdown">
                      <label  for="parent_id">Parent Id:</button>

                          <select name="parent_id" id="parent_id" >
                            @foreach ($catalog2 as $cat )

                                 @if($cat->parent_id !== null)

                                 <option value=" {{ $cat->id }} " id="parent_id_id">{{ $cat->name_az }}</option>
                                     @else

                                  <option value="0"  id="parent_id_id">0</option>

                               @endif

                          @endforeach

                        </select>
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