<!DOCTYPE html>
<html lang="en">
<head>
    <x-layouts.master/>
    <link rel="stylesheet" href="{{asset('css/blog.css')}}"> 
</head>
<body>
    <x-layouts.header/>

     <!--Popular vendor-->
    <div class="container pb-5 pt-3 mt-3">
        <div class="row">
            <div class="col-xl-5   popular-title">
                <span class="trend mb-2">Latest</span>
                <h4>Blogs</h4>
            </div>
        </div>

        <section class="blog-area section">
            <div class="container">
                <div class="row">
                    <div class="owl-carousel owl-theme owl-carousel-wrapper mt-2 pt-4">
                        @foreach ($blogs as $blog)

                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100">
                                    <div class="single-post post-style-1">
                                        <div class="blog-image">
                                            <img src="{{asset($blog->blogImage)}}" alt="blog image">
                                        </div>
                                        <div class="blog-info">
                                            <h4 class="title">
                                                <a href="{{route('blogDetails',$blog->id)}}">
                                                    <b>{{$blog->blogTitle}}</b>
                                                </a>
                                            </h4>
                                            <ul class="post-footer">
                                                <li>
                                                    <a href="{{route('blogLike',$blog->id)}}">
                                                        <i class="bi bi-suit-heart-fill" style="color: #ff0000b3;"></i>&nbsp;
                                                        {{$blog->blogLike}}
                                                    </a>
                                                </li>
                                                <li>
                                                    <span style="line-height: 40px">
                                                        <i class="bi bi-eye-fill"></i>
                                                        &nbsp;{{$blog->blogView}}
                                                    </span>
                                                </li>                                           
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach 
                    </div>
                </div>
            </div>
        </section>  
    </div>
    <x-layouts.footer/>
</body>
</html>