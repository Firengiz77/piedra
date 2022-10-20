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
                   <h4 class="card-title"> Edit Contact </h4>

                   <form class="forms-sample" method="post" action="{{ route('contact.update',['id'=> $contact->id]) }}" >
                    @csrf
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" name="phone" class="form-control form-control-lg" id="phone" value="{{ $contact->phone }}">
                  
                    </div>
    
                    <div class="form-group">
                     <label for="email">Email</label>
                     <input type="text" name="email" class="form-control form-control-lg" id="email" value="{{ $contact->email }}">
                   </div>
    
                   <div class="form-group">
                     <label for="address">Address</label>
                     <input type="text" name="address" class="form-control form-control-lg" id="address" value="{{ $contact->address }}">
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