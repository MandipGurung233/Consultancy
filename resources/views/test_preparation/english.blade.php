<!DOCTYPE html>
<html lang="en">
<head>
    <x-layouts.master/>
    <link rel="stylesheet" href="{{asset('css/test/jlpt.css')}}"> 
</head>
<body>
    <x-layouts.header/>
    <!--banner-->
<div class="header">     
    <div class="container">
        <div class="row justify-content-center slider-text align-items-center mt-6">
            <div class="col-md-6 col-lg-8 mt-10">
            <div class="text-center">
                <h1 class="mt-5" style="color: white;font-size:35px;">Learn English Language</h1>
               
                <h1 id="bann"><a href="/">Home</a>><a href="{{route('english')}}">Learn English</a></h1>
            </div>
            </div>
        </div>   
    </div>
</div>


<div class="container">
    <div class="row  align-items-center pt-5">
        <div class="col-md-10" style="float:right">
            <div>
                <h4 style="font-weight: bold;">Learn English Language</h4>
                <p>
                    Based on your current english language proficiency, we offer varied courses on english language that can help you to brush your english language skill. 
                </p>
            </div>
            <br>
         
        </div>
    </div>
</div>

    <x-layouts.footer/>
</body>
</html>