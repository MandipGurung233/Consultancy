<header>
    <!--Top Navbar-->
    <div class="first-nav">
        <div class="container-fluid">
            <div class="row justify-content-evenly">
                
                <div class="first-nav-left col-12 col-md-5 text-sm-center texts">
                    <span class="phone">
                        <a href="#">
                            <i class="bi bi-telephone-fill"></i>9843660096
                        </a>
                    </span>
                    <span>
                        <a href="#">
                            <i class="bi bi-envelope"></i> aakaruimultiways@gmail.com
                        </a>
                    </span>
                </div>

                <div class="first-nav-right col-12 col-md-5 text-sm-center text">
                    <span>
                        <p class="blink" style="padding-bottom: 0px;margin-bottom: 0px;">Admission Open</p></span>
                   
                        <span class="nav-icon">
                            <a target="_blank" href="https://www.facebook.com/AkaruiMultiways"><i class="bi bi-facebook"></i></a>
                        </span>
                        <span class="nav-icon">
                        <a target="_blank" href="https://www.tiktok.com/@aakaruimultiwaysshangen?_t=8Z9SfMzFOiX&_r=1&fbclid=IwAR3cGZj3P7cECKL06_YQ2uxt7XgDQw-Zf-hwP89Px6J_HM17pC9IEjGTq0g">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="15" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
      <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
    </svg>
    </a>
                        </span>
                        
                
                </div>
            </div>
        </div>
    </div>

    <div class="navigationSecond">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid secondNav">
                
                <a class="navbar-brand" style="margin-right:0px !important" href="/">Aakarui&nbsp;<span style="font-weight:600;">Multiways</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mt-2 mb-lg-0">
                            <li class="nav-item ">   
                                <a class="nav-link" aria-current="page" href="{{route('about')}}">About</a>  
                            </li>
                       
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('service')}}">Service</a>
                            </li>
                           
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" href="#" class="signup">Test Preparation</a>        
                                    <div class="dropdown-menu drop">
                                        <a class="dropdown-item" href="{{route('jlpt')}}">JLPT (All levels)</a>
                                        <a class="dropdown-item" href="{{route('eps')}}">EPS</a>
                                        <a class="dropdown-item" href="{{route('ssw')}}">SSW / JFT</a>
                                          <a class="dropdown-item" href="{{route('english')}}">English Language</a>
                                    </div>
                                </div>              
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('viewBlog')}}">Blog</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link"  href="{{route('contact')}}">Contact</a>
                            </li>

                            
                            @if (Session::has('admin'))
                                <?php
                                    $name = Session::get('admin')['name'];
                                ?>
                                <li class="nav-item">
                                    <a  class="nav-link" href="{{route('dashboard')}}" id="banner-btn-1">{{$name}}</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a  class="nav-link" href="{{route('logins')}}" id="banner-btn-1">Login</a>
                                </li>
                            @endif
                       
                            
                    </ul>
                </div>  
            </div>
        </nav> 
    </div>
<!-- goto top arrow -->   
<div class="back">
    <a title="Go to Top" href="#"><i class="bi bi-caret-up-fill arrowUp"></i></a>
</div>
</header>