<!DOCTYPE html>
<html lang="en">
<head>
    <x-layouts.master/>
    <link rel="stylesheet" href="{{asset('css/contact.css')}}"> 
</head>
<body>
    <x-layouts.header/>
    

<!--banner-->
<div class="header">     
    <div class="container">
        <div class="row justify-content-center slider-text align-items-center mt-6">
            <div class="col-md-6 col-lg-8 mt-10">
            <div class="text-center">
                <h1 class="mt-5" style="color: white;font-size:35px;">Contact Us</h1>
               
                <h1 id="bann"><a href="/">Home</a>><a href="{{route('contact')}}">Contact</a></h1>
            </div>
            </div>
        </div>   
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center" id="contact">
        <div class="col-md-5 col-10" id="contacttxt">

            <div class="row justify-content-center" id="contactRow1">
                <div class="col-md-12" id="contactCol1">
                    <div class="row justify-content-center">
                        <div class="col-md-4 text-center img">
                            <i class="bi bi-geo-alt iconned"></i>
                        </div>
                        <div class="col-md-7 text-center" id="contacttxt">
                            <h4>Company Address</h4>
                            <p>Chuchepati-Chabahil, Nepal</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center" id="contactRow1">
                <div class="col-md-12" id="contactCol1">
                    <div class="row justify-content-center">
                        <div class="col-md-4 text-center img">
                            <i class="bi bi-envelope iconned"></i>
                        </div>
                        <div class="col-md-7 text-center" id="contacttxt">
                            <h4>Company Email</h4>
                            <a href="#"><p class="email">aakaruimultiways@gmail.com</p></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center" id="contactRow1">
                <div class="col-md-12" id="contactCol1">
                    <div class="row justify-content-center">
                        <div class="col-md-4 text-center img">
                            <i class="bi bi-telephone iconned"></i>
                        </div>
                        <div class="col-md-7 text-center" id="contacttxt">
                            <h4>Call Us !</h4>
                            <p>9843660096</p>
                        </div>
                    </div>
                </div>
            </div>
  
        </div>
        <div class="col-md-5 col-10" id="contactright">
            <h3>Get In Touch</h3>
            @if($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    <span style="color: red; font-size:15px;">{{$error}}</span>
                </div>
                @endforeach
            @endif
            @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif
            <form action="{{route('contacts')}}" method="post">
                @csrf
                <div class="form" >
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control space space1" id="exampleFormControlInput1" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <input type="integer" name="number" class="form-control space" id="exampleFormControlInput1" placeholder="Number">
                        </div>
                    </div>

                    <div class="mb-5">
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-5">
                        <textarea class="form-control formcontrol" name="textarea" id="exampleFormControlInput1" rows="5" placeholder="Your Query"></textarea>
                    </div>
                </div>
                
                <button type="submit" class="btn" id="contactBtn">Submit</button>
            </form>
        </div>
    </div>
</div>


    <x-layouts.footer/>
</body>
</html>