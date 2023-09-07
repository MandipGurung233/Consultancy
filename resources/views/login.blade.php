<!DOCTYPE html>
<html lang="en">
<head>
    <x-layouts.master/>
    <link rel="stylesheet" href="{{asset('/css/login.css')}}">
</head>
<body>
    <x-layouts.header/>
    <section>
        
       <div class="container login">
            @if (session('status'))
                <h6 style="font-size:12px;" class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div class="row justify-content-evenly llogin">
                <div class="col-md-5">
                    <img class="img-fluid images" src="{{asset('/storage/images/login.jpg')}}" alt="login image">
                </div>
                <div class="col-md-5">
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="form-group1">
                            <label for="your_name" class="labels"><span style="color: #6dabe4;"><i class="bi bi-person-fill"></i></span></label>
                            <input type="email" class="value form-control inputs" name="email" id="your_name" placeholder="your email"/>
                            <span style="color: red; font-size:12px;">@error('email'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group1">
                            <label for="your_password" class="labels"><span style="color: #6dabe4;"><i class="bi bi-unlock-fill"></i></span></label>
                            <input type="password" class="form-control inputs" name="password" id="your_password" placeholder="your password"/>
                            <span style="color: red; font-size:12px;">@error('password'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group1 form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit1" value="Admin Login"/>
                        </div>
                    </form>
                </div>
            </div>
       </div> 
    </section>
    <x-layouts.footer/>
</body>
</html>
