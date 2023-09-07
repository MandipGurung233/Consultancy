<!DOCTYPE html>
<html lang="en">       
<head>
  <x-layouts.master/>
  <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>

<body>

<x-layouts.header/>

<div id="carouselExampleIndicators" class="carousel slide  carousel-fade slider" data-ride="carousel">
   
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img class="d-block w-100" src="{{asset('/storage/images/slide1.jpg')}}" alt="First slide">
        <div class="carousel-caption">
            <div class="row bannerH">
                <div class="col-md-8">
                    <h2 class="bannerH" style="background-color: rgb(82 82 82 / 41%);padding:10px;max-width:fit-content;font-weight: bold;"><span>S</span>tudy <span>I</span>n <span>J</span>apan</h2>
                 </div>
                <div class="col-md-1">
                    
                </div>
              
            </div>
           
        </div>
      </div>
      
     <div class="carousel-item" data-bs-interval="2000">
        <img class="d-block w-100" src="{{asset('/storage/images/slide2.jpg')}}" alt="Second slide">
        <div class="carousel-caption">
            <div class="row bannerH">
                <div class="col-md-8">
                    <h2 class="bannerH" style="background-color: rgb(82 82 82 / 41%);padding:10px;max-width:fit-content;font-weight: bold;"><span>T</span>rusted <span>B</span>y <span>S</span>tudents</h2>
             
                       </div>
                <div class="col-md-1">
                    
                </div>
              
            </div>

            
           
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img class="d-block w-100" src="{{asset('/storage/images/slide3.jpg')}}" alt="Third slide">
        <div class="carousel-caption">
            <div class="row bannerH">
                <div class="col-md-8">
                    
                    <h2 class="bannerH" style="background-color: rgb(82 82 82 / 41%);padding:10px;max-width:fit-content;font-weight: bold;"><span>P</span>repare <span>F</span>or NAT/JLPT/EPS </h2>
            
                     </div>
                <div class="col-md-1">
                    
                </div>
              
            </div>
           
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>





    <!--about japan-->
    <div class="container-fluid">

        <div class="row justify-content-evenly" id="imp">

            <div class="col-md-5 d-none d-md-block impimgs">
                <img src="{{asset('/storage/images/nepalJapan.jpg')}}" alt="" class="img-fluid">
            </div>

            <div class="col-md-5 col-10" id="imptxt">
                
                <span class="digital mb-2">Aakurai Multiways Educational Consultant</span>
                
                <h1>Preparing for your <br>Success Trusted by students</h1>
                
                <p>
                    Nepal-Japan relations date back to the late eighteenth century. The relationship became formal with the establishment of diplomatic relations on 01 September 1956. The relations between the two countries are marked by friendliness, goodwill and cooperation. Nepal established its embassy in Tokyo in 1965 and Japan established its embassy in Kathmandu in 1967. Nepal has Honorary Consulate in Osaka. Japan is a longstanding friend and a major development partner of Nepal. Both countries celebrated the Diamond Jubilee of the establishment of their diplomatic relations in 2016 by organizing various programs and exchanging high level visits.
                </p>
            </div>
        </div>
    </div>

<br><br>
      <!--Popular vendor-->
      <div class="container pb-5 pt-3">
        <div class="row">
            <div class="col-xl-5   popular-title">
                <span class="trend mb-2">Latest</span>
                <h4>News And Event</h4>
            </div>
        </div>

        <div>
            <div class="row">
                <div class="container">
                    <div class="owl-carousel owl-theme owl-carousel-wrapper mt-2 pt-4">

                        @foreach ($latests as $latest)
                       
                             <a href="#" style="text-decoration: none;">
                                <div class="item popular-carousel-item pt-2">
                                    <div class="container" id="popular-carousel-img2">                                                              
                                        <img src="{{asset($latest->image)}}" alt="" width="100%">               
                                    </div>
                                    <div class=" container popular-carousel-details">
                                        <ul>
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <li><h6>
                                                        {{$latest->title}} </h6></li>
                                                </div>
                                            
                                            </div>        
                                            <li><p>{!!$latest->description!!}
                                                </p></li>
                                        </ul>
                                    </div>
                                </div>
                            </a>

                        @endforeach                     
                    </div>
                </div>
            </div>  
        </div>
    </div>

<!--fixed background-->
<div class="imagefix"> 
   
    <div class="container">
        
                    <div class="row justify-content-center">
                        <div class="col-md-12 text-center mb-5 mt-5">
                            <h2 style="color: black;
                            font-size: 30px;
                            font-weight: bolder;
                            ">Why Choose Us ?</h2>
                        </div>
                    </div>
              
                    <div class="row justify-content-evenly service1 d-flex mt-0">
                        <div class="col-md-4 d-flex align-self-stretch">
                            <div class="d-block text-center">
                                <div class=" d-flex justify-content-center align-items-center mt-3">
                                    <h1><i class="bi bi-card-heading"></i></h1>
                                </div>
                                <div class="py-md-4">
                                    <h3>Expert Team</h3>
                                    <p>The team members of Aakarui have extensive research capabilities and are experts in Japanese and Korean language programs. We only accept paperwork for students who are truly eligible to receive visas, and our guidance is real.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex align-self-stretch">
                            <div class="d-block text-center">
                                <div class=" d-flex justify-content-center align-items-center mt-3">
                                    <h1><i class="bi bi-people-fill"></i></h1>
                                </div>
                                <div class="py-md-4">
                                    <h3>Mentorship</h3>
                                    <p>We mentor students not only for preparing different test but also guide and counsel them on preparing different documents related to academic or financial wise. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex align-self-stretch">
                            <div class="d-block text-center">
                                <div class=" d-flex justify-content-center align-items-center mt-3">
                                    <h1><i class="bi bi-globe2"></i></h1>
                                </div>
                                <div class="py-md-4">
                                    <h3>Travel advisory</h3>
                                    <p>We provide travel advisory and manage all the flight related work at affordable plane ticket. Students can contact or feel free to have any travel related query and we are always there to address the issue.</p>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>     
</div>















<!--Testimony-->
<div class="container" style="padding-bottom: 75px;">

    <div class="row justify-content-center" style="padding-top: 10px;">
        <div class="col-md-12 review-section text-center mt-0">
            <span class="reviews mb-2">Testimonial</span>
            <h2>Success Stories</h2>
        </div>
    </div>

  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <div id="reviewRow1"> 
                       <div id="reviewCol1">
                           <div class="row justify-content-center">
                                <div class="review1 ">
                                </div>
                                <div id="reviewtxt">
                                    <h5>Rose Ghonde Gurung</h5>
                                    <p class="reviewp">One of the best mentor I received during my course of study. The guidance that I received was excellent</p>
                                </div>         
                           </div>
                       </div>                    
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div id="reviewRow1"> 
                       <div id="reviewCol1">
                           <div class="row justify-content-center">
                                <div class="review2 ">
                                </div>
                                <div id="reviewtxt">
                                    <h5>Shubyekshak San</h5>
                                    <p class="reviewp">The guidance I received and the counselling helped me very much to be prepared mentally as well as documentation wise.</p>
                                </div>         
                           </div>
                       </div>                    
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div id="reviewRow1"> 
                       <div id="reviewCol1">
                           <div class="row justify-content-center">
                                <div class="review3 ">
                                </div>
                                <div id="reviewtxt">
                                    <h5>Anjana</h5>
                                    <p class="reviewp">I feel grateful for chosing Aakurai Consultancy for my abroad study. I truly recommend other to join Aakurai for applying abroad.</p>
                                </div>         
                           </div>
                       </div>                    
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div id="reviewRow1"> 
                       <div id="reviewCol1">
                           <div class="row justify-content-center">
                                <div class="review4 ">
                                </div>
                                <div id="reviewtxt">
                                    <h5>khagendra san</h5>
                                    <p class="reviewp">At last I got my COC. Thanks to all the team involved behind the process. I truly feel blessed and truly recommend other who are willing to come to Japan.</p>
                                </div>         
                           </div>
                       </div>                    
                </div>
            </div>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>  
</div>

<x-layouts.footer/>
</body>
</html>