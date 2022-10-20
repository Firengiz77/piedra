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
                      <h4 class="card-title">Faq </h4> 
            <a style="align-self:flex-end" href="{{ route('faq.add.page') }}" class="btn btn-success"> Add Faq </a>
                </div>
            
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>
                         Sual_az
                        </th>
                        <th>
                          Sual_en
                        </th>
                        <th>
                            Sual_ru
                          </th>
                          <th>
                            Cavab_az
                          </th>
                          <th>
                            Cavab_en
                          </th>
                          <th>
                            Cavab_ru
                          </th>
                        <th>
                          Edit
                        </th>
                        <th>
                            Delete
                        </th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($faqs as $faq )
                      <tr>
                        <td> {{$faq->id}} </td>
                        <td> {{$faq->sual_az}} </td>
                        <td> {{$faq->sual_en}} </td>
                        <td> {{$faq->sual_ru}} </td>
                        <td> {{$faq->cavab_az}} </td>
                        <td> {{$faq->cavab_en}} </td>
                        <td> {{$faq->cavab_ru}} </td>
                          <td> <a href="{{ route('faq.edit.page',['id'=>$faq->id]) }}" style="text-decoration: none;color:white"> <button class="btn btn-success btn-rounded btn-fw"> Edit  </button>  </a> </td>
                        <td><a href="{{ route('faq.delete',['id'=> $faq->id]) }}" style="text-decoration: none;color:white"> <button class="btn btn-danger btn-rounded btn-fw"> Delete  </button> </a>  </td>
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