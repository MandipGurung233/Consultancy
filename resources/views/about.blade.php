<!DOCTYPE html>
<html lang="en">       
<head>
  <x-layouts.master/>
  <link rel="stylesheet" href="{{asset('css/about.css')}}">
</head>

<body>

<x-layouts.header/>
<!--banner-->
<div class="header">     
    <div class="container">
        <div class="row justify-content-center slider-text align-items-center mt-6">
            <div class="col-md-6 col-lg-8 mt-10">
            <div class="text-center">
                <h1 class="mt-5" style="color: white;font-size:35px;">Message From the Chairwomen</h1>
                <h1 id="bann"><a href="/">Home</a>><a href="{{route('about')}}">About</a></h1>
            </div>
            </div>
        </div>   
    </div>
</div>

<!--2nd section-->
<section class="ftco-section ftco-no-pb" style="padding-bottom: 0px; padding-top: 96px;">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(/storage/images/aunti.jpg);"></div>
        <div class="col-md-6 wrap-about py-md-5">
          <div class="heading-section p-md-5">
            <h2 class="mb-4" 
            style=" color: black;
            font-size: 30px;
            font-weight: bolder;">Message</h2>
            <p style="font-size: 17px;text-align:justify;">
                As we know, Japan is one of the leading power house in educational field in the world. Japan has recognized a very unique development which contains both the development of the science & technology on the one hand and the richest culture & tradition on the other hand. Its natural beauty, rich and diverse culture and life style have really fascinated people round the globe.  The qualitative education, which is an essential in the time of need for the students, can be obtained only from Japan. Japan is one of the popular destination for abroad study among Nepalese Students and career seekers.

<div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button style="font-weight: bolder;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Read More
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="font-size: 17px;text-align:justify;">AAkarui Multiways believes that the world of opportunity is waiting for all of us. We are here to assist the students to pursue their higher education from globally recognized universities. We have been providing many services and have also been working as a bridge between Nepalese Students and Japanese Language Schools, Colleges and Universities. 
        Cordially, We would like to welcome you all in AAkarui Multiways for studying Japanese Language in a friendly environment by the well-experienced  Teachers.
        
        
        
        
                        </div>
    </div>
  </div>

            </p>
            </div>
        </div>
      </div>
    </div>
</section>


    <!--3rd section-->
    <div class="container-fluid">

        <div class="row justify-content-evenly" id="sec">

            <div class="col-md-5 col-10" id="sectxt">
                 <h1>In what We believe</h1>
            
                <div class="aboutButton as">
                    <button class="btn mt-3" id="btnMiss"><span class="sth">Our Mission</span></button>
                    <button type="button" class="btn mt-3" id="btnVis"><span class="sth">Our Vision</span></button>
                    <button type="button" class="btn mt-3" id="btnVal"><span class="sth">Our Values</span></button>
                </div> 
                <div id="content">
                    <p>To provide Nepalese students a wide variety of programs with scholarships in Japanese colleges and universities.</p>
                </div>
            </div>

            <div class="col-md-5 d-none d-md-block secimgs">
                <img src="about1.gif" alt="" class="img-fluid">
            </div>

            
        </div>
    </div>




<!--Our team-->
<div class="container">

    <div class="row justify-content-center" style="padding-top: 50px;">
        <div class="col-md-12 heading-section text-center mt-0">
            <span class="subheading mb-2">teamwork</span>
            <h2>Meet the team</h2>
        </div>
    </div>
 
        <div class="row">
            <div class="container">
                <div class="owl-carousel owl-theme owl-carousel-wrapper mt-2 pt-4">

                    <div class="item popular-carousel-item pt-2">
                        <div class="container" id="popular-carousel-img4">                                                              
                                             
                      
                            <div class=" container popular-carousel-details">
                                <h5>Binita Gurung</h5>
                                <h6>Sr.Advisor / Chairman</h6>
                            </div>
                        </div>
                    </div>
                    
                        <div class="item popular-carousel-item pt-2">
                            <div class="container" id="popular-carousel-img2">                                                              
                                                 
                          
                                <div class=" container popular-carousel-details">
                                    <h5>Tika Bhakta Bijukchey</h5>
                                    <h6>Manager</h6>

                                </div>
                            </div>
                        </div>
                

                    

              
                        <div class="item popular-carousel-item pt-2">
                            <div class="container" id="popular-carousel-img3">                                                              
                                                 
                          
                                <div class=" container popular-carousel-details">
                                    <h5>Mandip Tamu</h5>
                                    <h6>Co-ordinator</h6>

                                </div>
                            </div>
                        </div>

                        <div class="item popular-carousel-item pt-2">
                            <div class="container" id="popular-carousel-img5">                                                              
                                                 
                          
                                <div class=" container popular-carousel-details">
                                    <h5>Nirajan Gurung</h5>
                                    <h6>Creative Manager</h6>

                                </div>
                            </div>
                        </div>
                 

                        
              
                   
                                      
                </div>
            </div>
        </div>  

       
</div>

<x-layouts.footer/>

    <!--navigation bar scroll-->
    <script>
        $(function(){
            var navbar = $('.navigationSecond');
            $(window).scroll(function(){
                if($(window).scrollTop() <= 30){
                    navbar.removeClass('navbar-scroll');
                    navbar.removeClass('bg-primary');
                    navbar.removeClass('logos');
                    navbar.removeClass('logo');
                } else{
                    navbar.addClass('navbar-scroll');
                    navbar.addClass('bg-primary');
                    navbar.addClass('logo');
                    navbar.addClass('logos');
                }
            });
        });
        </script>
        
       
        <script>
            let btnMiss = document.querySelector('#btnMiss');
    let btnVis = document.querySelector('#btnVis');
    let btnVal = document.querySelector('#btnVal');
    let content = document.querySelector('#content');
    var btn = $('.aboutButton');
    
    btnMiss.addEventListener('click', () => {
        btn.addClass('activeMiss');
        btn.removeClass('activeVis');
        btn.removeClass('activeVal');
        content.innerHTML = '<p>To provide Nepalese students a wide variety of programs with scholarships in Japanese colleges and universities.</p>';
    });
    
    btnVis.addEventListener('click', () => {
        btn.addClass('activeVis');
        btn.removeClass('activeMiss');
        btn.removeClass('activeVal');
        btn.removeClass('as');
        content.innerHTML = '<p>To be the one-stop educational consulting for Nepali students looking to study in Japan. To be easily reachable in Nepal key cities and to offer the best consulting for Japan here.</p>';
    });
    
    btnVal.addEventListener('click', () => {
        btn.addClass('activeVal');
        btn.removeClass('activeMiss');
        btn.removeClass('activeVis');
        btn.removeClass('as');
        content.innerHTML = '<p>To provide quality preparation classes from the expert teachers and guide the students for their better future.</p>';
    });
        </script>

</body>
</html>