@extends('front.layout.app')

@foreach ($pagess as $pages )
@if($pages['id'] === 3)

@section('title', $pages['title'])
@section('description', $pages['description'])
@section('keywords', $pages['keywords'])

@endif
@endforeach


@section('content')

        <!--Body Container-->
     
    @include('front.widget.breadcrumb',['page' => "About Us"])

        <div class="container">
        	<div class="page-title"><h1> @foreach ($pagess as $pages )
                @if($pages['id'] === 3)
                {{$pages['page']}}
                @endif
            @endforeach</h1></div>
			<div class="top-text-block">
            	<p class="mb-4">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            

                
            </div>
        	<div class="row">
            	<div class="col-12 text-center mt-3 mb-3">
                	<img src="{{asset('front/images/about-img.jpg')}}" alt=""/>
                </div>
            </div>
            <div class="row mt-3">
            	<div class="col-4 col-sm-3 col-md-3 col-lg-3 text-center">
                	<h3><b>Why We</b></h3>
                </div>
                <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                	<p>Avone comes with easy-to-use interface and outstanding support. You can implement your own design. You can easily change the store's appearance as per your requirements using our ready sections and options available.You can implement your own design. You can easily change the store's appearance as per your requirements using our ready sections and options available.</p>
                </div>
            </div>
            <div class="row mt-4">
            	<div class="col-4 col-sm-3 col-md-3 col-lg-3 text-center">
                	<h3><b>Our Vision</b></h3>
                </div>
                <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                	<p>Vestibulum ultricies aliquam convallis. Maecenas ut tellus mi. Proin tincidunt, lectus eu volutpat mattis, ante metus lacinia tellus, vitae condimentum nulla enim bibendum nibh. Praesent turpis risus, interdum nec venenatis id, pretium sit amet purus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
            </div>
            <div class="row mt-4">
            	<div class="col-4 col-sm-3 col-md-3 col-lg-3 text-center">
                	<h3><b>Our Mission</b></h3>
                </div>
                <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                	<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sunt in culpa qui officia deserunt mollit anim id est laborum. sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="row mt-4">
            	<div class="col-4 col-sm-3 col-md-3 col-lg-3 text-center">
                	<h3><b>Contact Us</b></h3>
                </div>
                <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                	<p><strong>55 Gallaxy Enque,</strong><br>2568 steet, 23568 NY</p>
                    <p><strong>Phone</strong> : (440) 000 000 0000 <br><strong>Email</strong>: sales@yousite.com</p>
                </div>
            </div>
           

            
        </div><!--End Body Container-->




@endsection