<!DOCTYPE html>
<html lang="en">
<head>
    <x-layouts.master/>
    <link rel="stylesheet" href="{{asset('css/service.css')}}">
</head>
<body>
   <x-layouts.header/>


<!--banner-->
<div class="header">     
    <div class="container">
        <div class="row justify-content-center slider-text align-items-center mt-6">
            <div class="col-md-6 col-lg-8 mt-10">
            <div class="text-center">
                
                <h1 class="mt-5" style="color: white;font-size:35px;">Services we Provide</h1>
                <h1 id="bann"><a href="/">Home</a>><a href="{{route('service')}}">Service</a></h1>
            </div>
            </div>
        </div>   
    </div>
</div>
        <!--why us 2nd div-->
        <div class="container-fluid">

                    <div class="row justify-content-evenly" id="innerRow1">
                        <div class="col-md-5" id="innCol1">
                            <div class="row justify-content-center">
                                <div class="col-md-5 img d-none d-md-block">
                                  
                                    <img src="{{asset('/storage/images/carear.png')}}" alt="image" class="img-fluid">
                                </div>
                                <div class="col-md-6" id="innertxt">
                                    <h5>Course-Counselling</h5>
                                    <p>We are a group of knowledgeable Japanese education advisers with experience helping students locate and select courses that pique their interest and have a higher likelihood of being hired in Japan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5" id="innCol1">
                            <div class="row justify-content-evenly">
                                <div class="col-md-4 img d-none d-md-block">
                                    <img src="{{asset('/storage/images/process.png')}}" alt="image" class="img-fluid">
                                </div>
                                <div class="col-md-7" id="innertxt">
                                    <h5>Processing</h5>
                                    <p>Because of the extensive assistance we offer to make sure your applications are completed on time and with the correct information, we are considered as the best consulting. There is no space for error, too.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-evenly" id="innerRow2">
                        <div class="col-md-5" id="innCol1">
                            <div class="row justify-content-evenly">
                                <div class="col-md-4 img d-none d-md-block">
                                    <img src="{{asset('/storage/images/document.png')}}" alt="image" class="img-fluid">
                                </div>
                                <div class="col-md-7" id="innertxt">
                                    <h5>Documentation</h5>
                                    <p>Utilize our counselors' experienced guidance and tips to produce flawless paperwork on time and with little effort.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5" id="innCol1">
                            <div class="row justify-content-evenly">
                                <div class="col-md-4 d-none d-md-block img">
                                    <img src="{{asset('/storage/images/language.png')}}" alt="image" class="img-fluid">
                                </div>
                                <div class="col-md-7" id="innertxt">
                                    <h5>Language classes</h5>
                                    <p>We offer language classes for Japan and Korea. We prepare student for different test like NAT, JLPT, EPS and so on.</p>
                                </div>
                            </div>
                        </div>

                    </div>
           
        </div>


        

<!--4th div-->
<!--How we work-->
<div class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-10 heading-section text-center mt-0">
            <h1>How we work !</h1>
        </div>
    </div>

    <div class="row justify-content-center" id="impt">

        <div class="col-md-5 d-none d-md-block imptimgs">
            <img src="{{asset('/storage/images/counsel.png')}}" alt="" class="img-fluid">
        </div>

        <div class="col-md-5 col-10" id="impttxt">
            
            <div class="row justify-content-evenly" id="innerRows">
                <div class="col-md-12" id="innCols">
                    <div class="row justify-content-center">
                        <div class="col-4 number">
                            <h4></h4>
                            <h5>01</h5>
                        </div>
                        <div class="col-8" id="innertxts">
                            <h2>Counselling</h2>
                            <p>In order to determine your eligibility for various courses, we consider your abilities and aspirations in relation to your accomplishments.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>    
    </div>

    <div class="row justify-content-end" id="imptSec">
        <div class="col-md-5 col-10" id="impttxtSec">
            
            <div class="row justify-content-evenly" id="innerSec">
                <div class="col-md-12" id="innColsSec">
                    <div class="row justify-content-center">
                        <div class="col-4 numberSec">
                            <h4></h4>
                            <h5>02</h5>
                        </div>
                        <div class="col-8" id="innertxtsSec">
                            <h2>Test-Preparation</h2>
                            <p>Your career, level of Japanese ability, and your goals will all influence the format and content of your Japanese training course. No matter what level you are at—beginner,intermediate, or advanced—we provide you confidence and satisfaction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
        <div class="col-md-5 d-none d-md-block imptimgsSec">
            <img src="{{asset('/storage/images/test.png')}}" alt="" class="img-fluid">
        </div>
    </div>


    <div class="row justify-content-center" id="impt">

        <div class="col-md-5 d-none d-md-block imptimgs">
            <img src="{{asset('/storage/images/uni.png')}}" alt="" class="img-fluid">
        </div>

        <div class="col-md-5 col-10" id="impttxt">
            
            <div class="row justify-content-evenly" id="innerRows">
                <div class="col-md-12" id="innCols">
                    <div class="row justify-content-center">
                        <div class="col-4 number">
                            <h4></h4>
                            <h5>03</h5>
                        </div>
                        <div class="col-8" id="innertxts">
                            <h2>Identifying Institution</h2>
                            <p>We assist you in choosing courses and academic institutions in Japan that meet your needs based on your eligibility and professional goals.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>    
    </div>

    <div class="row justify-content-end" id="imptSec">
        <div class="col-md-5 col-10" id="impttxtSec">
            
            <div class="row justify-content-evenly" id="innerSec">
                <div class="col-md-12" id="innColsSec">
                    <div class="row justify-content-center">
                        <div class="col-4 numberSec">
                            <h4></h4>
                            <h5>04</h5>
                        </div>
                        <div class="col-8" id="innertxtsSec">
                            <h2>Processing</h2>
                            <p>We assist you in choosing courses and academic institutions in Japan that meet your needs based on your eligibility and professional goals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
        <div class="col-md-5 d-none d-md-block imptimgsSec">
            <img src="{{asset('/storage/images/documents.png')}}" alt="" class="img-fluid">
        </div>
    </div>

    <div class="row justify-content-center" style="padding-bottom:50px" id="impt">

        <div class="col-md-5 d-none d-md-block imptimgs">
            <img src="{{asset('/storage/images/depart.gif')}}" alt="" class="img-fluid">
        </div>

        <div class="col-md-5 col-10" id="impttxt">
            
            <div class="row justify-content-evenly" id="innerRows">
                <div class="col-md-12" id="innCols">
                    <div class="row justify-content-center">
                        <div class="col-4 number">
                            <h4></h4>
                            <h5>05</h5>
                        </div>
                        <div class="col-8" id="innertxts">
                            <h2>Departure</h2>
                            <p>When your visa arrives, we help you get ready for your journey and make the required arrangements in Japan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>   
</div>





   <x-layouts.footer/> 
</body>
</html>