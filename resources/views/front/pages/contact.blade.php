@extends('front.layout.app')

@foreach ($pagess as $pages )
@if($pages['id'] === 2)

@section('title', $pages['title'])
@section('description', $pages['description'])
@section('keywords', $pages['keywords'])

@endif
@endforeach

@toastr_css

@section('content')


  <!--Body Container-->

  @include('front.widget.breadcrumb',['page' => "Contact Us"])

    
        <div class="container">
        	<div class="page-title"><h1> @foreach ($pagess as $pages )
                @if($pages['id'] === 2)
                {{$pages['page']}}
                @endif
            @endforeach</h1></div>
            <div class="row">
            	<div class="col-12 col-sm-12 col-md-8 col-lg-8 mb-4">
                	<h2>Drop Us A Line</h2>
                    <p>Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500 </p>
                	<div class="formFeilds contact-form form-vertical">
                      <form action="{{ route('messages.add') }}" name="contactus" method="post" id="contact_form" class="contact-form">	
                        @csrf  
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" id="ContactFormName" name="name" placeholder="Name" value="">
                                    <span class="error_msg" id="name_error"></span>    
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" id="ContactSubject" name="surname" placeholder="Surname" value="">
                                    <span class="error_msg" id="subject_error"></span>
                                </div>

                            </div>
                          </div>
                          <div class="row">
                              <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="tel" id="ContactFormPhone" name="phone" placeholder="Phone Number"  />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-6 col-lg-6">

                                <div class="form-group">
                                    <input type="email" id="ContactFormEmail" name="email" placeholder="Email" value="">                        	
                                    <span class="error_msg" id="email_error"></span>
                                </div>

                              </div>
                          </div>
                          <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <textarea rows="10" id="ContactFormMessage" name="msj" placeholder="Your Message"></textarea>
                                    <span class="error_msg" id="message_error"></span>
                                </div>
                            </div>  
                          </div>
                          <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="mailsendbtn">
                                    <input class="btn" type="submit" name="contactus" value="Send Message" />
                                  
                                </div>
                            </div>
                         </div>
                     </form>
                        <div class="response-msg"></div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                	<div class="contact-details">
                        <ul class="addressFooter">
                            <li><i class="icon anm anm-map-marker-al"></i><p>{{ $contact->address }}</p></li>
                            <li class="phone"><i class="icon anm anm-phone-s"></i><p>{{ $contact->phone }}</p></li>
                            <li class="email"><i class="icon anm anm-envelope-l"></i><p>{{ $contact->email }}</p></li>
                        </ul>
                        <hr>
                        <ul class="list--inline site-footer__social-icons social-icons">
                            <li><a class="social-icons__link" href="#" target="_blank" title="Facebook"><i class="icon icon-facebook"></i></a></li>
                          <li><a class="social-icons__link" href="#" target="_blank" title="Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>

                        </ul>
                    </div>
                </div>
            </div>
          
        </div><!--End Body Container-->



        @jquery
        @toastr_js
        @toastr_render
      
@endsection