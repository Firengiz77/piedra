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
             <div class="col-md-12 grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                   <h4 class="card-title"> Edit Faq  </h4>

                   <form class="forms-sample" method="post" action="{{ route('faq.edit',['id'=> $faqs->id]) }}" >
                       @csrf

                       <div class="form-group">
                        <label for="sual_az">Sual (az)</label>
                        <input type="text" name="sual_az" class="form-control form-control-lg" id="sual_az" value="{{ $faqs->sual_az }}">
                    
                      </div>
    
                      <div class="form-group">
                       <label for="sual_en">Sual (en)</label>
                       <input type="text" name="sual_en" class="form-control form-control-lg" id="sual_en" value="{{ $faqs->sual_en }}">
                     </div>

                     <div class="form-group">
                       <label for="sual_ru">Sual (ru)</label>
                       <input type="text" name="sual_ru" class="form-control form-control-lg" id="sual_ru" value="{{ $faqs->sual_ru }}">
                     </div>

                     <div class="form-group">
                       <label for="cavab_az">Cavab (az)</label>
                       <input type="text" name="cavab_az" class="form-control form-control-lg" id="cavab_az" value="{{ $faqs->cavab_az }}">
                     </div>
                     <div class="form-group">
                       <label for="cavab_en">Cavab (en)</label>
                       <input type="text" name="cavab_en" class="form-control form-control-lg" id="cavab_en" value="{{ $faqs->cavab_en }}">
                     </div>
                     <div class="form-group">
                       <label for="cavab_ru">Cavab (ru)</label>
                       <input type="text" name="cavab_ru" class="form-control form-control-lg" id="cavab_ru" value="{{ $faqs->cavab_ru }}">
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