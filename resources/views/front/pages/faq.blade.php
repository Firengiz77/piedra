@extends('front.layout.app')

@foreach ($pagess as $pages )
@if($pages['id'] === 4)

@section('title', $pages['title'])
@section('description', $pages['description'])
@section('keywords', $pages['keywords'])

@endif
@endforeach

@section('content')

@php
$faqs = \App\Models\Faq::get();

$faqscollection =  \App\Http\Resources\FaqResource::collection($faqs);

$faqss = $faqscollection->toArray($faqs);


    
@endphp
        <!--Body Container-->
     
    @include('front.widget.breadcrumb',['page' => "Faq"])

        <div class="container faqs-style1">
        	<div class="page-title"><h1> @foreach ($pagess as $pages )
                @if($pages['id'] === 4)
                {{$pages['page']}}
                @endif
            @endforeach </h1></div>
            <div class="row">
            	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                	<div id="accordion">

                             @foreach ($faqss as $faq )
    
                    	<div class="card">
                        	<div class="card-header"><a class="card-link @if(!($faq['id'] === 1)) collapsed @endif" data-toggle="collapse" href="#collapse_{{$faq['id']}}" aria-expanded="false"> {{ $faq['sual'] }} </a></div>
                            <div id="collapse_{{$faq['id']}}" class="collapse @if($faq['id'] === 1) show @endif" data-parent="#accordion">
								<p></p>
                            	<p>{{$faq['cavab']}} </p>
                            </div>
                        </div>

                                  @endforeach



                    </div>
                </div>
            </div>
        </div><!--End Body Container-->



@endsection