 @extends('head_foot')
 @section('main_content')
 
 <!-- Contact-->
 <section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->







            @if(isset($contactController))
            <!--my error is contactController -> contactcontroller  (controller ke c caoptal the small likh diye)-->
            <form  id="contactForm" action="{{route('contact.update'),$contactController['id']}}"  method="POST">     
                @else
                <form method="POST" id="contactForm" action="{{route('contact.store')}}">
                    
                @endif
     
                @csrf
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                    <!--error message-->
                    @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                        <!-- Name input-->
                        <input class="form-control" id="name"name="username" value="@isset($contactcontroller['username']) {{ $contactcontroller['username'] }} @endisset" type="text" placeholder="Your Name *" data-sb-validations="required"/>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div> 
                    <div class="form-group">
                          <!--error message-->
                    @error('emailadd')
                       <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                        <!-- Email address input-->
                        <input class="form-control" id="email"   type="email" name="emailadd" placeholder="Your Email *" data-sb-validations="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-group mb-md-0">
                          <!--error message-->
                            @error('phno')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        <!-- Phone number input-->
                        <input class="form-control" id="phone" name="phno" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                          
                        <!-- Message input-->
                        <textarea class="form-control" id="message" name="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                     <!--error message-->
                     @error('message')
                     <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br />
                    <a href="{{URL::asset('frontend/https://startbootstrap.com/solution/contact-forms')}}"> </a>
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
            <!-- Submit Button-->
        <div class="text-center">
            <button class="bg-primary btn-xl text-uppercase disabled text-white" id="submitButton" type="submit">Send Message</button>
        </div>
      
        </form>
    </div>
</section>
@endsection